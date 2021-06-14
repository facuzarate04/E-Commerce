<div class="flex">

    <!-- Local No existente -->

    @if (!$local)
        @livewire('vendedor.crear-local')
    @endif

    <!-- Local en estado Activo -->
    @if ($local)

        @if ($local->localstate->name == 'Activo')
            <!-- Sidebar -->
            <aside>
                <div class="md:flex flex-col md:flex-row md:min-h-screen w-full ">
                    <div @click.away="open = false"
                        class="flex flex-col w-full md:w-64 text-gray-700 bg-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
                        x-data="{ open: false }">
                        <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                            <a
                                class="text-lg font-bold w-full text-center bg-yellow-600  tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                                {{ $local->name }}
                            </a>
                            <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                                @click="open = !open">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                    <path x-show="!open" fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <nav :class="{'block': open, 'hidden': !open}"
                            class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                            <button
                                class="w-full text-left block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                wire:click="$set('action', 'pedidos')">Pedidos</button>
                            <button
                                class="w-full text-left block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                wire:click="$set('action', 'productos')">Productos</button>
                            <button
                                class="w-full text-left block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                wire:click="$set('action', 'datos')">Datos de mi local</button>
                            <button
                                class="w-full text-left block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                wire:click="$set('action', 'estadisticas')">Estadísticas</button>

                        </nav>
                    </div>
                </div>
            </aside>


            <section class="flex-1 text-center">
                <!-- Se irá llamando la vista con su lógica dependiendo de lo que presiono en el sidebar -->
                @switch($action)
                    @case("pedidos")
                        @livewire('vendedor.pedidos')
                    @break
                    @case("productos")
                        @livewire('vendedor.productos')
                    @break
                    @case("datos")
                        @livewire('vendedor.datos')
                    @break
                    @case("estadisticas")
                        @livewire('vendedor.estadisticas')
                    @break
                    @default
                        @livewire('vendedor.home')
                @endswitch


            </section>


            <!-- Local en estado Pendiente -->

        @else
            <div class="p-10 m-auto">
                <div class="lg:flex text-center">
                    <p class="lg:w-1/2">¡Hola!. Estamos muy contentos de que quieras ser nuestro <b>socio comercial</b>. <br>
                    Nuestros administradores están evaluando tu solicitud, junto con la vericidad de los datos de tu local.
                    Disculpa las demoras, nos tomamos con mucha seriedad la aprobación de cada postulación para evitar fraudes comerciales
                    y de esta forma, poder brindarte la seguridad y fiabilidad que tu local merece.</p>
                    <img src="{{ asset('images/administrador-meditando.jpg') }}" alt="" class=" m-auto py-5 lg:py-0  max-h-96 rounded lg:shadow-xl">
                </div>
            </div>
        @endif


    @endif





</div>
