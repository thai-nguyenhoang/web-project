<?php
if (isset($_COOKIE['admin'])) {
    if ($_COOKIE['admin'] != "") {
        header('location: adindex.php');
    }
}
?>
<html>
    <head>
        <title>Đăng nhập Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/style_slide.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../css/uniform.css" />
        <link rel="stylesheet" href="../css/select2.css" />
        <link rel="stylesheet" href="../css/matrix-style.css" />
        <link rel="stylesheet" href="../css/matrix-media.css" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="../css/stylepage.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="container">
        <h1>&nbsp;</h1>
        <h1>&nbsp;</h1>
        <div class="widget-box">
            <div class="widget-title"> 
                <span class="icon">
                    <i class="icon-key">
                    </i> Đăng nhập trang quản trị hệ thống 
                </span> 
            </div>
            <div class="widget-content nopadding ">
                <form method="post" action="spLogin.php" class="form-horizontal container-fluid">
                    <h5>&nbsp;</h5>
                    <div class="control-group">
                        <label class="control-label">Tài khoản: </label>
                        <div class="controls">
                            <input type="text" name="username" required="true"> *
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mật khẩu: </label>
                        <div class="controls">
                            <input type="password" name="password" required="true"> *
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="login" class="btn btn-default">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <a href="https://m.me/250313555528730" >Quên mật khẩu?</a>
                        </div>
                    </div>
                    <h5>&nbsp;</h5>
                </form>
            </div>
        </div>
        <!--end-Footer-part-->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.ui.custom.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.uniform.js"></script>
        <script src="../js/select2.min.js"></script>
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/matrix.js"></script>
        <script src="../js/matrix.tables.js"></script>
    </body>
</html>

