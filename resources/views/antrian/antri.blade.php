@extends('layouts.admin')

@section('administrator')
  active
@endsection
@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
  </div>
</div><!--/.row-->
<form action="{{route('reset.nomor')}}" method="post">
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">Reset Nomor Antrian</button>
</form>
</div>

@endsection
