@extends('layouts.doctor.master')

@section('content')
  <div class="container-fluid">
    <div class="card">
        <div class="card-body">

            <h1>Kelola Akun Pelanggan</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('/admin')}}" class="text-white text-decoration-none">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Akun Pelanggan</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-key"></i> Akun Pelanggan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="akun">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                 <th scope="col">NAMA</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SETATUS</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($akuns as $no => $akun)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $akun->name }}</td>
                                    <td>{{ $akun->email}}</td>
                                    <td>{{ $akun->level}}</td>
                                    <td class="text-center">
                                   <a href="/akun/pelanggan/index/delete/{{ $akun->id }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <!-- <a href="/akun/pelanggan/edit/{{ $akun->id }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil-alt"></i>edit
                                        </a> -->
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection