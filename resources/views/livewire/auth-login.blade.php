<div class="flex flex-col items-center">
    <x-divisor-fino/>

    <div class="w-full flex flex-col items-center">
        @if ($form === 'login') 
            <form action="" class="flex flex-col items-center w-full sm:w-[80%]">
                <h1 class="text-2xl font-bold mb-6">Iniciar sesión</h1>
                @csrf
                <label for="email" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-4 w-full sm:w-[60%]">
                    <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Correo electrónico</small>
                    <input type="email" id="email" placeholder="Correo electrónico" class="mt-1 px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-700">
                </label>
                <label for="password" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-6 w-full sm:w-[60%]">
                    <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Contraseña</small>
                    <div class="mt-1 relative w-full">
                        <input type="password" id="password" placeholder="Contraseña" class="px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-700 pr-10">
                    </div>
                </label>
                <button type="submit" class="w-full sm:w-[60%] py-1.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-700 dark:hover:bg-blue-600">
                    Iniciar sesión
                </button>
            </form>
        @endif
    
        @if ($form === 'register')
            <form action="" class="flex flex-col items-center w-full sm:w-[80%]">
                <h1 class="text-2xl font-bold mb-6">Registrarse</h1>
                @csrf
                <label for="email" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-4 w-full sm:w-[60%]">
                    <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Correo electrónico</small>
                    <input type="email" id="email" placeholder="Correo electrónico" class="mt-1 px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-700">
                </label>
                <label for="password" class="flex flex-col items-start text-gray-900 dark:text-gray-300 mb-6 w-full sm:w-[60%]">
                    <small class="block text-xs text-gray-900 dark:text-gray-300 mb-1">Contraseña</small>
                    <div class="mt-1 relative w-full">
                        <input type="password" id="password" placeholder="Contraseña" class="px-2 py-0.5 bg-gray-50 dark:bg-neutral-900 w-full border border-gray-400 dark:border-gray-600 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:text-gray-300 text-gray-700 pr-10">
                    </div>
                </label>
                <button type="submit" class="w-full sm:w-[60%] py-1.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-700 dark:hover:bg-blue-600">
                    Iniciar sesión
                </button>
            </form>        
        @endif
    
        <div class="mt-8 space-x-2 text-center text-xs flex flex-row justify-center">
            <a wire:click="loginToRegister()" class="text-gray-600 dark:text-gray-400 hover:underline cursor-pointer">¿No tienes una cuenta?</a>
            <span class="text-gray-400 dark:text-gray-600">|</span>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:underline">¿Problemas con el acceso?</a>
            <span class="text-gray-400 dark:text-gray-600">|</span>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:underline">¿Has olvidado tu contraseña?</a>
        </div>
        
        <x-divisor-grueso/>
            
        @if ($form === 'login')
            <div class="w-full sm:w-[80%] mt-10 flex flex-col items-center justify-center text-center">
                <p class="text-gray-600 dark:text-gray-400 text-xs mb-5">
                    Este es un proyecto formativo desarollado por José Alejandro Prieto S. con la finalidad de brindar una solución integral para el control de tus aprendices en estapa productiva.
                </p>
                <p class="text-gray-600 dark:text-gray-400 text-xs mt-2">
                    © 2026 SENA. Todos los derechos reservados.
                </p>
            </div>
        @endif
    </div>
</div>


