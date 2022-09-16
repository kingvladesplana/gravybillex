@extends('layout')

@section('register')
    <div class="h-full flex items-center justify-center flex-col p-10 xl:p-28" id="mainformcontainer">
        <h1 class="mb-5">Login</h1>
        <div class="flex justify-center items-center p-10" id="form-box">
            <form method="POST" action="/users/dashboard" id="regfields">
                @csrf
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
