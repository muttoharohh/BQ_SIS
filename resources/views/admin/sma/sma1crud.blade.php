@extends('admin.index')

@section('content')
<div class="page-container">
        <div class="main-content">
            <div class="section_content section_content--p10">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-10">Data Pelajaran SMA Kelas 1</h2>
                            <div class="noti__item js-item-menu">
                                <i class="fa fa-plus-square"></i>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <h3>Tambah Data</h3>
                                    </div>
                                    <div class="mess__item">
                                        <form action="/adminsma1/create" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group{{$errors->has('mapel') ? 'has-error' : ''}}">
                                                <label for="exampleInputEmail1">Mata Pelajaran</label>
                                                <input name="mapel" id="mapel" type="text" class="form-control" placeholder="Isi Mata Pelajaran" value="{{old('mapel')}}">
                                                @if ($errors->has('mapel'))
                                                    <span class="help-block">{{$errors->first('mapel')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group{{$errors->has('judul') ? 'has-error' : ''}}">
                                                <label for="exampleInputEmail1">Judul Pelajaran</label>
                                                <input name="judul" id="judul" type="text" class="form-control" placeholder="Isi Judul Pelajaran" value="{{old('judul')}}">
                                                @if ($errors->has('judul'))
                                                    <span class="help-block">{{$errors->first('judul')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group{{$errors->has('videopel') ? 'has-error' : ''}}">
                                                <label for="exampleInputEmail1">Video</label>
                                                <input name="videopel" id="videopel" type="text" class="form-control" placeholder="Isi Nama Video" value="{{old('videopel')}}">
                                                @if ($errors->has('videopel'))
                                                    <span class="help-block">{{$errors->first('videopel')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group{{$errors->has('dokumen') ? 'has-error' : ''}}">
                                                <label for="exampleInputEmail1">Dokumen</label>
                                                <input name="dokumen" id="dokumen" type="file" class="form-control" value="{{old('dokumen')}}">
                                                @if ($errors->has('dokumen'))
                                                    <span class="help-block">{{$errors->first('dokumen')}}</span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-warning" data-dismiss=""><a href="{{route('admin.sma1')}}">Close </a></button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Judul</th>
                                            <th>Video</th>
                                            <th>Dokumen</th>
    
                                            <th class="text-right">aksi</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                                @foreach ($sdduas as $sddua)
                                                <tr>
                                                <td>{{$smasatu->mapel}}</td>
                                                <td>{{$smasatu->judul}}</td>
                                                <td>{{$smasatu->videopel}}</td>
                                                <td>{{$smasatu->dokumen}}</td>
    
                                                <td>
                                                    <a href="/adminsma1/{{$smasatu->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="/adminsma1/{{$smasatu->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data ?')">Delete</a>
                                                </td>
                                                <tr>
                                            @endforeach
                                        </tbody>
    
                                </table>
                            </div>
                    </div>
                </div>
            </div>
    
        </div>
    
    
    </div>
@endsection