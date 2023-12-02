<!-- navbar -->
<?php include('./static/navbar.php'); ?>

    <div class="container mt-5 w-25">
        <!-- input -->
        <form>

      <div class="mb-3">
        <label for="names" class="form-label">names </label><small class="text-danger validName"></small>
        <input type="text" class="form-control names" aria-describedby="emailHelp" id="names" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">username </label><small class="text-danger validUsername"></small>
        <input type="text" class="form-control username" aria-describedby="emailHelp" id="username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email </label><small class="text-danger validEmail"></small>
        <input type="email" class="form-control email" id="email" required>
      </div>
      <span class="button mt-3">
          <input type="submit" class="btn btn-dark submitButt" onClick="add()"></input>
        </span>
        <span class="mb-3 fs-4 ms-4" id="successRegis"></span>
</form>
        <!-- <form>
    
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
    
        </form> -->
    </div>


    <!-- foot -->
    <?php include('./static/footer.php'); ?>