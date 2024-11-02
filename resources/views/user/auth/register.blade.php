{{-- <div class="container px-4 py-5 mx-auto">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card card0">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="card card1">

                        <form method="POST" action="{{ route('register') }}">

                            @csrf

                            <div class="row justify-content-center my-auto">
                                <div class="col-md-10 col-12">
                                    <div class="row justify-content-center px-3 mb-3">
                                        <img id="logo"
                                            src="https://i.ibb.co/HYRMgr8/26znqdblzf-WUKbfm30-Yplsy-Xy3-U7-J32-MCa-Fn-Ms7g.png">
                                    </div>
                                    <h3 class="mb-2 text-center heading">Sign Up Now</h3>

                                    <div class="form-outline mb-1">
                                        <x-input-label class="form-label mb-0" for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="form-control form-control-solid"
                                            type="text" name="name" :value="old('name')" required autofocus
                                            autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <div class="form-outline mb-1">
                                        <x-input-label class="form-label mb-0" for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control form-control-solid"
                                            type="email" name="email" :value="old('email')" required
                                            autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="form-outline mb-1">
                                        <x-input-label class="form-label mb-0" for="phone" :value="__('Phone')" />
                                        <x-text-input id="phone" class="form-control form-control-solid"
                                            type="text" name="phone" :value="old('phone')" required
                                            autocomplete="off" />
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>

                                    <!-- HTML -->
                                    <div class="form-outline mb-1">
                                        <x-input-label class="form-label mb-0" for="password" :value="__('Password')" />
                                        <div class="input-group mb-3">
                                            <input id="password" type="password"
                                                class="form-control form-control-solid" name="password" required
                                                autocomplete="new-password" aria-describedby="password-toggle-btn">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="password-toggle-btn">
                                                <i id="password-icon" class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="form-outline mb-1">
                                        <x-input-label class="form-label mb-0" for="password_confirmation"
                                            :value="__('Confirm Password')" />
                                        <div class="input-group mb-3">
                                            <x-text-input id="password_confirmation"
                                                class="form-control form-control-solid" type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="password-confirmation-toggle-btn">
                                                <i id="password-confirmation-icon" class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="row justify-content-center px-3">
                                        <button type="submit" class="btn-block btn-color">Sign Up Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="text-center mb-5 pt-4">
                                <p href="#" class="sm-text mx-auto mb-3">Already have an account?
                                    <a href="{{ route('login') }}" class="ml-2 ps-2 text-center">Login
                                        Now <i class="fa-solid fa-eye"></i></a>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="card card2">
                        <div class="my-auto mx-md-5 px-md-5 right">
                            <h3 class="text-white mb-4">Create Your Account - Join Us Today </h3>
                            <small class="text-white">Welcome! We're excited to have you join our community. Fill
                                out the form below to create your account and gain access to all our features.
                                Whether you're signing up to enjoy our services or to stay updated, we're here to
                                make your experience smooth and enjoyable. </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@extends('frontend.master')

@section('content')
    <div class="sign-in-area ptb-100" style="margin-top: 100px">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('frontend/img/login.png') }}" alt="">
                </div>

                <div class="col-12 col-lg-6 my-auto">
                    <div class="sign-in-form2">


                        <h5>Sign In</h5>
                        <p>Welcome back! Please sign in to continue.</p>

                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Username or Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>

                            <div class="form-group text-center d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <a href="" class="text-decoration-none">Forgot Password?</a>
                            </div>

                            <button type="submit"
                                style="background: linear-gradient(45deg, #6a11cb, #2575fc); color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s ease;"
                                onmouseover="this.style.background='linear-gradient(45deg, #2575fc, #6a11cb)'"
                                onmouseout="this.style.background='linear-gradient(45deg, #6a11cb, #2575fc)'">Sign
                                In</button>


                            <p class="mt-2">
                                Not a member? <a href="">Sign Up</a>
                            </p>


                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
