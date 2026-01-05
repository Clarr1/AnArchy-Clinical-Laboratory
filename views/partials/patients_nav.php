<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-2 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl">AnArchy Clinical Laboratory</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li>
                    <button command="show-modal" commandfor="dialog"
                        class=" cursor-pointer flex items-center gap-2 rounded-md bg-black px-4 py-2 text-sm font-semibold text-white hover:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>Appointment</button>
                    </li>
                    <li><a class="md:p-4 py-2 px-0 block" href="/AnArchyClinical-Laboratory/patients/view-appointment">View appointment</a></li>
                    <li><a class="md:p-4 py-2 px-0 block" href="#">Log out</a></li>
            </ul>
        </nav>
    </div>
</header>