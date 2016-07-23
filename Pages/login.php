<form action="Core/login.php" method="post" id="signin" class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputUsername" class="sr-only">Email address</label>
    <input type="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus autocomplete="off">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="new-password">
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	<i class="glyphicon glyphicon-info-sign"></i>
            <h5 class="msgError"><?= $_GET['error']; ?></h5>
        </div>
    <?php endif; ?>
</form>
<?php unset($_GET['error']); ?>