@extends('admin.index')

@section('content')
<div class="container">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Register an Account</div>
          <div class="card-body">
            @if (Session::has('success'))
                <div class="row text-center" style="justify-content: center">
                    <div class="col-sm-12 col-md-offset-12 col-sm-offset-12">
                        <div id="charge-message" class="alert alert-success">
                            {{Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <form action="{{route('register.admin')}}" method="POST">
              <div class="form-inline">
                <label style="float: left" for="name" class="col-lg-2">Name</label>
                <input style="text-align:left" type="text" name="name" id="name" class="form-control col-lg-9" placeholder="input your name">
              </div><br>

              <div class="form-inline">
                  <label style="text-align:left" for="email" class="col-lg-2">E-mail</label>
                  <input style="text-align:left" type="text" name="email" id="email" class="form-control col-lg-9" placeholder="input your email">
              </div><br>

              <div class="form-inline">
                  <label style="text-align:left" for="password" class="col-lg-2">Password</label>
                  <input style="text-align:left" type="password" name="password" id="password" class="form-control col-lg-9" placeholder="input your password">
                </div><br>

              <button type="submit" class="btn btn-primary">Register</button>
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </div>
    
@endsection