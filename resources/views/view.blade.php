<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />

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

</head>
<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/">Vehicle-Workshop</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <button class="navbar-toggler collapsed navbar-overlay" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand" href="/">Vehicle-Workshop</a>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}/viewproduct">Product </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewlabour">Labour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view">Cutomers <span class="sr-only">(current)</span></a>
          </li>
          <li class="signout-action">
            <a class="btn" href="{{url('/')}}/">Sign Out</a>
          </li>
          <!-- <li>
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="possition:absolute; transform:translate3d(700px,0px,0px); top:0px;left:0px">
                Admin
              </button>
              <div class="dropdown-menu" style="possition:absolute; transform:translate3d(700px,40px,0px); top:0px;left:0px">
                <a class="dropdown-item" href="{{url('/')}}/">SignOut</a>
              </div>
            </div>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <section id="middle">

    @if($message=Session::get('success'))
    <div class='alert alert-success alert-block'>
      <strong>{{ $message }}</strong>
    </div>
    @endif
    
    <div class="page-sec">
      <div class="container">
        <div class="page-head">
          <h3>Customer List</h3>
          <div class="head-action">
            <a href="{{url('/')}}/form">
              <button class="btn btn-success"><i class="bi bi-plus"></i></button>
            </a>
          </div>
        </div>
      </div>

      <div class="page-content">
        <div class="container">
          
          <form action="" class="search-bar">
            <div class="form-group">
              <input type="search"  name="search" class="form-control" value="{{$search}}" placeholder="Search by name, date and vehicle number">
              <button class="btn btn-primary btn-search"><i class="bi bi-search"></i></button>
              <button class="btn btn-primary btn-reset"><i class="bi bi-arrow-clockwise"></i> Reset all</button>
            </div>
          </form>

          <div class="vehicle-list">
            @foreach ($vdetails as $data )
            <div class="card">
              <a href="customer/{{ $data->id }}" class="link-overlay"></a>
              <a href="del/{{ $data->id }}" class="btn btn-danger btn-small btn-trash" onclick="return confirm('Are you sure Delete record?')" ><i class="bi bi-trash3"></i></a>
              <h4>{{ $data->name }} {{ $data->last }}</h4>
              <p><i class="bi bi-envelope-fill"></i>{{ $data->email }}</p>
              <p><i class="bi bi-telephone-fill"></i>{{ $data->tel }}</p>
              <div class="vehicle-info">
                <p>Created date:<br /> <strong>{{ $data->date }}</strong></p>
                <p>Vehicle no:<br /> <strong>{{ $data->Vno }}</strong></p>
                <p>Vehicle make:<br /> <strong>{{ $data->Vmake }}</strong></p>
                <p>Vehicle inventory:<br /> <strong>{{ $data->kms}}km/{{ $data->E}}</strong></p>
              </div>
            </div>
            @endforeach
          </div>
          
          <table class="table table-hover table-responsive d-none" style="width:100%">
            <thead>
              <tr>
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
                  <a href="newinvoice/{{ $data->id }}" class="btn btn-primary btn-small" > New Invoice</a>
                  <a href="customer/{{ $data->id }}" class="btn btn-primary btn-small" > View</a>
                  <a href="del/{{ $data->id }}" class="btn btn-danger btn-small " onclick="return confirm('Are you sure Delete record?')" > Delete </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>

    

    

  </section>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

