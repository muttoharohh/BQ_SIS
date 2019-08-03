@extends('layout')

@section('content')
    <div class="container products">
        <div class="row">
            @foreach($sdsatus as $sdsatu)
                    <div class="thumbnail">
                        <img src="{{ $sdsatu->videopel }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $sdsatu->mapel }}</h4>
                            <p>{{$sdsatu->judul}}</p>
                            <p><strong>Materi : </strong><a href="{{ $sdsatu->dokumen }}">Download Pelajaran</a></p>
                            {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
                        </div>
                    </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
    
@endsection