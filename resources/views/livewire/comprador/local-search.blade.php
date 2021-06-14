<div>

    <header class="bg-gray-300 p-2 md:flex justify-center">

        <!--Buscador Nombre-->
        <div class="text-black font-semibold flex px-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-auto mx-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" class="w-full  rounded-xl" wire:model="localnombre"
                placeholder="Buscar local por nombre...">
        </div>

        <!--Dropdown Tipo de local-->
        <div class="px-2 flex justify-center py-2 md:py-0">
            <div x-data="{ dropdownOpen: false }" class="">
                <button @click="dropdownOpen = !dropdownOpen"
                    class="relative z-10 block rounded-md bg-white p-2 focus:outline-none text-black flex">Tipo
                    <svg class="m-auto h-6 w-6 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div x-show="dropdownOpen" class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    @foreach ($localtypes as $localtype)
                        <a @click="dropdownOpen = !dropdownOpen"
                            class=" cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                            wire:click="$set('localtipo','{{ $localtype->name }}')">
                            {{ $localtype->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <button wire:click="limpiar" class="text-black px-2 font-semibold my-auto cursor-pointer">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg></button>

        </div>




    </header>


    <!--Locales-->

    <h1 class="text-center text-black text-xl font-bold">{{$localtipo}}</h1>

    @foreach ($locals as $local)

        <div
            class="m-auto mt-10 mb-10 max-w-xl bg-gray-400 border-2 md:p-6 rounded-md tracking-wide shadow-xl text-center">
            <div id="header" class="md:flex items-center mb-4 ">
                <img alt="avatar" class="w-3/4 md:w-32 h-24 rounded-xl my-2 md:my-0 mx-auto" src="{{ asset($local->url) }}" />
                <div class="flex-1 px-6 m-auto">
                    <div id="header-text" class="leading-5 m-auto  lg:px-0 ">
                        <h4 id="name" class="text-xl font-bold text-white bg-black">{{ $local->name }}</h4>
                        <h5 id="job" class="font-semibold text-black">{{ $local->localtype->name }}</h5>
                        <h6>{{ $local->localidad->name }} / {{ $local->calle }} / {{ $local->numero }}</h6>
                    </div>
                    <div id="quote">
                        <a href="{{ route('local.show', [$local, $local->name]) }}" type="button"
                            class="text-sm m-auto rounded-xl bg-gray-800 p-2 mt-2 font-semibold shadow-xl hover:bg-gray-900">PEDIR
                            AQUÍ</a>
                    </div>
                </div>
            </div>
            <hr class="hidden md:block bg-black border-black">
        </div>

    @endforeach




</div>
