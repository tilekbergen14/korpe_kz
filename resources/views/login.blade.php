@extends("layouts.app")

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-cente" style="padding-top: 210px">
        <div class="bg-light container rounded p-2" style="max-width: 500px">
            <form action="{{ route('login') }}" method='POST' class="text-center">
                @csrf
                <div class="mb-2">
                    <a class="navbar-brand" href="/">Korpe.kz</a>
                </div>
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                @error('email')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') border border-danger @enderror mb-2"
                        placeholder="Name" name="name" value={{ old('name') }}>
                </div>
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') border border-danger @enderror mb-2"
                        placeholder="Password" name="password" value={{ old('password') }}>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="on" name='remember'> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
