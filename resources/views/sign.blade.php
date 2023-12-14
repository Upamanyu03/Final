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
    @if($message=Session::get('success'))
    <div class='alert alert-success alert-block'>
      <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="pt-5">
        <h1 class="text-center"> LOGIN FORM </h1>

      <div class="container">
                      <div class="row">
                          <div class="col-md-5 mx-auto">
                              <div class="card card-body">
                            <form action="{{url('/')}}/signIn" method="POST">
                                @csrf

                         <div class="form-group">
                    <label for="username"> Enter your Email </label>
                   <input type="email" class="form-control text-lowercase"  name="email">
                   <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
                     </div>
             <div class="form-group">
          <label class="d-flex flex-row align-items-center" for="password"> Enter your Password
           <a class="ml-auto border-link small-xl" href="#"> Forget Password? </a> </label>
      <input type="password" class="form-control" name="password" >
      <span class="text-danger">
        @error('password')
            {{ $message }}
        @enderror
      </span>
             </div>
           <div class="form-group mt-4 mb-4">
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
         <label clss="custom-control-label" for="remember-me"> Remember me? </label>
                      </div>
                    </div>
               <div class="form-group pt-1">
            <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                        </div>
                     </form>
                   <p class="small-xl pt-3 text-center">
             <span class="text-muted"> Not a member? </span>
              <a href="{{url('/')}}/signUp"> Sign up </a>
                              </p>
                              </div>
                          </div>
                      </div>
                  </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
