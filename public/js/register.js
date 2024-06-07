document.getElementById('registerForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const data = new FormData(form);

    const response = await fetch(form.action, {
        method: 'POST',
        body: data,
        headers: {
            'Accept': 'application/json',
        },
    });

    // Limpar mensagens de erro anteriores
    document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

    if (!response.ok) {
        const result = await response.json();
        if (result.errors) {
            for (const [field, messages] of Object.entries(result.errors)) {
                const errorDiv = document.getElementById(field + 'Error');
                errorDiv.textContent = messages.join(', ');
            }
        }
    } else {
        alert('Usuário registrado com sucesso!');
        form.reset();
    }
});
