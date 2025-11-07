@extends('layout.masterlayout')
@section('title', 'berandaku')
@section('content')




<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.bing.com/images/search?view=detailV2&ccid=bbafl8HQ&id=EC1A5E6EA4504AF94FEFCC3B200C884E98BA789C&thid=OIP.bbafl8HQu410tMQGrrloEgHaEK&mediaurl=https%3a%2f%2f4kwallpapers.com%2fimages%2fwallpapers%2fshin-chan-shinchan-nohara-shiro-tv-series-3840x2160-6865.jpg&exph=2160&expw=3840&q=shin+chan&FORM=IRPRST&ck=0E41FDAEF29F297196DDABC7B93DCF6C&selectedIndex=4&itb=0 " class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
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
@endsection