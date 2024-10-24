<html>
<head>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <header class="bg-blue-200 p-4 flex items-center">
        <h1 class="text-xl font-bold ml-10">
            Ruang Tulis
        </h1>
    </header>
    <div class="flex">
        <aside class="w-1/6 p-4">
            <div class="flex flex-col items-center space-y-4">
                <button class="bg-blue-500 text-white p-4 rounded-full flex items-center justify-center w-16 h-16">
                    <i class="fas fa-image">
                    </i>
                </button>
                <span>
                    Photo
                </span>
                <button class="bg-blue-500 text-white p-4 rounded-full flex items-center justify-center w-16 h-16">
                    <i class="fas fa-video">
                    </i>
                </button>
                <span>
                    Vidio
                </span>
                <button class="bg-blue-500 text-white p-4 rounded-full flex items-center justify-center w-16 h-16">
                    <i class="fas fa-calendar-alt">
                    </i>
                </button>
                <span>
                    Tanggal
                </span>
            </div>
        </aside>
        <main class="w-5/6 p-4">
            <div class="mb-4">
                <label class="block mb-2" for="judul">
                    Judul
                </label>
                <textarea class="w-full h-16 p-2 bg-blue-100 border border-gray-300" id="judul"></textarea>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="subjudul">
                    Subjudul
                </label>
                <textarea class="w-full h-16 p-2 bg-blue-100 border border-gray-300" id="subjudul"></textarea>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="isi-blog">
                    Isi blog
                </label>
                <textarea class="w-full h-64 p-2 bg-blue-100 border border-gray-300" id="isi-blog"></textarea>
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Simpan
            </button>
            <button class="bg-rose-500 text-white px-4 py-2 rounded ml-4">
                Hapus
            </button>
        </main>
    </div>
</body>

</html>