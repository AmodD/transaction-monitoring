<div id="tvbs"></div>

@push('scripts')

  <script src="https://google.com/jsapi"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["State", "Transactions", { role: "style" } ],
        ["MH", 889472834, "grey"],
        ["GJ", 693747363, "grey"],
        ["KA", 542626812, "grey"],
        ["WB", 504983774, "grey"],
        ["UP", 393938283, "grey"],
        ["TN", 214588372, "color: grey"],
        ["DL", 177382721, "color: grey"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
//        title: "Density of Precious Metals, in g/cm^3",
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("tvbs"));
      chart.draw(view, options);
  }
  </script>

@endpush
