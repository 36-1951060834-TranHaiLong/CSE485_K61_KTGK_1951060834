<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hệ thống quản lý của thư viện</title>
</head>
<body>
<?php 
    include("config/config.php");


    if(isset($_POST['themdanhba'])) {
        $madg = $_POST['madg'];
        $hovaten = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep']; 
        $ngaycapthe = $_POST['ngaycapthe'];
        $ngayhethan = $_POST['ngayhethan'];
        $diachi = $_POST['diachi'];

        $sql_insert = "INSERT into db_DOCGIA(madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
            values (' $madg','  $hovaten','$gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');
        
    }
?>

<?php
        include('header.php');
    ?>
    <div class="container">
        <h1 >Quản lý thư viện</h1>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="madg" class="form-label">Mã độc giả</label>
                <input type="text" name="madg" class="form-control" id="madg" >
            </div>
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" >
            </div>
            <div>
                        <span class="me-3">Giới tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bd_sex" id="inlineRadio1" value="Nam">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bd_sex" id="inlineRadio2" value="Nữ">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm sinh</label>
                <input type="text" name="namsinh" class="form-control" id="namsinh" >
            </div>

            <div class="mb-3">
                <label for="nghenghiep" class="form-label">Nghề nghiệp</label>
                <input type="text" name="nghenghiep" class="form-control" id="nghenghiep" >
            </div>
            <div class="mb-3">
                <label for="ngaycapthe" class="form-label">Ngày cấp thẻ</label>
                <input type="text" name="ngaycapthe" class="form-control" id="ngaycapthe" >
            </div>

            <div class="mb-3">
                <label for="ngayhethan" class="form-label">Ngày hết hạn</label>
                <input type="text" name="ngayhethan" class="form-control" id="ngayhethan" >
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" id="diachi" >
            </div>
            
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="themdanhba">Thêm</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>