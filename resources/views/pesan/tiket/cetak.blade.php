<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cetak!</title>
</head>
<style type="text/css">
  body {
    font-family: sans-serif;
    background-color: #fff;
    color: #535353;
    margin: 5px;
  }

  table {
    border-collapse: collapse;
    padding: 0;
    width: 100%;
  }

  td {
    padding: 0;
    vertical-align: top;
  }

  .ticket-title {
    color: #999;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 16px;
    margin-top: 10px;
  }

  .ticket-info {
    color: #535353;
    font-size: 14px;
    line-height: 21px;
  }

  .ticket-wrapper {
    border: 2px solid #999;
    border-top: 12px solid rgb(33, 150, 243);
    margin: 15px auto 0;
    padding-bottom: 15px;
    width: 650px;
  }

  .ticket-wrapper:first-child {
    margin-top: 0;
  }

  .ticket-table .first-col {
    width: 570px;
  }

  .ticket-logo {
    border-left: 2px dashed #ccc;
    text-align: center;
    vertical-align: middle;
  }

  .ticket-logo img {
    height: 189px;
    width: 40px;
  }

  .ticket-name-div {
    border-bottom: 2px dotted #ccc;
    margin: 0 12px 0 22px;
    padding: 15px 0px 15px 0;
    text-align: left;
  }

  .ticket-event-longtitle {
    color: #535353;
    font-size: 22px;
    letter-spacing: -1px;
    line-height: 22px;
  }

  .ticket-event-shorttitle {
    color: #535353;
    font-size: 18px;
    letter-spacing: -1px;
    line-height: 22px;
  }

  .ticket-event-details {
    border-bottom: 2px dotted #ccc;
    margin: 0 12px 0px 22px;
    padding: 15px 0px 15px 0;
    text-align: left;
  }

  .ticket-event-details .first-col {
    text-align: left;
    width: 40%;
  }

  .ticket-event-details .second-col {
    text-align: right;
    vertical-align: top;
    width: 60%;
  }

  .ticket-venue {
    color: #535353;
    font-size: 14px;
    line-height: 21px;
  }

  .ticket-venue:first-child {
    font-size: 16px;
  }

  .ticket-ticket-details {
    margin: 0 12px 0px 22px;
    text-align: left;
  }

  .ticket-ticket-details .first-col {
    border-right: 2px dashed #ccc;
    padding-top: 4px;
    text-align: left;
    vertical-align: top;
    width: 150px;
  }

  .ticket-ticket-details .second-col {
    padding: 4px 0px 0px 32px;
    text-align: left;
    width: 225px;
  }

  .ticket-ticket-details .third-col {
    text-align: right;
  }

  .ticket-qr-code {
    height: 95px;
    margin-top: 10px;
    width: 95px;
  }

  /* Print specific styles */
  @media print {

    a[href]:after,
    abbr[title]:after {
      content: "";
    }

    .ticket-wrapper {
      width: 16cm;
    }

    .ticket-table .first-col {
      width: 13.8cm;
    }

    .ticket-logo img {
      height: auto;
      max-width: 200%;
    }

    .ticket-ticket-details .first-col {
      width: 4cm;
    }

    .ticket-ticket-details .second-col {
      width: 6cm;
    }

    .ticket-ticket-details .third-col {
      width: 2.5cm;
    }

    @page {
      margin: 1cm;
    }
  }
