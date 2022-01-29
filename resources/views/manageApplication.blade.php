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
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
                    href="{{url('/community-dashboard')}}">Dashboard</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-green-800 bg-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-white focus:bg-white focus:outline-none focus:shadow-outline"
                    href="{{url('/manage-application')}}">Manage Application</a>
            </nav>
        </div>
        <div class="my-16 mx-24 w-full">
            <div class="flex justify-between">
                <h1 class="text-3xl mb-10 text-green-800">Manage Application</h1>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <div class="flex justify-between mb-24">
                            <template x-if="tab != 1">
                                <button @click="tab = 1" class="text-green-800 rounded-2xl border border-gray-100 shadow-lg text-center px-36 py-4 hover:bg-green-800 hover:text-white">
                                    <p class="m-auto font-bold">Part 1</p>
                                </button>
                            </template>
                            <template x-if="tab == 1">
                                <button @click="tab = 1" class="text-white rounded-2xl border border-gray-100 bg-green-800 shadow-lg text-center px-36 py-4 hover:bg-white hover:text-green-800">
                                    <p class="m-auto font-bold">Part 1</p>
                                </button>
                            </template>
                            <template x-if="tab != 2">
                                <button @click="tab = 2" class="text-green-800 rounded-2xl border border-gray-100 shadow-lg text-center px-36 py-4 hover:bg-green-800 hover:text-white">
                                    <p class="m-auto font-bold">Part 2</p>
                                </button>
                            </template>
                            <template x-if="tab == 2">
                                <button @click="tab = 2" class="text-white rounded-2xl border border-gray-100 bg-green-800 shadow-lg text-center px-36 py-4 hover:bg-white hover:text-green-800">
                                    <p class="m-auto font-bold">Part 2</p>
                                </button>
                            </template>
                            <template x-if="tab != 3">
                                <button @click="tab = 3" class="text-green-800 rounded-2xl border border-gray-100 shadow-lg text-center px-36 py-4 hover:bg-green-800 hover:text-white">
                                    <p class="m-auto font-bold">Part 3</p>
                                </button>
                            </template>
                            <template x-if="tab == 3">
                                <button @click="tab = 3" class="text-white rounded-2xl border border-gray-100 bg-green-800 shadow-lg text-center px-36 py-4 hover:bg-white hover:text-green-800">
                                    <p class="m-auto font-bold">Part 3</p>
                                </button>
                            </template>
                            <template x-if="tab != 4">
                                <button @click="tab = 4" class="text-green-800 rounded-2xl border border-gray-100 shadow-lg text-center px-36 py-4 hover:bg-green-800 hover:text-white">
                                    <p class="m-auto font-bold">Part 4</p>
                                </button>
                            </template>
                            <template x-if="tab == 4">
                                <button @click="tab = 4" class="text-white rounded-2xl border border-gray-100 bg-green-800 shadow-lg text-center px-36 py-4 hover:bg-white hover:text-green-800">
                                    <p class="m-auto font-bold">Part 4</p>
                                </button>
                            </template>
                        </div>

                        <template x-if="tab == 1">
                            <div>
                        
                        @foreach ( $datas as $data )
                        @if($data->part == 1)
                            <div>
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($answers as $answer)
                                @if($answer->question_num == $data->id)
                                    @php
                                        $counter++;
                                    @endphp
                                    <form action="{{route('update-answer')}}" method="POST">
                                @endif
                            @endforeach
                            @if($counter == 0)
                                <form action="{{route('answering-question')}}" method="POST">
                            @endif
                            @csrf
                            <div class="editor mx-auto  flex flex-col my-8 text-gray-800 border border-gray-100 p-4 shadow-lg  rounded-xl">
                                <div class="flex justify-between">
                                    <div class="ml-2 text-gray-500 font-semibold text-lg pb-4 my-auto">
                                        {{$data->question_num}}. {{$data->question}}
                                    </div>
                                    <div class="text-center mb-4 mr-4 border border-gray-300 rounded-xl shadow-md">
                                        <p class="text-sm font-semibold text-gray-500 border-b border-gray-300 px-2">Mark</p>
                                        <p class="text-base text-gray-500 pb-1">{{$data->mark}}</p>
                                    </div>
                                </div>
                                @php
                                    $counter1 = 0;
                                @endphp
                                @foreach ($answers as $answer)
                                    @if($answer->question_num == $data->id)
                                        @php
                                            $counter1++;
                                        @endphp
                                        <input type="hidden" name="id" value="{{$answer->id}}">
                                        <input type="hidden" name="question_num" value="{{$answer->question_num}}">
                                        
                                    @endif
                                @endforeach
                                @if($counter1 == 0)
                                    <input type="hidden" name="question_num" value="{{$data->id}}">
                                @endif
                                    
                                <textarea name="answer" class="rounded-xl description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Answer here ..."></textarea>
                                

                                <div class="flex justify-between">
                                    @php
                                        $counter2 = 0;
                                    @endphp
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter2++;
                                            @endphp
                                            <p class="text-sm font-semibold my-auto pt-4">Your Current Answer : {{$answer->answer}}</p>
                                        @endif
                                    @endforeach
                                    @if($counter2 == 0)
                                        <p class="text-sm font-semibold my-auto pt-4">You haven't answer yet!</p>
                                    @endif
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter1++;
                                            @endphp
                                            <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Update</button>
                                            
                                        @endif
                                    @endforeach
                                    @if($counter1 == 0)
                                    <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Save</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
                </div>
            </template>
            <template x-if="tab == 2">
                <div>
                    @foreach ( $datas as $data )
                        @if($data->part == 2)
                            <div>
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($answers as $answer)
                                @if($answer->question_num == $data->id)
                                    @php
                                        $counter++;
                                    @endphp
                                    <form action="{{route('update-answer')}}" method="POST">
                                @endif
                            @endforeach
                            @if($counter == 0)
                                <form action="{{route('answering-question')}}" method="POST">
                            @endif
                            @csrf
                            <div class="editor mx-auto  flex flex-col my-8 text-gray-800 border border-gray-100 p-4 shadow-lg  rounded-xl">
                                <div class="flex justify-between">
                                    <div class="ml-2 text-gray-500 font-semibold text-lg pb-4 my-auto">
                                        {{$data->question_num}}. {{$data->question}}
                                    </div>
                                    <div class="text-center mb-4 mr-4 border border-gray-300 rounded-xl shadow-md">
                                        <p class="text-sm font-semibold text-gray-500 border-b border-gray-300 px-2">Mark</p>
                                        <p class="text-base text-gray-500 pb-1">{{$data->mark}}</p>
                                    </div>
                                </div>
                                @php
                                    $counter1 = 0;
                                @endphp
                                @foreach ($answers as $answer)
                                    @if($answer->question_num == $data->id)
                                        @php
                                            $counter1++;
                                        @endphp
                                        <input type="hidden" name="id" value="{{$answer->id}}">
                                        <input type="hidden" name="question_num" value="{{$answer->question_num}}">
                                        
                                    @endif
                                @endforeach
                                @if($counter1 == 0)
                                    <input type="hidden" name="question_num" value="{{$data->id}}">
                                @endif
                                    
                                <textarea name="answer" class="rounded-xl description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Answer here ..."></textarea>
                                

                                <div class="flex justify-between">
                                    @php
                                        $counter2 = 0;
                                    @endphp
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter2++;
                                            @endphp
                                            <p class="text-sm font-semibold my-auto pt-4">Your Current Answer : {{$answer->answer}}</p>
                                        @endif
                                    @endforeach
                                    @if($counter2 == 0)
                                        <p class="text-sm font-semibold my-auto pt-4">You haven't answer yet!</p>
                                    @endif
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter1++;
                                            @endphp
                                            <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Update</button>
                                            
                                        @endif
                                    @endforeach
                                    @if($counter1 == 0)
                                    <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Save</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
                </div>
            </template>
            <template x-if="tab == 3">
                <div>
                    @foreach ( $datas as $data )
                        @if($data->part == 3)
                            <div>
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($answers as $answer)
                                @if($answer->question_num == $data->id)
                                    @php
                                        $counter++;
                                    @endphp
                                    <form action="{{route('update-answer')}}" method="POST">
                                @endif
                            @endforeach
                            @if($counter == 0)
                                <form action="{{route('answering-question')}}" method="POST">
                            @endif
                            @csrf
                            <div class="editor mx-auto  flex flex-col my-8 text-gray-800 border border-gray-100 p-4 shadow-lg  rounded-xl">
                                <div class="flex justify-between">
                                    <div class="ml-2 text-gray-500 font-semibold text-lg pb-4 my-auto">
                                        {{$data->question_num}}. {{$data->question}}
                                    </div>
                                    <div class="text-center mb-4 mr-4 border border-gray-300 rounded-xl shadow-md">
                                        <p class="text-sm font-semibold text-gray-500 border-b border-gray-300 px-2">Mark</p>
                                        <p class="text-base text-gray-500 pb-1">{{$data->mark}}</p>
                                    </div>
                                </div>
                                @php
                                    $counter1 = 0;
                                @endphp
                                @foreach ($answers as $answer)
                                    @if($answer->question_num == $data->id)
                                        @php
                                            $counter1++;
                                        @endphp
                                        <input type="hidden" name="id" value="{{$answer->id}}">
                                        <input type="hidden" name="question_num" value="{{$answer->question_num}}">
                                        
                                    @endif
                                @endforeach
                                @if($counter1 == 0)
                                    <input type="hidden" name="question_num" value="{{$data->id}}">
                                @endif
                                    
                                <textarea name="answer" class="rounded-xl description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Answer here ..."></textarea>
                                

                                <div class="flex justify-between">
                                    @php
                                        $counter2 = 0;
                                    @endphp
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter2++;
                                            @endphp
                                            <p class="text-sm font-semibold my-auto pt-4">Your Current Answer : {{$answer->answer}}</p>
                                        @endif
                                    @endforeach
                                    @if($counter2 == 0)
                                        <p class="text-sm font-semibold my-auto pt-4">You haven't answer yet!</p>
                                    @endif
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter1++;
                                            @endphp
                                            <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Update</button>
                                            
                                        @endif
                                    @endforeach
                                    @if($counter1 == 0)
                                    <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Save</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
                </div>
            </template>
            <template x-if="tab == 4">
                <div>
                    @foreach ( $datas as $data )
                        @if($data->part == 4)
                            <div>
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($answers as $answer)
                                @if($answer->question_num == $data->id)
                                    @php
                                        $counter++;
                                    @endphp
                                    <form action="{{route('update-answer')}}" method="POST">
                                @endif
                            @endforeach
                            @if($counter == 0)
                                <form action="{{route('answering-question')}}" method="POST">
                            @endif
                            @csrf
                            <div class="editor mx-auto  flex flex-col my-8 text-gray-800 border border-gray-100 p-4 shadow-lg  rounded-xl">
                                <div class="flex justify-between">
                                    <div class="ml-2 text-gray-500 font-semibold text-lg pb-4 my-auto">
                                        {{$data->question_num}}. {{$data->question}}
                                    </div>
                                    <div class="text-center mb-4 mr-4 border border-gray-300 rounded-xl shadow-md">
                                        <p class="text-sm font-semibold text-gray-500 border-b border-gray-300 px-2">Mark</p>
                                        <p class="text-base text-gray-500 pb-1">{{$data->mark}}</p>
                                    </div>
                                </div>
                                @php
                                    $counter1 = 0;
                                @endphp
                                @foreach ($answers as $answer)
                                    @if($answer->question_num == $data->id)
                                        @php
                                            $counter1++;
                                        @endphp
                                        <input type="hidden" name="id" value="{{$answer->id}}">
                                        <input type="hidden" name="question_num" value="{{$answer->question_num}}">
                                        
                                    @endif
                                @endforeach
                                @if($counter1 == 0)
                                    <input type="hidden" name="question_num" value="{{$data->id}}">
                                @endif
                                    
                                <textarea name="answer" class="rounded-xl description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Answer here ..."></textarea>
                                

                                <div class="flex justify-between">
                                    @php
                                        $counter2 = 0;
                                    @endphp
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter2++;
                                            @endphp
                                            <p class="text-sm font-semibold my-auto pt-4">Your Current Answer : {{$answer->answer}}</p>
                                        @endif
                                    @endforeach
                                    @if($counter2 == 0)
                                        <p class="text-sm font-semibold my-auto pt-4">You haven't answer yet!</p>
                                    @endif
                                    @foreach ($answers as $answer)
                                        @if($answer->question_num == $data->id)
                                            @php
                                                $counter1++;
                                            @endphp
                                            <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Update</button>
                                            
                                        @endif
                                    @endforeach
                                    @if($counter1 == 0)
                                    <button type="submit" class="btn border border-green-800 p-1 px-6 font-semibold rounded-xl cursor-pointer text-gray-200 ml-2 mt-4 bg-green-800">Save</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                @endforeach
                </div>
            </template>
                </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>