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
          <h4>{{ $title }}</h4>
        </div>

        <div class="card-body">
            <a href="{{url('/')}}/view" style="color: black"><-back</a><br><br>
            <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name" class=""> First Name: </label>
                <input type="text" id="name" name="name" class="float-right" style="width: 80%" @if($title=="Update Customer") value="{{ $vdetails->name }}" @endif ><br><br>
                <label for="last" class=""> Last Name: </label>
                <input type="text" id="name" name="last" class="float-right"  style="width: 80% "@if($title=="Update Customer") value="{{ $vdetails->last }}" @endif><br><br>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" class="float-right" style="width: 80%"@if($title=="Update Customer") value="{{ $vdetails->email }}" @endif><br><br>
                <label for="date">Create Date : </label>
                <input type="date" id="start" name="date" min="1900-01-01" max="3000-01-01" class="float-right" style="width: 80%" @if($title=="Update Customer") value={{ $vdetails->date }} @endif><br><br>

              <div class="card  border-dark mx-auto mb-2 p-3 " style="width: 100%;">
                <div class="card-header ">
                  Customer Details:-
                  <div class="card-body">
                    <div class="form-row">
                     <div class="form-grouUpdate Customer                   <label for="name">Vehical Number:</label>
                       <input type="text" class="form-control" id="name" placeholder="Vehicle number" name="Vno" @if($title=="Update Customer") value="{{ $vdetails->Vno }}" @endif>
                          </div>
                      <div class="form-group col-md-6">
                     <label for="name">Vehicle Make: </label>
                     <input type="text" class="form-control" id="name" placeholder="Vehical Make" name="Vmake" @if($title=="Update Customer") value="{{ $vdetails->Vmake }}" @endif>
                   </div>
                </div>
             <div class="form-group">
           <label for="name">Phone Number:</label>
               <input type="tel" class="form-control" id="name" placeholder="0000000000" name="tel" @if( $title =="Update Customer") value="{{ $vdetails->tel }}" @endif>
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
                            
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="regular"  >@if($title=="Update Customer") {{ $vdetails->regular }} @endif</textarea>
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

                            </div>
                            <div class="form-inline col-md-4 ">
                                <label for="exampleFormControlFile1">Right-Hand-Sied</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="right">
                              </div>
                              <div class="form-inline col-md-4 ">
                                <label for="exampleFormControlFile1">left-Hand-Sied</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="left">
                              </div>
                              <div class="form-inline col-md-4 ">
                                <label for="exampleFormControlFile1">Rear</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rear">

                              </div>
                              <div class="form-inline col-md-4 ">
                                  <label for="exampleFormControlFile1">DashBoard</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dashbord">
                                </div>
                                <div class="form-inline col-md-4 ">
                                  <label for="exampleFormControlFile1">Dicky</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="dickey">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

