<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA PEMESANA TIKET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-8"><center>
                <span class="header-text">LAPORAN DATA PEMESANA TIKET</span></center> <br>
               </div>
        </div>

        <hr>

        <br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 20px;">No</th>
                    <th scope="col" style="text-align: center;width: 6%">Pesawat&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%"> Penerbangan&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Keberangkatan &nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Kota &nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Ke Kota&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Tanggal&nbsp;</th>
                                 <th scope="col" style="text-align: center;width: 6%">Class&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">phone&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Harga&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Jumlah&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 6%">Harga Total&nbsp;</th>
              
                            </tr>
            </thead>
            <tbody>
            <?php $nomor = 1; ?>
            @foreach ($pesan as $no => $pesan)
                <tr>
                  <td scope="row" style="text-align: center">{{$nomor++}}</td>
                              
                  <td>{{ $pesan->Pesawat }}</td>
                                    <td>{{ $pesan->Penerbangan }}</td>
                                    <td>{{ $pesan->Keberangkatan }}</td>
                                    <td>{{ $pesan->Dari }}</td>
                                    <td>{{ $pesan->Kota }}</td>
                                    <td>{{ $pesan->tanggal }}</td>
                                    <td>{{ $pesan->Class }}</td>
                                    <td>{{ $pesan->phone }}</td>
                                    <td>{{ $pesan->Harga }}</td>
                                         <td>{{ $pesan->Jumlah }}</td>
                                         <td>{{ $pesan->HargaTotal }}</td>
                                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>