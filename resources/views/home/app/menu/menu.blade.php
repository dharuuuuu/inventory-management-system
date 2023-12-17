<header
  class='w-full bg-transparent sticky z-50 top-0 transition'
>

<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-[85rem] w-full flex flex-wrap items-center justify-between mx-auto p-4">
    <a class="flex-none" href="/">
      <p class="text-xl font-semibold dark:text-white">GudangTani</p>
      <p class="text-base">Manajemen Gudang</p>
    </a>
    <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      {{-- @foreach($menus as $menu)
        @if(count($menu->children))
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar{{ $loop->iteration }}" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-orange-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
              {{ $menu->title }}
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <div id="dropdownNavbar{{ $loop->iteration }}" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                @foreach($menu->children as $child)
                <li>
                    <a href="{{ $child->route_link }}" class="block px-4 py-2 hover:bg-orange-100 hover:text-orange-500 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                        {{ $child->title }}
                    </a>
                </li>
                @endforeach
              </ul>
            </div>
        </li>    
        @else
        <li>
          <a href="{{ $menu->route_link }}" class="hover:text-orange-500 block py-2 pl-3 pr-4 md:p-0" aria-current="page">
            {{ $menu->title }}
          </a>
        </li>
        @endif
      @endforeach --}}
        <li>
            <a href="/tentang" class="hover:text-green-700 block py-2 pl-3 pr-4 md:p-0">About</a>
        </li>
        <li>
            <a href="/produk" class="hover:text-green-700 block py-2 pl-3 pr-4 md:p-0">Product</a>
        </li>
        <li>
            <a href="/artikel" class="hover:text-green-700 block py-2 pl-3 pr-4 md:p-0">Article</a>
        </li>
        @if (Auth::check())
            <li>
                <a href="/dashboard" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Dashboard</a>
            </li>
        @else
            <li>
                <a href="/login" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Login</a>
            {{-- </li>
            <li> --}}
                {{-- <a href="/register" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Register</a> --}}
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
</header>