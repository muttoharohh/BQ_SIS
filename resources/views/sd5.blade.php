@extends('layout')

@section('content')
    <div class="container products">
        <div class="row">
            @foreach($sdlimas as $sdlima)
                    <div class="thumbnail">
                        <img src="{{ $sdlima->videopel }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $sdlima->mapel }}</h4>
                            <p>{{$sdlima->judul}}</p>
                            <p><strong>Materi : </strong><a href="{{ $sdlima->dokumen }}">Download Pelajaran</a></p>
                            {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
                        </div>
                    </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
    
@endsection