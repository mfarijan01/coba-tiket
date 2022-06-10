@extends('layouts.doctor.master')

@section('content')
                <br>
                    <div class="card-body">
                        <form action="{{ route('pesan.ijin.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf

                              <div class="header">
                                <label>ID</label>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><br><br>

                            <div class="header">
                                 <select name="nama" class="form-control">
                                <option selected>--Pilih Keberangkatan--</option>
                                <option nama="Sekali Jalan">Sekali Jalan</option>
                                <option nama="Pergi Pulang">Pergi Pulang</option></select>
                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
<br>
                            <div class="header">
                                <label>TANGGAL</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal'), date('d-m-Y') }}">
                                @error('tanggal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
</div><br>
                            <div class="header">
                                <label>NAMA PESAWAT</label>
                                <input type="text" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan jenis Pesawat" class="form-control @error('jenis') is-invalid @enderror">

                                @error('jenis')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
<br>
                            <div class="header">
                                 <select name="Class" class="form-control">
                                <option selected>--Pilih Class--</option>
                                <option name="Economy Class">Economy Class</option>
                                <option name="Business Class">Business Class</option></select>
                                @error('Class')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
<br>
                            <div class="header">
                                <label>Biaya Pesawat</label>
                                <input type="text" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Biaya Pesawat" class="form-control @error('harga') is-invalid @enderror">

                                @error('harga')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

<br>
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop