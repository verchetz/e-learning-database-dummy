<!-- navbar -->
<?php include('./static/navbar.php') ?>

    <div class="container mt-5 w-25">
    <form>
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" id="username">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-primary" value="login" id="btn-login" onclick="userLogin()">Login</button>
</form>
    </div>

<!-- footer  -->
<?php include('./static/footer.php') ?>
