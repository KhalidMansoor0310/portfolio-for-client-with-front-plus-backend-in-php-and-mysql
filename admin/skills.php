<?php
include_once './includes/db.php';
include_once './includes/header.php';
include_once './includes/Navbar.php';
?>
<?php
    if(isset($_POST['submit'])){
        $skillname = $_POST['skillname'];
        $skillvalue = $_POST['skillvalue'];

        $query = "insert into skills(skill_name,skill_value)values('$skillname','$skillvalue')";
        $res = mysqli_query($connection,$query);
        if($res){
           echo '<script>
                    alert("inserted new skills Section");
           </script>';
           header('location:skills.php');
        }
    }
?>
<div class="container my-5">
    <h1 class="text-center ">Add New Skill</h1>
    <div class="row">
        <div class="col-md-6 m-auto">
            <form method='post' class="shadow p-4">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Skill Name</label>
                <input type="text" class="form-control" name="skillname" placeholder="Enter the skill name...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Skill Value</label>
                <input type="text" class="form-control"  name="skillvalue" placeholder="Enter the skill value...">
            </div>
            <button class="btn btn-success" name="submit">Add Skill</button>
            </form>
        </div>
    </div>
</div>

<div class="container my-3">
    <h2 class="text-center my-3">Your Skills</h2>
    <div class="row">
        <?php
        $q = "SELECT * from skills";
        $res = mysqli_query($connection, $q);
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <div class="col-md-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header"><?=$row['skill_name']?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['skill_value']?></h5>
                        <a class="btn btn-success my-2" href="update_skill.php?id=<?=$row['id']?>">Update</a>
                        <a class="btn btn-danger  my-2" href="delete_skill.php?id=<?=$row['id']?>">Delete</a>
                    </div>
                </div>
            </div>
        <?php
        }


        ?>

    </div>
</div>









<?php include_once './includes/footer.php'; ?>