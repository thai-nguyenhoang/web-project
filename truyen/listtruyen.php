<?php
include('connect.php');
$listTruyen = $pdh->query("SELECT * FROM truyen");

foreach($listTruyen as $listTruyen){
    ?>
    <div class="isotope-item gallery-item col-md-3 col-sm-6">
    <div class="gallery-image">
        <img src="./img/anime/<?php echo $listTruyen["hinh"]; ?>" alt="">
        <div class="gallery-image-links">
        </div>
    </div>
    <div class="gallery-item-description">
        <h3><a href="./truyen/detail-truyen?comicID=<?php echo $listTruyen["comicID"]; ?>.php"><?php echo $listTruyen["tentruyen"]; ?></a></h3>
        <p><?php echo $listTruyen["mota"]; ?></p>
    </div>
</div>
<?php
}