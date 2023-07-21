<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>

                <div class="py-2">

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-right gap-2">
<div class="grid grid-cols-10 gap-8 ">
<div class="col-span-2 col-start-9 scale-100">
<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
  Last 7 Days
  <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg>
</button>
<!-- Dropdown menu -->
<div id="dropdown" class="justify-end z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 14 Days</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 Days</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last Calendar Month</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 12 Months</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last Calendar Year (Jan-Dec)</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last Financial Year (Apr-Mar)</a>
      </li>
    </ul>
</div>
</div>
</div>
</div>
</div>


<div class="py-2">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-10 gap-8 text-center justify-center">
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Total Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">9.23 K</p>
                          </div>
</div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Successfull Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">9.22 K</p>
                          </div>
</div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Failed Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">899</p>
                          </div>
</div>
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" text-sm font-semibold text-gray-900 dark:text-white">Pending Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">80</p>
                          </div>
</div>
                        <div class="col-span-2 justify-center scale-100 text-sm p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class=" font-semibold text-gray-900 dark:text-white">Suspended Transactions</h2>
                                <p class=" text-gray-500 dark:text-gray-400 text-4xl leading-relaxed">21</p>
                          </div>
                        </div>
</div>
</div>
</div>




<div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-10 gap-8 text-center">
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div class="">
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Count By Device</h2>
                                <br><canvas class="h-32" id="countByDevice"></canvas>
                          </div>
                        </div>
                        <div class="col-span-3 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Count By Type Of Transaction</h2>
                                <br><canvas class="h-32" id="countByTypeOfTransaction"></canvas>
                          </div>
                        </div>
                        <div class="col-span-5 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Month on Month Transaction Count</h2>
                                <br><canvas class="" id="monthOnMonthTransactionCount"></canvas>
                          </div>
                        </div>
</div>
</div>
</div>


<div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-10 gap-8 text-center">
                        <div class="col-span-2 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div class="">
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white"></h2>
                                <br>
                                <div class="w-48"><x-transaction-volume-by-states /></div>
                          </div>
                        </div>
                        <div class="col-span-3 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Transaction Volume By Location</h2>
                                <br>
                                <div class="w-72"><x-transaction-volume-by-location /></div>
                          </div>
                        </div>
                        <div class="col-span-5 justify-center scale-100 p-2 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                          <div>
                                <h2 class="text-sm font-semibold text-gray-900 dark:text-white">Transaction Volume By Merchant Category</h2>
                                <br>
                                <div class="w-96"><x-transaction-volume-by-merchant-category /></div>
                          </div>
                        </div>
</div>
</div>
</div>






</div>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
              @if(false)
              <x-welcome />
              @endif
            </div>
        </div>
    </div>
    @push('scripts')

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@next"></script>
        <script src="https://unpkg.com/chartjs-chart-geo@4.2.0/build/index.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/papaparse"></script>
        <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

        <script>

          const cbd = document.getElementById('countByDevice');
          const cbtot = document.getElementById('countByTypeOfTransaction');
          const momtc = document.getElementById('monthOnMonthTransactionCount');


var momtcData = {
  labels: [
    "Mar 2023",
    "Apr 2023",
    "May 2023",
    "Jun 2023",
  ],
  datasets: [
    {
      label: "Success",
      backgroundColor: "rgb(167, 167, 167)",
//      borderColor: "red",
      borderWidth: 1,
      data: [300, 550, 700, 650, 500]
    },
    {
      label: "UnSuccessfull",
      backgroundColor: "rgb(240, 240, 240)",
//      borderColor: "blue",
      borderWidth: 1,
      data: [120, 70, 90, 150, 100]
    },
  ]
};

