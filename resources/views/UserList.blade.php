<!doctype html>
<html lang="en">
    <head>
        <title>User List</title>
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
       <div class="container">
        @if (session()->has('message'))
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>

                <strong>{{ session()->get('message') }}</strong>
            </div>

        @endif
        <h1 class="text-center mt-4 mb-4">User list</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary float-right mb-4">Create user</a>
        <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr class="">
                    <td scope="row">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{Str::limit( $user->password ,'20') }}</td>
                    <td>
                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST" style="display:inline">
                            @method('DELETE')
                            @csrf
                            {{-- <a href="{{ route('users.destroy',$user->id) }}"  class="btn btn-danger">Delete</a> --}}
                            <button class="btn btn-danger" >Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No data found</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
       </div>

    </body>
</html>
