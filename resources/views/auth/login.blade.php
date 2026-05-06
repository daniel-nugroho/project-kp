<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SIM Admin</title>
    <style>
        body {
            background: #1e293b;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        .card {
            background: #0f172a;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #22c55e;
            border: none;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>SIM ADMIN</h2>
    <p>Login Sistem Kwitansi & Surat</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html> 