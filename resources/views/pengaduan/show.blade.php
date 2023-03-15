<!DOCTYPE html>
<html lang="en">

<head>
 @include('halamandepan.head')
</head>

<!-- content -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Detail Pengaduan Masyarakat</title>
</head>
<body>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card mt-3">
            <div class="card-header text-center">
                     Detail Data Pengaduan
            </div>
                <div class="card-body">
                   <br/>
                        <form method="post" action="/pengaduan">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="tgl_pengaduan" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->tgl_pengaduan }} 
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="masyarakat_nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                 <b>:</b> {{ $pengaduan->masyarakat_nik }}  
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="isi_laporan" class="col-sm-2 col-form-label">Isi Laporan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->isi_laporan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                  <b>:</b> 
                                  {{ $pengaduan->foto }}
                                      <img src="{{ url('/foto/'.$pengaduan->foto) }}" style="width:80px;"  alt="">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->status }}
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-2 mb-2 mt-2">
                                  <a href="/pengaduan" class="btn btn-sm btn-success">Kembali</a>
                                </div>
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- endcontent -->
    
      <!-- <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Sales overview</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
      </div> -->
       
      
    
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
   
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
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
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
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
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>