@extends('layout')

@section('register')
    <div class="h-full flex items-center justify-center flex-col p-10 xl:p-28" id="mainformcontainer">
        <h1 class="mb-5">Sign Up</h1>
        <div class="flex justify-center items-center p-10" id="form-box">
            <form method="POST" action="/" id="regfields">
                @csrf
                <div class="mb-4">
                    <label class="fieldLabel" for="usertype">Register as</label>
                    <select name="usertype" id="usertype">
                        <option value="fundcust">Fundraiser/Customer</option>
                        <option value="merchant">Merchant</option>
                    </select>
                    @error('usertype')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name">First name</label>
                    <input type="text" id="fname" name="name">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="lastname">Last name</label>
                    <input type="text" id="lname" name="lastname">
                    @error('lastname')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

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

                <div class="mb-4">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password" name="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
@endsection
