
<x-guest-layout>
@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<section class="min-h-screen flex items-stretch text-white ">
    <div class="lg:flex lg:w-1/2 hidden bg-no-repeat bg-cover relative items-center" style="background-image: url({{asset('images/delivery.jpg')}});">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="w-full px-24 z-10">
            <h1 class="text-5xl font-bold text-left tracking-wide">Entrá, pedí, relajá.</h1>
            <x-jet-validation-errors class="mb-4" />                
        </div>           
    </div>
    <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0 bg-yellow-600" >
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url({{asset('images/delivery.jpg')}});">
            <div class="absolute bg-black opacity-40 inset-0 z-0"></div>
        </div>
        <div class="w-full py-6 z-20">
            <h1 class="">
                <img class="mx-auto h-60 md:h-40 w-auto" src="{{asset('images/logo.png')}}" alt="">
            </h1>
            
            <p class="text-gray-100">
                Usa tu email y tu contraseña.
            </p>
            <form  action="{{ route('login') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" method="POST">
                @csrf
                <div class="pb-2 pt-4">
                    <input type="text" name="email" id="email" placeholder="Email" class="block w-full p-4 text-lg rounded-sm bg-black"required>
                </div>
                <div class="pb-2 pt-4">
                    <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password" id="password" placeholder="Password"required>
                </div>
                @if (Route::has('password.request'))
                <div class="text-right text-white hover:underline hover:text-gray-100">
                    <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                </div>
                @endif
                <div class="px-4 pb-2 pt-4">
                    <button type="submit" class="text-black block w-full p-4 text-lg rounded-full bg-gray-200  focus:outline-none">Iniciar Sesión</button>
                </div>
                <div class="px-4 pb-2 pt-4">
                    <a href="{{route('register')}}" class="text-whiteuppercase block w-full p-4 text-lg rounded-full bg-gray-900 focus:outline-none">Registrarme</a>
                </div>

            </form>
        </div>
    </div>
</section>
</x-guest-layout>