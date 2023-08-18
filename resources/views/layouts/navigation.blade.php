<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('auto_paint')" :active="request()->routeIs('auto_paint')">
                        {{ __('Auto Paint') }}
                    </x-nav-link>
                    <x-nav-link :href="route('paint_jobs')" :active="request()->routeIs('paint_jobs')">
                        {{ __('Paint Jobs') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>


</nav>
