@extends('layout.master')
@section('content')

  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <div class="pull-left">
              <a href="index"><img class="img-nav" src="{{ asset('public/img/icon/ganesa.png')}}" alt=""></a>
            </div>
            <a href="index"><h1>SMP Ganesha Satria</h1></a>
          </div>  
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index" class="active">Beranda</a></li>
              <li role="presentation"><a href="profil">Profil</a></li>
              <li role="presentation"><a href="informasi">Informasi Sekolah</a></li>
              <li role="presentation"><a href="pendaftaran">Pendaftaran</a></li>
              <li role="presentation"><a href="kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- SLIDE -->
  <div class="slider">
    <div id="beranda-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active img-slide">
            <img src="{{ asset('public/img/slide/slide1.jpg')}}" class="img-responsive" alt="">
          </div>
          <div class="item  img-slide">
            <img src="{{ asset('public/img/slide/slide2.jpg')}}" class="img-responsive" alt="">
          </div>
          <div class="item  img-slide">
            <img src="{{ asset('public/img/slide/slide3.jpg')}}" class="img-responsive" alt="">
          </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
    </div>
  </div>
  
  <!-- INFORMASI -->
  <div class="info-um">
    <div class="container">
      <div class="text-center">
        <div class="row clearfix">
          <div class="col-md-4 col-sm-6">
            <div class="info-um-single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-info-um pull" src="{{ asset('public/img/galeri/galeri9.jpg')}}" alt=""></a>        
              <div class=" ">
                <h4>Kelulusan Siswa SMP Ganesha  Tahun Ajaran 2019-2020</h4> 
                <h5>Minggu, 05 Maret 2017 | Informasi Khusus</h5>  
                <h6>.....</h6>      
                <ul class="tag clearfix">
                  <li class=" pull-right "><a href="pertama">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="info-um-single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-info-um pull" src="{{ asset('public/img/galeri/galeri1.jpg')}}" alt=""></a>        
              <div class=" ">
                <h4>Sosialisasi Program Kelas X Tahun Pelajaran 2019-2020</h4> 
                <h5>Selasa, 17 Agustus 2019 | Informasi Umum</h5>   
                <h6>Yth. Ibu/ Bapak Orang Tua Peserta Didik Kelas X di Tempat Dengan hormat,
                  Dalam rangka pengenalan dan sosialisasi ......
                </h6>     
                <ul class="tag clearfix">
                  <li class=" pull-right "><a href="120819">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="info-um-single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">              
              <a href="#"><img class="media-object img-info-um pull" src="{{ asset('public/img/galeri/galeri4.jpg')}}" alt=""></a>        
              <div class=" ">
                <h4>Pengumuman Psikotes Siswa Baru TA. 2019-2020</h4> 
                <h5>Selasa, 17 Agustus 2019 | Informasi Umum</h5> 
                <h6>Diberitahukan kepada seluruh siswa-siswi baru SMA Taruna Bakti, 
                  untuk hadir pada.....
                </h6>      
                <ul class="tag clearfix">
                  <li class=" pull-right "><a href="120819">Selengkapnya</a></li>
                </ul>
              </div>        
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>


@endsection