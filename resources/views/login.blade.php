@extends('master')
@section("content")

    <div class="custom-login container">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <form action="login" method="POST">
                    <div class="mb-4">
                            @csrf
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" placeholder="Email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password"  placeholder="Password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
