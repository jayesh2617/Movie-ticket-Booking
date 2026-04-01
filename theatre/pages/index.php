<?php
// Includes the theatre panel header and session check
include('header.php');
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Theatre Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <h2>Welcome to the Theatre Management Panel!</h2>
                <p>Use the navigation menu on the left to manage your shows and view bookings.</p>
                <ul>
                    <li><strong>Add Show:</strong> Schedule new movies for your screens.</li>
                    <li><strong>View Shows:</strong> See all scheduled shows and manage their running status.</li>
                    <li><strong>Today's Shows:</strong> Get a quick look at all shows running today.</li>
                </ul>
            </div>
        </div>
        </section>
    </div>
<?php
// Includes the theatre panel footer
include('footer.php');
?>