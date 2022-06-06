<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
    if(isset($_POST['submit'])){
        $servicename = $_POST['servicename'];
        $serviceDesc = $_POST['serviceDesc'];

        $query = "insert into services(service_name,service_desc)values('$servicename','$serviceDesc')";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("inserted new service Section");
           </script>';
           header('location:services.php');
        }
    }
?>
<div class="container my-5">
    <h1 class="text-center ">Add New Service</h1>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post' class="shadow p-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Service Name</label>
                <input type="text" class="form-control" name="servicename" placeholder="Enter the Service name...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Skill Value</label>
                <textarea type="text" class="form-control"  name="serviceDesc" placeholder="Enter the service Descp..."></textarea>
            </div>
            <button class="btn btn-success" name="submit">Add Service</button>
            </form>
        </div>
    </div>
</div>

<div class="container my-3">
    <h2 class="text-center my-3">Your Services</h2>
    <div class="row">
        <?php
        $q = "SELECT * from services";
        $res = mysqli_query($connection, $q);
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <div class="col-md-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem; height:300px">
                    <div class="card-header"><?=$row['service_name']?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['service_desc']?></h5>
                        <a class="btn btn-success my-2" href="update_service.php?id=<?=$row['id']?>">Update</a>
                        <a class="btn btn-danger  my-2" href="delete_service.php?id=<?=$row['id']?>">Delete</a>
                    </div>
                </div>
            </div>
        <?php
        }


        ?>

    </div>
</div>









<?php include_once './includes/footer.php'; ?>