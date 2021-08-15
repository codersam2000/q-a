
<?php require_once 'components/header.php'; ?>
<div class="panel-content bg-scale-0">
<?php require_once 'app/login.php'; ?>
        <form class="input-form" method="post" action="<?= $_SERVER['PHP_SELF'];?>">
            <h2 class="text-center">Login</h2>
             <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-3">
                <?php echo $error; ?>
            </div>
            <?php endif ?>
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="email" class="form-control" name="email" value="<?= $email_cookie; ?>" placeholder="Email">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="password" class="form-control" name="password" value="<?= $password_cookie ?>" placeholder="Password">
                    <i class="fa fa-key"></i>
                </span>
            </div>
            <div class="form-group">
                <div class="checkbox-custom checkbox-primary">
                    <input type="checkbox" name="remember">
                    <label class="check" for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
            </div>
            <div class="form-group text-center">
                <a href="pages_forgot-password.html">Forgot password?</a>
                 <span>Don't have an account?</span>
                <a href="register.php" class="text-center">Creatr an account.</a>
            </div>
        </form>
    </div>
<?php require_once 'components/footer.php';?>