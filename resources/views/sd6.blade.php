@extends('layout')

@section('content')
<style type="text/css">
    .card{
        width: 890px;
        margin : 50px auto;
        justify-content: center;
        display: flex;
    }
</style>

@foreach($sdenams as $sdenam)
    <div class="container">
        <div class="row">
            <div class="card mx-auto shadow-lg">
                {{-- <div class="thumbnail"> --}}
                    {{-- <img class="card-img-top" src="{{ $sdsatu->videopel }}" width="500" height="300" alt="Card image top"> --}}
                    <video class="card-img-top" controls>
                            <source src="{{$sdenam->videopel}}">
                            {{-- <source src="movie.ogg" type="video/ogg"> --}}
                          Your browser does not support the video tag.
                          </video>
                    <div class="card-body">
                        <h3 class="card-title">{{ $sdenam->mapel }}</h3>
                        <h4 class="card-subtitle">{{$sdenam->judul}}</h4>
                        <p class="card-text"><strong>Materi : </strong><a href="{{ $sdenam->videopel }}" download="">Download Video</a></p>
                        <p class="card-text"><strong>Materi : </strong><a href="{{ $sdenam->dokumen }}" download="">Download Pelajaran</a></p>
                        {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
                    </div>
                {{-- </div> --}}
            </div>
        </div><!-- End row -->
    </div>
@endforeach
@endsection