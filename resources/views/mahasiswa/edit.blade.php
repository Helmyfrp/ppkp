@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit Data Mahasiswa</h1>
@stop

@section('content')

<div class="row">
  <div class="col-12" style="padding: 25px">
    <div class="card">
      <div class="card-header">
        <form action="/mahasiswa/simpan" method="POST" enctype="multipart/form-data">
          @csrf

          @foreach($data as $data)
          <input type="text" class="form-control" name="id" placeholder="ID : ....." value="{{$data->id}}" hidden>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Nim</label>
                <input type="text" class="form-control" name="nim" placeholder="NIM : ....." value="{{$data->nim}}">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="name" placeholder="Nama : ....." value="{{$data->name}}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email : ....." value="{{$data->email}}">
              </div>
              <div class="form-group">
                <label for="sel1">Jenis Kelamin</label>
                <select class="form-control" name="jeniskelamin">
                  <option value="lakilaki">Laki Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-check">
                <input class="form-check-input" checked type="radio" name="status" id="" value="mahasiswa">
                <label class="form-check-label" for="">
                  Mahasiswa
                </label>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
          @endforeach
        </form>
        <a href="/mahasiswa">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="margin-bottom: 10px">Kembali</button>
          </a>
      </div>
    </div>
  </div>
</div>
@stop