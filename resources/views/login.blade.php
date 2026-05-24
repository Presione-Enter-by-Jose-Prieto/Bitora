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

            @livewire('auth-login')
        </div>   

        <div>
            <img src="img2.png" alt="Logo" class="w-full h-full object-cover object-center">
        </div>
    </section>

@endsection
