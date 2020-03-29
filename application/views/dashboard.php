<?php
$url = 'https://api.kawalcorona.com/indonesia/';
$data = file_get_contents($url); // put the contents of the file into a variable
$opendata = json_decode($data);
foreach ($opendata as $key => $value) {

}
?>
<?php
// $url = 'https://api.kawalcorona.com/';
// $data = file_get_contents($url); // put the contents of the file into a variable
// $dataglobal = json_decode($data);
// foreach ($dataglobal['attributes'] as $row) {
// }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="fiki cahyanto" />
        <meta name="keyword" content="Covid-19, Corona Virus">
        <title>COVID - 19</title>
        <link rel="stylesheet" href="assets/js/scripts.js"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">COVID - 19</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Kawula Muda</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url().'dashboard'?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        Kawula Muda Kedungtukang
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Persebaran COVID - 19</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DATA COVID - 19 INDONESIA</li>
                        </ol>
                        <?php 
                        foreach ($opendata as $key => $value) { }
                        ?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><?php echo $value->positif ?><br>KASUS TERKONFIRMASI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?php echo $value->meninggal ?><br>MENINGGAL</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"> <?php echo $value->sembuh ?><br>SEMBUH</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">DIRAWAT</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Presentase</div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="70"></canvas></div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DATA COVID - 19 GLOBAL</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php 
                                        // foreach ($dataglobal['attributes'] as $row) {
                                        // }
                                    ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>meninggal</th>
                                                <th>Aktif</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                                <th>Aktif</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/apexcharts.js"></script>
        <script src="assets/demo/apexcharts.min.js"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <script>
        $.ajax({
            url         : "https://api.kawalcorona.com/",
            type        : "GET",
            dataType    : "json",
            data        : {get_param : 'value'},
            success     : function(data){
                //menghitung jumlah data
                jmlData = data.length;
                
                //variabel untuk menampung tabel yang akan digenerasikan
                buatTabel = "";
                
                //perulangan untuk menayangkan data dalam tabel
                for(a = 0; a < jmlData; a++){

                    //mencetak baris baru
                    buatTabel += "<tr>" 
                    
                                //membuat penomoran
                                + "<td>" + (a+1) + "</td>"
                                //mencetak nama instansi
                                + "<td>" + data[a]["Country_Region"] + "</td>"
                                //mencetak jumlah laporan "belum"
                                + "<td>" + data[a]["Confirmed"] + "</td>"
                                //mencetak jumlah laporan "proses"
                                + "<td>" + data[a]["Recovered"] + "</td>"
                                //mencetak jumlah laporan "selesai"
                                + "<td>" + data[a]["Deaths"] + "</td>"
                                + "<td>" + data[a]["Active"] + "</td>"
                    //tutup baris baru
                        + "<tr/>";
                }
                //menayangkan jumlah data
                // document.getElementsByTagName('textarea')[0].value = jmlData;
                //mencetak tabel
                document.getElementsByTagName("tbody")[0].innerHTML += buatTabel;
            }
        });
        </script>
    </body>
</html>
