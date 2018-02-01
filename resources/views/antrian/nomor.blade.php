<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Antrian</title>
    <link href="{{asset('antrian/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('antrian/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('antrian/css/styles.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading"><center>Nomor Antrian</center></div>
                <div class="panel-body center">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <h3><center>{{$antrian->nama}}</center></h3>
                            </div>
                            <div class="form-group">
                                <h3><center>{{$antrian->perusahaan}}</center></h3>
                            </div>
                            <div class="form-group">
                                <h1><center>{{$antrian->nomor}}</center></h1>
                            </div>
                            <center><a href="{{route('home')}}" class="btn btn-primary center">Ambil Nomer Lagi</a></center>
                            
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    

<script src="{{asset('antrian/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('antrian/js/bootstrap.min.js')}}"></script>
</body>
</html>
