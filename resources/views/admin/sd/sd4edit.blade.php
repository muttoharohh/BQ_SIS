@extends('admin.index')

@section('content')
    <div class="page-container">
            <div class="main-content">
                <div class="container fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2>Edit Data</h2>
                            <div class="col-lg-12">
                                <form action="/adminsd4/{{$sdduas-> id}}/update" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Mata Pelajaran</label>
                                        <input name="mapel" id="mapel" type="text" class="form-control" placeholder="Mata Pelajaran" value="{{$sdduas -> mapel}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Judul</label>
                                        <input name="judul" id="judul" type="text" class="form-control" placeholder="Judul Materi" value="{{$sdduas -> judul}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Video</label>
                                        <input name="videopel" id="videopel" type="text" class="form-control" placeholder="Video" value="{{$sdduas -> videopel}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Dokumen</label>
                                        <input name="dokumen" id="dokumen" type="file" class="form-control" placeholder="Dokumen" value="{{$sdduas -> dokumen}}">
                                    </div>
                                    <button type="button" class="btn btn-warning"><a href="/adminsd2">Close</a></button>
                                    <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection