@extends('layoutss.main')
@section('content')


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ ('assets/img/adem.png') }}">
    <h1 style="color: #fbda9e; font-size: 60px; font-style:oblique; text-decoration: underline; ">"TERASA LEBIH BAIK KETIKA BERSAMA"</h1>
</div>

<div style="background-color: #d2bd96;">
    <div style="display: flex; margin-left: 50px; padding: 80px;"> 

    <a style="text-decoration:none;" href="/category/boba">
      <div class="card" style="width: 20rem; text-align: center; border-radius: 15px;  margin-left: 70px;"> 
       <i class="fa-solid fa-martini-glass-citrus" style="font-size: 5rem; margin-top: 50px;"></i>
        <div class="card-body">
          <h5 class="card-title">BOBA & TEA</h5> <br>
          <p class="card-text">
              Minuman boba, atau sering disebut juga bubble tea, adalah minuman yang berasal dari Taiwan dan terdiri dari campuran teh, susu, gula, es, dan bola tapioka kenyal yang disebut boba.
          </p>
         <br><br>
        </div>
    </a>
     </div>
     
    <a style="text-decoration:none;" href="/category/coffe">
      <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 20rem; margin-left: 200px; text-align: center; border-radius: 15px;">
         <i class='bx bxs-coffee-bean' style="font-size: 5rem; margin-top: 50px;"></i>
        <div class="card-body">
          <h5 class="card-title">COFFE</h5> <br>
          <p class="card-text">
           Minuman kopi memiliki banyak variasi, mulai dari kopi hitam yang murni hingga minuman kopi yang dicampur dengan berbagai bahan tambahan seperti susu, gula, sirup, atau rempah-rempah.
          </p>
          <br><br>
        </div>
      </div>
    </a>

    <a style="text-decoration:none;" href="/category/oursignature">
    <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 20rem; margin-left: 200px; text-align: center; border-radius: 15px;"> 
     <i class="fa-solid fa-mug-saucer" style="font-size: 5rem; margin-top: 50px;"></i>
      <div class="card-body">
        <h5 class="card-title">OUR SIGNATURE</h5> <br>
        <p class="card-text">Oursignature adalah istilah yang merujuk kepada minuman khas atau spesial yang ditawarkan oleh suatu tempat atau bisnis tertentu.  Minuman ini biasanya menjadi favorit pelanggan dan dapat menjadi ciri khas dari tempat tersebut.</p>
        <br><br>
      </div>
    </div>
    </a>
        
       </div>
     </div>
    </div>
  </div>
@endsection