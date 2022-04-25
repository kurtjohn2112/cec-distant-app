<?php include 'html/header.html';
include 'functions/functions.php';

if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact  = $_POST['contact'];

    register($fullname,$address,$email,$password,$contact);
}

?>

<?php include 'navbar.php' ?>

<main class="py-5">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header p-5 bg-primary">
                        <p class="lead text-light text-center">Register Here</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="fullname" id="" class="form-control bg-light">
                                    <p class="form-text">Enter Fullname</p>
                                </div>
                                <div class="col">
                                    <input type="text" name="address" id="" placeholder="" class="form-control bg-light">
                                    <p class="form-text">Enter Complete Address</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" name="email" placeholder="@email.com" id="" class="form-control bg-light">
                                    <p class="form-text">Enter Email Address</p>
                                </div>
                                <div class="col">
                                    <input type="password" name="password" placeholder="Create a strong password" id="" class="form-control bg-light">
                                    <p class="form-text">Create a password</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" name="contact" placeholder="#" id="" class="form-control bg-light">
                                    <p class="form-text">Enter Contact Information</p>
                                </div>

                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" name="register" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col">
                <h1 class="display-6 text-primary mt-5 text-center fst-italic fw-bold">
                    DISTANT ELOGISTICS
                </h1>
                <p class="text-muted fst-italic">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro voluptatum ipsa nesciunt cum id iusto perferendis quibusdam culpa, blanditiis error sapiente nisi fugiat eveniet! Placeat fuga eaque dolore ipsa, error nulla eveniet nostrum perspiciatis odio possimus ea assumenda, blanditiis adipisci fugiat quae ex repellat! Incidunt pariatur, quis error dolores distinctio architecto quod, asperiores quos perferendis soluta doloribus maiores consequatur odit.
                </p>
            </div>
        </div>
    </div>

</main>




<?php include 'html/footer.html' ?>