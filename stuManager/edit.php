<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>

</head>
<body>
<center>
    <?php
    include_once "menu.php";
    //1.连接数据库
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "root");
    } catch (PDOException $e) {
        die("数据库连接失败" . $e->getMessage());
    }
    //2.防止中文乱码
    $pdo->query("SET NAMES 'UTF8'");
    //3.拼接sql语句，取出信息
    $sql = "SELECT * FROM message WHERE id =" . $_GET['id'];
    $stmt = $pdo->query($sql);//返回预处理对象
    if ($stmt->rowCount() > 0) {
        $stu = $stmt->fetch(PDO::FETCH_ASSOC);//按照关联数组进行解析
    } else {
        die("没有要修改的数据！");
    }
    ?>
    <form method="post" action="action.php?action=edit">

        <input type="hidden" name="id" id="id" value="<?php echo $stu['id']; ?>"/>
        <table>
            <tr>
                <td>姓名</td>
                <td><input id="name" name="name" type="text" value="<?php echo $stu['name'] ?>"/></td>

            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="男" <?php echo ($stu['sex'] == "男") ? "checked" : "" ?>/> 男
                    <input type="radio" name="sex" value="女" <?php echo ($stu['sex'] == "女") ? "checked" : "" ?>/> 女
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age" id="age" value="<?php echo $stu['age'] ?>"/></td>
            </tr>
            <tr>
                <td>班级</td>
                <td><input id="classid" name="classid" type="text" value="<?php echo $stu['classid'] ?>"/></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" value="修改"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>

    </form>


</center>
</body>
</html>