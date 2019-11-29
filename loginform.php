<div class="index-section">
    <div class="index-box mr-4 ml-4">
      <h1>Arcadius Cars</h1>
      <h4>Log in</h4>
        <form class="index-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="Username" placeholder="Username">
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="Password" placeholder="Password">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" name="login" class="btn btn-primary">Sign in</button>
                </div>
                <!-- <div class="form-group col-md-12">
                    <h1 class="login-error-text"><?php echo $info; ?></h1>
                </div> -->
            </div>
        </form>
        <h3>if you don't have an account click <a href="signup.php">here</a> to create one</h3>
    </div>
</div>
