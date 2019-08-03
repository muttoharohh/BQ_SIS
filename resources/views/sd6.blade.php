@extends('layout')

@section('content')
    <div class="container products">
        <div class="row">
            @foreach($sdenams as $sdenam)
                    <div class="thumbnail">
                        <img src="{{ $sdenam->videopel }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $sdenam->mapel }}</h4>
                            <p>{{$sdenam->judul}}</p>
                            <p><strong>Materi : </strong><a href="{{ $sdenam->dokumen }}">Download Pelajaran</a></p>
                            {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
                        </div>
                    </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
    
@endsection