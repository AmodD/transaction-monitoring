<div id="visualization"></div>

@push('scripts')

  <script src="https://google.com/jsapi"></script>
  <script type="text/javascript">
    google.charts.load('visualization', {packages:['geochart']});
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
      var data = google.visualization.arrayToDataTable([
        ['State Code', 'State', 'Transactions'],
        ['IN-MH', 'Maharashtra', 8843],
        ['IN-GJ', 'Gujarat', 6937],
        ['IN-KA', 'Karnataka', 5426],
        ['IN-WB', 'West Bengal', 5049],
        ['IN-UP', 'Uttar Pradesh',3939],
        ['IN-TN', 'Tamil Nadu', 2145]
      ]);

      var options = {
        region: 'IN',
        domain: 'IN',
        displayMode: 'regions',
        colorAxis:{colors:['#008000','#FFF000','#000FFF']},
        resolution: 'provinces',
        backgroundColor: '#81d4fa',
defaultColor: '#f5f5f5',
width:940,
  height:680,
      };

      var geochart = new google.visualization.GeoChart(document.getElementById("visualization"));

      geochart.draw(data, options);

    }
  </script>

@endpush
