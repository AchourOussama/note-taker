<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./form.css">

  <title>Document</title>
  <?php session_start() ?>

</head>

<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
              <h4 class="text-center my-3 pb-1">write your notes !</h4>

              <form id="form" method="post" action="./note.php">
                <div class="col-md-11-5">
                  <label for="title" class="form-label">title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>
                <div class="mb-3">
                  <label for="note" class="form-label">note</label>
                  <textarea class="form-control" id="content" rows="3" name="content" placeholder="note"></textarea>
                </div>
                <input type="submit" value="Add" class="btn btn-primary">
              </form>


              <table class="table mb-4" id="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">title</th>
                    <th scope="col">note</th>
                  </tr>
                </thead>
                <tbody id="notes">
                  <?php include "./note_process.php" ?>
                </tbody>
              </table>


              <form action="./logout_process.php" method="POST">
                <input type="submit" value="log out" class="btn btn-danger">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>