<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Melvin | @yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar" style="background-color: #00C8FF;">
        <div class="container-fluid  m-1">
          <a href="/" class="navbar-brand fw-semibold text-white" style="margin-right: 61rem">MelvinTiket</a>
          <a href="/admin-login"><button class="btn text-white fw-semibold" type="button">Admin</button></a>
          <button class="btn btn-warning text-white fw-semibold" type="button">Pesan Sekarang</button>
        </div>
      </nav>
      
      
      

<div class="container">
@yield('content')
</div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>