@extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="/kontak" class="text-white text-decoration-none">Kontak Masuk</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Kontak Masuk</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container"><br>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">Nama&nbsp;</th>
                                <th scope="col">Email&nbsp;</th>
                               <th scope="col">Telpon&nbsp;</th>
                               <th scope="col">Message&nbsp;</th>
                                <th scope="col">&nbsp;Aksi</th>
                          </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($kontak as $no => $kontak)
                                <tr>
                                <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $kontak->name }}</td>
                                    <td>{{ $kontak->Email }}</td>
                                    <td>{{ $kontak->Telephone }}</td>
                                    <td>{{ $kontak->Message }}</td>
                                    <td class="text-center">
                                        <a href="/kontak/index/delete/{{ $kontak->id }}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
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