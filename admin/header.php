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

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 m-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Heading</th>
                        <th>Sub Heading</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$row['heading']?></td>
                        <td><?=$row['sub_heading']?></td>
                        <td><a class="btn btn-success" href="update_header.php?id=<?=$row['id']?>">Update</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>









<?php include_once './includes/footer.php'; ?>