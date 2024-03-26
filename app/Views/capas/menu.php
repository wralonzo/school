<div>
  <!-- Card stats -->
  <div class="flex flex-wrap">
    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <a href="<?= base_url() ?>user/list">
          <div class="flex-auto p-4">
            <div class="flex flex-wrap">
              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                  Usuarios
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                  350,897
                </span>
              </div>
              <div class="relative w-auto pl-4 flex-initial">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <p class="text-sm text-blueGray-400 mt-4">
              <span class="text-emerald-500 mr-2">
                <i class="fas fa-user-up"></i> 3.48%
              </span>
              <span class="whitespace-nowrap">
                Since last month
              </span>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <a href="<?= base_url() ?>estudiante/display">
          <div class="flex-auto p-4">
            <div class="flex flex-wrap">
              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                  Estudiantes
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                  2,356
                </span>
              </div>
              <div class="relative w-auto pl-4 flex-initial">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                  <i class="fas fa-user"></i>
                </div>
              </div>
            </div>
            <p class="text-sm text-blueGray-400 mt-4">
              <span class="text-red-500 mr-2">
                <i class="fas fa-arrow-down"></i> 3.48%
              </span>
              <span class="whitespace-nowrap"> Since last week </span>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <a href="<?= base_url() ?>paciente/display">
          <div class="flex-auto p-4">
            <div class="flex flex-wrap">
              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                  Pacientes
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                  924
                </span>
              </div>
              <div class="relative w-auto pl-4 flex-initial">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <p class="text-sm text-blueGray-400 mt-4">
              <span class="text-orange-500 mr-2">
                <i class="fas fa-arrow-down"></i> 1.10%
              </span>
              <span class="whitespace-nowrap"> Since yesterday </span>
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <a href="<?= base_url() ?>cita/display">
          <div class="flex-auto p-4">
            <div class="flex flex-wrap">
              <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                  Citas
                </h5>
                <span class="font-semibold text-xl text-blueGray-700">
                  49,65%
                </span>
              </div>
              <div class="relative w-auto pl-4 flex-initial">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                  <i class="fas fa-clock mr-2 text-sm text-blueGray-300"></i>
                </div>
              </div>
            </div>
            <p class="text-sm text-blueGray-400 mt-4">
              <span class="text-emerald-500 mr-2">
                <i class="fas fa-arrow-up"></i> 12%
              </span>
              <span class="whitespace-nowrap">
                Since last month
              </span>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<center>
  <div class="px-4 md:px-12 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700">
          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                  Overview
                </h6>
                <h2 class="text-white text-xl font-semibold">
                  Sales value
                </h2>
              </div>
            </div>
          </div>
          <div class="p-4 flex-auto">
            <!-- Chart -->
            <div class="relative h-350-px">
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="block py-4">
      <div class="container mx-auto px-4">
        <hr class="mb-4 border-b-1 border-blueGray-200" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-4/12 px-4">
            <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
              Copyright © <span id="get-current-year"></span>
              <a href="https://www.creative-tim.com?ref=njs-dashboard" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                Creative Tim
              </a>
            </div>
          </div>
          <div class="w-full md:w-8/12 px-4">
            <ul class="flex flex-wrap list-none md:justify-end justify-center">
              <li>
                <a href="https://www.creative-tim.com?ref=njs-dashboard" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/presentation?ref=njs-dashboard" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com?ref=njs-dashboard" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-dashboard" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                  MIT License
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
</center>
</div>

<script type="text/javascript">
  /* Make dynamic date appear */
  (function() {
    if (document.getElementById("get-current-year")) {
      document.getElementById("get-current-year").innerHTML =
        new Date().getFullYear();
    }
  })();
  /* Sidebar - Side navigation menu on mobile/responsive mode */
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
  }
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }

  (function() {
    /* Chart initialisations */
    /* Line Chart */
    var config = {
      type: "line",
      data: {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July"
        ],
        datasets: [{
            label: new Date().getFullYear(),
            backgroundColor: "#4c51bf",
            borderColor: "#4c51bf",
            data: [65, 78, 66, 44, 56, 67, 75],
            fill: false
          },
          {
            label: new Date().getFullYear() - 1,
            fill: false,
            backgroundColor: "#fff",
            borderColor: "#fff",
            data: [40, 68, 86, 74, 56, 60, 87]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: false,
          text: "Sales Charts",
          fontColor: "white"
        },
        legend: {
          labels: {
            fontColor: "white"
          },
          align: "end",
          position: "bottom"
        },
        tooltips: {
          mode: "index",
          intersect: false
        },
        hover: {
          mode: "nearest",
          intersect: true
        },
        scales: {
          xAxes: [{
            ticks: {
              fontColor: "rgba(255,255,255,.7)"
            },
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Month",
              fontColor: "white"
            },
            gridLines: {
              display: false,
              borderDash: [2],
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.3)",
              zeroLineColor: "rgba(0, 0, 0, 0)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2]
            }
          }],
          yAxes: [{
            ticks: {
              fontColor: "rgba(255,255,255,.7)"
            },
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Value",
              fontColor: "white"
            },
            gridLines: {
              borderDash: [3],
              borderDashOffset: [3],
              drawBorder: false,
              color: "rgba(255, 255, 255, 0.15)",
              zeroLineColor: "rgba(33, 37, 41, 0)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2]
            }
          }]
        }
      }
    };
    var ctx = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(ctx, config);

    /* Bar Chart */
    config = {
      type: "bar",
      data: {
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July"
        ],
        datasets: [{
            label: new Date().getFullYear(),
            backgroundColor: "#ed64a6",
            borderColor: "#ed64a6",
            data: [30, 78, 56, 34, 100, 45, 13],
            fill: false,
            barThickness: 8
          },
          {
            label: new Date().getFullYear() - 1,
            fill: false,
            backgroundColor: "#4c51bf",
            borderColor: "#4c51bf",
            data: [27, 68, 86, 74, 10, 4, 87],
            barThickness: 8
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: false,
          text: "Orders Chart"
        },
        tooltips: {
          mode: "index",
          intersect: false
        },
        hover: {
          mode: "nearest",
          intersect: true
        },
        legend: {
          labels: {
            fontColor: "rgba(0,0,0,.4)"
          },
          align: "end",
          position: "bottom"
        },
        scales: {
          xAxes: [{
            display: false,
            scaleLabel: {
              display: true,
              labelString: "Month"
            },
            gridLines: {
              borderDash: [2],
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.3)",
              zeroLineColor: "rgba(33, 37, 41, 0.3)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2]
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: false,
              labelString: "Value"
            },
            gridLines: {
              borderDash: [2],
              drawBorder: false,
              borderDashOffset: [2],
              color: "rgba(33, 37, 41, 0.2)",
              zeroLineColor: "rgba(33, 37, 41, 0.15)",
              zeroLineBorderDash: [2],
              zeroLineBorderDashOffset: [2]
            }
          }]
        }
      }
    };
    ctx = document.getElementById("bar-chart").getContext("2d");
    window.myBar = new Chart(ctx, config);
  })();
</script>