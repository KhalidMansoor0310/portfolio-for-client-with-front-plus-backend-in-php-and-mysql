<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
$q = "SELECT * from header_section";
$res = mysqli_query($connection, $q);
$row = mysqli_fetch_assoc($res);
?>


<?php
    if(isset($_POST['submit'])){
        $heading = $_POST['heading'];
        $subHeading = $_POST['subheading'];

        $query = "UPDATE header_section SET heading='$heading',sub_heading='$subHeading' where id = 1";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("Updated Header Section");
           </script>';
           header('location:header.php');
        }
    }
?>


<div class="container my-5">
    <h2 class="text-center my-3">Update Header Section</h2>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post' class="shadow p-5">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter Heading</label>
                <input type="text" class="form-control" value="<?=$row['heading']?>" name="heading" placeholder="Enter the heading...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter SubHeading</label>
                <input type="text" class="form-control" value="<?=$row['sub_heading']?>" name="subheading" placeholder="Enter the sub Heading...">
            </div>
            <button class="btn btn-success" name="submit">Update</button>
            </form>
        </div>
    </div>
</div>









<?php include_once './includes/footer.php'; ?>