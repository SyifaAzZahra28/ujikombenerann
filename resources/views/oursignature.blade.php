@extends('layoutss.main') 
@section('content')
<body>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ ('assets/img/adem.png') }}">
       
        <h1 style="color: #fbda9e; font-size: 60px; font-style:oblique; text-decoration: underline; ">"TERASA LEBIH BAIK KETIKA BERSAMA"</h1>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                All Photos
            </h2>
          
        </div>

    





        
        <div class="row tm-mb-90 tm-gallery">
        	
            <div class="row">
            @foreach ($photo as $photo)
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card" style="width: 100%; position: relative;">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="{{ asset('storage/' . $photo->LokasiFile) }}" alt="" style="width: 100%;">
                            <div class="card-body bg-light text-center">
                                <h4>{{ $photo->JudulFoto }}</h4>
                                <div class="d-flex justify-content-center mb-3">
                                <form action="{{ route('like.toggle', $photo->FotoID) }}" method="post">
                                    @csrf
                                    <button type="submit">
                                        <i class="fa fa-heart"></i>
                                        {{ $photo->likesCount() }}
                                    </button>
                                </form>
                                    
                                </div>
                                <p>{{ $photo->DeskripsiFoto }}</p>
                                
                                <a href="{{ route('foto.showfoto', $photo->FotoID) }}" class="btn btn-secondary px-4 mx-auto my-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        
            
        </div> 


       

</body>
@endsection