var momtcOptions = {
responsive: true,
  plugins: {
    legend: {
      display: false,
    },
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}


var cbtotData = {
  labels: [
    "Tokenize",
    "Detokenize",
  ],
  datasets: [
    {
      label: "Success",
      backgroundColor: "rgb(167, 167, 167)",
//      borderColor: "red",
      borderWidth: 1,
      data: [300, 550]
    },
    {
      label: "UnSuccessfull",
      backgroundColor: "rgb(240, 240, 240)",
//      borderColor: "blue",
      borderWidth: 1,
      data: [1200, 700]
    },
  ]
};

var cbtotOptions = {
responsive: true,
  plugins: {
    legend: {
      display: false,
    },
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}

  new Chart(momtc, {
    type: 'bar',
    data: momtcData,
    options: momtcOptions
  });

  new Chart(cbtot, {
    type: 'bar',
    data: cbtotData,
    options: cbtotOptions
  });



  new Chart(cbd, {
    type: 'pie',
    options: {
      title: {
        display: false,
        text: "Count By Type Of Transaction"
      },
      plugins: {
        labels: {
          render: 'label',
          arc: false
        },
        legend: {
          display: false
        },
      }
    },
    data: {
      labels: ['Mobile','Web'],
      datasets: [{
        data: [500, 150],
        backgroundColor: [
          'rgb(167, 167, 167)',
          'rgb(240, 240, 240)'
        ],
        hoverOffset: 4,
      }]
    },
  });


Promise.all([
//  fetch('https://unpkg.com/us-atlas/states-10m.json')
//  fetch('http://localhost:8000/ind.topo.json')
  fetch('https://raw.githubusercontent.com/deldersveld/topojson/master/countries/india/india-states.json')
  .then((r) => r.json()),
   fetch('https://gist.githubusercontent.com/mbostock/9535021/raw/928a5f81f170b767162f8f52dbad05985eae9cac/us-state-capitals.csv')
        .then((r) => r.text()).then((d) => Papa.parse(d, { dynamicTyping: true, header: true}).data)
]).then(([us, usdata]) => {

// whole US for the outline
  const india = ChartGeo.topojson.feature(us, us.objects.India_States_2020_compressed).features;
  //const nation = ChartGeo.topojson.feature(us, us.objects.nation).features[0];
  //const states = ChartGeo.topojson.feature(us, us.objects.states).features;
  const states = ChartGeo.topojson.feature(us, us.objects.states).features;
  console.log(india);

 var coordinatesNation = {"type":"GeometryCollection","geometries":[{"type":"MultiPolygon","arcs":[[[0]],[[164,4,328,413,236,261,147,276,350,369,403,330,215,196,380,317,381,259,169,314,346,222,341,405,332,185,333,190,414,192,418,243,343,205,338,207,277,201,278,300,355,302,357,212,394,168]],[[6]],[[7]],[[8]],[[9]],[[10]],[[11]],[[12]],[[13]],[[14]],[[15]],[[16]],[[17]],[[18]],[[19]],[[20]],[[21]],[[22]],[[23]],[[24]],[[25]],[[26]],[[27]],[[28]],[[29]],[[30]],[[31]],[[32]],[[33]],[[34]],[[35]],[[36]],[[37]],[[38]],[[39]],[[40]],[[41]],[[42]],[[43]],[[44]],[[45]],[[46]],[[47]],[[48]],[[49]],[[50]],[[51]],[[52]],[[53]],[[54]],[[55]],[[56]],[[57]],[[58]],[[59]],[[60]],[[61]],[[62]],[[63]],[[64]],[[65]],[[66]],[[67]],[[68]],[[69]],[[70]],[[71]],[[72]],[[73]],[[74]],[[75]],[[76]],[[77]],[[78]],[[79]],[[80]],[[81]],[[82]],[[83]],[[84]],[[85]],[[86]],[[87]],[[88]],[[89]],[[90]],[[91]],[[92]],[[93]],[[94]],[[95]],[[96]],[[97]],[[98]],[[99]],[[100]],[[101]],[[102]],[[103]],[[104]],[[105]],[[106]],[[107]],[[108]],[[109]],[[110]],[[111]],[[112]],[[113]],[[114]],[[115]],[[116]],[[117]],[[118]],[[119]],[[120]],[[121]],[[122]],[[123]],[[124]],[[125]],[[126]],[[127]],[[128]],[[129]],[[130]],[[131]],[[132]],[[133]],[[134]],[[135]],[[136]],[[137]],[[138]],[[139]],[[140]],[[141]],[[142]],[[154]],[[155]],[[156]],[[157]],[[158]],[[159]],[[160]],[[161]],[[162]],[[177]],[[178]],[[179]],[[180]],[[181]],[[182]],[[183]],[[186]],[[187]],[[209]],[[210]],[[265]],[[266]],[[267]],[[268]],[[269]],[[270]],[[271]],[[272]],[[282]],[[283]],[[284]],[[285]],[[286]],[[287]],[[288]],[[289]],[[297,356]],[[298]],[[299]],[[305]],[[306]],[[307]],[[308]],[[309]],[[310]],[[311]],[[312]],[[313]],[[316]],[[323]],[[324]],[[325]],[[326]],[[335]],[[336]],[[337]],[[339]],[[340]],[[344]],[[345]],[[354]],[[358]],[[359]],[[360]],[[361]],[[362]],[[363]],[[364]],[[365]],[[366]],[[367]],[[370]],[[371]],[[372]],[[373]],[[374]],[[375]],[[376]],[[377]],[[378]],[[379]],[[382]],[[383]],[[384]],[[385]],[[386]],[[387]],[[388]],[[389]],[[390]],[[391]],[[392]],[[393]],[[395]],[[396]],[[397]],[[398]],[[399]],[[400]],[[401]],[[402]],[[406]],[[407]],[[408]],[[409]],[[410]],[[411]],[[412]],[[415]],[[416]],[[417]]]}]};

  var indiaNation = {"type":"GeometryCollection","geometries":[{"type":"MultiPolygon","arcs":[ [[48194,957],[6,-52],[36,4],[39,-186],[-7,-69],[55,-75],[10,-75],[27,-94],[-36,-35],[-38,-84],[8,-41],[-15,-67],[29,-18],[-24,-65],[-80,20],[-12,-70],[-35,-50],[-41,16],[13,89],[-52,56],[-23,55],[11,35],[-71,85],[7,73],[-87,98],[-54,3],[-27,223],[37,27],[-1,72],[21,26],[89,-5],[40,47],[99,7],[1,28],[75,22]],[[47940,1358],[22,-91],[60,-45],[-59,-127],[-86,-50],[-18,-49],[-40,-34],[-37,51],[-5,74],[19,30],[-10,80],[58,37],[86,26],[10,98]],[[47315,2503],[55,-35],[-13,-64],[51,-14],[59,-62],[24,-79],[-23,-47],[-38,53],[-83,6],[-32,-38],[-67,37],[6,47],[-54,13],[-16,59],[49,99],[34,-9],[48,34]],[[47629,2509],[30,-6],[36,-65],[-16,-124],[-125,111],[66,59],[9,25]],[[47688,2701],[19,-32],[7,-141],[-39,58],[-20,102],[33,13]],[[47590,2910],[33,-13],[1,-57],[-76,-102],[83,-110],[9,-43],[-83,-64],[-5,-64],[-27,-3],[-11,72],[71,30],[-15,63],[-61,-12],[-46,92],[-8,101],[67,46],[8,47],[60,17]],[[46838,3155],[32,-18],[-32,-137],[53,-67],[75,-36],[9,-61],[-62,11],[-81,42],[-71,104],[0,67],[19,64],[58,31]],[[47758,3584],[13,-87],[22,-10],[15,-112],[-30,-1],[-3,95],[-29,73],[12,42]],[[46202,4905],[59,-61],[24,-98],[-39,-78],[-149,1],[-23,43],[2,133],[84,2],[42,58]],[[45691,8162],[80,-68],[6,-101],[49,-49],[-9,-88],[27,-71],[1,-46],[-85,-89],[-23,-48],[8,-40],[45,-33],[-70,-114],[-60,-14],[-121,73],[-62,-34],[-33,25],[48,78],[20,62],[-23,66],[-51,36],[3,104],[-12,122],[69,15],[34,64],[54,49],[61,84],[44,17]],[[45927,9368],[50,-38],[32,-113],[-39,-75],[53,-14],[-4,-36],[-98,-46],[-73,1],[-34,39],[12,68],[65,6],[2,72],[-23,35],[10,52],[47,49]],[[45133,9530],[96,-14],[9,-99],[-46,-18],[-63,6],[-16,38],[20,87]],[[45736,9552],[51,-22],[-25,-60],[-30,-1],[4,83]],[[46640,10025],[80,3],[-25,-64],[-62,36],[7,25]],[[46543,10400],[64,-9],[9,-61],[55,-100],[31,-101],[-59,9],[-53,80],[-39,15],[-24,61],[-51,10],[-5,40],[72,56]],[[46584,10548],[23,-8],[-9,-115],[-69,51],[-4,69],[59,3]],[[46653,10643],[14,-117],[34,-44],[-87,1],[-2,63],[-82,29],[2,55],[56,-19],[65,32]] ] }]};



//  const newNation = ChartGeo.topojson.feature(us, indiaNation).features[0];

//  console.log(newNation);

//  console.log(ChartGeo.topojson.feature(us, us.objects.states).features);
 // console.log(data.map((d) => Object.assign(d, {value: Math.round(Math.random() * 10)})).slice(0, 8));
  const chart = new Chart(document.getElementById("canvas").getContext("2d"), {
    type: 'bubbleMap',
    data: {
      labels: usdata.map((d) => d.description),
      datasets: [{
        outline: india,
        showOutline: true,
        backgroundColor: 'steelblue',
        //borderColor: 'white',
        data: usdata.map((d) => Object.assign(d, {value: Math.round(Math.random() * 10)})).slice(0, 8),
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        datalabels: {
          align: 'top',
          formatter: (v) => {
            return v.description;
          }
        }
      },
      scales: {
        projection: {
          axis: 'x',
          projection: 'albersUsa',
        },
        size: {
          axis: 'x',
          size: [1, 20],
        },
      }
    }
  });
});




</script>
    @endpush
</x-app-layout>
