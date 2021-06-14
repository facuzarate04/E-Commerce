<div>

    <div class="sm:hidden mb-10">

        <x-jet-section-title>
            <x-slot name="title">Cerrar Sesion.</x-slot>
            <x-slot name="description">
                    Presiona el botón "Log Out" para cerrar tu sesión.
            </x-slot>
        </x-jet-section-title>



        <div class="mt-5 ">


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">

                    <x-jet-button href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-button>
                </div>

            </form>

        </div>

    </div>
</div>
