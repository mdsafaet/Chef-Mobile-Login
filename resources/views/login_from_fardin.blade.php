<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Order Portal - Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-orange-50 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden flex flex-col md:flex-row w-full max-w-4xl mx-4">
        <!-- Left Section with Image -->
        <div class="md:w-1/2 bg-orange-100 p-6 flex items-center justify-center">
            <img src="https://media.istockphoto.com/id/2149515192/photo/chef-preparing-a-seafood-starter.jpg?s=2048x2048&w=is&k=20&c=Dj9Ut8XBUzsaQq6ROirgP3G8EgVpar14PTMi12_0LKI=" alt="Chef Cooking"
                class="rounded-xl shadow-lg w-full h-auto object-cover">
        </div>

        <!-- Right Section with Form -->
        <div class="md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-center text-orange-700 mb-6">Chef Portal Login</h2>

            @if(session('error'))
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <form action="" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border border-orange-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" />
                </div>

                <div>
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border border-orange-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" />
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox text-orange-600">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="" class="text-sm text-orange-600 hover:underline">Forgot
                        password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-700 transition duration-200">
                    Sign In
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                New to the kitchen?
                <a href="" class="text-orange-600 hover:underline">Create an account</a>
            </p>
        </div>
    </div>
</body>

</html>