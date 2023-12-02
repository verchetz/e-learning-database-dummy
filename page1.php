    <!-- navbar -->
    <?php include('./static/navbar.php') ?>

    <div class="container mt-5">
        <!-- title -->
        
        <h1>Hello <?= $_SESSION['username'];?></h1>
        
        <hr>

    <!-- input -->
    <form>

    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Name</span>
        <input type="text" class="form-control names" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        <span class="text-danger validName"></span>
    </div>
    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Username</span>
        <input type="text" class="form-control username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        <span class="text-danger validUsername"></span>
    </div>
    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Email</span>
        <input type="email" class="form-control email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        <span class="text-danger validEmail"></span>
    </div>
    <span class="button mt-3">
      <input type="submit" class="btn btn-dark submitButt" onClick="add()"></input>
    </span>
    <span class="mb-3 fs-4 ms-4" id="successRegis"></span>

    </form>


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