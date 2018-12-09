<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form action="" method="post">
        <h5>Nhap</h5>
        Email:<input type="text" name="email">
        <span><?php echo $errE; ?></span><br><br>
        Url:<input type="text" name="url">
        <span><?php echo $errU; ?></span><br><br>
        Phone:<input type="text" name="phone">
        <span><?php echo $errP; ?></span><br><br>
        <button type="submit" name="submit">Button</button>
        <p><?php echo $ok; ?></p>
        <p><?php echo $error; ?></p>
        
    </form>

    <?php

if(isset($_POST['submit'])){
    if(isset($_POST['email'])&&isset($_POST['url'])&&isset($_POST['phone'])){
        $email = $_POST['email'];
        $url = $_POST['url'];
        $phone = $_POST['phone'];
        if($url == '' || $email == '' || $phone == ''){
            echo "<p style='color:red'>khong duoc de trong thong tin</p>";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red'>email khong dung dinh dang, nhap lai</p>"; 
        }
        else if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)){
            echo "<p style='color:red'>url khong dung dinh dang nhap lai</p>";
        }
        else if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)){
            echo "<p style='color:red'>so dien thoai khong dung dinh dang, nhap lai</p>";
        }
        else 
            echo "<p style='color:red'>Thanh cong</p>";
    }
}


?>
    
</body>
</html>