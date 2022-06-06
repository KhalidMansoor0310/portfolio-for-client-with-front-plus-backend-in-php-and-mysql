<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
$q = "SELECT * from about";
$res = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($res);
?>

<?php
    if(isset($_POST['submit'])){
        $heading = $_POST['main_heading'];
        $secondHeading = $_POST['second_main_heading'];
        $subHeading = $_POST['subheading'];
        $age = $_POST['age'];
        $dob= $_POST['dob'];
        $degree = $_POST['degree'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $descp = $_POST['descp'];



        $query = "UPDATE about SET main_heading='$heading',
        second_main_heading='$secondHeading',
        sub_heading='$subHeading',
        age='$age',
        dob='$dob',
        degree='$degree',
        email='$email',
        address='$address',
        descp = '$descp'
        where id = 1";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("Updated Header Section");
           </script>';
           header('location:About_me.php');
        }
    }
?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post'>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter Heading</label>
                <input type="text" class="form-control" value="<?=$row['main_heading']?>" name="main_heading" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter SubHeading</label>
                <input type="text" class="form-control" value="<?=$row['second_main_heading']?>" name="second_main_heading" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">SubHeading</label>
                <textarea type="text" class="form-control"  name="subheading"><?=$row['sub_heading']?></textarea>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Age</label>
                <input type="text" class="form-control" value="<?=$row['age']?>" name="age">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date Of Birth</label>
                <input type="text" class="form-control" value="<?=$row['dob']?>" name="dob" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Degree</label>
                <input type="text" class="form-control" value="<?=$row['degree']?>" name="degree" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" class="form-control" value="<?=$row['email']?>" name="email" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Address</label>
                <input type="text" class="form-control" value="<?=$row['address']?>" name="address">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Description</label>
                <textarea type="text" class="form-control"  name="descp" ><?=$row['descp']?></textarea>
            </div>
            <button class="btn btn-success" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>









<?php include_once './includes/footer.php'; ?>