@extends('layouts.admin')
@section('content')
    <div class="container-fluid my-4">
        <form method="post" enctype="multipart/form-data" action="{{ route('createproduct') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $product ? $product->id : null }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="input-group my-3 flex-nowrap">
                <span class="input-group-text" id="addon-wrapping" style="width: 120px">Name</span>
                <input value="{{ $product ? $product->name : old('name') }}" name='name' type="text" class="form-control"
                    placeholder="Name" aria-label="Name" aria-describedby="addon-wrapping">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="input-group my-3 flex-nowrap">
                <span class="input-group-text" style="width: 120px" id="addon-wrapping">Price</span>
                <input value="{{ $product ? $product->price : old('price') }}" name='price' type="text"
                    class="form-control" placeholder="Price" aria-label="Price" aria-describedby="addon-wrapping">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                @if ($product && $product->image)
                    <input type="hidden" value="{{ $product->image }}" name="existedImage">
                    <img src="{{ $product->image }}" class="uploaded-img mb-4">
                @endif
                <label style="width: 120px" class="input-group-text"
                    for="inputGroupFile02">{{ $product && $product->image ? 'New image' : 'Image' }}</label>
                <input value="{{ old('image') }}" name='image' type="file" class="form-control" id="inputGroupFile02">
            </div>

            <button type="submit" class="btn btn-info w-100">{{ $product ? 'Edit' : 'Add new' }}</button>
        </form>
    </div>
@endsection
