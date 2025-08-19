<div class="min-h-screen flex flex-col md:flex-row bg-gray-50">
    <div class="hidden md:flex w-1/2 bg-cover bg-center justify-center items-center" style="background-image: url('https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=900&q=80');">
        <div class="bg-black bg-opacity-40 w-full h-full flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold text-white mb-4 drop-shadow-lg">Welcome Back</h1>
            <p class="text-lg text-white mb-8 drop-shadow">Sign in to your Rey Tokyo account</p>
        </div>
    </div>
    <div class="flex w-full md:w-1/2 justify-center items-center p-8">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <div class="mb-8 text-center">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Rey Tokyo" class="mx-auto h-12 mb-2">
                <h2 class="text-2xl font-bold mb-2">Sign In</h2>
                <p class="text-gray-500">Use your email and password to access your account.</p>
            </div>
            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" autocomplete="username" required autofocus class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
                    @endif
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-500">Sign In</button>
            </form>
            <div class="mt-6 text-center">
                <span class="text-gray-600 text-sm">Don't have an account?</span>
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline text-sm ml-1">Sign up</a>
            </div>
        </div>
    </div>
</div>