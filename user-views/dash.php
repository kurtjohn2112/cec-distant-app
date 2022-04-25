<?php include '../html/header.html';
include '../functions/functions.php';


include 'navbar.php';

?>

<main class="py-5">
    <div class="container">
        <div class="d-flex align-items center justify-content-between">
            <div class="p-3">
                <h1 class="display-1 mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h1>
                <p class="text-muted fs-6 fst-italic">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, iure.
                </p>
            </div>
            <img src="../images/main-upper-bg.jpg" class="img-fluid w-50" alt="">
        </div>
    </div>
</main>

<section class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-">
                <div class="p-5 bg-dark text-light">
                    <div class="container">
                        <h1 class="display-3">Jumbo heading</h1>
                        <p class="lead fst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus autem enim, ullam eius perferendis neque blanditiis temporibus repellendus quis quibusdam?</p>
                        <hr class="my-2">
                        <p>More info</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Set Delivery Details!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 my-3">
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="input-group mt-5">
                        <input type="text" name="order_id" placeholder="Enter Order Tracking ID" id="" class="form-control form-control-lg">
                        <button type="submit" class="btn btn-primary">Search <i class="fas fa-search    "></i></button>
                    </div>

                </div>
                <div class="col">
                    <h1 class=" text-center fst-bold">
                        Search an Order
                    </h1>
                    <p class="text-muted fs-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus omnis officiis rerum fuga cumque? Facere dolore ratione voluptates? Officiis, et.
                    </p>
                </div>
            </div>
        </form>
    </div>

</section>

<section class="mt-5 py-5">
    <div class="container">

        <div class="card w-50 mx-auto">
            <div class="card-header bg-primary">
                <p class="lead text-light text-center">Send us a message!</p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                      <textarea class="form-control" placeholder="Enter Message" name="message" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="send_message" class="btn btn-primary">Send Messages</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="sticky-footer p-3 text-center bg-dark text-light">
    <p class="footer">Footer</p>
</footer>


<?php include '../html/footer.html' ?>