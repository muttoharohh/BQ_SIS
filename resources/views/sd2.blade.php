@extends('layout')

@section('content')
    <div class="container products">
 
        <div class="row">
 
            @foreach($sdduas as $sddua)
                    <div class="thumbnail">
                        <img src="{{ $sddua->videopel }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $sddua->mapel }}</h4>
                            <p>{{$sddua->judul}}</p>
                            <p><strong>Materi : </strong><a href="{{ $sddua->dokumen }}">Download Pelajaran</a></p>
                            {{-- <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p> --}}
                        </div>
                    </div>
            @endforeach
 
        </div><!-- End row -->
 
    </div>
    
@endsection