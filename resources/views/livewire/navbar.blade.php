<div>
    <nav class="fixed bg-white sm:px-4 py-3 dark:bg-gray-900 w-full z-30 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{route('blog.index')}}" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Jojo </span>
        </a>
        <div class="flex md:order-2">
          <button onClick='hidenMenu()' type="button" class="md:hidden inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <div class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-hamburger">
          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{route('blog.index')}}" class="block py-2 pl-3 pr-4 text-white bg-red-700 rounded md:bg-transparent
               md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block 
              py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent
               md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 
               dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Posts</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 
              md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-white 
              dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent
               dark:border-gray-700">Sobre mim</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <script>
        var hidden = true
        function hidenMenu() {
          hidden = !hidden
          if(hidden) {
            document.getElementById('navbar-hamburger').classList.remove('hidden');
          } else {
            document.getElementById('navbar-hamburger').classList.add('hidden');
          }
        }
      </script>
</div>
