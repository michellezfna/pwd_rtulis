<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Rtulis Registration
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Fredoka One', cursive;
        }
    </style>
</head>

<body class="bg-blue-50 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex overflow-hidden w-3/4 max-w-4xl">
        <div class="w-1/2 bg-blue-500 flex items-center justify-center p-8">
            <img alt="Illustration of a female character with books" class="w-full h-auto" height="400"
                src="rtulis1-removebg-preview.png" width="400" />
        </div>
        <div class="w-1/2 bg-blue-200 p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl text-blue-700">
                    HELLO, SHOBAT TULIS!
                </h1>
                <p class="text-blue-600">
                    Selamat Datang di Website RuangTulis.com silakan shobat Membuat akun Terlebih dahulu
                </p>
            </div>
            <form action="{{route('register.submit')}}">
                <div class="mb-4">
                    <label class="block text-blue-700" for="username">
                        USERNAME
                    </label>
                    <input class="w-full p-2 border border-blue-700 rounded" id="username" type="text" />
                </div>
                <div class="mb-4">
                    <label class="block text-blue-700" for="email">
                        EMAIL
                    </label>
                    <input class="w-full p-2 border border-blue-700 rounded" id="email" type="email" />
                </div>
                <div class="mb-4">
                    <label class="block text-blue-700" for="password">
                        PASSWORD
                    </label>
                    <input class="w-full p-2 border border-blue-700 rounded" id="password" type="password" />
                </div>
                <div class="text-center mb-4">
                    <p class="text-blue-600">
                        Anda sudah memiliki akun?
                        <a class="text-blue-700" href="#">
                            Login
                        </a>
                    </p>
                </div>
                <div class="text-center">
                    <button class="bg-blue-700 text-white px-4 py-2 rounded" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>