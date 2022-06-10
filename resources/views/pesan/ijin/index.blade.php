@extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="/admin" class="text-white text-decoration-none">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Ijin Pesanan</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('pesan/ijin/create')}}" class="btn btn-success mb-4"><i class="fas fa-plus-circle"></i>Ijin Pesan Tiket Pesawat</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">ID IJIN PESAWAT&nbsp;</th>
                                <th scope="col">KEBERANGKATAN&nbsp;</th>
                                <th scope="col">TANGGAL&nbsp;</th>
                                <th scope="col">NAMA PESAWAT&nbsp;</th>
                                <th scope="col">Class&nbsp;</th>
                                 <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                          </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($ijin as $no => $ijin)
                                <tr>
                                <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                     <td>{{ $ijin->email }}</td>
                                     <td>{{ $ijin->nama }}</td>
                                     <td>{{ $ijin->tanggal }}</td>
                                     <td>{{ $ijin->jenis }}</td>
                                     <td>{{ $ijin->Class }}</td>
                                     <td>{{ $ijin->harga }}</td>
                             <td class="text-center">
                                        <a href="/pesan/ijin/index/delete/{{ $ijin->id }}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
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