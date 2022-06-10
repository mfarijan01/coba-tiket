@extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="/admin" class="text-white text-decoration-none">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Pesanan Masuk</a></li>
                </ol>
            </div>
            <a href="{{ url('pesan/masuk/cetak-pdf') }}" class="btn btn-lg btn-success">Export PDF</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 3%">NO.</th>
                                <th scope="col" style="text-align: center;width: 3%">Pesawat&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%"> Penerbangan&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Keberangkatan &nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Dari Kota &nbsp;</th>
                                <th scope="col" style="text-align: center;width: 7%">Ke Kota&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Tanggal&nbsp;</th>
                                 <th scope="col" style="text-align: center;width: 3%">Class&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">phone&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Fhoto&nbsp;KTP</th>
                                <th scope="col" style="text-align: center;width: 3%">Harga&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Jumlah&nbsp;</th>
                                <th scope="col" style="text-align: center;width: 3%">Harga &nbsp;Total</th>
                                <th scope="col" style="text-align: center;width: 3%">Aksi</th>
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
                                        <a href="/pesan/tiket/index/delete/{{ $pesan->id }}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a href="{{ route('pesan.masuk.edit', $pesan->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
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