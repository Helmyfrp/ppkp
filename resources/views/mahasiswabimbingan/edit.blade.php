@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit Data Form Proposal</h1>
@stop

@section('content')

<div class="row">
  <div class="col-12" style="padding: 25px">
    <div class="card">
      <div class="card-header">
        <form action="/mahasiswabimbingan/simpan" method="POST" enctype="multipart/form-data">
          @csrf

          @foreach($data as $data)
          <input type="text" class="form-control" name="id" placeholder="ID : ....." value="{{$data->id}}" hidden>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap : ....." value="{{$data->nanamalengkap}}">
              </div>
              <div class="form-group">
                <label>Nama File</label>
                <input type="text" class="form-control" name="namafile" placeholder="Nama File : ....." value="{{$data->namafile}}">
              </div>

          </div>
          @endforeach
        </form>
        <a href="/mahasiswabimbingan">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="margin-bottom: 10px">Kembali</button>
          </a>
      </div>
    </div>
  </div>
</div>
@stop