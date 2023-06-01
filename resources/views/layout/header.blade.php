<div class="header flex items-center justify-between">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    <div class="flex items-center justify-start">
        <form class="flex items-center">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="voice-search"
                       class="ipt-search border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Searching" required>
            </div>
        </form>
    </div>
    <div class="flex items-center justify-end">
        <div class="notify rounded-full bg-white p-2 mr-2">
            <a href="#"
               class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white  dark:hover:bg-gray-700">
                <i class="fa-regular fa-bell"></i>
            </a>
        </div>
        <div class="flex items-center ml-3">
            <div>
                <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        aria-expanded="false" data-dropdown-toggle="dropdown-admin">
                    <span class="sr-only">Open admin menu</span>
                    <img class="w-8 h-8 rounded-full"
                         src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="admin photo">
                </button>
            </div>
            <div
                class="z-1 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown-admin">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Admin
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        admin@admin.com
                    </p>
                </div>
                <ul class="py-1" role="none">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                           role="menuitem">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                           role="menuitem">Nhật ký</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                           role="menuitem">Danh bạ</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                           role="menuitem">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
