<?php 
session_start();
require_once 'Model/lop.php';
require_once 'Model/sinhvien.php';
require_once 'Model/Diemchitiep.php';
require_once 'Model/diemhocpham.php';
require_once 'Model/monhocphan.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else
{
	$action = NULL;
}
switch ($action) {
    case 'import_diem':
      
        if (isset($_POST['import'])){
           
        // Allowed mime types
             $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
             // Validate whether selected file is a CSV file
            if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
                
                // If the file is uploaded
                if(is_uploaded_file($_FILES['file']['tmp_name'])){
                    
                    // Open uploaded CSV file with read-only mode
                    $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                     // Parse data from CSV file line by line
                    while(($line = fgetcsv($csvFile)) !== FALSE){
                        // Get row data
                        $masv   = $line[0];
                        $mamon  = $line[1];
                        $diem_qtr  = $line[2];
                        $diem_thk  = $line[3];
                    

                        if(DiemMHP::GetID($masv)){
                            if(DiemMHP::GetIDMon($masv,$mamon)){
                                
                                DiemMHP::Edit($masv,$mamon,$diem_qtr,$diem_thk);
                                // echo "thêm điểm thành công";
                                $thanhcong = "Thêm điểm thành công";
                            }
                            else{
                                DiemMHP::ADD($masv,$mamon,$diem_qtr,$diem_thk);
                                // echo "Sửa điểm thành công";
                                $thanhcong = "Thêm điểm thành công";
                            }
                                

                        }
                        else{
                            // echo "Sửa điểm thất bại";
                        }
                           
                    }
                        
                    fclose($csvFile);
                }
            }

            
            }
            echo "<script>alert('Nhập file thành công!');</script>";
           // echo "<script>window.location.href='View/Diem/xl_diem.php'</script>";
            require_once 'View/Diem/xl_diem.php';

            break;
       
		
    default:
		echo "Trang không tồn tại";
		break;

}
?>