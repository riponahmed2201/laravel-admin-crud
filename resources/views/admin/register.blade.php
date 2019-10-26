<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body >
<div>

    <style>
        body {

            background-image: url({{ asset('assets/images/admin3.jpg') }});
            background-repeat:no-repeat;
            background-size:cover;
        }

    </style>

    <div class="container" style=" margin-top: 200px; ">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-success">Create an Account!</h1>

                    </div>
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('status'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @endif
                    <div class="card-body">
                        <form  action="{{route('custom.register')}}" method="post" >
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name"  placeholder="Name" value="{{old('name')}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail3"  name="email" placeholder="Email"   value="{{old('email')}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label"> Confirm Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword3" name="password_confirmation" placeholder="Password" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-block">Register Account</button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block btn-danger">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block btn-danger" >
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                    <hr>
                                    <a href="{{route('custom.login')}}" >
                                        <p class="text-center">Already have an account? Login!</p>
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
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
