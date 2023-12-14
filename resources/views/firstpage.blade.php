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
            <li class="nav-item">
              <a class="nav-link" href="#">Cutomers</a>
            </li>
            <li>
                <div class="btn-group">
                    <a href="{{url('/')}}/sign">
                        <button class="btn btn-success" style="possition:absolute; transform:translate3d(900px,00px,0px); top:0px;left:0px">SIGN IN</button>
                    </a>
                  </div>
            </li>
          </ul>
        </div>
    </nav>
      <br><br>
    <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 75%;">
        <div class="card-header bg-dark text-white">
          <h5><b>Customer List</b></h5>
        </div>
        <div class="card-body">
           <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Create Date</th>
                <th scope="col">Vehicle No</th>
                <th scope="col">Vehicle Name</th>
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
              </tr>
            </thead>
            <tbody>
                @foreach ($vdetails as $data )
                <tr>
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

