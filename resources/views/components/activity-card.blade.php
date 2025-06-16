<div class="flex items-center justify-center p-2">
    <div
        class="group relative flex flex-col my-2 bg-gray-100 shadow-sm border border-slate-200 rounded-lg w-[64rem] hover:shadow-lg transition-shadow duration-300">
        <div class="relative flex items-center justify-center w-full h-56 overflow-hidden rounded-t-lg">
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="activity" />
        </div>
        <div class="p-4">
            <h6 class="mb-2 text-xl sm:text-2xl font-bold text-gray-800">{{ $title }}</h6>
            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                {{ $description }}
            </p>

            <div class="mt-3 flex">
                <a href="{{ $link }}" class="inline-block">
                    <button
                        class="cursor-pointer flex items-center gap-2 rounded-lg py-3 px-6 text-xs font-bold uppercase text-blue-600 transition-all bg-blue-100 hover:bg-blue-200">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="2"
                            stroke="currentColor" class="h-4 w-4">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
