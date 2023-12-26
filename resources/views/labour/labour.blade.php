<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">|| Vehicle-Workshop ||</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">labour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cutomers</a>
            </li>
            <li>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="possition:absolute; transform:translate3d(700px,0px,0px); top:0px;left:0px">
                      Admin
                    </button>
                    <div class="dropdown-menu" style="possition:absolute; transform:translate3d(700px,40px,0px); top:0px;left:0px">
                      <a class="dropdown-item" href="{{url('/')}}/">SignOut</a>
                    </div>
                  </div>
            </li>
          </ul>
        </div>
    </nav>
    @if($message=Session::get('success'))
    <div class='alert alert-success alert-block'>
      <strong>{{ $message }}</strong>
    </div>
    @endif
      <br><br>
    <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 75%;">
        <div class="card-header bg-success text-white">
          <h4>Labour</h4>
        </div>

        <div class="card-body">
            <a href="{{url('/')}}/labour" style="color: black"><-back</a><br><br>
            <form action="{{ url('/') }}/addlabour" method="POST" >
                @csrf
                <label for="name" class=""> Labour Name: </label>
                <input type="text" id="l_name" name="l_name" class="float-right" style="width: 80%" ><br><br>
                <label for="last" class=""> Price: </label>
                <input type="text" id="l_price" name="l_price" class="float-right"  style="width: 80% "><br><br>
                <button class="btn btn-primary btn-block" type="submit"> Submit</button>
              
              </form>
        </div>
    </div> 
           
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>