<?php include '../html/header.html';
include '../functions/functions.php';

if (isset($_POST['add_parcel'])) {
    $fullname = $_POST['r_fullname'];
    $address = $_POST['r_address'];
    $contact = $_POST['r_contact'];
    $id = $_SESSION['id'];

    send_parcel($fullname,$address,$contact,$id);
}

?>

<?php include 'navbar.php' ?>

<main class="py-5">

    <div class="container">
        <div class="card w-50 mx-auto">
            <div class="card-header bg-primary">
                Sender Information
                
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" value="<?php echo $_SESSION['address'] ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contact" value="<?php echo $_SESSION['contact'] ?>" id="" class="form-control">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <input type="text" name="r_fullname" placeholder="Enter Recipient Name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="r_address" placeholder="Enter Recipient Address"  id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="r_contact" placeholder="Enter Recipient Contact" id="" class="form-control">
                    </div>

                    
                    <button type="submit" name="add_parcel" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i> </button>
                </form>
       
</main>




<?php include '../html/footer.html' ?>