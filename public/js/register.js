window.onload = function (e) {
    fetchUsers()
}
document.getElementById('registerForm').addEventListener('submit', async function (e) {
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
        fetchUsers()
        alert('Usuário registrado com sucesso!');
        form.reset();
    }
});

async function fetchUsers() {
    const response = await fetch('api/users');
    const users = await response.json();
    const userList = document.getElementById('userList');

    userList.innerHTML = '';
    users.forEach(user => {
        const listItem = document.createElement('li');
        listItem.textContent = `${user.name} - ${user.email}`;
        userList.appendChild(listItem);
    });
}
