    
<?php require_once 'components/header.php'; ?>
<div class="panel-content bg-scale-0">
<!-- sign up -->
<?php require_once 'app/register.php';?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" class="input-form" method="post" enctype="multipart/form-data">
            <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-3">
                <?php echo $error; ?>
            </div>
            <?php endif ?>
            <h2 class="text-center">Sign Up</h2>
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="text" name="name" class="form-control" placeholder="name" required>
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <i class="fa fa-key"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="file" name="photo" class="form-control" placeholder="Photo" required>
                    <i class="fa fa-photo"></i>
                </span>
            </div>
            <div class="form-group">
                <div class="checkbox-custom checkbox-primary">
                    <input type="checkbox" id="remember-me" value="option1" required>
                    <label class="check" for="remember-me">I agree with this website's Terms and Conditions</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" name="signup" value="Sign Up">
            </div>
        </form>
    </div>
<?php require_once 'components/footer.php';?>