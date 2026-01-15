<?php include_once 'header.php'; ?>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your email address.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" href="reset.php">Reset Password</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Add Admin</a>
            <a class="d-block small" href="index.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>
<?php include_once 'footer.php'; ?>