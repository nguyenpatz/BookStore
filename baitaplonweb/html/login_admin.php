<?php 
include 'connectDB.php';
?>

<?php 
    $sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    if(isset($_POST['submit'])) {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];

        foreach ($result as $value) {


            if($taikhoan == $value['taikhoan'] && $matkhau == $value['matkhau']) {
                header("location: http://localhost/baitaplonweb/html/admin.php");
            }
        }    
    }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login_admin.css">
</head>
<body>
    <div class="container">
        <div class="row row1">
            <div class="col col-left">
                <img class="col-left_img" src="../wallpaper/trees-and-flowers-bi.jpg" alt="">
            </div>
            <div class="col col-right">
                
                <form action="" method="POST" class="form">
                    <div class="form_containter">
                        <input type="text" name="taikhoan" placeholder="Tài khoản">
                        <input type="password" name="matkhau" placeholder="Mật khẩu">
                        <button type='submit' name='submit'>Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>