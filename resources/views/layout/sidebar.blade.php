<div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800 rounded-r-lg">
    <div class="text-xs px-10 text-gray-400 mb-3">
        <label>Admins tool</label>
    </div>

    <ul class="space-y-2 font-medium">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} rounded-r-lg">
            <button
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:text-blue-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-dashboard"
                data-collapse-toggle="dropdown-dashboard">
                <li class="fa fa-home w-5 h-5"></li>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Trang chủ</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-dashboard" class="hidden py-2 space-y-2 bg-white">
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} hover:bg-gray-300">
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa fa-layer-group w-5 h-5 mr-2 {{ request()->routeIs('admin.dashboard') ? 'text-blue-700' : '' }} "></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Các nhóm con</span>
                    </a>
                </li>
                <li class="hover:bg-gray-300">
                    <a href="#"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa fa-user-group w-5 h-5 mr-2"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Xem thành viên</span>
                    </a>
                </li>
                <li class="hover:bg-gray-300">
                    <a href="#"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-bug w-5 h-5 mr-2"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Báo cáo</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="rounded-r-lg">
            <button
                class="flex items-center w-full p-2 transition duration-75 rounded-lg group hover:bg-gray-200 hover:text-blue-600 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-phonebook"
                data-collapse-toggle="dropdown-phonebook">
                <i class="fa fa-phone w-5 h-5 mr-2"></i>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Danh bạ</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-phonebook" class="hidden py-2 space-y-2 bg-white">
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa fa-user-group w-5 h-5 mr-2"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Bạn bè</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa fa-people-group w-5 h-5 mr-2"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Nhóm</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <i class="fa fa-user-secret w-5 h-5 mr-2"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">Official Account</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ request()->routeIs('admin.chat.index') ? 'active' : '' }} hover:bg-gray-300">
            <a href="{{ route('admin.chat.index') }}"
               class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                <i class="fa fa-comment w-5 h-5 mr-2 {{ request()->routeIs('admin.chat.index') ? 'text-blue-700' : '' }}"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">Chat</span>
            </a>
        </li>
        <li>
            <a href="#"
               class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                <i class="fa fa-user w-5 h-5 mr-2"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">Tài khoản</span>
            </a>
        </li>
    </ul>
</div>
