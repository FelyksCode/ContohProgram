<!DOCTYPE html>
<html lang="en">
<style>
    .menu {
        background-color: grey;
        color: white;
        padding: 10px;
    }

    .menu>span {
        padding: 10px;
    }

    .menu>span:hover {
        background-color: red;
        cursor: pointer;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <div class="menu">
        <span><a href="/">Home</a></span>
        <span><a href="/profile">Profile</a></span>
    </div>
    <h2>Ini Halaman profile</h2>
    Halo {{ $nama }}<br />
    Jalan {{ $alamat }}<br />
    nomor telp {{ $telp }}<br />
</body>

</html>
