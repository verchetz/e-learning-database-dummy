<!-- navbar -->
<?php include('./static/navbar.php') ?>

    <div class="container mt-5 w-25">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" id="email">
  </div>
  <button type="submit" class="btn btn-primary" value="login" id="btn-login" onclick="userLogin()">Login</button>
</form>
    </div>

<!-- footer  -->
<?php include('./static/footer.php') ?>
