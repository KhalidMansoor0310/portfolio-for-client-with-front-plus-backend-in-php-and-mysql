<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       $res = "SELECT * from services where id = '$id'";
       $q = mysqli_query($connection,$res);
       $row = mysqli_fetch_assoc($q);
    }
?>
<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $servicename = $_POST['servicename'];
        $servicevalue = $_POST['servicedescp'];

        $query = "UPDATE services SET service_name='$servicename',service_desc='$servicevalue' where id = '$id'";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("Updated services Section");
           </script>';
           header('location:services.php');
        }
    }
?>
<div class="container my-5">
    <h1 class="text-center ">Update service</h1>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post' class="shadow p-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">service Name</label>
                <input type="text" class="form-control" value="<?=$row['service_name']?>" name="servicename" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">service Value</label>
                <textarea type="text" class="form-control" name="servicedescp"><?=$row['service_desc']?></textarea>
            </div>
            <input type="hidden" value="<?=$row['id'];?>" name="id">
            <button class="btn btn-success" name="submit">Update service</button>
            </form>
        </div>
    </div>
</div>










<?php include_once './includes/footer.php'; ?>