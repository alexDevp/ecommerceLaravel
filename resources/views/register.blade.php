@extends('master')
@section("content")

    <div class="custom-login container">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" name="name" placeholder="User Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                    </div>


                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection
