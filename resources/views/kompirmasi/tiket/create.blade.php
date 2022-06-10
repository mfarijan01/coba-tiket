@extends('layouts.doctor.master')
@section('content')
                <br>
                    <div class="card-body">
                        <form action="{{ route('kompirmasi.tiket.post') }}" method="POST" enctype="multipart/form-data"> 
                            @csrf

                              <div class="header">
                                <label>destination</label>
                                <input type="text" name="destination" value="{{ old('destination') }}" placeholder="Masukkan destination" class="form-control @error('destination') is-invalid @enderror">

                                @error('destination')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><br><br>

                            <div class="header">
                                <label>FlightNo</label>
                                <input type="text" name="FlightNo" value="{{ old('FlightNo') }}" placeholder="Masukkan FlightNo" class="form-control @error('FlightNo') is-invalid @enderror">

                                @error('FlightNo')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><br>
                          
<br>
                            <div class="header">
                                <label>departure</label>
                                <input type="date" name="departure" class="form-control @error('departure') is-invalid @enderror" value="{{ old('departure'), date('d-m-Y') }}">
                                @error('departure')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
</div><br>

                                <div class="header">
                                <label>arrival</label>
                                <input type="date" name="arrival" class="form-control @error('arrival') is-invalid @enderror" value="{{ old('arrival'), date('d-m-Y') }}">
                                @error('arrival')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
</div><br>

                            <div class="header">
                                <label>class</label>
                                <input type="text" name="class" value="{{ old('class') }}" placeholder="Masukkan class" class="form-control @error('class') is-invalid @enderror">

                                @error('class')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><br>
                          
                            <div class="header">
                                <label>status</label>
                                <input type="text" name="status" value="{{ old('status') }}" placeholder="Masukkan status" class="form-control @error('status') is-invalid @enderror">

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

<br>
                            <div class="header">
                                <label>total</label>
                                <input type="text" name="total" value="{{ old('total') }}" placeholder="Masukkan total" class="form-control @error('total') is-invalid @enderror">

                                @error('total')
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