@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<div class="row">
        <div class="col-6">
          <a href="/mahasiswabimbingan">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="margin-bottom: 10px">Kembali</button>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card">
            <div class="card-header">
  
             @foreach($dataMahasiswabimbingan as $item)
              <h2>Detail Proposal</h2>
              <hr>
              <b>Nama</b>
              <p>{{$item->namalengkap}}</p>
              <b>File</b>
              <p>{{$item->namafile}}</p>
              <br>


            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12" style="padding: 25px">
          <div class="card">
            <div class="card-header">
              <b>Status</b>
              <p>{{$item->status}}</p>
              @endforeach
            </div>
          </div>
        </div>

      </div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop