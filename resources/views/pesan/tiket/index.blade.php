@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="/pelanggan" class="text-white text-decoration-none">Pelanggan</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Pesanan</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container"><br>
                        <div class="row">
                            <a href="{{route('pesan/tiket/create')}}" class="btn btn-success mb-4"><i class="fas fa-plus-circle"></i> Pesan TIket Pesawat</a>&nbsp;
                        </div><br>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">Pesawat&nbsp;</th>
                                <th scope="col">Jam Penerbangan&nbsp;</th>
                                <th scope="col">Keberangkatan&nbsp;</th>
                                <th scope="col">Dari Kota &nbsp;</th>
                                <th scope="col">Ke Kota&nbsp;</th>
                                <th scope="col">TANGGAL&nbsp;</th>
                                <th scope="col">Class&nbsp;</th>
                                <th scope="col">phone&nbsp;</th>
                                <th scope="col">Fhoto&nbsp;KTP</th>
                                <th scope="col">Harga&nbsp;</th>
                                <th scope="col">Jumlah&nbsp;</th>
                                <th scope="col">Harga Total&nbsp;</th>
                                <th scope="col">&nbsp;Aksi</th>
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
                                   
                                    <td>
                                        <a href="{{ asset('/image/'.$pesan->gambar)}}" style="font-size: 12px;" class="btn btn-success btn-sm">
                                            <i class="fas fa-camera"></i> Lihat Gambar
                                                    </a> 
                                            </td>
                                         <td>{{ $pesan->Harga }}</td>
                                         <td>{{ $pesan->Jumlah }}</td>
                                         <td>{{ $pesan->HargaTotal }}</td>
                                                                                       
                                              <td class="text-center">
                                                <a href="/pesan/tiket/cetak/{{ $pesan->id }}" class="btn btn-sm btn-warning">
                                            cetak
                                        </a>
                                    </td>
                                </tr>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/admin/berita-del/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop 