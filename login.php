<?php include 'html/header.html';
include 'functions/functions.php';

if (isset($_POST['login'])) {
 
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    login($email,$password);
 
}

?>

<?php include 'navbar.php' ?>

<main class="py-5">

    <div class="container">
        <form action="" method="post">
            <div class="row w-50 mx-auto mt-5">
                <div class="col">
                    <input type="text" name="email" placeholder="Enter Email" id="" class=" form-control-lg form-control" required autofocus>
                </div>
                <div class="col">
                    <input type="password" name="password" placeholder="Enter Password" id="" class="form-control form-control-lg" required>
                </div>
                <button name="login" class="btn btn-primary mt-5 btn-lg">Login</button>
            </div>
            
        </form>

        <h1 class="display-4 text-primary fst-italic text-center mt-5">
            DISTANT E-LOGISTICS APP <span class="text-muted  fs-1">V1.0</span>
        </h1>
    </div>

</main>




<?php include 'html/footer.html' ?>