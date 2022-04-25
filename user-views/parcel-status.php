<?php include '../html/header.html';
include '../functions/functions.php';
$data = show_data('parcels', 'sender_id', $_SESSION['id']);


if (isset($_POST['add_parcel'])) {
    $fullname = $_POST['r_fullname'];
    $address = $_POST['r_address'];
    $contact = $_POST['r_contact'];
    $id = $_SESSION['id'];

    send_parcel($fullname, $address, $contact, $id);
}

?>

<?php include 'navbar.php' ?>

<main class="py-5">

    <div class="container">
        <table class="table">
            <thead class="table-primary">
                <td>Recipient Name</td>
                <td>Recipient Location</td>
                <td>Recipient Contact</td>
                <td>Recipient Status</td>
            </thead>
            <tbody>
                <?php if (!empty(show_data_multiple('parcels', 'sender_id', $_SESSION['id']))) : ?>
                    <?php foreach (show_data_multiple('parcels', 'sender_id', $_SESSION['id']) as $row) : ?>
                        <tr>
                            <td> <?php echo $row['fullname'] ?></td>
                            <td> <?php echo $row['address'] ?></td>
                            <td> <?php echo $row['contact'] ?></td>
                            <?php if ($row['status']== 'to be picked up') : ?>
                                <td> <span class="badge bg-warning"><?php echo $row['status'] ?> <i class="fas fa-clock fa-3x"></i> </span></td>
                            <?php elseif ($row['status'] == 'on the way') : ?>
                                <td> <span class="badge bg-danger"><?php echo $row['status'] ?><i class="fas fa-map-marked-alt fa-3x"></i> </i> </span></td>
                            <?php elseif ($row['status'] == 'delivered') : ?>
                                <td> <span class="badge bg-success"><?php echo $row['status'] ?> <i class="fas fa-check-circle fa-3x"></i> </span></td>

                            <?php endif; ?>
                        </tr>
                    <?php endforeach ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</main>




<?php include '../html/footer.html' ?>