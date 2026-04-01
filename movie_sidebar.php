<div class="listview_1_of_3 images_1_of_3">
    <h3>Films in Theaters</h3>
    <?php
    $qry7 = mysqli_query($con, "select * from tbl_movie where status='0' order by rand() limit 5");
    while ($m = mysqli_fetch_array($qry7)) {
    ?>
    <div class="content-left">
        <div class="listimg listimg_1_of_2">
             <a href="about.php?id=<?php echo $m['movie_id']; ?>"><img src="<?php echo $m['image']; ?>"></a>
        </div>
        <div class="text list_1_of_2">
            <div class="extra-wrap">
                <span style="text-color:#000" class="data"><strong><a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;"><?php echo $m['movie_name']; ?></a></strong><br>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php } ?>
</div>
<div class="clear"></div>