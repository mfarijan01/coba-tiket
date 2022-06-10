@extends('layouts.doctor.master')

@section('content')
<div class="container-fluid">
            <div class="section-body">
            
                <div class="card">
                    <div class="card-header">
                        <h4 align="center"><i class="fa fa-tags"></i> Edit Pesanan</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pesan.masuk.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf
                            <input type="hidden" name="id" value="{{$pesan->id}}">

                            <br>
                            
                            <div class="header">
                                 <select name="Pesawat" value="{{$pesan->Pesawat}}" class="form-control">
                                <option selected>--Pilih Pesawat--</option>
                                <option name="garuda">Garuda Indonesia</option>
                                <option name="garuda">air asia Indonesia</option>
                               </select>
                                @error('Pesawat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="header">
                                 <select name="Penerbangan" value="{{$pesan->Penerbangan}}" class="form-control">
                                <option selected>--Pilih Keberangkatan--</option>
                                <option name="Sekali Jalan">Sekali Jalan</option>
                               </select>
                                @error('Penerbangan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="header">
                                 <select name="Keberangkatan" value="{{$pesan->Keberangkatan}}" class="form-control">
                                <option selected>Jam Keberangkatan--</option>
                                <option name="Pagi">Pagi -> 01:30 -> 10:30</option>
                                <option name="siang">Sore -> 04:30 -> 06:30</option>
                                <option name="Malam ">Malam -> 10:30 -> 11:30</option>
                               </select>
                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="header">
                                <label>TANGGAL</label>
                                <input type="date" name="tanggal" value="{{$pesan->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal'), date('d-m-Y') }}">
                                @error('tanggal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
</div>
<br>
                        <div class="header">
                            <select name="Dari" value="{{$pesan->Dari}}" class="form-control">
                                <option selected>-- Pilih Dari Kota --</option>
                                <option value="Bandung">Bandung</option>
</select> 
                                  @error('tujuan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>

                            <div class="header">
                            <select name="Kota" value="{{$pesan->Kota}}" class="form-control">
                                <option selected>--Pilih Ke Kota--</option>
                                <option value="Jakarta">Jakarta</option> </select> 
                                 @error('pesawat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="header">
                                 <select name="Class" value="{{$pesan->Class}}" class="form-control">
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
                                <label>PHONE</label>
                                <input type="text" name="phone" value="{{$pesan->phone}}" placeholder="Masukkan No phone Anda" class="form-control @error('phone') is-invalid @enderror">

                                @error('phone')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <br>
                            <div class="header">
                                <label>APLOAD KTP</label>
                                <input type="file" name="gambar" value="{{$pesan->gambar}}" class="form-control @error('gambar') is-invalid @enderror">

                                @error('gambar')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
<br>
                            <div class="header">
                                <select name="Harga" value="{{$pesan->Harga}}" class="form-control">
                                <option selected>--Harga--</option>
                                <option value="500000"  name="Economy Class">Economy Class -> 500.000</option>
                                <option value="1000000" name="Business Class">Business Class -> 1000.000</option>
                                </select>
                              
                                  @error('Harga')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="header">
                                <label>JUMLAH</label>
                                <input type="number" name="Jumlah" value="{{$pesan->Jumlah}}" placeholder="Masukkan  Jumlah Anda" class="form-control @error('phone') is-invalid @enderror">

                                @error('Jumlah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop