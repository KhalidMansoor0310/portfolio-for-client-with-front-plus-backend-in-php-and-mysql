<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       $res = "SELECT * from skills where id = '$id'";
       $q = mysqli_query($connection,$res);
       $row = mysqli_fetch_assoc($q);
    }
?>
<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $skillname = $_POST['skillname'];
        $skillvalue = $_POST['skillvalue'];

        $query = "UPDATE skills SET skill_name='$skillname',skill_value='$skillvalue' where id = '$id'";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("Updated Header Section");
           </script>';
           header('location:skills.php');
        }
    }
?>
<div class="container my-5">
    <h1 class="text-center ">Update Skill</h1>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post' class="shadow p-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Skill Name</label>
                <input type="text" class="form-control" value="<?=$row['skill_name']?>" name="skillname" placeholder="Enter the skill name...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Skill Value</label>
                <input type="text" class="form-control" value="<?=$row['skill_value']?>"  name="skillvalue" placeholder="Enter the skill value...">
            </div>
            <input type="hidden" value="<?=$row['id'];?>" name="id">

            <button class="btn btn-success" name="submit">Update Skill</button>
            </form>
        </div>
    </div>
</div>










<?php include_once './includes/footer.php'; ?>