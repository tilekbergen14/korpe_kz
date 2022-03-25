@extends('layouts.admin')
@section('content')
    <div class="container my-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">Search</button>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3" style="height: 35px">
            <div class="input-group" style="width: auto">
                {{-- <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                </div> --}}
            </div>
            <form action="">
                <button class="btn btn-primary">Create product</button>
            </form>
        </div>
        <table class="text-light table rounded">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="width: 50px">1</th>
                    <td scope="row" style="width: 150px">
                        <div class="list-img rounded">
                            <img class="list-img rounded" src="" alt="No Image">
                        </div>
                    </td>
                    <td scope="row" class="text-ellipsis">Name
                    </td>
                    <td scope="row" style="width: 150px">Status</td>
                    <td scope="row" style="width: 150px">
                        <form action="delete.php" method="POST">
                            <input name="id" type="hidden" value="">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
