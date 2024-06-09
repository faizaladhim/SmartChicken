@extends('layouts.admin')

@section('title', 'Dashboard | SmartChiken')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Temperature</p>
            <h4 class="mb-0">{{$dataSensor->first()->temperature ?? 0}} °C</h4>
          </div>
        </div>
        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
              <div class="progress-bar bg-danger" style="width: {{$dataSensor->first()->temperature ?? 0}}°C"></div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Humidity</p>
            <h4 class="mb-0">{{$dataSensor->first()->humidity ?? 0}}%</h4>
          </div>
        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
              <div class="progress-bar bg-secondary" style="width: {{$dataSensor->first()->humidity ?? 0}}%"></div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">light intensity</p>
            <h4 class="mb-0">{{$dataSensor->first()->light_intensity ?? 0}} Lux</h4>
          </div>
          <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
              <div class="progress-bar bg-warning" style="width: {{$dataSensor->first()->light_intensity ?? 0}} lux"></div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-3 pt-2">
      <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
        <i class="material-icons opacity-10">device_thermostat</i>
      </div>
      <div class="text-end pt-1">
        <p class="text-sm mb-0 text-capitalize">MQ7</p>
        <h4 class="mb-0">{{$dataSensor->first()->MQ7 ?? 0}} CO</h4>
      </div>
      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
           aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
        <div class="progress-bar bg-gradient-success" style="width: {{$dataSensor->first()->MQ7 ?? 0}} CO"></div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <div class="chart">
              <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 ">Grafik Humidity</h6>
          <p class="text-sm "></p>
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1"></i>
            <p class="mb-0 text-sm"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card z-index-2  ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
            <div class="chart">
              <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 "> Grafik light intensity </h6>
          <p class="text-sm "><span class="font-weight-bolder"></span></p>
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1"></i>
            <p class="mb-0 text-sm"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mt-4 mb-3">
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
            <div class="chart">
              <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 ">Grafik Temperature</h6>
          <p class="text-sm "></p>
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1"></i>
            <p class="mb-0 text-sm"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
<script>
  var ctx = document.getElementById("chart-bars").getContext("2d");
new Chart(ctx, {
  type: "line",
  data: {
    labels: ["10%", "20%", "30%", "40%", "50%"],
    datasets: [{
      label: "Humi",
      tension: 0.4,
      borderWidth: 2,
      borderColor: "rgba(54, 162, 235, 0.8)", // Ubah warna menjadi biru
      backgroundColor: "rgba(54, 162, 235, 0.2)", // Ubah warna latar belakang menjadi biru muda
      data: [@foreach($dataSensor as $item) {{$item->humidity . ','}} @endforeach],
      pointRadius: 4,
      pointHoverRadius: 6
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false
      }
    },
    interaction: {
      intersect: false,
      mode: 'index'
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5],
          color: 'rgba(255, 255, 255, .2)'
        },
        ticks: {
          suggestedMin: 0,
          suggestedMax: 40,
          beginAtZero: true,
          padding: 10,
          font: {
            size: 14,
            weight: 300,
            family: "Roboto",
            style: 'normal',
            lineHeight: 2
          },
          color: "#fff"
        }
      },
      x: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5],
          color: 'rgba(255, 255, 255, .2)'
        },
        ticks: {
          display: true,
          color: '#f8f9fa',
          padding: 10,
          font: {
            size: 14,
            weight: 300,
            family: "Roboto",
            style: 'normal',
            lineHeight: 2
          }
        }
      }
    }
  }
});
  var ctx2 = document.getElementById("chart-line").getContext("2d");
  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["0", "10", "20", "30", "40", "50", "60", "70"],
      datasets: [{
        label: "Lux",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [@foreach($dataSensor as $item) {{$item->light_intensity . ','}} @endforeach],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");
  new Chart(ctx3, {
    type: "line",
    data: {
      labels: ["10°", "15°", "20°", "25°", "30°", "35°", "40°", "45°", "50°"],
      datasets: [{
        label: "°C",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [@foreach($dataSensor as $item) {{$item->temperature . ','}} @endforeach],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#f8f9fa',
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
@endpush