<?php include('connect.php') ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Title</title>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <section id="topinfo" class="action_section table_section light_section">
        <div class="container" style="padding:0; width:100%">
            <a href="index.php" class="navbar-brand"><img src="img/wallpaper/wallpaper3.jpg" width="100%" height="100%"></a>
        </div>
    </section>

    <section id="breadcrumbs" class="light_section with_bottom_border">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li class="active"><h1>Liên hệ</h1></li>
                    </ol>
                </div>
                
            </div>
        </div>
    </section>

<section id="content" class="light_section">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header">Hãy liên hệ với chúng tôi</h2>
            </div>
        </div>

        <div class="row">
            

            <div class="widget col-sm-6 to_animate">
                <form class="contact-form" method="post" action="/">
                    <p class="contact-form-name">
                        <label for="name">Tên <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Tên">
                    </p>
                    <p class="contact-form-email">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                    </p>
                    <p class="contact-form-message">
                        <label for="message">Nội dung </label>
                        <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Nội dung"></textarea>
                    </p>
                    <p class="contact-form-submit vertical-margin-40">
                        <!-- <input type="submit" value="Send" id="contact_form_submit" name="contact_submit" class="theme_button"> -->
                        <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button"><i class="rt-icon-sent"></i> Gửi !</button>
                    </p>
                </form>
            </div>
                    

            <div class="widget widget_contact col-sm-6 to_animate">
                <h3>Contact Info</h3>
                <p>Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. In ac felis quis tortor malesuada pretium. In hac habitasse platea dictumst curabitur nisi hac habitasse platea dictumst maecenas nec odio et ante tincidunt tempus morbi ac felis.
                <br><br>
                    <i class="rt-icon-device-phone"></i><strong>Phone:</strong> +12 345 678 9123
                </p>
                <p>
                    <i class="rt-icon-pencil"></i><strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a>
                </p>
                <p>
                    <i class="rt-icon-globe-outline"></i><strong>Website: </strong><a href="./">www.hoangthai123.ga</a>
                </p>
                <p>
                    <i class="rt-icon-location-arrow-outline"></i><strong>Address:</strong> 180 Cao Lỗ, Phương 4, Quận 8
                </p>

            </div>
        </div>
    </div>
</section>



    <footer id="footer" class="darkgrey_section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-8 to_animate">
                    <div class="widget widget_text">
                        <h3 class="widget-title">Meta Info</h3>
                        <div class="textwidget">
                                <p>
                                    <i class="fa fa-envelope-o"></i> <a href="mailto:info@company.net">info@company.net</a>
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i> +1 (900) 12345-123
                                </p>
                        </div>
                    </div>
                </div>
                    
                    
                <div class="col-md-6 col-sm-8 to_animate">
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Thể loại</h3>
                        <div class="tagcloud">
                            <a href="#" title="">Hành động</a>
                            <a href="#" title="">Phiêu lưu</a>
                            <a href="#" title="">Chuyển sinh</a>
                            <a href="#" title="">Kinh dị</a>
                            <a href="#" title="">Đời thường</a>
                        </div>
                    </div>
                </div>
                    
                    
                
            
            </div>
        </div>
    </footer>

 

</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


        <!-- libraries -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.appear.js"></script>

        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>