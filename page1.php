    <!-- navbar -->
    <?php include('./static/navbar.php') ?>

    <div class="container mt-5">
        <!-- title -->
        <h1>Hello <?= $_SESSION['username']; ?></h1>
        <hr>
        <!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>burb</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

        <!-- button back to main menu -->
        <div class="butt">
            <a href="./index.php">
                <input class="btn btn-primary" type="submit" value="back">
            </a>
        </div>
    </div>


    <!-- footer -->
    <?php include('./static/footer.php') ?>