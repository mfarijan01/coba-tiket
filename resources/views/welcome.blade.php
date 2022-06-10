<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tiket Pesawat Online!</title>
  </head>
  <body>
@extends('layouts.fe.master')

@section('title', 'Posyandu Persadia')

@section('curpage')
    @php
        $curpage = '';
    @endphp
@endsection

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/logo.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/8.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/9.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     </div>
    </div>
  </div>
</div><br><br>
<center>
<!-- <h5>DI DALAM PESAWAT</h5><br>

<h5>Silakan bersantai dan nikmati penerbangan Anda bersama Garuda Indonesia</h5>
<p>Selamat datang di Garuda Indonesia. Kita mulai perjalanan Anda dengan Garuda Indonesia Experience. Kami hadir untuk memastikan kenyamanan Anda sepanjang perjalanan. <br>
</center>
Nikmati berbagai menu lezat dan pilihan hiburan. Duduklah dengan nyaman dan berbelanja dengan on-board shopping ketika kami membawa Anda ke tujuan.</p> -->


<!-- 
<br><br><br><br><br><br><br><br><br><br><br><br><br> -->

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/kabin.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">1.FITUR KABIN</h6>
        <p class="card-text">Seluruh armada dilengkapi dengan head rest fleksibel yang dapat disesuaikan untuk kenyamanan posisi istirahat Anda. Kami juga menyediakan power socket di masing-masing kursi sehingga selama penerbangan Anda tetap dapat menyelesaikan pekerjaan denganlaptop atau gadget lainnya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/-1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">2.Hiburan di dalam Pesawat</h6>
        <p class="card-text">Selama penerbangan, Anda dapat menikmati ragam pilihan hiburan Audio and Video on Demand (AVOD) dengan LCD TV layar sentuh dalam penerbangan jarak menengah berdurasi 2 (dua) jam atau lebih.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/inter.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">3.Internet di dalam Pesawat</h6>
        <p class="card-text">Akses email dan berbagai social media dengan In-flight Connectivity kami dan tetap terhubung dengan keluarga, teman atau partner bisnis Anda.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/hidang.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">4.Hidangan Khusus</h6>
        <p class="card-text">
Kami menyediakan hidangan khusus yang dirancang untuk memenuhi kebutuhan dalam penerbangan Anda, baik untuk alasan keyakinan, kesehatan, diet tertentu serta makanan untuk anak-anak dan bayi.</p>
      </div>
    </div>
  </div>
</div>

@endsection

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
