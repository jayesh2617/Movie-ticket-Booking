<?php
include('header.php');
include('../../form.php'); // Includes the form validation builder
$frm = new formBuilder;
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Show
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Add Show</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <?php include('../../msgbox.php'); ?>
                <form action="process_addshow.php" method="post" id="form1">

                    <div class="form-group">
                        <label class="control-label">Select Movie</label>
                        <select name="movie" class="form-control">
                            <option value="">Select Movie</option>
                            <?php
                            $mv = mysqli_query($con, "select * from tbl_movie where status='0'");
                            while ($movie = mysqli_fetch_array($mv)) {
                            ?>
                                <option value="<?php echo $movie['movie_id']; ?>"><?php echo $movie['movie_name']; ?></option>
                            <?php } ?>
                        </select>
                        <?php $frm->validate("movie", array("required", "label" => "Movie")); ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Select Screen</label>
                        <select name="screen" id="screen" class="form-control">
                            <option value="">Select Screen</option>
                            <?php
                            $sc = mysqli_query($con, "select * from tbl_screens where t_id='" . $_SESSION['theatre'] . "'");
                            while ($screen = mysqli_fetch_array($sc)) {
                            ?>
                                <option value="<?php echo $screen['screen_id']; ?>"><?php echo $screen['screen_name']; ?></option>
                            <?php } ?>
                        </select>
                        <?php $frm->validate("screen", array("required", "label" => "Screen")); ?>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Select Show Times</label>
                        <select name="stime[]" id="stime" class="form-control" multiple>
                            </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Start Date</label>
                        <input type="date" name="sdate" class="form-control"/>
                        <?php $frm->validate("sdate", array("required", "label" => "Start Date")); ?>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add Show</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php
include('footer.php');
?>
<script type="text/javascript">
    $('#screen').change(function(){
        var screen_id = $(this).val();
        $.ajax({
            url: 'get_showtime.php',
            type: 'POST',
            data: 'screen='+screen_id,
            dataType: 'html'
        })
        .done(function(data){
            $('#stime').html(data); // Populates the show times dropdown
        })
        .fail(function(){
            $('#stime').html('<option>Something went wrong!</option>');
        });
    });
</script>