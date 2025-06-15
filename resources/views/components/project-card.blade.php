<div class="flex p-4 items-center justify-center">
    <div
        class="relative flex flex-col md:flex-row w-full max-w-[60rem] rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-md p-4 md:p-6">

        <div
            class="relative flex items-center justify-center w-full h-48 sm:h-64 md:w-2/5 shrink-0 overflow-hidden rounded-t-xl md:rounded-r-none md:rounded-l-xl bg-gray-100 bg-clip-border text-gray-700 p-2 md:p-4">
            <img src="{{ $image }}" alt="Project Image" class="w-full h-full object-cover rounded-xl" />
        </div>

        <div class="p-4 md:p-6 flex flex-col w-full">
            <h6 class="mb-2 -mt-2 md:-mt-3 text-xl md:text-2xl font-bold leading-snug text-blue-gray-900">
                {{ $title }}</h6>
            <p class="mb-4 text-gray-700 text-sm md:text-base">
                {{ $description }}
            </p>

            {{-- Foto profil --}}
            <div class="flex flex-wrap items-center justify-start mb-4">
                @foreach ($profiles as $profile)
                    <x-common.avatar :alt="$profile['alt']" />
                @endforeach
            </div>

            <a href="{{ $link }}" class="inline-block">
                <button
                    class="cursor-pointer flex items-center gap-2 rounded-lg py-2 px-4 md:py-3 md:px-6 text-xs md:text-sm font-bold uppercase text-blue-600 transition-all bg-blue-100 hover:bg-blue-200">
                    Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3">
                        </path>
                    </svg>
                </button>
            </a>
        </div>
    </div>
</div>
