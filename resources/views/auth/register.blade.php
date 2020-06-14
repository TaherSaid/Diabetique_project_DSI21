
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signUp.css">
    <title>Document</title>
</head>
<body >

        <div class="formContainer">
            <h2>Sign In</h2>
            <img src="image/facebook.png"/>
            <img src="image/google_logo.png" />
            <p class="text">thank's for your register</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">

                    <input id="name" type="text" placeholder="enter your name here " class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="form-group row">

                    <input id="email" type="email" placeholder="enter your adresse email here " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="form-group row">

                    <input id="password" type="password" placeholder="enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="form-group row">

                    <input id="password-confirm" placeholder="password confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>

<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
    <div class="col-6">
        <a href="/login" class="btn btn-primary">login</a>
    </div>
</div>
        </form>
    </div>
</body>
</html>
