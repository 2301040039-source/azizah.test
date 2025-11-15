<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('images/bckground.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            font-family: "Poppins", sans-serif;
        }

         header {
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      font-weight: 600;
    }

    header a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
    }

    header a:hover {
      text-decoration: underline;
    }

    .container {
      text-align: center;
      padding: 50px 20px;
       font-size: 28px;
      font-weight: bold;
    }



        .bg-overlay {
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(3px);
        }

       
    </style>
</head>
<body>

 <header>

    <div>
      <a href="/home">Home</a>
      <a href="/about">About</a>
    </div>
    <div>
      2301010128 - Fitri Ramadani (GENAP)
      &nbsp; | &nbsp;
      2301010039 - Bunga Azizah (GANJIL)
    </div>
  </header>

   <div class="container">
    <div class="title">Halaman ini dibuat oleh: 2301040039 - BUNGA AZIZAH (GANJIL)</div>


<div class="container py-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
