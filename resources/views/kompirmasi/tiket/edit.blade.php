@extends('layouts.doctor.master')
@section('content')
<div class="container-fluid">
    <div class="card">
            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                         <li class="breadcrumb-item"><a href="{{route('kompirmasi.tiket.index')}}" class="text-white text-decoration-none">Kelola tiket</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Tiket</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Tiket</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kompirmasi.tiket.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$kompirmasi->id}}">
                            <div class="form-group">
                                <label>JUDUL destination</label>
                                <input type="text" name="destination" placeholder="Masukkan Judul destination" class="form-control @error('destination') is-invalid @enderror" value="{{$kompirmasi->destination}}">

                                @error('destination')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>FlightNo</label>
                                <input type="text" name="FlightNo" placeholder="FlightNo" class="form-control @error('FlightNo') is-invalid @enderror" value="{{$kompirmasi->FlightNo}}">

                                @error('FlightNo')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>departure</label>
                                <input type="date" name="departure" class="form-control @error('departure') is-invalid @enderror" value="{{$kompirmasi->departure}}">
                                @error('departure')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>arrival</label>
                                <input type="date" name="arrival" class="form-control @error('arrival') is-invalid @enderror" value="{{$kompirmasi->arrival}}">
                                @error('arrival')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>class</label>
                                <input type="text" name="class" placeholder="class" class="form-control @error('class') is-invalid @enderror" value="{{$kompirmasi->class}}">

                                @error('class')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>status</label>
                                <input type="text" name="status" placeholder="status" class="form-control @error('status') is-invalid @enderror" value="{{$kompirmasi->status}}">

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>total</label>
                                <input type="text" name="total" placeholder="total" class="form-control @error('total') is-invalid @enderror" value="{{$kompirmasi->total}}">

                                @error('total')
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
</div>
        </section>
    </div>
@stop

