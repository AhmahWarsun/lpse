@extends('layouts.admin')

@section('rekap')
  active
@endsection

@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Rekap Harian</h1>
  </div>
</div><!--/.row-->

<form action="{{route('rekap.lihat')}}" method="post">
  {{csrf_field()}}
  <div class="input-group date">
      <input type="text" name="tanggal" class="form-control datepicker" data-date-format="yyyy-mm-dd">
      <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
    <br>
  <button type="submit" class="btn btn-default">Cari</button>
</form>
</div>
<br><br><br>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Nomor Antrian</th>
            <th>Nama</th>
            <th>Perusahaan</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
      @if(!is_null($antrian))
      @foreach($antrian as $key)
<tr>

      <td>{{$key->nomor}}</td>
      <td>{{$key->nama}}
      </td>
      <td>{{$key->perusahaan}}
      </td>
      <td>{{$key->created_at}}
      </td>
    </tr>
      @endforeach
      @endif
    </tbody>
</table>


@endsection
@section('js')
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
});
$(document).ready( function () {
    $('#table_id').DataTable();
} );
@endsection
