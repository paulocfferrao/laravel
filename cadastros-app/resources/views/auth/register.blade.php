<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>

</html>