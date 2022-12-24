<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            foreach ($lopsv as $value) {
                echo "['".$value['ma_lop']. "',".$value['SLSV']."],";
                                           
            }                   
            ?>
         
        ]);

        var options = {
          title: 'Số lượng sinh viên trong lớp','width':577,'height':300,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart1.draw(data, options);
      }
    </script>
  </head>
<div id="content-wrapper">

      <div class="container-fluid">

      <main>
                 <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                    <div class="inner">
                                    <?php 
                                    foreach ($slsv as $value) {
                                            ?>
                                        <h3><?php echo $value['SLSV']; ?></h3>
                                        <p>Sinh viên toàn khoa</p>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?controllers=quanly&action=sinhvien">View Details</a>
                                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <div class="inner">
                                        <?php 
                                    foreach ($sllop as $value) {
                                            ?>
                                        <h3><?php echo $value['SLLOP']; ?></h3>
                                        <p>Lớp</p>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?controllers=quanly&action=List_lop">View Details</a>
                                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <div class="inner">
                                        <?php 
                                    foreach ($slmon as $value) {
                                            ?>
                                        <h3><?php echo $value['SLMON']; ?></h3>
                                            <p>Môn học</p>
                                            <?php } ?>
                                            </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?controllers=quanly&action=list_hocphan">View Details</a>
                                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <div class="inner">
                                        <h3>13</h3>
                                        <p>Giáo viên</p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                     <i class="fas fa-fw fa-folder"></i>
                                       <span>Số lượng sinh viên</span> 
                                    </div>
                                    <div class="card-body">
                                        <div id="piechart_3d" width="721" height="287" style="display: block; height: 300px; width: 577px;"></div>
                                        <!-- <canvas id="piechart_3d" width="721" height="287" style="display: block; height: 230px; width: 577px;" class="chartjs-render-monitor"> -->
                                    </canvas>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                    <i class="fas fa-fw fa-folder"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body">
                                             <div id="piechart_3d2" width="721" height="287" style="display: block; height: 300px; width: 577px;"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Tất cả sinh viên</div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã sinh viên</th>
                                    <th>Họ và tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>Dân tộc</th>
                                    <th>Nơi sinh</th>
                                    <th>Lớp</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    // echo "<pre>";
                                    // print_r($list_sv);
                                    $STT = 0;
                                    if ($list_sv!=0) {
                                    foreach ($list_sv as $value) {
                                    $STT++;
                                ?>
                                <tr>
                                    <td><?php echo $STT; ?></td>
                                    <td><?php echo $value['ma_sv']; ?></td>
                                    <td><?php echo $value['hoten_sv']; ?></td>
                                    <td><?php echo date('d-m-Y',strtotime($value['ngay_sinh'])); ?></td>
                                    <td><?php echo $value['gioi_tinh']; ?></td>
                                    <td><?php echo $value['dan_toc']; ?></td>
                                    <td><?php echo $value['noi_sinh']; ?></td>
                                    <td><?php echo $value['ten_lop']; ?></td>
                                    <td>
                                    <a href="index.php?controllers=quanly&action=Edit&maSV=<?php echo $value['ma_sv']; ?>" title="Sửa"><i class="fas fa-edit"></i> </a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?controllers=quanly&action=Delete&maSV=<?php echo $value['ma_sv']; ?>" title="Xóa"><i class="fas fa-trash-alt"> </i></a>
                                    <a href="index.php?controllers=diem&action=List_Diem&maSV=<?php echo $value['ma_sv']; ?>" title="chi tiết"><i class="fas fa-eye"> </i></a>
                                    </td>
                                </tr>
                                <?php 
                                    }}
                                ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Cập nhật ngày hôm qua lúc 11:59</div>
                        </div>
                      
                    </div>
                </main>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <!-- <?php include 'footer.php'; ?> -->

    </div>