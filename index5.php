<html>
<head>

</head>
<?php
echo "<body bgcolor='#CAD8E6'>";

?>
<center><h1>註冊</h1></center>
<form action="signinfo.php" method="post">
                    <ul>
                        <li>帳號:<input type="text" name="uname" required><!--required設定此項為必填-->
                        <li>密碼:<input type="text" name="pwd" required>
                        <li>e-mail:<input type="email" name="uemail" required>
                        <li>tel:<input type="tel" name="utel" placeholder="02-28115522" pattern="[0-9]{2}-[0-9]{8}" required>
                        <li><input type="submit">
                    </ul>
                </form>
</body>
</html>