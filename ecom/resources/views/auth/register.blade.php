@extends("layouts.auth")
@section("stlye")
    <style>
        html, body {
            height: 100%;
        }
        .form-signin {
            
            max-width: 330px;
            padding: 1rem;
           }
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 1rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
@endsection
@section("content")
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="">
            @csrf
            <img class = "mb-4" scr="{{asset("assets/img/codeseasy_logo.svg")}}"
                 alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="enter name" >>
                <label for="floatingInput">Name</label>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" >>
                <label for="floatingInput">Email address</label>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating" style="margin-bottom: 1rem;">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Passcode</label>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            @if(session()->has("success"))
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>
            @endif
            @if(session("error"))
                <div class="alert alert-danger">
                    {{session("error")}}
                </div>
            @endif
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <div class="mt-3">
                <a href="">Login here</a>
            </div>
            <p class="mt-5 mb-3 text-body-secondary">&copy; {{date("Y")}} keithunt_35</p>
            </form>
    </main>
    @endsection


