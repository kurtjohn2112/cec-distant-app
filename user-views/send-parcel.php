<?php include '../html/header.html';
include '../functions/functions.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['r_fullname'];
    $address = $_POST['r_address'];
    $contact = $_POST['r_contact'];
    $id = $_SESSION['id'];
    $weight = $_POST['weight'];
    $price = weight($weight);

    send_parcel($fullname, $address, $contact, $id, $weight, $price, 'parcel-' . uniqid());
}

?>

<?php include 'navbar.php' ?>

<main class="py-5">


    <div class="container">

        <p class="small text-muted mb-5">
            <span class="text-danger">Note:</span> Sending parcel are subject to admin's approval for security purposes
        </p>
        <form action="" method="post">
            <div class="row">
                <p class="font-monospace">
                    User details
                </p>
                <div class="col">

                    <div class="mb-3">
                        <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" value="<?php echo $_SESSION['address'] ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contact" value="<?php echo $_SESSION['contact'] ?>" id="" class="form-control">
                    </div>
                </div>
                <div class="col">



                    <div class="mb-3">
                        <input type="text" name="r_fullname" placeholder="Enter Recipient Name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="r_address" placeholder="Enter Recipient Address" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="r_contact" placeholder="Enter Recipient Contact" id="" class="form-control">
                    </div>
                    <!-- <div class="mb-3">
                        <input type="text" name="price" value="" placeholder="Enter Recipient Contact" id="" class="form-control">
                    </div> -->
                </div>
            </div>




            <div class="row">
                <div class="col py-5">
                    <p class="font-monospace">
                        Product Weight:
                    </p>
                    <div class="">

                        <div class="mb-3 w-50">
                            <div class="input-group">
                                <input type="text" name="weight" id="" class="form-control">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info mt-3 float-end">Send Parcel</button>
        </form>
    </div>
    </div>
    </div>
    </div>

</main>




<?php include '../html/footer.html' ?>