<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FavArt</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="">

    <div class="flex flex-row  space-y-5 justify-between w-full h-20 px-2 py-4 bg-gray-50">

        <div class=" flex items-center justify-between text-gray-600 text-3xl px-5"><b>FavArt</b></div>

        <div class="flex flex-row flex-auto">
            <div class="px-2 hover:bg-pink-100 ">
                <div class="flex flex-row space-x-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500 " viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <h4 class="font-bold text-gray-500 hover:text-pink-600">Principal</h4>
                </div>
            </div>

            <div class="px-2 hover:bg-pink-100">
                <div class="flex flex-row space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <h4 class="font-bold text-gray-500 hover:text-pink-600">Comprar</h4>
                </div>
            </div>

            <div class="px-2 hover:bg-pink-100">
                <div class="flex flex-row space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="" />
                    </svg>
                    <h4 class="font-bold text-gray-500 hover:text-pink-600 ">Catálogo</h4>
                </div>
            </div>

            <div class="px-2 hover:bg-pink-100">
                <div class="flex flex-row space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <h4 class="font-regular text-gray-500 hover:text-pink-600">Services</h4>
                </div>
            </div>

        </div>

        <div class="flex flex-row ">
            <button class="rounded-full bg-pink-500 px-2 text-white text-lg">Logout</button>

        </div>


    </div>




</body>

</html>
