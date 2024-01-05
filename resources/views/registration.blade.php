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
          <h3>{{ $title }}
          <a class="back-link" href="{{url('/')}}/view"><i class="bi bi-arrow-left-short"></i>Back</a>
          </h3>
        </div>

        <div class="wh-box add-form">

          <form action="{{$url}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
              <label for="name" class="">First Name:</label>
              <div class="form-field">
                <input type="text" id="name" name="name" placeholder="Enter first name" class="form-control" @if($title=="Update Customer") value="{{ $vdetails->name }}" @endif >
              </div>
              @error('name')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="last" class="">Last Name:</label>
              <div class="form-field">
                <input type="text" id="name" name="last" placeholder="Enter last name" class="form-control" @if($title=="Update Customer") value="{{ $vdetails->last }}" @endif>
              </div>
              @error('last')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <div class="form-field">
                <input type="email" id="email" name="email" placeholder="Enter email address" class="form-control" @if($title=="Update Customer") value="{{ $vdetails->email }}" @endif>
              </div>
              @error('email')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="date">Create Date:</label>
              <div class="form-field">
                <input type="date" id="start" name="date" min="1900-01-01" max="3000-01-01" class="form-control" @if($title=="Update Customer") value={{ $vdetails->date }} @endif>
              </div>
            </div>

            <h4>Customer Details:</h4>

            <div class="form-group">
              <label for="name">Vehical Number:</label>
              <div class="form-field">
                <input type="text" class="form-control" id="name" placeholder="Enter vehicle number" name="Vno" @if($title=="Update Customer") value="{{ $vdetails->Vno }}" @endif>
              </div>
              @error('Vno')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="name">Vehicle Make:</label>
              <div class="form-field">
                <input type="text" class="form-control" id="name" placeholder="Enter vehical make" name="Vmake" @if($title=="Update Customer") value="{{ $vdetails->Vmake }}" @endif>
              </div>
              @error('Vmake')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="name">Phone Number:</label>
              <div class="form-field">
                <input type="tel" class="form-control" id="name" placeholder="0000000000" name="tel" @if( $title =="Update Customer") value="{{ $vdetails->tel }}" @endif>
              </div>
              @error('tel')
                <div class="err">{{$message}}</div>
              @enderror
            </div>


            <h4>Vehicle Inventory:</h4>

            <div class="form-group">
              <label for="name">Kms:</label>
              <div class="form-field">
                <input type="text" class="form-control" id="name" placeholder="Enter vehicle number" name='kms' @if($title=="Update Customer") value="{{ $vdetails->kms }}" @endif>
              </div>
              @error('kms')
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="inputState">Fuel:</label>
              <div class="form-field select">
                <select id="inputState" class="form-control" value='E' name="E" @if($title=="Update Customer") value="{{ $vdetails->E }}" @endif>
                  <option selected>E</option>
                  <option>...</option>
                </select>
              </div>
            </div>


            <h4>Select Items:</h4>

            <div class="form-group check-group">
              <div class="form-field">

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Jack & Tommy" name="item[]" @if($title=="Update Customer") {{ in_array('Jack & Tommy',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox1">Jack & Tommy </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Stepney" name="item[]" @if($title=="Update Customer") {{ in_array('Stepney',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox2">Stepney</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Tool Kit" name="item[]" @if($title=="Update Customer") {{ in_array('Tool Kit',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox3">Tool Kit</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Tape" name="item[]" @if($title=="Update Customer") {{ in_array('Tape',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox4">Tape</label>
                </div>
                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Battery" name="item[]" @if($title=="Update Customer") {{ in_array('Battery',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox5">Battery </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Mirror RH" name="item[]" @if($title=="Update Customer") {{ in_array('Mirror RH',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox6">Mirror RH </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Mirror LH" name="item[]"@if($title=="Update Customer") {{ in_array('Mirror LH',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox7">Mirror LH</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Maths" name="item[]" @if($title=="Update Customer") {{ in_array('Maths',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                  <label class="form-check-label" for="inlineCheckbox8">Maths(No field)</label>
                </div>
              </div>
            </div>


            <h4>Customer Complaints/ Tasks To Do:</h4>

            <div class="form-group">
              <div class="form-field">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="regular" placeholder="Regular" >@if($title=="Update Customer") {{ $vdetails->regular }} @endif</textarea>
              </div>
              @error('regular')
                <div class="err">{{$message}}</div>
              @enderror
            </div>
            


            <h4>Vehicle Images:</h4>

            <div class="form-group">
              <label for="exampleFormControlFile1">Front:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="front">
              </div>
              @error("front")
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Right-hand Side:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="right">
              </div>
              @error("right")
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Left-hand Side:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="left">
              </div>
              @error("left")
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Rear:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rear">
              </div>
              @error("rear")
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Dashboard:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dashbord">
              </div>
              @error("dashbord")
                <div class="err">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Dicky:</label>
              <div class="form-field">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dickey">
              </div>
              @error("dickey")
                <div class="err">{{$message}}</div>
              @enderror
            </div>


            <div class="form-group form-btns">
              <div class="form-field">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-black">Clear</button>
              </div>
            </div>
              
            



            

          </form>

        </div>

      </div>



    </div>


      <div class="card-body d-none">
        <form action="{{$url}}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name" class=""> First Name: </label>
            <input type="text" id="name" name="name" class="float-right" style="width: 80%" @if($title=="Update Customer") value="{{ $vdetails->name }}" @endif >
            <br><spam class='text-danger'>
              @error('name')
              {{$message}}
              @enderror
            </spam>
            <br>
            <label for="last" class=""> Last Name: </label>
            <input type="text" id="name" name="last" class="float-right"  style="width: 80% "@if($title=="Update Customer") value="{{ $vdetails->last }}" @endif>
            <br><spam class='text-danger'>
              @error('last')
              {{$message}}
              @enderror
            </spam>
            <br>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" class="float-right" style="width: 80%"@if($title=="Update Customer") value="{{ $vdetails->email }}" @endif>
            <br><spam class='text-danger'>
              @error('email')
              {{$message}}
              @enderror
            </spam>
            <br>
            <label for="date">Create Date : </label>
            <input type="date" id="start" name="date" min="1900-01-01" max="3000-01-01" class="float-right" style="width: 80%" @if($title=="Update Customer") value={{ $vdetails->date }} @endif><br><br>

          <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 100%;">
            <div class="card-header ">
              Customer Details:-
              <div class="card-body">
                <div class="form-row">
                  <div class="form-grouUpdate Customer                   <label for="name">Vehical Number:</label>
                    <input type="text" class="form-control" id="name" placeholder="Vehicle number" name="Vno" @if($title=="Update Customer") value="{{ $vdetails->Vno }}" @endif>
                    <spam class='text-danger'>
                    @error("Vno")
                    {{$message}}
                    @enderror
                    </spam>
                      </div>
                  <div class="form-group col-md-6">
                  <label for="name">Vehicle Make: </label>
                  <input type="text" class="form-control" id="name" placeholder="Vehical Make" name="Vmake" @if($title=="Update Customer") value="{{ $vdetails->Vmake }}" @endif>
                  <spam class='text-danger'>
                  @error("Vmake")
                  {{$message}}
                  @enderror
                  </spam>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Phone Number:</label>
              <input type="tel" class="form-control" id="name" placeholder="0000000000" name="tel" @if( $title =="Update Customer") value="{{ $vdetails->tel }}" @endif>
              <spam class='text-danger'>
                @error("tel")
                {{$message}}
                @enderror
              </spam>
            </div>
              </div>
            </div>
            </div>
            <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 100%;">
                <div class="card-header ">
                Vehicle Inventory:-
                  <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">Kms :</label>
                              <input type="text" class="form-control" id="name" placeholder="Vehicle number" name='kms' @if($title=="Update Customer") value="{{ $vdetails->kms }}" @endif>
                              <spam class='text-danger'>
                                @error("kms")
                                {{$message}}
                                @enderror
                              </spam>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputState">Fuel</label>
                                    <select id="inputState" class="form-control" value='E' name="E" @if($title=="Update Customer") value="{{ $vdetails->E }}" @endif>
                                    
                                      <option selected>E</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
                <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 100%;">
                <div class="card-header ">
                  Select Items:-
                  <div class="card-body">
                    <div class="form-check form-check-inline col-md-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Jack & Tommy" name="item[]" @if($title=="Update Customer") {{ in_array('Jack & Tommy',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox1">Jack & Tommy </label>
                      </div>
                      <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Stepney" name="item[]" @if($title=="Update Customer") {{ in_array('Stepney',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox2">Stepney</label>
                      </div>
                      <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Tool Kit" name="item[]" @if($title=="Update Customer") {{ in_array('Tool Kit',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox1">Tool Kit</label>
                      </div>
                      <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Tape" name="item[]" @if($title=="Update Customer") {{ in_array('Tape',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox2">Tape</label>
                      </div><br>
                      <div class="form-check form-check-inline col-md-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Battery" name="item[]" @if($title=="Update Customer") {{ in_array('Battery',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox1">Battery </label>
                      </div>
                      <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Mirror RH" name="item[]" @if($title=="Update Customer") {{ in_array('Mirror RH',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox2">Mirror RH </label>
                      </div>
                      <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Mirror LH" name="item[]"@if($title=="Update Customer") {{ in_array('Mirror LH',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox1">Mirror LH</label>
                      </div>
                      <div class="form-check form-check-inline col-md-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Maths" name="item[]" @if($title=="Update Customer") {{ in_array('Maths',explode(',',$vdetails->item)) ?  'checked' : '' }} @endif>
                        <label class="form-check-label" for="inlineCheckbox2">Maths(No field)</label>
                      </div>

                  </div>
                </div>
            </div>

            <div class="card border-dark mx-auto mb-2 p-3 " style="width: 100%;">

                <div class="card-header ">
                  Customer Complaints/ Tasks To Do :-
                  <div class="card-body">

                    <div class="form-group col-md-6 ">
                    <div class="form- group row-md-6">
                        
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="regular" placeholder="Regular" >@if($title=="Update Customer") {{ $vdetails->regular }} @endif</textarea>
                        <spam class='text-danger'>
                          @error("regular")
                          {{$message}}
                          @enderror
                        </spam>
                      </div>
                  </div>

                </div>
                </div>
            </div>
            <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 100%;">
                <div class="card-header ">
                  Vehicle image's:-
                  <div class="card-body">
                        <div class="form-row">
                        <div class="form-inline col-md-4 ">
                          <label for="exampleFormControlFile1">Front</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="front">
                          <spam class='text-danger'>
                            @error("front")
                            {{$message}}
                            @enderror
                          </spam>

                        </div>
                        <div class="form-inline col-md-4 ">
                            <label for="exampleFormControlFile1">Right-Hand-Sied</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="right">
                            <spam class='text-danger'>
                              @error("right")
                              {{$message}}
                              @enderror
                            </spam>
                          </div>
                          <div class="form-inline col-md-4 ">
                            <label for="exampleFormControlFile1">left-Hand-Sied</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="left">
                            <spam class='text-danger'>
                              @error("left")
                              {{$message}}
                              @enderror
                            </spam>
                          </div>
                          <div class="form-inline col-md-4 ">
                            <label for="exampleFormControlFile1">Rear</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rear">
                            <spam class='text-danger'>
                              @error("rear")
                              {{$message}}
                              @enderror
                            </spam>

                          </div>
                          <div class="form-inline col-md-4 ">
                              <label for="exampleFormControlFile1">DashBoard</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dashbord">
                              <spam class='text-danger'>
                                @error("dashbord")
                                {{$message}}
                                @enderror
                              </spam>
                            </div>
                            <div class="form-inline col-md-4 ">
                              <label for="exampleFormControlFile1">Dicky</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dickey">
                              <spam class='text-danger'>
                                @error("dickey")
                                {{$message}}
                                @enderror
                              </spam>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-sm" style="possition:absolute; transform:translate3d(200px,00px,0px);">
                    <button type="submit" class="btn btn-success p">SAVE</button>
                  </div>
                  <div class="col-sm" >
                    <button type="reset" class="btn btn-secondary">Clear</button>
                  </div>
                </div>
            </div>
        </form>
      </div>
    
    
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

