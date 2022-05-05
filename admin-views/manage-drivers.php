<?php include '../html/header.html';
include '../functions/functions.php';


include 'navbar.php';
if (isset($_POST['add_driver'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    add_driver_admin($fullname,$address,$contact,$email);
}
?>

<main class="py-5">
    <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modelId">
            Add a Driver
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Driver Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" name="fullname" id="" class="form-control">
                                <div class="form-text">Enter user fullname</div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="address" id="" class="form-control">
                                <div class="form-text">Enter user address</div>

                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" id="" class="form-control">
                                <div class="form-text">Enter user email</div>

                            </div>
                          
                            <div class="mb-3">
                                <input type="text" name="contact" id="" class="form-control">
                                <div class="form-text">Enter user contact</div>

                            </div>
                            <button type="submit" class="btn btn-primary" name="add_driver">Add user</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <td>Fullname</td>
                <td>Address</td>
                <td>Contact</td>
                <td>Status</td>
                <td>Action</td>
            </thead>
            <tbody>
                <?php if (!empty(show('drivers'))) : ?>
                    <?php foreach (show('drivers') as $row) : ?>
                        <tr>
                            <td><?php echo $row['fullname'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="../functions/delete.php?driver_id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5">
                        <div class="alert alert-warning">No drivers yet</div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>


<?php include '../html/footer.html' ?>