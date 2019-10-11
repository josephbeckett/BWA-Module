<div class="index-section">
    <div class="index-box">
        <form class="index-form" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="Username" placeholder="Username">
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="Password" placeholder="Password">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                <div class="form-group col-md-12">
                    <h1 class="login-error-text"><?php echo $info; ?></h1>
                </div>
            </div>
        </form>
    </div>
</div>