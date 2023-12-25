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
              <a class="nav-link" href="#">Product </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">labour</a>
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
    <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 75%;">
        <div class="card-header bg-dark text-white">
          <h5><b>Customer List</b></h5>
        </div>
        <div class="card-body">
            <div class="text-center">
            <a href="{{url('/')}}/form">
                <button class="btn btn-success">New Customer</button>
            </a>
            </div>
            <br>
<div class="container">

    <div class="row m-2">
        <form action="" class="col-12">

            <div class="form-group">
                <input type="search"  name="search" class="form-control" value="{{$search}}" placeholder="Search by Name or Date or Vehicle number">
            </div>
           <table  class="table-responsive table table-hover" >
            <style>
            button.{
                 button class="btn btn-primary">Search</button>
        </form>
        padding: 15px 32px;
        <div class="col-3">
            <a href="{{url('/')}}/show">
            <button class="btn btn-primary d-inline-block ml-2 float-right">Reset</button>
            </a>
        }

</style>

<button class="btn btn-primary">Search</button>

<button class="btn btn-primary d-inline-block ml-2 float-right">Reset</button>
        </div>
    </div>
</div>
           <br>

           <table class="table table-hover table-responsive" style="width:100%">

            <thead>
                <style>
                table, th, td
                {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th,td{
                    padding:10px;
                }
           table {
            border-collapse: collapse;
            width: 100%;
          }
          th, td {
            text-align: left;
            padding: 8px;
          }
          tr:nth-child(even) {background-color: #C8C8C8;}
        </style>
            </td> <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Create Date</th>
                <th scope="col">Vehicle No</th>
                <th scope="col">Vehicle Make</th>
                <th scope="col">Phone</th>
                <th scope="col">vehicle Inventory</th>
                <th scope="col">Select Item</th>
                <th scope="col">Complaint</th>
                <th scope="col">Front View</th>
                <th scope="col">Right View</th>
                <th scope="col">Left view</th>
                <th scope="col">Rear View</th>
                <th scope="col">DashBord</th>
                <th scope="col">Dickey</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($vdetails as $data )
                <tr>
                <div class="card" style="width: 18rem;">
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $data->name }}</td>
                    <td>{{ $data->last }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->Vno }}</td>
                    <td>{{ $data->Vmake }}</td>
                    <td>{{ $data->tel }}</td>
                    <td>{{ $data->kms}}/{{ $data->E}}</td>
                    <td>{{ $data->item }}</td>
                    <td>{{ $data->regular }}</td>
                    <td>
                    <img src="{{ asset('front/'.$data->front) }}" class="square" width="150" height="150"/>
                    </td>
                    <td>
                        <img src="{{ asset('right/'.$data->right) }}" class="square" width="150" height="150"/>
                    </td>
                    <td><img src="{{ asset('left/'.$data->left) }}" class="square" width="150" height="150"/></td>
                    <td><img src="{{ asset('rear/'.$data->rear) }}" class="square" width="150" height="150"/></td>
                    <td><img src="{{ asset('dashbord/'.$data->dashbord) }}" class="square" width="150" height="150"/></td>
                    <td><img src="{{ asset('dickey/'.$data->dickey) }}" class="square" width="150" height="150"/></td>
                    <td>

                        <a href="{{url('/')}}/newinvoice">
                            <button class="btn btn-primary">NewInvoice</button>
                        </a>
                        <br><br>

                        <a href="customer/{{ $data->id }}" class="btn btn-primary btn-small" > View</a>
                         <br><br>
                        <a href="del/{{ $data->id }}" class="btn btn-danger btn-small " onclick="return confirm('Are you sure Delete record?')" > Delete </a>

        </div>
                  </tr>
                @endforeach
            </tbody>

           </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

