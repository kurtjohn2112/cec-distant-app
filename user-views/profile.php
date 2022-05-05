<?php include '../html/header.html';
include '../functions/functions.php';


if(isset($_POST['upload'])){
    $img = $_FILES['img']['name'];
    $target_dir = 'images/';
    $target_file = $target_dir.basename($img);
    

    $validate = upload_img($img,$_SESSION['id']);

    if($validate == 1){
        move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
    }else{
        echo "EHH!";
    }




}

?>

<?php include 'navbar.php' ?>

<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <?php if (empty($_SESSION['img'])) : ?>
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="../images/placeholder.png" alt="" class="card-img-top">

                        </div>
                    </div>
                    <div class="mt-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="file" name="img" id="" class="form-control">
                                <button class="btn btn-primary" name="upload"> <i class="fas fa-upload"></i></button>
                            </div>
                            <div class="form-text">Upload Profile Picture</div>
                        </form>
                    </div>
                <?php else: ?>
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="images/<?php echo $_SESSION['img'] ?>" alt="" class="card-img-top">

                        </div>
                    </div>
                    <div class="mt-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control">
                                <button class="btn btn-primary"> <i class="fas fa-upload"></i></button>
                            </div>
                            <div class="form-text">Upload Profile Picture</div>
                        </form>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="" method="post">
                                <p class="font-monospace">Fullname: <?php echo $_SESSION['fullname'] ?></p>
                                <p class="font-monospace">Address: <?php echo $_SESSION['address'] ?></p>
                                <p class="font-monospace">Contact: <?php echo $_SESSION['contact'] ?></p>
                            </form>
                        </div>
                    </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12 p-5 bg-warning">
                        INSERT SOME DESIGNS HERE
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 p-5 bg-danger">
                        INSERT SOME DESIGNS HERE
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 p-5 bg-info">
                        INSERT SOME DESIGNS HERE
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 p-5 bg-primary">
                        INSERT SOME DESIGNS HERE
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include '../html/footer.html' ?>