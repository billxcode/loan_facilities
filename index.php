<!Doctype html>


<html>
<head>
    <title>KEMAHASISWAAN</title>
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="js/jquery-ui.css"/>
<script src="css/bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/style.js"></script>

</head>
<body class="front-body">
    <div class="form_login">
        <div class="menu-head front_form">Login Form</div>
    <form method="POST" action="control/login.php">
   <div> <input type="text" class="text" name="username" placeholder="username"/></div>
    <div><input type="password" class="text" name="password" placeholder="password"/></div>
        <div><select name="level">
            <option value="#">--pilih--</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            </select></div>
    <div><button type="submit" class="btn">Login</button><button type="reset" class="btn">Reset</button></div>
    </form>
    </div>
</body>
</html>