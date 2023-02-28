@extends('layout.app')
@section('title', 'main table')
@section('content')
    <div class="px-12 mx-auto max-w-screen-xl w-full mb-12">
        <label class="text-base w-2/4 flex items-center gap-4 mb-10">
            <span>
                Название товарного знака:
            </span>

            <div class="relative grow w-1/5">
                <input class="block border w-full h-8 leading-8 px-2 border-zinc-300 rounded text-sm" type="search" name="trade_mark" required />

                <svg class="absolute top-1/2 right-2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path class="text-red-500" d="M8.3335 13.3335C11.0949 13.3335 13.3335 11.0949 13.3335 8.3335C13.3335 5.57207 11.0949 3.3335 8.3335 3.3335C5.57207 3.3335 3.3335 5.57207 3.3335 8.3335C3.3335 11.0949 5.57207 13.3335 8.3335 13.3335Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="text-red-500" d="M12.0835 12.0835L15.8335 15.8335" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </label>

        <div class="w-full">
            <div class="grid grid-cols-5 justify-items-center border border-b-zinc-400">
                <span class="border-r border-zinc-300 block w-full text-center font-medium">
                    знак
                </span>

                <span class="border-r border-zinc-300 block w-full text-center font-medium">
                    задача
                </span>

                <span class="border-r border-zinc-300 block w-full text-center font-medium">
                    deadline
                </span>

                <span class="border-r border-zinc-300 block w-full text-center font-medium">
                    soft deadline
                </span>

                <span class="border-r border-zinc-300 block w-full text-center font-medium">
                    статус
                </span>
            </div>
            <div id="table">
                <div data-role="group" class="border border-b-2 border-b-zinc-300">
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                </div>

                <div data-role="group" class="border border-b-2 border-b-zinc-300">
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                </div>

                <div data-role="group" class="border border-b-2 border-b-zinc-300">
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                </div>

                <div data-role="group" class="border border-b-2 border-b-zinc-300">
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                    <div data-role="row" class="grid grid-cols-5 justify-items-center border-b">
                        <div class="border-r border-zinc-300 block w-full text-center ">
                            31.12.2024 Contex
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            Задача
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            31.12.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            25.10.2024
                        </div>

                        <div class="border-r border-zinc-300 block w-full text-center">
                            В работе
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection