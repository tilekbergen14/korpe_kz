@extends("layouts.app")

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center" style="padding-top: 210px">
        <div class="bg-light container rounded p-2" style="max-width: 500px">
            <form action="{{ route('register') }}" method='POST' class="text-center">
                @csrf
                <div class="mb-2">
                    <a class="navbar-brand" href="/">MoodHouse</a>
                </div>
                @error('name')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') border border-danger @enderror mb-2"
                        placeholder="Your name" name="name" value={{ old('name') }}>
                </div>
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') border border-danger @enderror mb-2"
                        placeholder="Password" name="password" value={{ old('password') }}>
                </div>
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') border border-danger @enderror mb-2"
                        placeholder="Confirm password" name="password_confirmation"
                        value={{ old('password_confirmation') }}>
                </div>
                @error('securityword')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control @error('securityword') border border-danger @enderror mb-2"
                        placeholder="Word" name="securityword" value={{ old('securityword') }}>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input name='remember' type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                <div class="my-2">Don't have an account? <a href="{{ route('login') }}">Sign in</a></div>

            </form>
        </div>
    </div>
@endsection
