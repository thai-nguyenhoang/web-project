<div id="topbar" class="col-sm-6 text-right">
    <?php if(isset($email)) { ?>
    <span>Xin chào:<a href="#"> <span><?php echo $email; ?></span></span>
    <span>
        <i class="rt-icon-locked"></i> <a href="logout.php">Đăng xuất</a>
    </span>
    <?php } else{?>   
    <span>
        <i class="rt-icon-user2"></i> <a href="login.php" >Đăng nhập</a>
    </span>
    <span>
        <i class="rt-icon-locked"></i> <a href="register.php">Đăng ký</a>
    </span>
    <?php 
} ?>
</div>