<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full" x-data="{ tab: 1 }">
        <div @click.away="open = false"
            class=" m-4 rounded-lg shadow-md flex flex-col w-full md:w-64 text-gray-700 bg-green-200 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
            x-data="{ open: false }">
            <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                <a href="#"
                    class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                    <img src="{{ URL::to('/') }}/assets/img/logo.png" alt="logo">
                </a>
                <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                    @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}"
                class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
                href="{{url('/community-dashboard')}}">Dashboard</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
                    href="{{url('/manage-application')}}">Manage Application</a>
            </nav>
        </div>
        <div class="my-16 mx-24 w-full">
            <div class="flex justify-between">
                <h1 class="text-3xl mb-10 text-green-800">Dashboard</h1>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <div class="flex justify-between mb-36">
                            <div class="rounded-xl border border-gray-100 px-8 pb-8 pt-4 shadow-lg hover:bg-gray-200">
                                <div class="text-center">
                                    <p class="font-base text-xl text-green-800 py-4">Part 1</p>
                                    <div class="rounded-xl bg-green-800 p-8">
                                        <p class="font-bold text-xl text-white">{{count($Part1Answer)}} / {{count($Part1Question)}}</p>
                                        <p class="text-sm text-white">Answered</p>
                                    </div>  
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-8 pb-8 pt-4 shadow-lg hover:bg-gray-200">
                                <div class="text-center">
                                    <p class="font-base text-xl text-green-800 py-4">Part 2</p>
                                    <div class="rounded-xl bg-green-800 p-8">
                                        <p class="font-bold text-xl text-white">{{count($Part2Answer)}} / {{count($Part2Question)}}</p>
                                        <p class="text-sm text-white">Answered</p>
                                    </div>  
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-8 pb-8 pt-4 shadow-lg hover:bg-gray-200">
                                <div class="text-center">
                                    <p class="font-base text-xl text-green-800 py-4">Part 3</p>
                                    <div class="rounded-xl bg-green-800 p-8">
                                        <p class="font-bold text-xl text-white">{{count($Part3Answer)}} / {{count($Part3Question)}}</p>
                                        <p class="text-sm text-white">Answered</p>
                                    </div>  
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-8 pb-8 pt-4 shadow-lg hover:bg-gray-200">
                                <div class="text-center">
                                    <p class="font-base text-xl text-green-800 py-4">Part 4</p>
                                    <div class="rounded-xl bg-green-800 p-8">
                                        <p class="font-bold text-xl text-white">{{count($Part4Answer)}} / {{count($Part4Question)}}</p>
                                        <p class="text-sm text-white">Answered</p>
                                    </div>  
                                </div>
                            </div>
                        </div>

                </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>