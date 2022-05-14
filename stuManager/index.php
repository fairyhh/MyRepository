<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
    <script>
        function doDel(id) {
            if (confirm("确定要删除么？")) {
                window.location = 'action.php?action=del&id=' + id;
            }
        }
    </script>
</head>
<body>
<center>
    <?php
	//菜单，控制操作的
    include_once "menu.php";


//如果没有提交数据查询所有，获取查询框里提交的数据
//没有点击查询中，默认为空
$name = "";
//查询条件，
$stuName = "1=1";
//如果查询框有数据
if(!empty($_POST["stuName"]))
{
	//获取查询框中填写的数据
  $name = $_POST["stuName"];
  //拼接条件 根据填写的用户名模糊查询
  $stuName = " name like '%{$name}%'";
}
$sql = "select * from message where ".$stuName;

    ?>
    <h3>浏览学生信息</h3>
	<form action="index.php" method="POST" style="width:400px;height:200px" >
        <input type="text" name="stuName" placeholder="请输入用户名" style="width:300px;height:20px">
        <input type="submit" value="查询">
    </form>
    <table width="600" border="1">
        <tr>
           
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>班级</th>
            <th>操作</th>
        </tr>
        <?php
        //1.连接数据库
        try {
			//PDO数据库链接法，
            $pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "root");
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //2.解决中文乱码问题
        $pdo->query("SET NAMES 'UTF8'");
        //3.执行sql语句，并实现解析和遍历
        foreach ($pdo->query($sql) as $row) {
            echo "<tr>";
       
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['sex']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['classid']}</td>";
            echo "<td>
                    <a href='javascript:doDel({$row['id']})'>删除</a>
                    <a href='edit.php?id=({$row['id']})'>修改</a>
                  </td>";
            echo "</tr>";
        }

        ?>

    </table>
</center>

</body>
</html>