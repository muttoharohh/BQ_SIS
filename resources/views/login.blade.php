@extends('layout')

@section('content')
<style type="text/css">
    .card{
        width: 400px;
        margin: 150px auto;
        padding-top: 20px;
        padding-bottom: 30px;
        align-items: center;
        justify-content: center;
        display: flex;
    }    
</style>
<div class="container">
    <div class="row">
        <div class="card text-center shadow-lg">
            <div class="col-md-10 col-md-offset-4">
                <h1 style="font-family: Arial, Helvetica, sans-serif">Login</h1>
                @if (Session::has('alert'))
                    <div class="row text-center" style="justify-content: center">
                        <div class="col-sm-12 col-md-offset-12 col-sm-offset-12">
                            <div id="charge-message" class="alert alert-danger">
                                {{Session::get('alert') }}
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{route('user.login')}}" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input style="text-align:center" type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input style="text-align:center" type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button><br><br><br>
                {{csrf_field()}}
                </form>
                {{-- <p>Don't have an account? <a href="{{route('user.signup')}}">Sign Up</a></p> --}}

            </div>

        </div>

    </div>

</div>
    
@endsection