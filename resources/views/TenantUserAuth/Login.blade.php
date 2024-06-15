<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       <div class="container col-4">
        <h1 class="text-center">Tenant User</h1>
        <form action="{{ url('/') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    name="email"
                    class="form-control @error('email') is-invalid  @enderror"
                    placeholder="Enter your email"
                />
                @error('email')
                <small id="helpId" class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="text"
                    name="password"
                    class="form-control @error('password') is-invalid  @enderror"
                    placeholder="Enter your password"
                />
                @error('password')
                <small id="helpId" class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-primary">Login</button>
        </form>
       </div>
    </body>
</html>
