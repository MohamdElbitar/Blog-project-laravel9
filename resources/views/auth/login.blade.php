<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Upcube </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


    </head>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="text-center mt-4">
                <div class="mb-3">
                    <a href="login" class="auth-logo">
                        <img src="{{ asset('backend/assets/images/logo_.png') }}" width="200px" height="30" class="logo-dark mx-auto" alt="">
                        <img src="{{ asset('backend/assets/images/logo_.png') }}" width="200px" height="30" class="logo-light mx-auto" alt="">
                    </a>
                </div>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            <!-- UserName -->
            <div>
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>



            <div class="form-group mb-3 text-center row mt-3 pt-1">
                <div class="col-12">
                <x-button >
                    {{ __('Log in') }}
                </x-button>
                </div>
            </div>
            <div class="form-group mb-0 row mt-2">

                <div class="col-sm-7 mt-3">

                    @if (Route::has('password.request'))
                        <a
                        class="text-muted" href="{{ route('password.request') }}">
                        <i class="mdi mdi-account-circle">
                        </i>  {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    </div>
                    <div class="col-sm-5 mt-3">
                     <a href="/register" class="text-muted">
                    <i class="mdi mdi-account-circle">
                        </i> Create an account</a>
                    </div>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>

 <!-- JAVASCRIPT -->
 <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

 <script src="{{ asset('backend/assets/js/app.js') }}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
@if(Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}"
switch(type){
case 'info':
toastr.info(" {{ Session::get('message') }} ");
break;
case 'success':
toastr.success(" {{ Session::get('message') }} ");
break;
case 'warning':
toastr.warning(" {{ Session::get('message') }} ");
break;
case 'error':
toastr.error(" {{ Session::get('message') }} ");
break;
}
@endif
</script>

</body>
</html>
