@extends('layout.base')

@section('title', 'Trang chủ ')
@section('css')
    <link href="{{ mix('assets/styles/pages/admin/dashboard.css') }}" rel="stylesheet">
@endsection
@section('sidebar')
    <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800 rounded-r-lg">
        <div class="text-xs px-10 text-gray-400 mb-3">
            <label>Admins tool</label>
        </div>

        <ul class="space-y-2 font-medium">
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} rounded-r-lg">
                <button
                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-dashboard"
                    data-collapse-toggle="dropdown-dashboard">
                    <svg aria-hidden="true"
                         class="w-5 h-5 mr-2 {{ request()->routeIs('admin.dashboard') ? 'text-blue-600' : '' }} dark:text-blue-500"
                         fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
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
            <li>
                <a href="#"
                   class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                    <i class="fa fa-note-sticky w-5 h-5 mr-2"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Nhật Ký</span>
                </a>
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
            <li>
                <a href="#"
                   class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                    <i class="fa fa-comment w-5 h-5 mr-2"></i>
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
@endsection
@section('content')
    <div class="flex items-center justify-between">
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
    <div class="content">

    </div>
@endsection
