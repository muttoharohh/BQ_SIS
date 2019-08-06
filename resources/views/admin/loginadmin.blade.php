  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">

<div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Login</div>
          <div class="card-body">
              @if (Session::has('alert'))
                  <div class="row text-center" style="justify-content: center">
                      <div class="col-sm-12 col-md-offset-12 col-sm-offset-12">
                          <div id="charge-message" class="alert alert-danger">
                              {{Session::get('alert') }}
                          </div>
                      </div>
                  </div>
              @endif
            <form action="{{route('admin.login')}}" method="POST">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                  <label for="email">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Login</button>
              {{ csrf_field() }}
            </form>
            <div class="text-center">
          </div>
        </div>
      </div>