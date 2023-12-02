<!-- navbar -->
<?php include('./static/navbar.php') ?>

    <div class="container mt-5 w-25">
      <div class="usersLogin">
        <h2>Users</h2>
        <hr>
      <form>
        <div class="mb-3">
          <label for="username" class="form-label">username</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" id="username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <input type="submit" class="btn btn-dark" value="login" id="btnUserLogin" onclick="userLogin()"></input>
        <span class="ms-3" id="statusUserLogin"></span>
      </form>
      </div>

        <div class="adminLogin">
          <h2 class="mt-5">Admint</h2>
          <hr>
          <form>
        <div class="mb-3">
          <label for="adminEmail" class="form-label">admin Email</label>
          <input type="text" class="form-control" aria-describedby="emailHelp" id="adminEmail">
        </div>
        <div class="mb-3">
          <label for="adminPass" class="form-label">admin pass</label>
          <input type="password" class="form-control" id="adminPass" required>
        </div>
        <input type="submit" class="btn btn-dark" value="login" id="btnAdminLogin" onclick="adminLogin()"></input>
        <span class="statusAdminLogin ms-3"></span>
      </form>
        </div>
      
    </div>


<!-- footer  -->
<?php include('./static/footer.php') ?>
