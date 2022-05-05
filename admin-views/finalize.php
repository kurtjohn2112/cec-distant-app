<?php include '../html/header.html';
include '../functions/functions.php';
$id = $_GET['id'];

$order = show_data('parcels', 'id', $id);



include 'navbar.php';

// print_r($order);

if(isset($_POST['finalize'])){
    $pickup = $_POST['pickup'];
    $driver = $_POST['driver'];
    $est = $_POST['est'];
    $status = $_POST['status'];
    $location = $_POST['location'];

    admin_update_parcel($pickup,$driver,$est,$status,$id,$location);
}


?>

<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- form -->
                <div class="card">
                    <div class="card-header">
                        <p class="text-center font-monospace">FINALIZE ORDER</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="mb-3">
                                <input type="date" name="pickup" value="<?php echo $order['pick_up'] ?>" id="" class="form-control" required >
                                <div class="form-text">Set Pick up date</div>
                            </div>
                            <div class="mb-3">
                                <select name="driver" id="" class="form-select" required>
                                    <?php foreach( show('drivers') as $row ): ?>
                                        <option value="<?php echo $row['fullname'] ?>"><?php echo $row['fullname'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text">Choose Driver</div >
                            </div>
                            <div class="mb-3">
                                <select name="status" id="" class="form-select" required>
                                        <option value="to be approved">To be approved</option>
                                        <option value="to be picked up">To be picked up</option>
                                        <option value="on the way">On the way </option>
                                        <option value="delivered">Delivered</option>
                                </select>
                                <div class="form-text">Change status</div>
                            </div>
                            <div class="mb-3">
                                <select name="location" id="" class="form-select" required>
                                        <option value="not-defined">Not defined</option>
                                        <option value="warehouse-1">Warehouse-1</option>
                                        <option value="warehouse-2">Warehouse-2</option>
                                        <!-- <option value="clubholic-2">clubholic-2</option> -->
                                </select>
                                <div class="form-text">Product Location</div>
                            </div>
                            <div class="mb-3">
                                <input type="date" name="est" value="<?php echo $order['est'] ?>" id="" class="form-control" required>
                                <div class="form-text">Set estimated date of arrival</div>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" name="finalize" class="btn btn-primary">Finalize</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 border p-5">
                    <p class="font-monospace">
                        Sender: <?php echo show_data('users', 'id', $order['sender_id'])['fullname'] ?>
                    </p>
                    <p class="font-monospace">
                        Recipient: <?php echo $order['fullname'] ?>
                    </p>
                    <p class="font-monospace">
                        Address: <?php echo $order['address'] ?>
                    </p>
                    <p class="font-monospace">
                        Contact: <?php echo $order['contact'] ?>
                    </p>
                    <p class="font-monospace">
                        Tracking ID: <?php echo $order['tracking_id'] ?>
                    </p>
                    <p class="font-monospace">
                        Rate : <?php (empty($order['rate'])) ?  "No rate yet" : $order['rate']  ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</main>


<?php include '../html/footer.html' ?>