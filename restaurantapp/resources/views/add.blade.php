@extends('layout')





@section('content')
    <div class="col-sm-6">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Email Only</label>
                <input type="text" class="form-control" name="name""
                        placeholder=" Enter Name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Name </label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address </label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" >
            </div>
            {{-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
