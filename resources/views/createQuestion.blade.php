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
  <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    <div @click.away="open = false"
      class=" m-4 rounded-lg shadow-md flex flex-col w-full md:w-64 text-gray-700 bg-green-200 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
      x-data="{ open: false }">
      <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
        <a href="#"
          class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
          <img src="{{ URL::to('/') }}/assets/img/logo.png" alt="logo">
        </a>
        <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
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
      <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
          href="#">Dashboard</a>
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
          href="{{url('/')}}">Form Manager</a>
      </nav>
    </div>
    <div class="my-16 mx-24 w-full">
      <div class="flex justify-between">
        <h1 class="text-3xl mb-10 text-green-800">Create Question</h1>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{route('create-question')}}" method="POST">
          @csrf
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-2">
                  <label for="question_number" class="block text-sm font-medium text-gray-700">Question Number</label>
                  <input type="number" name="question_num" id="question_number" autocomplete="question_number"
                    class="mt-1 border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md p-2">
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="part" class="block text-sm font-medium text-gray-700">Part</label>
                  <input type="number" name="part" id="part" autocomplete="part"
                    class="mt-1 border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm  rounded-md p-2">
                </div>

                <div class="col-span-6 sm:col-span-2">
                  <label for="mark" class="block text-sm font-medium text-gray-700">Mark Weight</label>
                  <select id="mark" name="mark" autocomplete="mark"
                    class="mt-1 block w-full p-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-6">
                  <label for="Question" class="block text-sm font-medium text-gray-700">Question</label>
                  <textarea class="
                    mt-1
                    form-control
                    block
                    w-full
                    p-2
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-gray-300
                    rounded-md
                    transition
                    ease-in-out
                    shadow-sm
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                  " id="exampleFormControlTextarea1" rows="3" placeholder="Question" name="question"
                    required></textarea>
                </div>

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



</body>

</html>