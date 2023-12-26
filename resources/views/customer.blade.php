<!doctype html>
<html lang="en">
  <head>
    <title>Customer</title>
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
              <a class="nav-link" href="#">Product </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}/addlabour">labour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cutomers <span class="sr-only">(current)</span></a>
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
      <table>
       
      <tr> <th scope="col">First Name:</th> <td>{{ $vdetails->name }}</td></tr>
      <tr>   <th scope="col">Last Name:</th><td>{{ $vdetails->last}}</td></tr>
      <tr>    <th scope="col">Email:</th><td>{{ $vdetails->email }}</td></tr>
      <tr>        <th scope="col">Create Date:</th><td>{{ $vdetails->date }}</td></tr>
      <tr>        <th scope="col">Vehicle No:</th><td>{{ $vdetails->Vno }}</td></tr>
      <tr>       <th scope="col">Vehicle Make:</th><td>{{ $vdetails->Vmake }}</td></tr>
      <tr>        <th scope="col">Phone:</th><td>{{ $vdetails->tel }}</td></tr>
      <tr>        <th scope="col">Vehicle Inventory:</th><td>{{ $vdetails->kms}}/{{ $vdetails->E}}</td>
      <tr>        <th scope="col">Select Item:</th> <td>{{ $vdetails->item }}</td>
      <tr>        <th scope="col">Complaint:</th><td>{{ $vdetails->regular }}</td>
      </table>
      <table class="table table-responsive">
  <thead>
    <tr>
    <th scope="col">Front View</th>
    <th scope="col">Right View</th>
    <th scope="col">Left view</th>
    <th scope="col">Rear View</th>
    <th scope="col">DashBord</th>
    <th scope="col">Dickey</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="{{ asset('front/'.$vdetails->front) }}" class="square" width="150" height="150"/></td>
      <td><img src="{{ asset('right/'.$vdetails->right) }}" class="square" width="150" height="150"/></td>
      <td><img src="{{ asset('left/'.$vdetails->left) }}" class="square" width="150" height="150"/></td>
      <td><img src="{{ asset('rear/'.$vdetails->rear) }}" class="square" width="150" height="150"/></td>
      <td><img src="{{ asset('dashbord/'.$vdetails->dashbord) }}" class="square" width="150" height="150"/></td>
      <td><img src="{{ asset('dickey/'.$vdetails->dickey) }}" class="square" width="150" height="150"/></td>
</tr>
</tbody>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><a href="/edit/{{ $vdetails->id }}" class="btn btn-primary btn-small">Update</a></th>
      <th scope="col"> <a href="/view" class="btn btn-success btn-small" >Back</a></th>
</tr>
</thead>

    

   


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>