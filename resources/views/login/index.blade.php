
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Login/Masuk CarRent </title>
    @include('component.head')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <a href="{{ route('home') }}">
                    <h3 class="text-primary">CarRent</h3>
                  </a>
                </div>
                <h4>Hallo! Selamat Datang</h4>
                <h6 class="fw-light">Login untuk melanjutkan.</h6>
                <form action="{{ route('login.cek') }}" method="POST" class="pt-3">
                  @csrf
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="form-group">
                    <input type="email" name="email" value="{{ @old('email') }}" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  @csrf
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="form-group">
                    <input type="password" name="password" value="{{ @old('password') }}" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="text-center mt-4 fw-light"> Don't have an account? <a href="register" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/template.js') }}"></script>
    <script src="{{ asset('template/js/settings.js') }}"></script>
    <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>