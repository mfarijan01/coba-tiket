 @extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="/admin" class="text-white text-decoration-none">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Komfirmasi Pesanan</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('kompirmasi/tiket/create')}}" class="btn btn-success mb-4"><i class="fas fa-plus-circle"></i>Ijin Komfirmasi Tiket Pesawat</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                     <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">destination&nbsp;</th>
                                <th scope="col">FlightNo&nbsp;</th>
                                <th scope="col">departure&nbsp;</th>
                                <th scope="col">arrival&nbsp;</th>
                                <th scope="col">class&nbsp;</th>
                                 <th scope="col">status</th>
                                <th scope="col">total</th>
                                <th scope="col">Aksi</th>
                          </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($kompirmasi as $no => $kompirmasi)
                                <tr>
                                <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                     <td>{{ $kompirmasi->destination }}</td>
                                     <td>{{ $kompirmasi->FlightNo }}</td>
                                     <td>{{ $kompirmasi->departure }}</td>
                                     <td>{{ $kompirmasi->arrival }}</td>
                                     <td>{{ $kompirmasi->class }}</td>
                                     <td>{{ $kompirmasi->status }}</td>
                                     <td>{{ $kompirmasi->total }}</td>
                             <td class="text-center">
                                        <a href="/kompirmasi/tiket/index/delete/{{ $kompirmasi->id }}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a href="/kompirmasi/tiket/edit/{{ $kompirmasi->id }}" class="btn btn-sm btn-primary">
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