</style>
<br><br><br><br><br><br><br><br><br>
<body>
  <!-- Start Ticket -->
  <div class="ticket-wrapper"  style="background-color: #d5eef7;">
    <table class="ticket-table">
      <tr>
        <td class="first-col">
          <!-- title -->
          <div class="ticket-name-div"><center>
            <span class="ticket-event-longtitle">Tiket Pesawat Online</span></center>
          </div>
          <!-- /.ticket-name-div -->
          <!-- venue details start -->
          <div class="ticket-event-details">
            <table>
              <tr>
                <td class="first-col">
                  <div class="ticket-info">
                    <span>Pesawat</span>
                  </div>
                  <!-- /.ticket-info -->
                  <div class="ticket-info">
                    <span>Jam Keberangakatan</spam>
                  </div>
                  <!-- /.ticket-title -->
                  <div class="ticket-info">
                    <spam>Dari Kota</spam>
                  </div>
                  <!-- /.ticket-info -->
                  <div class="ticket-info">
                    <spam>Ke Kota</spam>
                  </div>
                </td>
                <!-- /.first-col -->
                <td class="second-col">
                  <div class="ticket-info">
                    <spam>{{$pesan->Pesawat}}</spam>
                  </div>
                  <!-- /.ticket-venue -->
                  <div class="ticket-info">
                    <spam>{{$pesan->Keberangkatan}}</spam>
                  </div>
                  <!-- /.ticket-venue -->
                  <div class="ticket-info">
                    <spam>{!! $pesan->Dari !!}</spam>
                  </div>
                  <!-- /.ticket-venue -->
                  <div class="ticket-info">
                    <spam>{!! $pesan->Kota !!}</spam>
                  </div>
                </td>
                <!-- /.second-col -->
              </tr>
            </table>
          </div>
          <!-- /.ticket-event-details -->
          <!-- ticket details start -->
          <div class="ticket-ticket-details">
            <table>
              <tr>
                <td class="first-col">
                  <div class="ticket-info">
                    <span>TANGGAL</spam>
                  </div>
                  <!-- /.ticket-title -->
                  <div class="ticket-info">
                    <spam>CLASS</spam>
                  </div>
                  <!-- /.ticket-info -->
                  <div class="ticket-info">
                    <spam>PHONE</spam>
                  </div>
                  <div class="ticket-info">
                    <spam>JUMLAH</spam>
                  </div>

                  <!-- /.ticket-title -->
                  <div class="ticket-info">
                    <spam>HARGA</spam>
                  </div>
                  <div class="ticket-info">
                    <spam>HARGA TOTAL</spam>
                  </div>
                  
                  <!-- /.ticket-info -->
                </td>
                <!-- /.first-col -->
                <td class="second-col">
                  <div class="ticket-info">
                    <span>{!! $pesan->tanggal !!}</spam>
                  </div>
                  <!-- /.ticket-title -->
                  <div class="ticket-info">
                    <spam>{!! $pesan->Class !!}</spam>
                  </div>
                  <!-- /.ticket-info -->
                  <div class="ticket-info">
                    <spam>{!! $pesan->phone !!}</spam>
                  </div>
                  <div class="ticket-info">
                    <spam>{!! $pesan->Jumlah !!}</spam>
                  </div>
                  <!-- /.ticket-title -->
                  <div class="ticket-info">
                    <spam>{!! $pesan->Harga !!}</spam>
                  </div>
                  <div class="ticket-info">
                    <spam>{!! $pesan->HargaTotal !!}</spam>
                  </div>
                  <!-- /.ticket-info -->
                </td>
                <!-- /.second-col -->
                <td class="third-col">
                  <a href="#" target="_blank">
                    <img class="ticket-qr-code"
                      src='https://w7.pngwing.com/pngs/99/548/png-transparent-several-plane-ticket-illustration-air-travel-airplane-flight-airline-ticket-boarding-pass-travel-ticket-free-s-blue-free-logo-design-template-logo.png'
                      alt="qrcode" />
                  </a>
                </td>
                <!-- /.third-col -->
              </tr>
            </table>
          </div>
          <!-- /.ticket-ticket-details -->
        </td>
        <!-- /.first-col -->
        <td class="ticket-logo">
          <img
            src="https://png.pngtree.com/background/20210710/original/pngtree-airplane-travel-discount-ticket-picture-image_1012044.jpg"
            alt="Logo" width="300px" />
        </td>
        <!-- /.ticket-logo -->
      </tr>
    </table>
    <!-- /.ticket-table -->
  </div>
  <!-- /.ticket-wrapper -->
  <!-- End Ticket -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>