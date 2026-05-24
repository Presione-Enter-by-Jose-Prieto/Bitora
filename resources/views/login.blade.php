@extends('layouts.auth')

@section('title', 'Welcome Trak')

@section('content')
    <section class="
        grid grid-cols-1 md:grid-cols-2 
        h-auto md:h-[calc(100%-40px)] 
        w-full md:w-[calc(100%-40px)] 
        bg-white dark:bg-neutral-800/50
        border border-neutral-300 dark:border-neutral-700 
        rounded-xl 
    ">
       <div class="
            flex flex-col items-center
            border-r border-neutral-300 dark:border-neutral-700
            p-10
        ">
            <div class="flex flex-col text-center mb-10">
                <h1 class="text-3xl font-bold">Bienvenido a Trak</h1>
                <small>La plataforma ideal para el control de tus aprendices</small>
            </div>
            <!-- Divisor de onda fina -->
            <div class="w-full sm:w-[80%] mb-10">
                <svg class="w-full h-6 text-gray-900 dark:text-gray-400" viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0,20 C90,0 180,40 270,20 C360,0 450,40 540,20 C630,0 720,40 810,20 C900,0 990,40 1080,20 C1170,0 1260,40 1350,20 C1440,0 1440,0 1440,20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
            <div class="w-full flex flex-col items-center">
                <form action="" class="flex flex-col items-center w-full sm:w-[80%]">

                    <h1 class="text-2xl font-bold mb-6">Iniciar sesión</h1>

                    @csrf
                    <label for="email" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-4 w-full sm:w-[60%]">
                        <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Correo electrónico</small>
                        <input type="email" id="email" placeholder="Correo electrónico" class="mt-1 px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-900">
                    </label>
                    <label for="password" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-6 w-full sm:w-[60%]">
                        <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Contraseña</small>
                        <input type="password" id="password" placeholder="Contraseña" class="mt-1 px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-900">
                    </label>
                    <button type="submit" class="w-full sm:w-[60%] py-1.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-700 dark:hover:bg-blue-600">
                        Iniciar sesión
                    </button>
                </form>
                
                <div class="mt-8 space-x-2 text-center text-xs flex flex-row justify-center">
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:underline">¿No tienes una cuenta?</a>
                    <span class="text-gray-400 dark:text-gray-600">|</span>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:underline">¿Problemas con el acceso?</a>
                    <span class="text-gray-400 dark:text-gray-600">|</span>
                    <a href="#" class="text-gray-600 dark:text-gray-400 hover:underline">¿Has olvidado tu contraseña?</a>
                </div>

                <div class="w-full sm:w-[80%] mt-15">
                    <svg class="w-full h-6 text-gray-900 dark:text-gray-400" viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0,20 C80,0 160,40 240,20 C320,0 400,40 480,20 C560,0 640,40 720,20 C800,0 880,40 960,20 C1040,0 1120,40 1200,20 C1280,0 1360,40 1440,20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>

                <div class="w-full sm:w-[80%] mt-10 flex flex-col items-center justify-center text-center">
                    <p class="text-gray-600 dark:text-gray-400 text-xs mb-5">
                        Este es un proyecto formativo desarollado por José Alejandro Prieto S. con la finalidad de brindar una solución integral para el control de tus aprendices en estapa productiva.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                        © 2026 SENA. Todos los derechos reservados.
                    </p>
                </div>
            </div>
       </div>

       <div>
            <img src="" alt="">
       </div>
    </section>

@endsection
