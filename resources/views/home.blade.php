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

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
        	<a class="navbar-brand" href="#"><span>Daftar </span> Nomer Antrian</a>
        <ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" href="{{route('login')}}" aria-expanded="false">
						<em class="glyphicon glyphicon-log-in"></em>
					</a>
        </li>

		</div><!-- /.container-fluid -->
	</nav>
  <br>
  <br>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Daftar Antrian</div>
                <div class="panel-body center">
                    <form role="form" action="{{route('antrian')}}" method="post">
                    {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Perusahaan" name="perusahaan" type="text" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary center">Ambil Nomer Antrian</button></fieldset>

                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->


<script src="{{asset('antrian/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('antrian/js/bootstrap.min.js')}}"></script>
</body>
</html>
