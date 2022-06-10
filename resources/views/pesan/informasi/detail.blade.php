<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cetak!</title>
  </head><br><br>
  <body style="background-color :#85807b;">
<div class="container" style=" background-color :#c3faf9;">
     <div class="col-md">
     <div class="card-header">
            <div class="card">
                <div class="card-header" style=" background-color :#c3faf9;">
                    <h4 class="text-center"><i class="fas fa-chalkboard-teacher"></i> cetak tiket pesawat</h4>
                </div>
                <div class="card-body">
                <h5 class="text-center">EMAIL</h5>
                    <p class="text-center">{{$ijin->email}}</p>
                    <h5 class="text-center">KEBERANGKATAN</h5>
                    <p class="text-center">{!! $ijin->nama !!}</p>
                    <h5 class="text-center">TANGGAL</h5>
                    <p class="text-center">{!! $ijin->tanggal !!}</p>
                    <h5 class="text-center">NAMA PESAWAT</h5>
                    <p class="text-center">{!! $ijin->jenis !!}</p>
                    <h5 class="text-center">Class</h5>
                    <p class="text-center">{!! $ijin->Class !!}</p>
                    <h5 class="text-center">Harga</h5>
                    <p class="text-center">{!! $ijin->harga !!}</p>
                    <td class="text-center">
                                        <a href="/pesan/informasi" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash">kembali</i>
                                        </a>
                                    </td>
                </div>
            </div>
        </div>
     </div>
  </div>
</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
