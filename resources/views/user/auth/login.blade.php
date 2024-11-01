{{-- <div class="container px-4 py-5 mx-auto">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card card0">
                    <div class="d-flex flex-lg-row flex-column-reverse">
                        <div class="card card1">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row justify-content-center my-auto">
                                    <div class="col-md-10 col-12">
                                        <div class="row justify-content-center px-3 mb-3">
                                            <img id="logo"
                                                src="https://i.ibb.co/HYRMgr8/26znqdblzf-WUKbfm30-Yplsy-Xy3-U7-J32-MCa-Fn-Ms7g.png">
                                        </div>

                                        <h3 class="mb-2 text-center heading">Login To Your Dashboard</h3>

                                        <p class="text-black form-desc text-center">
                                            Reach out and let the magic of collaboration illuminate
                                            our skies.
                                        </p>

                                        <div class="form-outline mb-3">
                                            <x-input-label class="form-label" for="login" :value="__('Email Or Phone')" />
                                            <x-text-input id="login"
                                                class="form-control form-control-solid rounded-0" type="text"
                                                name="login" :value="old('login')" required autocomplete="off"
                                                placeholder="example@gmail.com" />
                                            <x-input-error :messages="$errors->get('login')" class="mt-2" />
                                        </div>

                                        <div class="form-outline position-relative">
                                            <x-input-label class="form-label" for="password" :value="__('Password')" />

                                            <x-text-input id="password"
                                                class="form-control form-control-solid rounded-0 pe-5" type="password"
                                                name="password" required autocomplete="new-password"
                                                placeholder="*******" />

                                            <i id="togglePassword" class="bi bi-eye position-absolute"
                                                style="top: 73%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>


                                        <div class="row justify-content-center px-3">
                                            <button type="submit" class="btn-block btn-color">Sign In Now</button>
                                        </div>

                                        <div class="row justify-content-center my-2 text-center pt-2">
                                            <a href="{{ route('password.request') }}"><small class="text-muted">Forgot
                                                    Password?</small></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center mb-5 pt-4">
                                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?
                                        <a href="{{ route('register') }}" class="ml-2 ps-2 text-center">Register
                                            Now</a>
                                    </p>
                                </div>
                            </form>

                        </div>
                        <div class="card card2">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white mb-4">Welcome Back! Let’s Get You Logged In</h3>
                                <small class="text-white">Welcome back! To access your account, please enter your
                                    username and password in the fields below. If you don’t have an account yet, you can
                                    easily create one by clicking the 'Sign Up' button</small>
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


                <div class="col-12 col-lg-6">
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
                                <a href="/forgot-password" class="text-decoration-none">Forgot Password?</a>
                            </div>

                            <button type="submit" style="background: linear-gradient(45deg, #6a11cb, #2575fc); color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s ease;" onmouseover="this.style.background='linear-gradient(45deg, #2575fc, #6a11cb)'" onmouseout="this.style.background='linear-gradient(45deg, #6a11cb, #2575fc)'">Sign In</button>

                            
                            <p class="mt-2">
                                Not a member? <a href="sign-up.html">Sign Up</a>
                            </p>


                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
