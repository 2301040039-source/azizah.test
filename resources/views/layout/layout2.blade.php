{{-- <!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
  {{-- <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"> --}}
      {{-- <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a  href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fitur">fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main style="margin-left: 20px; margin-right: 20px">
    @yield('content')
</main>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/acropolis.jpg') }}" class="d-block w-100" alt="slide 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('foto/2.jpg') }}" class="d-block w-100" alt="slide 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('foto/3.jpg') }}" class="d-block w-100" alt="slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<div class="card text-center mt-5">
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src=" {{ asset('foto/4.jpg') }}" class="card-img-top" alt="card 1">
  <div class="card-body">
    <h5 class="card-title">gunung</h5>
    <p class="card-text">renda yang berarti hiasan</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src=" {{ asset('foto/5.jpg') }}" class="card-img-top" alt="card 2">
  <div class="card-body">
    <h5 class="card-title">ayu</h5>
    <p class="card-text">ayu yang berati cantik</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src=" {{ asset('foto/6.jpg') }}" class="card-img-top" alt="card 3">
  <div class="card-body">
    <h5 class="card-title">mustika</h5>
    <p class="card-text">mustika yang berarti permata</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div> --}}

    {{-- <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
    </nav> --}}
    
    {{-- @yield('content') --}}
{{-- </body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home </title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
      background-size: cover;
      background-position: center;
      color: white;
      min-height: 100vh;
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
      padding: 40px 20px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 0 60px;
    }

    .card {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .card .caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 12px;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(6px);
      font-weight: 500;
      text-align: left;
    }

    footer {
      background: rgba(0, 0, 0, 0.6);
      text-align: center;
      padding: 10px;
      font-size: 14px;
      color: #ddd;
      margin-top: 30px;
    }

    @media (max-width: 768px) {
      .title {
        font-size: 22px;
      }
      header {
        flex-direction: column;
        text-align: center;
      }
      .gallery {
        padding: 0 20px;
      }
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
    <div class="title">
      Halaman ini dibuat oleh 2301040039 - Bunga Azizah
    </div>

    <div class="gallery">
      <div class="card">
        <img src="images/acropolis.jpg" alt="Acropolis, Yunani">
        <div class="caption">Acropolis, Yunani</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Shibuya, Jepang">
        <div class="caption">Shibuya, Jepang</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1544986581-efac024faf62" alt="Cappadocia, Turki">
        <div class="caption">Cappadocia, Mudi Bale</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1579877927642-7eeda7d442b4" alt="Pyramids, Giza">
        <div class="caption">Giza, Lotim</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1551907234-26160f608093" alt="Garuda Wisnu Kencana, Bali">
        <div class="caption">Garuda Wisnu Kencana, Bali</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba" alt="Huayana, Peru">
        <div class="caption">Huayana, Peru</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21" alt="Jumeirah, Abu Dhabi">
        <div class="caption">Jumeirah, Abu Dhabi</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1534430480872-3498386e7856" alt="New York, US">
        <div class="caption">New York, US</div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Niagara, Kanada">
        <div class="caption">Niagara, Kanada (karangan anak narmada)</div>
      </div>
    </div>
  </div>

  {{-- <footer>
    &copy; 2025 | Website oleh L. M. Aranta Thiar Elkanta Rizky Illahi & Arthur Emanuel Dekko
  </footer> --}}
</body>
</html>