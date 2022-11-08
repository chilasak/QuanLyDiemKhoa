<?php 

    include_once('function.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $masv = $_POST['masv'];
        $ten = $_POST['ten'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];
        $diachi = $_POST['diachi'];
        $lop = $_POST['lop'];
        
        $sql = $insertdata->insert($masv,  $ten,$ngaysinh,  $gioitinh,  $diachi, $lop);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Thêm sinh viên</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="masv" class="form-label">Mã Sinh viên</label>
                <input type="text" class="form-control" name="masv" required>
            </div>
            <div class="mb-3">
                <label for="ten" class="form-label">Tên sinh viên</label>
                <input type="text" class="form-control" name="ten" required>
            </div>
            <div class="mb-3">
                <label for="ten" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" name="ngaysinh" required>
            </div>
            <div class="mb-3">
                <label for="gioitin">Gioi tính</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gioitinh">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="diachi">Địa chỉ</label>
                <input type="text" class="form-control" name="diachi" required>
            </div>
            <div class="mb-3">
                <label for="address">Lop</label>
                <input type="text" class="form-control" name="lop" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">thêm</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>