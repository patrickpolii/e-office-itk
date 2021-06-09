@extends('/akademik/layouts/main')
@section('dashboard')
<div class="panel panel-container">
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-file-text color-blue"></em>
                    <div class="large">{{ $count0 }}</div>
                    <div class="text-muted">Jumlah Pengajuan Surat</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-file-text color-orange"></em>
                    <div class="large">{{ $count1 }}</div>
                    <div class="text-muted">Jumlah Surat Di Verifikasi</div>
                </div>
            </div>
        </div> 
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-file-text color-red"></em>
                    <div class="large">{{ $count4 }}</div>
                    <div class="text-muted">Jumlah Surat Ditolak</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-file-text color-teal"></em>
                    <div class="large">{{ $count3 }}</div>
                    <div class="text-muted">Jumlah Surat Dicetak</div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Grafik Surat Bulanan
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                        <em class="fa fa-cogs"></em>
                    </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 1
                                    </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 2
                                    </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 3
                                    </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                </div>
            </div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart2" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pie Chart Total Surat Masuk Berdasarkan Jenis Surat
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                        <em class="fa fa-cogs"></em>
                    </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 1
                                    </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 2
                                    </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 3
                                    </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="chart" id="pie-chart" ></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    var lineChartData = {
		labels : ["January","February","March","April","May","June","July"],
		datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data :  {!!json_encode($area)!!},
			},
		]

	}

    var pieData = [
			{
				value: {!!json_encode($pie[0])!!},
				color: {!!json_encode($color[0])!!},
				highlight: {!!json_encode($highlight[0])!!},
				label: {!!json_encode($label[0])!!},
			},
            {
				value: {!!json_encode($pie[1])!!},
				color: {!!json_encode($color[1])!!},
				highlight: {!!json_encode($highlight[1])!!},
				label: {!!json_encode($label[1])!!},
			},
            {
				value: {!!json_encode($pie[2])!!},
				color: {!!json_encode($color[2])!!},
				highlight: {!!json_encode($highlight[2])!!},
				label: {!!json_encode($label[2])!!},
			},
            {
				value: {!!json_encode($pie[3])!!},
				color: {!!json_encode($color[3])!!},
				highlight: {!!json_encode($highlight[3])!!},
				label: {!!json_encode($label[3])!!},
			},
            {
				value: {!!json_encode($pie[4])!!},
				color: {!!json_encode($color[4])!!},
				highlight: {!!json_encode($highlight[4])!!},
				label: {!!json_encode($label[4])!!},
			},

		];

    var lineChartData2 = {
		labels : {!!json_encode($tahun)!!},
		datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data :  {!!json_encode($area2)!!},
			},
		]

	}

	window.onload = function () {

	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});

    var chart2 = document.getElementById("line-chart2").getContext("2d");
	window.myLine = new Chart(chart2).Line(lineChartData2, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});

    };

    var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});

</script>
@endsection
	