<?php
// Includes the header, sidebar, and session check
include('header.php');
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Admin Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-body">
                <h2>Welcome to the Admin Dashboard!</h2>
                <p>Use the navigation menu on the left to manage the website.</p>
                <ul>
                    <li><strong>Add Theatre:</strong> Manage cinema halls.</li>
                    <li><strong>Movie News:</strong> Add details about upcoming movies.</li>
                </ul>
            </div>
        </div>
        </section>
    </div>
<?php
// Includes the footer and closing tags
include('footer.php');
?>