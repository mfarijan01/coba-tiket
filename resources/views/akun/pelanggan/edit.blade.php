@extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Akun</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="/admin" class="text-white text-decoration-none">Home</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Akun Pelanggan</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('akun.pelanggan.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$akun->id}}">

                            <div class="form-group">
                            <label>ID</label>
                                <input type="text" name="id" value="{{$akun->id}}" placeholder="Masukkan id" class="form-control @error('id') is-invalid @enderror">

                                @error('id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{$akun->name}}" placeholder="Masukkan Nama Akun" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{$akun->email}}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="password" value="{{ old('password') }}" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Masukkan confirmation Password" class="form-control @error('password_confirmation') is-invalid @enderror">

                                @error('password_confirmation')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>LEVEL</label>
                                <select name="level" class="form-control @error('level') is-invalid @enderror">
                                    <option value="">Pilih Level</option>
                                    <option value="Pengguna" @if($akun->level == 'Pengguna') selected @endif>Pengguna</option>
                                </select>

                                @error('level')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop