@extends('layouts.app')
@section('content')
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);
    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category Type');
        data.addColumn('number', 'Size');
        data.addRows([
            @foreach($data as $item)
            ["{{ $item->category }}", {{ $item->category_size }}],
            @endforeach
        ]);
        // Set chart options
        var options = {'title':'Product Categories',
                        'width':600,
                        'height':600};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('category_pie'));
        chart.draw(data, options);
    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    <h1 class="text-center">Product Types Pie Chart</h1>
                    <br>
                    <div id="category_pie" class="d-flex justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
  body{
    background: white;
  }
</style>
@endsection