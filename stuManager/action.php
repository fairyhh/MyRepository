<?php

//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test;","root","root");
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

//2.通过action的值做地应操作

switch($_GET['action']){
    case "add"://增加操作
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $classid = $_POST['classid'];

        $sql = "insert into message values(null,'{$name}','{$sex}','{$age}','{$classid}')";
        $rw = $pdo->exec($sql);
        if($rw > 0){
			echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
            echo "<script>alert('添加成功');window.location='index.php'</script>";
        }else{
			echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
            echo "<script>alert('添加失败');window.history.back();</script>";
        }
        break;

    case "del"; //删除操作
        $id = $_GET['id'];
        $sql = "delete from message where id={$id}";
        $pdo->exec($sql);
        header("Location:index.php");
        break;

    case "edit":

        //1.获取表单信息
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $classid = $_POST['classid'];
        $id = $_POST['id'];

        $sql = "update message set name='{$name}',sex='{$sex}',age={$age},classid={$classid} where id={$id}";
        $rw = $pdo->exec($sql);
        if($rw>0){
						echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";

            echo "<script>alert('修改成功');window.location='index.php'</script>";
        }else{
						echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";

           echo "<script>alert('增加失败');window.history.back();</script>";
        }
        break;
    case "login":
	//链接数据库
   require_once ('conn.php');
	//获取form表单提交的数据
	//用户名
    $name = $_POST['username'];
	//密码
    $password = $_POST['pwd'];
	//根据用户名和密码去user用户表中查询是否输入正确
	$sql = mysqli_query($conn,"select * from user where username = '$name' and password = '$password'");
	//
	$info = mysqli_fetch_array($sql);
	
    if($info == true){
		//输入正确跳转到主页面index.php
      echo "<script>window.location='index.php'</script>";
    }else{
		//设置编码，防止中文乱码
        echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
       echo "<script>alert('用户名或者密码输入错误');window.location='login.php'</script>"; 
    }
    break;
}
?>
