@extends('layouts.app')

@section('content')

<div class="mx-auto w-4/6 rounded mb-6  mt-6 pl-2 pr-2">
    <div class="font-sans antialiased h-screen flex">
        <!-- Sidebar / channel list -->
        <div class="primary-background-color text-purple-lighter flex-none w-64 pb-6 hidden md:block">
            <div class="mb-8 mt-8">
                <div class="px-4 mb-2 text-white flex justify-between items-center">
                    <div class="opacity-75">Direct Messages</div>
                    <div>
                        <svg class="fill-current h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mb-3 px-4">
                    <span class="bg-green-700 rounded-full block w-2 h-2 mr-2"></span>
                    <span class="text-white opacity-75">Kofi Moses <span class="text-grey text-sm"></span></span>
                </div>
                <div class="flex items-center mb-3 px-4">
                    <span class="bg-green-700 rounded-full block w-2 h-2 mr-2"></span>
                    <span class="text-white opacity-75">Ama Yaa</span>
                </div>
                <div class="flex items-center px-4 mb-6 opacity-50">
                    <span class="border border-white rounded-full w-2 h-2 mr-2"></span>
                    <span class="text-white">You there</span>
                </div>
            </div>

        </div>
        <!-- Chat content -->
        <div class="flex-1 flex flex-col bg-white overflow-hidden">
            <!-- Top bar -->
            <div class="border-b flex px-6 py-2 items-center flex-none">
                <div class="flex flex-col">
                    <h3 class="text-grey-darkest mb-1 font-extrabold">#Messages</h3>
                    <div class="text-grey-dark text-sm truncate">
                        Chit-chattin' about ugly HTML and mixing of concerns.
                    </div>
                </div>

            </div>

                <div class="px-6 py-4 flex-1 overflow-y-scroll">

                     <!-- A message -->
                     <div class="flex items-start mb-4 text-sm">
                        <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">codebug</span>
                                <span class="text-grey text-xs">11:46</span>
                            </div>
                            <p class="text-black leading-normal">Hello World!</p>
                        </div>
                    </div>
                     <!-- A message -->
                     <div class="flex items-start mb-4 text-sm">
                        <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">codebug</span>
                                <span class="text-grey text-xs">11:46</span>
                            </div>
                            <p class="text-black leading-normal">Hello World!</p>
                        </div>
                    </div>
                     <!-- A message -->
                     <div class="flex items-start mb-4 text-sm">
                        <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">codebug</span>
                                <span class="text-grey text-xs">11:46</span>
                            </div>
                            <p class="text-black leading-normal">Hello World!</p>
                        </div>
                    </div>
                     <!-- A message -->
                     <div class="flex items-start mb-4 text-sm">
                        <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">codebug</span>
                                <span class="text-grey text-xs">11:46</span>
                            </div>
                            <p class="text-black leading-normal">Hello World!</p>
                        </div>
                    </div>
                     <!-- A message -->
                     <div class="flex items-start mb-4 text-sm">
                        <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                        <div class="flex-1 overflow-hidden">
                            <div>
                                <span class="font-bold">codebug</span>
                                <span class="text-grey text-xs">11:46</span>
                            </div>
                            <p class="text-black leading-normal">Hello World!</p>
                        </div>
                    </div>

                </div>



             <div class="pb-6 px-4 flex-none">
                <div class="flex rounded-lg border-2 border-grey overflow-hidden">
                    <span class="text-3xl text-grey border-r-2 border-grey p-2">
                        <svg class="fill-current h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z"/></svg>
                      </span>
                    <input type="text" class="w-full px-4" placeholder="Message #general" />
                </div>
            </div>
            </div>

        </div>
    </div>
</div>



 @endsection
