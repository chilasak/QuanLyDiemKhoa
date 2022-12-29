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
    case 'export_thongke':
		$sv = Sinhvien::List();
		$dem=0;
		foreach ($sv as $value) {
			$ma_sv_l[] = $value['ma_sv'];
			$dem = $dem+1;
		}
		for($i = 0; $i < $dem; $i++)
		{  	
			//echo "Mã sinh viên [$i] là: ".$ma_sv_l[$i]."<br/>";
			$sv_tc_sv = TongDiemChitiet::TDiem($ma_sv_l[$i]);

			$TongSTC = 0;
			$TongHDS = 0;
			foreach ($sv_tc_sv as $value) {
				$diemHP = round(($value['diem_giua_ky']*0.4)+($value['diem_thi_hp']*0.6),1);
				$diemchu = TongDiemChitiet::DC($diemHP);
				$diemheso = TongDiemChitiet::HDS($diemHP);

				$TinhDHS = $value['sotinchi']*$diemheso;

				$TongSTC += $value['sotinchi'];
				$TongHDS += $TinhDHS;
			}
			$tbtk = round($TongHDS/$TongSTC,2);
            $xltk = TongDiemChitiet::XL_TK($TongHDS/$TongSTC);

			$xet=TongDiemChitiet::HB($TongHDS/$TongSTC);;

            // echo "Tổng_STC: ".$TongSTC."<br/>";
            // echo "TB_TK: ".$tbtk."<br/>";
            // echo "XL_TK: ".$xltk."<br/>";

            $TSTC = $TongSTC;
            $TB_Toankhoa = $tbtk;
            $XL_Toankhoa = $xltk;
			$X_hocbong = $xet;

            array_push($sv[$i],$TSTC,$TB_Toankhoa,$XL_Toankhoa,$X_hocbong);
            $sv[$i] += ['STC' => $TSTC,'TB_Toankhoa' => $TB_Toankhoa,'XL_Toankhoa' => $XL_Toankhoa,'XetHB' => $X_hocbong];
		}

        $filename = 'thongke.csv';
        $file = fopen($filename,"w");
        
        foreach ( $sv as $value){
            $lineData = array($value['ma_sv'], $value['hoten_sv'], date('d-m-Y',strtotime($value['ngay_sinh'])),$value['gioi_tinh'], $value['dan_toc'], $value['noi_sinh'], $value['ten_lop'], $value['STC'],$value['TB_Toankhoa'],$value['XL_Toankhoa']);
            fputcsv($file, $lineData);
        }
        fclose($file);
        // download
       // header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=".$filename);
        header("Content-Type: text/csv;charset=utf-8 "); 

        readfile($filename);

        // deleting file
        unlink($filename);
        exit();
		break;
     case 'exportsv':
			$list_sv = Sinhvien::List();
            $filename = 'sinhvien.csv';
            $file = fopen($filename,"w");
            
            foreach ($list_sv as $value){
                $lineData = array($value['ma_sv'], $value['hoten_sv'], date('d-m-Y',strtotime($value['ngay_sinh'])),$value['gioi_tinh'], $value['dan_toc'], $value['noi_sinh'], $value['ten_lop']);
                fputcsv($file, $lineData);
            }
            fclose($file);
            // download
           // header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=".$filename);
            header("Content-Type: text/csv;charset=utf-8 "); 

            readfile($filename);

            // deleting file
            unlink($filename);
            exit();
			//require_once 'View/masster/t.php';
			break;
	default:
		echo "Trang không tồn tại";
		break;
}


 ?>