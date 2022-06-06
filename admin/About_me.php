<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<!--view About me all inputsS -->
<?php
$q = "SELECT * from about";
$res = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($res);
?>

<div class="container my-5">
    <h2 class="text-center my-3">ABOUT US</h2>
    <div class="row">
        <div class="col-md-8 m-auto">
            <form action="update_about.php" method="post">
            <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                
                <div class="card-body">
                    <h5 class="card-title">Main Heading</h5>
                    <p class="card-text"><?=$row['main_heading']?></p>
                </div>

                
                <div class="card-body">
                    <h5 class="card-title">Sub Main Heading</h5>
                    <p class="card-text"><?=$row['second_main_heading']?></p>
                </div>

                
                <div class="card-body">
                    <h5 class="card-title">Sub Heading</h5>
                    <p class="card-text"><?=$row['sub_heading']?></p>
                </div>

             
                <div class="card-body">
                    <h5 class="card-title">DOB</h5>
                    <p class="card-text"><?=$row['dob']?></p>
                </div>

                
                <div class="card-body">
                    <h5 class="card-title">AGE</h5>
                    <p class="card-text"><?=$row['age']?></p>
                    
                </div>

               
                <div class="card-body">
                    <h5 class="card-title">DEGREE</h5>
                    <p class="card-text"><?=$row['degree']?></p>
                </div>

                
                <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text"><?=$row['email']?></p>
                   
                </div>

                <div class="card-body">
                    <h5 class="card-title">Address</h5>
                    <p class="card-text"><?=$row['address']?></p>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text"><?=$row['descp']?></p>
                </div>
                <a class="btn btn-success" href="update_about.php?id=<?=$row['id']?>">
                    Update</a>
            </div>
            </form>
        </div>
    </div>
</div>









<?php include_once './includes/footer.php'; ?>