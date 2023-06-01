@extends('layout.base')

@section('title', 'Chat')
@section('css')
        <link href="{{ mix('assets/styles/pages/admin/chat.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container mx-auto mt-3">
        <div class="border rounded flex">
            <div class="user p-3 border-b border-gray-600 bg-white">
                <div class="user-receive p-2 font-bold text-center mb-3" style="width: 200px">
                    <h1>Danh sách người nhận</h1>
                </div>
                <div class="user-receive-detail flex mx-auto p-2 chat-active" role="button">
                    <div class="user-receive-detail_image">
                        <li class="fa fa-user mr-4" style="width: 30px; height: 40px;"></li>
                    </div>
                    <div class="user-receive-detail_info">
                        <span class="user-receive-detail_info-user_name mr-3">Emma</span>
                        <span class="user-receive-detail_info_phone_number text-sm text-gray-500">0123456789</span>
                    </div>
                </div>

                <div class="user-receive-detail flex mx-auto p-2" role="button">
                    <div class="user-receive-detail_image">
                        <li class="fa fa-user mr-4" style="width: 30px; height: 40px;"></li>
                    </div>
                    <div class="user-receive-detail_info">
                        <span class="user-receive-detail_info-user_name mr-3">Alex</span>
                        <span class="user-receive-detail_info_phone_number text-sm text-gray-500">0123456789</span>
                    </div>
                </div>
                <div class="user-receive-detail flex mx-auto p-2" role="button">
                    <div class="user-receive-detail_image">
                        <li class="fa fa-user mr-4" style="width: 30px; height: 40px;"></li>
                    </div>
                    <div class="user-receive-detail_info">
                        <span class="user-receive-detail_info-user_name mr-3">Alexis</span>
                        <span class="user-receive-detail_info_phone_number text-sm text-gray-500">0123456789</span>
                    </div>
                </div>

            </div>
            <div class="message w-full">
                <div class="p-3 border-b border-gray-300 bg-white text-center">
                    <span class="block ml-2 text-2xl font-bold text-gray-600">Emma</span>
                </div>
                <div class="w-full p-6 overflow-y-auto h-[35rem]">
                    <ul class="space-y-2">
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                <span class="block">Hi</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">Hiiii</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">how are you?</span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                    <span
                                        class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                <span class="block">Hi</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">Hiiii</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">how are you?</span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                    <span
                                        class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                <span class="block">Hi</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">Hiiii</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">how are you?</span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                    <span
                                        class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                <span class="block">Hi</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">Hiiii</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">how are you?</span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                    <span
                                        class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                <span class="block">Hi</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">Hiiii</span>
                            </div>
                        </li>
                        <li class="flex justify-end">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                                <span class="block">how are you?</span>
                            </div>
                        </li>
                        <li class="flex justify-start">
                            <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                                    <span
                                        class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. </span>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
                    <input type="text" placeholder="Message"
                           class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                           name="message" required/>
                    <button type="submit">
                        <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
