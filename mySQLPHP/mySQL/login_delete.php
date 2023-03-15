<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteUsers(); ?>

<?php include "includes/header.php"; ?>
    <div class="container">
        <div class="col-sm-6">
            <h2 class="text-center">Delete Users</h2>
        <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <div class="form-group">
                   <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                   </select>
                </div>
                <br>
                <input class="btn btn-danger" type="submit" name="delete" value="Delete">
            </form>
           
        </div>
    </div>
    <?php include "includes/footer.php"; ?>