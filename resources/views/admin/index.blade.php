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
            <form action="{{ route('createproduct') }}">
                <button class="btn btn-primary">Create product</button>
            </form>
        </div>
        <div style="max-width: 100%; overflow-x: auto">
            <table class="text-light table rounded" style="overflow-x: auto">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col" style="text-align: end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td scope="row" style="width: 150px">
                                <div class="list-img rounded">
                                    <img class="list-img rounded"
                                        style="height: 64px; aspect-ratio: 16 / 9; object-fit: cover"
                                        src="{{ $product->image }}" alt="No Image">
                                </div>
                            </td>
                            <td scope="row" style="width: 100%" class="text-ellipsis">{{ $product->name }}
                            </td>
                            <td scope="row" style="width: 150px">{{ $product->price }}</td>
                            <td scope="row" style="width: max-content">
                                <div class="d-flex">
                                    <form action="{{ route('delete', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input name="id" type="hidden" value="{{ $product->id }}">
                                        <button type=" submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <form action="{{ route('createproduct') }}" method="get">
                                        <input name="id" type="hidden" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-warning ml-2">Edit</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
