@extends('layouts.home')
@section('content')
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  console.log((<?= ($tab)?>));
  function drawChart() {
    var data = google.visualization.arrayToDataTable((<?= ($tab)?>));
    var options = {
      title: 'Courbe de glycémie par jour',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(data, options);
  }


</script>
<script>
    $(document).ready( function () {$('#tabmesure').DataTable();} );
</script>
<section class="banner_part" style="padding-top: 90px">
    <div class="container">
    <div class="row">
        <div class="col-12">

                <table class="table table-fluid" style="margin-top: 140px" id="tabmesure">
                <thead>
                    <tr>
                        <th scope="col">value </th>
                        <th scope="col">date nesure</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($mesure as $key=>$val)
                        <tr>
                            <td>{{ $val->val }}</td>
                            <td>{{ $val->dateMesure }}</td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
            </div>

    </div>
    </div>
</section>
<section class="banner_part" style="margin-top: -20px">
    <div class="row">
    <div class="col-12">
        <div class="row align-items-center">
            <div id="curve_chart" style="width: 100%; height: 500px"></div>
        </div>
    </div>
    </div>

</section>

@endsection
