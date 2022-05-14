<html>
<head>
 <meta charset="UTF-8">
    <title>注册成功</title>
   
</head>
<body>
 
<div class="login">
    <p><strong>注册成功</strong></p>
    <p>恭喜您！您已注册成功。</p>
    <p>请单击<a href="login.php">这里</a>登录</p>
    <?php
    
  //1.连接数据库
require_once ('conn.php');

    $user_name = $_POST['user_name'];

    $sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$user_name'");
    $info = mysqli_fetch_array($sql);
    if($info == true)
    {
       echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
       echo "<script>alert('用户名已经存在');window.location='register.php'</script>"; 
 
    }
    else
    {
 
        $user_name = $_POST['user_name'];
        $password = $_POST['password1'];
        $true_name = $_POST['true_name'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $qq = $_POST['qq'];
        $address = $_POST['address'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $authority = $_POST['authority'];
       mysqli_query($conn,"INSERT INTO user (username,password,question,answer,truename,sex,address,tel,qq,email,authority)
          VALUES('$user_name','$password','$question','$answer','$true_name','$sex','$address','$tel','$qq','$email','$authority')");
    }
    ?>
</div>
 
</body>
</html>
 
 