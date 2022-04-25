<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 sticky-top">
    <div class="container">

        <a href="dash.php" class="navbar-brand"><?php echo $app_name ?></a>
        <div class="">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="send-parcel.php" class="nav-link">Send Parcel</a>
                </li>

                <li class="nav-item">
                    <a href="parcel-status.php" class="nav-link">Parcel Status</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">History</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo $_SESSION['fullname'] ?></a>
                   
                </li>


            </ul>
        </div>

    </div>
</nav>