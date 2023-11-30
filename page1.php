<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <?php include('./static/navbar.php') ?>

    <div class="container mt-5">
        <!-- title -->
        <h1>Hello world</h1>
        <hr>

    <!-- input -->
    <form>

    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Name</span>
        <input type="text" class="form-control names" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Username</span>
        <input type="text" class="form-control username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group my-3 w-50">
        <span class="input-group-text" id="inputGroup-sizing-default" style="width: 120px;">Email</span>
        <input type="text" class="form-control email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="button">
        <button type="button" class="btn btn-dark submitButt" onClick="add()">Submit</button>
    </div>

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