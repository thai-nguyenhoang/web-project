<?php include('connect.php');
session_start();
if(isset($_SESSION["email"]))
        $email = $_SESSION["email"];
    include 'tren.php';
?>

<!-- Danh sách truyện -->

<section class="light_section gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section_header text-center"></h2>

                    <div id="isotope_container" class="isotope row">
                        <!-- List truyện -->
                        <?php
                            include './truyen/listtruyen.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<?php include 'duoi.php'; ?>