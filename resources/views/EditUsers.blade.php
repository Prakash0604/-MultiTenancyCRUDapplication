<!doctype html>
<html lang="en">
    <head>
        <title>
            Edit Users
        </title>
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
        <h1 class="text-center mt-4 mb-4">Edit Users</h1>
        <div class="container  d-flex ">
            <form action="{{ route('users.update',$users->id) }}" class="col-4  mx-auto mt-4 p-4 " method="POST">
                <div class="mb-3">
                    @method('PUT')
                    @csrf
                    <label for="" class="form-label">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid  @enderror"
                        placeholder="Full Name"
                        value="{{ $users->name }}"
                    />
                    @error('name')
                    <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid  @enderror"
                        placeholder="Enter your email"
                        value="{{ $users->email }}"
                    />
                    @error('email')
                    <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid  @enderror"
                        placeholder="Enter your password"
                        value="{{ $users->password }}"
                    />
                    @error('password')
                    <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input
                        type="password"
                        name="cpassword"
                        class="form-control @error('cpassword') is-invalid  @enderror"
                        placeholder="Confirm Password"
                    />
                    @error('cpassword')
                    <small id="helpId" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-warning">Update Users</button>
            </form>
        </div>
    </body>
</html>
