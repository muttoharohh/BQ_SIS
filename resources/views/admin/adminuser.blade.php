@extends('admin.index')

@section('content')

<div class="page-container">
    <div class="main-content">
        <div class="section_content section_content--p10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-10">Data User</h2>
                    </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>

                                        <th class="text-right">aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>

                                            <td>
                                                <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data ?')">Delete</a>
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