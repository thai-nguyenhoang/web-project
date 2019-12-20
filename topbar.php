<div id="topbar" class="col-sm-6 text-right">
    <?php if(isset($email)) { 
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown open">
                <a style="padding:10px;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img style="width:30px; height:30px; border-radius:50%;" src="/img/icon.png"><?php echo $email; ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="rt-icon-user-outline" style="font-size: 20px;"></i>Quản lý tài khoản</a></li>
                    <li><a href="quanly.php"><i class="rt-icon-book2" style="font-size: 20px;"></i>Quản lý truyện</a></li>
                    <div class="divider"></div>
                    <li><a href="logout.php"><i class="rt-icon-locked" style="font-size: 20px;"></i>Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
    <?php 
        }else{
            ?>   
    <span>
        <i class="rt-icon-user2"></i> <a href="login.php" >Đăng nhập</a>
    </span>
    <span>
        <i class="rt-icon-locked"></i> <a href="register.php">Đăng ký</a>
    </span>
    <?php 
} ?>
</div>