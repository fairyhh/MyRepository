<html>
<head>
 <meta charset="UTF-8">
    <title>用户注册</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php
    ?>
    <form name="form1" method="post" action="regok.php" >
        <div class="register">
            <table class="register_tb">
                <caption>请填写用户信息</caption>
                <tr>
                    <td class="tb_alignr">用户名：</td>
                    <td class="tb_alignl"><input type="text" name="user_name" id="user_name">*</td>
                </tr>
                <tr>
                    <td class="tb_alignr">密&nbsp;&nbsp;码：</td>
                    <td class="tb_alignl"><input type="text" name="password" id="password">*</td>
                </tr>
                <tr>
                    <td class="tb_alignr">确认密码：</td>
                    <td class="tb_alignl"><input type="text" name="password1" id="password1">*</td>
                </tr>
                <tr>
                    <td class="tb_alignr">真实姓名：</td>
                    <td class="tb_alignl"><input type="text" name="true_name" id="true_name"></td>
                </tr>
                <tr>
                    <td class="tb_alignr">性别：</td>
                    <td class="tb_alignl"><input type="radio" name="sex" id="sex_m" value="男">
                        <label for="sex_m">男</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sex" id="sex_w" value="女" checked="checked">
                        <label for="sex_w">女</label>
                    </td>
                </tr>
                <tr>
                    <td class="tb_alignr">E-mail：</td>
                    <td class="tb_alignl"><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td class="tb_alignr">电话：</td>
                    <td class="tb_alignl"><input type="text" name="tel" id="tel"></td>
                </tr>
                <tr>
                    <td class="tb_alignr">QQ：</td>
                    <td class="tb_alignl"><input type="text" name="qq" id="qq"></td>
                </tr>
                <tr>
                    <td class="tb_alignr">地址：</td>
                    <td class="tb_alignl"><input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td class="tb_alignr">密码提示问题：</td>
                    <td class="tb_alignl">
                        <select name="question" id="question">
                            <option value="0">你的小学名字叫什么？</option>
                            <option value="1">你的中学名字叫什么？</option>
                            <option value="2">你的大学名字叫什么？</option>
                            <option value="3">你的母亲名字叫什么？</option>
                            <option value="4">你的父亲名字叫什么？</option>
                            <option value="5">你的配偶名字叫什么？</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tb_alignr">密码提示答案：</td>
                    <td class="tb_alignl"><input type="text" name="answer" id="answer"></td>
                </tr>
                <tr>
                    <td class="tb_alignr"><input type="hidden" name="authority" id="authority" value="0"></td>
                    <td class="tb_alignl"><input type="submit" name="button1" id="button1" value="注 册">
                        <input type="reset" name="button2" id="button2" value="重 写">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>