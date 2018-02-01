<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Antrian</title>
	<link href="{{asset('antrian/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('antrian/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('antrian/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('antrian/css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('antrian/css/table.css')}}" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Antrian</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">

						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{asset('antrian/image/warsun.jpg')}}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="@yield('administrator')"><a href="{{route('administrator')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

			<li class="parent @yield('rekap')"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Rekap <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{route('rekap')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Hari
					</a></li>
					<li><a class="" href="{{route('rekap.bulanan')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Bulan
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Tahun
					</a></li>
				</ul>
			</li>
			<li>
			<form action="{{route('logout')}}" method="post">
			{{csrf_field()}}
			<button type="submit"><em class="fa fa-power-off">&nbsp;</em>Logout</button>
			</form></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->


@yield('content')


		<div class="col-sm-12">
		</div>
			 <div class="col-sm-12">
				<p class="back-link"> Layanan Pengadaan Secara Elektronok <a> Provinsi Jawa Tengah</a></p>
			</div>



	<script src="{{asset('antrian/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('antrian/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('antrian/js/chart.min.js')}}"></script>
	<script src="{{asset('antrian/js/chart-data.js')}}"></script>
	<script src="{{asset('antrian/js/easypiechart.js')}}"></script>
	<script src="{{asset('antrian/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('antrian/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('antrian/js/custom.js')}}"></script>
	<script src="{{asset('antrian/js/table.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
@yield('js')
	</script>

</body>
</html>
