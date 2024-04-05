<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>index</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactttt">Contact</a>
                </li>
           
            </ul>
           
        </div>
    </nav>
    <div class="container">
        <!-- @for($i  = 1 ; $i<=10 ; $i++)

           {{$i}}

        @endfor -->

        <table class="table">
          
            <tbody>
                @for($i = 1 ; $i <=10 ;  $i++)
                <tr>
                    <td >{{13}}</td>
                    <td>{{'x'}}</td>
                    <td>{{$i}}</td>
                    <td>{{'='}}</td>
                    <td>{{13*$i}}</td>
                </tr>
              @endfor
            </tbody>
        </table>
    </div>
    
    </body>
</html>