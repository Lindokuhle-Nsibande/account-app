@extends('layout')
@section('page-title')
    <title>Tall Stack App | Login</title>
@endsection
@section('content')
    <section class="register-section relative min-h-screen min-w-full flex justify-center items-center bg-background py-6">
        <div class="card-container py-5 px-7  bg-white rounded-xl w-400 text-center text-gray-500">
            <h1 class="text-4xl text-gray-700 font-bold mb-2">Welcome Back</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
    
            <form action="" wire:submit = "login">
                <div class="grid">
                    <div class="input-container col-span-12 mb-2 text-left">
                        <label class="" for="email">Email</label>
                        <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="email" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="input-container col-span-12 mb-2 text-left">
                        <label class="" for="password">Password</label>
                        <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <a class="col-end-13 col-span-2" href="">Forgot password?</a>
                </div>
            </form>
            <button class="rounded-xl bg-primary py-3 w-full text-white font-bold mt-5 hover:bg-primary-light">Register</button>
            <p class="mt-5">Don't have an account? <a href="/register" class="text-gray-700 font-bold">Register</a></p>
        </div>
    </section>
    
@endsection