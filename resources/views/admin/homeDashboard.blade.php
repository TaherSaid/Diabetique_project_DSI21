
    @extends('admin.layouts.dashboard')
    @section('section')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.arrayToDataTable((<?= ($tab)?>));
      var options = {
        chart: {
          title: 'Nombre de Profile',
          subtitle: 'Nombre de profile créés par rapport au temps  '
        }
      };
      var chart = new google.charts.Line(document.getElementById('chart'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
      </script>
    <div class="container">
        <div class="row">
            <div class="card-columns col-6">
                <div class="card bg-primary" style="width: 200%">
                    <div class="card-body text-center">
                        <h3 class="card-text text-white"> nombre de feedback est :{{ $count_feedback }}</h3>
                    </div>
                </div>
            </div>
            <div class="card-columns col-6 " >
                <div class="card bg-success" style="width: 200%">
                    <div class="card-body text-center" >
                        <h3 class="card-text text-white">nombre d'utilisateur:{{ $count_profile }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div id="chart" style="width: 100%; height: 500px"></div>
        </div>
    </div>
    @endsection
