<?php include '../html/header.html';
include '../functions/functions.php';


include 'navbar.php';

?>
<section class="p-5">
    <div class="row">
        <div class="col p-5 bg-success mx-1">
            <p class="font-monospace text-light text-center">Drivers</p>
            <p class="display-6 text-center">
                <?php if (show('drivers') != FALSE) : ?>
                    <?php echo count(show('drivers')) ?>
                <?php else : ?>
                    0
                <?php endif; ?>
            </p>

        </div>
        <div class="col p-5 bg-info mx-1">
            <p class="font-monospace text-light text-center">Customers</p>
            <p class="display-6 text-center">
                <?php if (show('users') != FALSE) : ?>
                    <?php echo count(show('users')) ?>
                <?php else : ?>
                    0
                <?php endif; ?>
            </p>

        </div>
    </div>
    <div class="row mt-1">
        <div class="col p-5 bg-danger mx-1">
            <p class="font-monospace text-light text-center">Parcels</p>
            <p class="display-6 text-center">
                <?php if (show('parcels') != FALSE) : ?>
                    <?php echo count(show('parcels')) ?>
                <?php else : ?>
                    0
                <?php endif; ?>
            </p>
        </div>
        <div class="col p-5 bg-warning mx-1">
        <p class="font-monospace text-light text-center">Reports</p>

            <p class="display-6 text-center">
                <?php //if (show('drivers') != FALSE) : ?>
                    <?php //echo count(show('drivers')) ?>
                <?php// else : ?>
                    0
                <?php //endif; ?>
            </p>
        </div>
    </div>
</section>

<main class="py-5">
    <div class="container">
        <p class="font-monospace">Requested Deliveries</p>
        <table class="table table-bordered">
            <thead class="table-primary">
                <td>Fullname</td>
                <td>Address</td>
                <td>Contact</td>
                <td>Status</td>
                <td>Action</td>
            </thead>
            <tbody>
                <?php if (!empty(show('parcels'))) : ?>
                    <?php foreach (show('parcels') as $row) : ?>
                        <tr>
                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                           
                                <td> <a class="text-decoration-none" href="finalize.php?id=<?php echo $row['id'] ?>">View item</a> 
                                <?php if($row['status'] == 'to be approved'): ?>
                                    <span class="bg-danger badge float-end">NEW!!</span>
                                <?php endif; ?>
                            </td>
                              
                           
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>


<?php include '../html/footer.html' ?>