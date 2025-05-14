<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <link href="{{asset('favicon.png')}}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaf1e6;
            /* Warna hijau lembut */
            color: #1c3b2a;
            /* Warna hijau tua */
        }

        header {
            background-color: #064635;
            /* Warna hijau khas NU */
            color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header .navbar-brand h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        header .btn-home {
            background-color: #ffffff;
            color: #064635;
            text-decoration: none;
            font-size: 0.9rem;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        header .btn-home:hover {
            background-color: #02a84e;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 40px 20px;
            min-height: 60vh;
            align-items: center;
        }

        .member-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 350px;
            height: 120px;
            display: flex;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .member-card:hover {
            transform: scale(1.05);
        }

        .member-card img {
            width: 40%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
            /* Hilangkan bentuk bulat */
        }

        .member-info {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60%;
        }

        .member-info h3 {
            font-size: 1.1rem;
            margin: 0;
            word-break: break-word;
            text-align: center;
        }


        .navbar {
            justify-content: space-between;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('home') }}" class="navbar-brand ml-0">
                <img src="{{ asset('images/logo-nu.png') }}" alt="Logo NU" style="height: 50px;">
            </a>
            <div class="text-center w-100">
                <h1 class="m-0 text-uppercase text-white"><b>KELOMPOK 4</b></h1>
            </div>
            <a href="{{ route('home') }}" class="btn-home">Beranda</a>
        </nav>
    </header>

    <div class="content">
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 1">
            <div class="member-info">
                <h3>Fadillah</h3>
            </div>
        </div>
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 2">
            <div class="member-info">
                <h3>Ikhwan Mursidi</h3>
            </div>
        </div>
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 3">
            <div class="member-info">
                <h3>Miko Indrawan</h3>
            </div>
        </div>
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 4">
            <div class="member-info">
                <h3>Muthiya Luthfiyah</h3>
            </div>
        </div>
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 5">
            <div class="member-info">
                <h3>Saidatul Hafizah</h3>
            </div>
        </div>
        <div class="member-card">
            <img src="{{ asset('images/user.jpg') }}" alt="Anggota 6">
            <div class="member-info">
                <h3>Tiara Rahma Dini</h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
