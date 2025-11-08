{{-- @extends('layout.layout2')

@section('title', 'About')

@section('content')
    <h1>saya adalah</h1>
    <p><strong>Nama:</strong> {{ $info['name'] }}</p>
    <p><strong>Bio:</strong> {{ $info['bio'] }}</p>
    
    <a href="/home">← Back to Home</a>
@endsection --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About -  FITRI RAMADHANI UTS</title>
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e'); /* ganti sesuai gambar Santorini */
      background-size: cover;
      background-position: center;
      color: white;
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
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 50px;
    }

    .profiles {
      display: flex;
      justify-content: center;
      gap: 50px;
      flex-wrap: wrap;
    }

    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      width: 330px;
      padding: 30px 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(255,255,255,0.7);
      margin-bottom: 20px;
    }

    .name {
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .nim {
      color: #ddd;
      font-size: 14px;
      margin-bottom: 15px;
    }

    .bio {
      background: rgba(255,255,255,0.1);
      border-radius: 10px;
      padding: 15px;
      font-size: 14px;
      text-align: left;
    }

    .bio span {
      display: block;
      color: #b3e5fc;
      font-weight: 600;
      margin-bottom: 5px;
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
    <div class="title">Halaman ini dibuat oleh: 2301040028 - FITRI RAMADHANI (GENAP)</div>

    <div class="profiles">
      <div class="card">
        <img src="images/huayana.jpg" alt="Bunga Azizah" class="profile-img">
        <div class="name">BUNGA AZIZAH</div>
        <div class="nim">2301040039</div>
        <div class="bio">
          <span>BIO</span>
          professional back end developer and occasionally AK47 
        </div>
      </div>

      <div class="card">
        <img src="images/huayana.jpg" alt="Fitri Ramadhani" class="profile-img">
        <div class="name">FITRI RAMADHANI</div>
        <div class="nim">2301040028</div>
        <div class="bio">
          <span>BIO</span>
          Designing front-end is my passion sir 💖
        </div>
      </div>
    </div>
  </div>
</body>
</html>