<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .primary-text-color{
            color:#07223f;
            }
            .primary-background-color{
                background-color: #07223f;
            }
        </style>
    </head>
    <body class="bg-gray-200">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">

            <div class="max-w-md w-full">
            <div>
                <img class="mx-auto h-48 w-auto" src={{asset('asset/images/logos.png')}} alt="logo">
                <h2 class=" text-center text-3xl leading-9 font-extrabold primary-text-color">
                Sign in
                </h2>

            </div>
            <form class="mt-8" action="{{ route('login') }}" method="POST">
                @csrf

                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm">
                <div>
                    <input id="email" aria-label="Email address" name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="-mt-px">
                    <input id="password" aria-label="Password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

                <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium primary-text-color focus:outline-none focus:underline transition ease-in-out duration-150">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
                </div>

                <div class="mt-6">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white primary-background-color focus:outline-none focus:border-black-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-white transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    </span>
                    {{ __('Login') }}
                </button>
                </div>
            </form>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>
