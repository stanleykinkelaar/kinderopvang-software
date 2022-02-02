<nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="hidden lg:inline mr-6 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                    <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <a href="{{ route('index') }}" class="text-md font-semibold flex items-center lg:mr-1.5">
                    <img src="{{ asset('/images/logo.svg') }}" class="h-6 mr-2" alt="Kidler Logo">
                    <span class="self-center text-xl font-bold whitespace-nowrap">Kidler</span>
                </a>
                <form action="#" method="GET" class="hidden lg:block lg:pl-8">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="mt-1 relative lg:w-96">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="flex items-center">

                <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                    <span class="sr-only">Search</span>

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </button>

                <button type="button" data-dropdown-toggle="notification-dropdown" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                    <span class="sr-only">View notifications</span>

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                </button>

                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow-lg my-4 overflow-hidden z-20 max-w-sm" id="notification-dropdown">
                    <div class="block bg-gray-50 text-gray-700 text-base text-center font-medium px-4 py-2">
                        Notifications
                    </div>
                    <div>
                        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ asset('/images/users/bonnie-green.png') }}" alt="Jese image">
                                <div class="h-5 w-5 bg-cyan-600 border border-white rounded-full flex items-center justify-center absolute -mt-5 ml-6">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5">New message from <span class="text-gray-900 font-semibold">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs font-medium text-cyan-600">a few moments ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ asset('images/users/jese-leos.png') }}" alt="Jese image">
                                <div class="h-5 w-5 bg-gray-900 border border-white rounded-full flex items-center justify-center absolute -mt-5 ml-6">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5"><span class="text-gray-900 font-semibold">Jese leos</span> and <span class="font-medium text-gray-900">5 others</span> started following you.</div>
                                <div class="text-xs font-medium text-cyan-600">10 minutes ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ asset('images/users/joseph-mcfall.png') }}" alt="Joseph image">
                                <div class="h-5 w-5 bg-red-600 border border-white rounded-full flex items-center justify-center absolute -mt-5 ml-6">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5"><span class="text-gray-900 font-semibold">Joseph Mcfall</span> and <span class="font-medium text-gray-900">141 others</span> love your story. See it and view more stories.</div>
                                <div class="text-xs font-medium text-cyan-600">44 minutes ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ asset('images/users/leslie-livingston.png') }}" alt="Leslie image">
                                <div class="h-5 w-5 bg-green-400 border border-white rounded-full flex items-center justify-center absolute -mt-5 ml-6">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5"><span class="text-gray-900 font-semibold">Leslie Livingston</span> mentioned you in a comment: <span class="text-teal-500 font-medium" href="#">@bonnie.green</span> what do you say?</div>
                                <div class="text-xs font-medium text-cyan-600">1 hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-11 w-11 rounded-full" src="{{ asset('images/users/robert-brown.png') }}" alt="Robert image">
                                <div class="h-5 w-5 bg-purple-500 border border-white rounded-full flex items-center justify-center absolute -mt-5 ml-6">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                </div>
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5"><span class="text-gray-900 font-semibold">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.</div>
                                <div class="text-xs font-medium text-cyan-600">3 hours ago</div>
                            </div>
                        </a>
                    </div>
                    <a href="#" class="block bg-gray-50 hover:bg-gray-100 text-gray-900 text-base text-center font-normal py-2">
                        <div class="inline-flex items-center ">
                            <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                            View all
                        </div>
                    </a>
                </div>

                <button type="button" data-dropdown-toggle="apps-dropdown" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                    <span class="sr-only">View notifications</span>

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </button>

                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow-lg my-4 overflow-hidden z-20 max-w-sm" id="apps-dropdown">
                    <div class="block bg-gray-50 text-gray-700 text-base text-center font-medium px-4 py-2">
                        Apps
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Sales</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Users</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Inbox</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Profile</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Settings</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Products</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Pricing</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Billing</div>
                        </a>
                        <a href="#" class="block text-center hover:bg-gray-100 p-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-500 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                            <div class="text-sm font-medium text-gray-900">Logout</div>
                        </a>
                    </div>
                </div>

                <div class="ml-3">
                    <div>
                        <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:ring-4 focus:ring-gray-300" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="{{ asset('images/users/neil-sims.png') }}" alt="user photo">
                        </button>
                    </div>

                    <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown-2">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm" role="none">
                                {{ auth()->user()->getFullName() }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                {{ auth()->user()->getEmail() }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" role="menuitem">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" role="menuitem">Earnings</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" role="menuitem">Uitloggen</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="https://themesberg.com/product/tailwind-css/dashboard-windster-pro" target="_blank" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-3">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                    Buy now
                </a>
            </div>
        </div>
    </div>
</nav>
