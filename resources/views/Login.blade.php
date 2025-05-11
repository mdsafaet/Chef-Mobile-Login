<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Chef's Table | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-cover bg-center min-h-screen flex items-center justify-center px-4 py-6 sm:py-12" style="background-image: url('{{ asset('images/vbg1.jpg') }}');">
    
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md mx-auto overflow-hidden">
      
      <!-- Header with overlay -->
      <div class="relative">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="bg-cover bg-center text-white py-6 px-8 relative z-10" style="background-image: url('{{ asset('images/bg.jpg') }}');">
          <h1 class="text-center text-2xl font-serif tracking-wide">CHEF'S TABLE</h1>
        </div>
      </div>
      
      <!-- Body -->
      <div class="p-6 sm:p-8">
        <h2 class="text-xl font-semibold mb-1 text-gray-800">Kitchen Access</h2>
        <p class="text-sm text-gray-500 mb-6">Sign in to manage your restaurant</p>

        <form>
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
            />
          </div>

          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
            />
          </div>

          <!-- Remember me -->
          <div class="flex items-center mb-5">
            <input type="checkbox" id="remember" class="h-4 w-4 text-yellow-600 border-gray-300 rounded"/>
            <label for="remember" class="ml-2 text-sm text-gray-600">Keep me signed in</label>
          </div>

          <!-- Submit -->
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-yellow-500 to-amber-700 text-white py-3 rounded-md font-semibold hover:from-yellow-600 hover:to-amber-800 transition"
          >
            <i class="fas fa-door-open mr-2"></i>Enter Kitchen
          </button>
        </form>

        <!-- Help -->
        <div class="mt-5 text-center">
          <a href="#" class="text-sm text-yellow-600 hover:underline">
            <i class="fas fa-question-circle mr-1"></i>Need help accessing?
          </a>
        </div>
      </div>

      <!-- Footer -->
      <div class="bg-gray-100 px-6 py-4 text-center">
        <div class="flex justify-center space-x-4 text-gray-500 text-lg">
          <a href="#" class="hover:text-yellow-600"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-yellow-600"><i class="fab fa-facebook"></i></a>
        </div>
        <p class="text-xs text-gray-400 mt-2">© 2025 Chef's Table Restaurant. All recipes reserved.</p>
      </div>
    </div>

  </body>
</html>
