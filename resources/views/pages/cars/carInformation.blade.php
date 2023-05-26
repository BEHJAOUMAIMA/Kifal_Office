@extends('pages.default')
@section('content')
<head>
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css" />
</head>
    <div class="container">
        <div class="header d-flex justify-content-between align-items-center mt-5">
            <h4>Informations Sur La Voiture</h4>
            <a href="{{url('/Voitures')}}" class="btn btn-dark">Retour</a>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
                <h5 class="text-dark ">MERCEDES-BENZ Classe E</h5>
                <h5 class="btn btn-primary ">139 000 MAD</h5>
            </div>
            <div id="swiper-gallery">
              <div class="swiper gallery-top">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes1.jpg')}}'); background-position:center; background-size:cover; background-repeat:no-repeat; height:100%;">
                  </div>
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes3.jpg')}}')">
                  </div>
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes2.jpg')}}')">
                  </div>

                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
              <div class="swiper gallery-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes1.jpg')}}')">
                  </div>
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes3.jpg')}}">
                  </div>
                  <div class="swiper-slide" style="background-image: url('{{asset('/images/Mercedes2.jpg')}}">
                  </div>
                </div>
              </div>
            </div>
            @include('components.advanced-card')
        </div>
    </div>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/js/ui-carousel.js"></script>
@endsection
