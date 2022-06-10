<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('vendor/toastr/toastr.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style>
    a:hover {
      text-decoration: none;
    }
    
    .kursi {
      border: 2px solid #858796;
      width: 100%;
      height: 120px;
      display: flex;
    }
  </style>
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="javascript:window.history.back();" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
              <a href="">
                <div class="kursi bg-white">
                  <div class="font-weight-bold text-primary m-auto" style="font-size: 26px;"></div>
                </div>
              </a>
            </div>
     
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
              <div class="kursi" style="background: #858796">
                <div class="font-weight-bold text-white m-auto" style="font-size: 26px;"></div>
              </div>
            </div>
      </div>
    </div>
  </div>

  <script>
    function formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
  </script>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
