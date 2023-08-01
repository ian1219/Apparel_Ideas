<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apparel Ideas</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('logo/icon.png') }}" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                     <a href="/"> <img src="{{ asset('logo/Apparel_Ideas.png') }}" alt="Logo" class="logo rounded-md w-12 h-12 md:w-32 lg:w-40"></a>
                    </div>
                    
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Men</a>
                            <a href="/" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Women</a>
                            <a href="/" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Kids</a>
                            <a href="/" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <a href="{{ route('auth.login') }}" class="text-gray-300 bg-sky-700 hover:bg-sky-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Login</a>
                  </form>
                    <a href="{{ route('auth.register') }}" class="text-gray-300 bg-sky-700 hover:bg-sky-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">register</a>
                  </form>
                </div>
            </div>
        </div>
      </nav>
      