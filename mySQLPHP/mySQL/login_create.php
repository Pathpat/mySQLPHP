<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createUsers(); ?>
<?php include "includes/header.php"; ?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create users</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input class="btn btn-success" type="submit" name="create" value="Create">
            </form>
        </div>
    </div>  
<?php include "includes/footer.php"; ?>