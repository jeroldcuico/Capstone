<nav id="header" class="fixed w-full z-30 top-0 bg-gray-300">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
                <svg class="fill-current inline" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none"><style>@keyframes flipping{0%{transform:rotate3d(1,1,0,0deg)}to{transform:rotate3d(1,1,0,180deg)}}</style><g style="animation:flipping 1.5s cubic-bezier(.96,-.2,0,1.29) both infinite alternate-reverse"><path fill="#0A0A30" fill-rule="evenodd" d="M5.71 11.025a5.25 5.25 0 1010.5 0 5.25 5.25 0 00-10.5 0zm5.25-7a7 7 0 100 14 7 7 0 000-14z" clip-rule="evenodd"/><rect width="1.839" height="3.677" x="16.139" y="17.375" fill="#265BFF" rx=".2" transform="rotate(-45 16.14 17.375)"/></g></svg>
                SkillSearch
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Active</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="#">link</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="#">link</a>
                </li>
            </ul>
            <button id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
            </button>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
