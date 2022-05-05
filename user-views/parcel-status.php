<?php include '../html/header.html';
include '../functions/functions.php';
$data = show_data('parcels', 'sender_id', $_SESSION['id']);




?>

<?php include 'navbar.php' ?>

<main class="py-5">

    <div class="container">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <td>Tracking ID</td>
                <td>Recipient Name</td>
                <td>Recipient Location</td>
                <td>Recipient Contact</td>
                <td>Parcel Status</td>
                <td>Price</td>
                <td>Weight</td>
            </thead>
            <tbody>
                <?php if (!empty(show_data_multiple('parcels', 'sender_id', $_SESSION['id']))) : ?>
                    <?php foreach (show_data_multiple('parcels', 'sender_id', $_SESSION['id']) as $row) : ?>
                        <tr>
                            <td>
                                <!-- Button trigger modal -->
                                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#<?php echo $row['tracking_id'] ?>">
                                    <?php echo $row['tracking_id'] ?>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['tracking_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Parcel Location</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php if ($row['parcel_location'] == 'not-defined') { ?>
                                                    <!-- insert a map of a warehouse here or any images -->

                                                    <!-- temporary placeholder -->
                                                    <p class="font-monospace">
                                                        Parcel is subject for approval. Your item is safe with us
                                                    </p>
                                                <?php } elseif ($row['parcel_location'] == 'warehouse-1') { ?>
                                                    <!-- insert a map of a warehouse here or any images -->

                                                    <!-- temporary placeholder -->
                                                    <p class="font-monospace">
                                                        Parcel is in warehouse-1
                                                    </p>
                                                <?php } elseif ($row['parcel_location'] == 'warehouse-2') { ?>
                                                    <!-- insert a map of a warehouse here or any images -->

                                                    <!-- temporary placeholder -->
                                                    <p class="font-monospace">
                                                        Parcel is in warehouse-2
                                                    </p>
                                                <?php } ?>
                                                    




                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td> <?php echo $row['fullname'] ?></td>
                            <td> <?php echo $row['address'] ?></td>
                            <td> <?php echo $row['contact'] ?></td>
                            <?php if ($row['status'] == 'to be picked up') : ?>
                                <td> <span class="badge bg-warning"><?php echo $row['status'] ?> <i class="fas fa-clock fa-3x"></i> </span></td>
                            <?php elseif ($row['status'] == 'on the way') : ?>
                                <td> <span class="badge bg-danger"><?php echo $row['status'] ?><i class="fas fa-map-marked-alt fa-3x"></i> </i> </span></td>
                            <?php elseif ($row['status'] == 'delivered') : ?>
                                <td> <span class="badge bg-success"><?php echo $row['status'] ?> <i class="fas fa-check-circle fa-3x"></i> </span></td>
                            <?php elseif ($row['status'] == 'to be approved') : ?>
                                <td> <span class="badge bg-info"><?php echo $row['status'] ?> <i class="fas fa-check-circle fa-3x"></i> </span></td>

                            <?php endif; ?>
                            <td>P <?php echo $row['rate'] ?></td>
                            <td><?php echo $row['weight'] ?> kg</td>
                        </tr>
                    <?php endforeach ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</main>




<?php include '../html/footer.html' ?>