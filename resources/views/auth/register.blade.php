<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans-Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('register') }}" method="post" id="registerForm">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="invalid-feedback" id="usernameError"></div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="invalid-feedback" id="namaError"></div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="invalid-feedback" id="passwordError"></div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Ulangi Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="invalid-feedback" id="passwordConfirmationError"></div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" required>
              <label for="agreeTerms">
               Saya setuju dengan <a href="#"></a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>
      <a href="{{ route('login') }}" class="text-center">Sudah punya akun? Login disini</a>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        let isValid = true;

        // Reset error messages
        $('.invalid-feedback').text('');
        $('.form-control').removeClass('is-invalid');

        // Validate Username
        const username = $('#username').val().trim();
        if (username.length < 3) {
            $('#username').addClass('is-invalid');
            $('#usernameError').text('Username minimal 3 karakter');
            isValid = false;
        }

        // Validate Nama
        const nama = $('#nama').val().trim();
        if (nama === '') {
            $('#nama').addClass('is-invalid');
            $('#namaError').text('Nama lengkap harus diisi');
            isValid = false;
        }

        // Validate Password
        const password = $('#password').val();
        if (password.length < 5) {
            $('#password').addClass('is-invalid');
            $('#passwordError').text('Password minimal 5 karakter');
            isValid = false;
        }

        // Validate Password Confirmation
        const passwordConfirm = $('#password_confirmation').val();
        if (password !== passwordConfirm) {
            $('#password_confirmation').addClass('is-invalid');
            $('#passwordConfirmationError').text('Konfirmasi password tidak sesuai');
            isValid = false;
        }

        // Validate Terms
        if (!$('#agreeTerms').prop('checked')) {
            $('#agreeTerms').parent().addClass('is-invalid');
            isValid = false;
        }

        if (isValid) {
            this.submit();
        }
    });
});
</script>

</body>
</html>