<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIM ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #0f172a;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #cbd5f5;
            text-decoration: none;
            margin: 10px 0;
        }

        .sidebar a:hover {
            color: #22c55e;
        }

        .main {
            flex: 1;
            background: #f1f5f9;
        }

        .navbar {
            background: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }

        .content {
            padding: 20px;
        }

        button {
            background: #ef4444;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h2>SIM ADMIN</h2>

    <a href="/dashboard">Dashboard</a>
    <a href="/kwitansi">Kwitansi</a>
    <a href="/surat">Surat</a>
</div>

<!-- Main -->
<div class="main">

    <!-- Navbar -->
    <div class="navbar">
        <div><b>Sistem Informasi Admin</b></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>Logout</button>
        </form>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>