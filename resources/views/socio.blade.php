<x-guest-layout>

    <!-- component -->
    <section>
        <div class="min-h-screen">

            <!--  Vendedores  -->
            <div class="container mx-auto flex flex-col md:flex-row items-center md:py-12 shadow-xl md:shadow-none">
                <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8 shadow-2xl">
                    <h1 class="text-3xl md:text-5xl p-2 py-5 tracking-loose">Socio Vendedor</h1>
                    <p class="text-sm md:text-base text-black">Al convertirte en socio vendedor de PediloTrank,
                        vas a poder postular tu local y <b>vender</b> todos tus productos en línea. <br>
                        Al digitalizar tu local, tu <b>alcance</b> se va a ser mucho mayor.
                        De forma adicional te brindamos una funcionalidad, dentro de la aplicación, que
                        se encarga de generar y mostrarte <b>estadísticas</b> sobre tus ventas y tu local.
                    </p>
                    <h2 class="text-xl md:text-xl font-semibold p-2  tracking-loose  mb-4">Y vos. ¿Qué estás esperando?.</h2>
                    <a href="{{route('register-vendedor')}}"
                        class="bg-gray-800 hover:bg-gray-900 text-white hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-transparent hover:border-white">
                        ¡Quiero ser vendedor!</a>
                </div>
                <div class="p-8 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-1/2 justify-center">
                    <div class="flex content-center bg-white ">
                            <img class="max-h-96 m-auto flex-1 "
                                src="images/home1.jpg">                      
                    </div>
                </div>
            </div>
            <!--  Repartidores  -->
            <div class="container mx-auto flex flex-col md:flex-row items-center md:py-12 shadow-xl md:shadow-none">
                <div class="p-8 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-1/2 justify-center">
                    <div class="flex content-center bg-white ">
                            <img class="max-h-96 m-auto flex-1 "
                                src="images/home2.jpg">                      
                    </div>
                </div>
                <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8 shadow-2xl">
                    <h1 class="text-3xl md:text-5xl p-2 py-5 tracking-loose">Socio Repartidor</h1>
                    <p class="text-sm md:text-base text-black">Al convertirte en socio repartidor de PediloTrank,
                        vas a poder ofrecer tus servicios de <b>delivery</b>. <br>
                        De esta forma, vas a poder repartir todos los <b>pedidos</b> que se realicen
                        en los locales de nuestros vendedores. <br>
                    </p>
                    <h2 class="text-xl md:text-xl font-semibold p-2  tracking-loose  mb-4">Y vos. ¿Qué estás esperando?.</h2>
                    <a href="{{route('register-repartidor')}}"
                        class="bg-gray-800 hover:bg-gray-900 text-white hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-transparent hover:border-white">
                        ¡Quiero ser repartidor!</a>
                </div>
                
            </div>
        </div>
    </section>

</x-guest-layout>
