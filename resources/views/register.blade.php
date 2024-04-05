<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container p-5">
            <form action="" method="post">
            @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <button class="btn btn-info" type="submit" >Submit</button>
            </form>
        </div>
  </body>
</html>