<div id="tvbmc"></div>

@push('scripts')

  <script src="https://google.com/jsapi"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["State", "Transactions", { role: "style" } ],
        ["Financial Institutions Manual Cash Disbursements", 889472834, "grey"],
        ["Miscellaneous And Speciality Retail Stores", 504983774, "grey"],
        ["Local/Suburban Commuter Passenger Transportation", 393938283, "grey"],
        ["Grocery Stores", 214588372, "color: grey"],
        ["Oberoi Hotels", 177382721, "color: grey"],
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
      var chart = new google.visualization.ColumnChart(document.getElementById("tvbmc"));
      chart.draw(view, options);
  }
  </script>

@endpush
