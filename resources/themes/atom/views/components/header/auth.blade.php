@auth
    <div class="relative flex items-center justify-center w-full h-full pr-10 max-w-7xl md:justify-between">
        <div class="flex items-center w-full gap-3">
            <a href="{{ route('index') }}" class="ml-7">
                <img src="{{ asset('images/logo.png') }}" alt="logo" />
            </a>

            <div class="hidden md:flex items-center bg-white dark:bg-gray-900 dark:text-white px-4 rounded-md relative h-[50px]">
                <div class="absolute w-6 h-6 rotate-45 bg-white -left-1 dark:bg-gray-900"></div>
                <span class="relative">{{ __(':online :hotel online', ['online' => $online, 'hotel' => $settings->get('hotel_name')]) }}</span>
            </div>

            <div class="flex items-center gap-3 ml-auto">
                <a href="{{ route('game.nitro') }}">
                    <button
                        class="relative hidden px-6 py-2 text-lg font-semibold text-black transition duration-300 ease-in-out bg-white rounded-full bg-opacity-90 hover:bg-opacity-100 dark:bg-gray-900 dark:text-white md:block">
                        {{ __('Nitro client') }}
                    </button>
                </a>
            </div>
        </div>
    </div>
@endauth