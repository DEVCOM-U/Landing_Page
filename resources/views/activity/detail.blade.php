<x-layout.app>
    <div class="flex items-center justify-center p-2">
        <div class="group p-9 relative flex flex-col my-2 bg-gray-100 shadow-sm border border-slate-200 w-[64rem]">
            <h1 class="text-center text-gray-800 text-2xl sm:text-3xl font-bold">{{ $activity['title'] }}</h1>

            <div class="relative flex items-center justify-center h-72 overflow-hidden mb-7 mt-5">
                <img class="h-full w-[64rem] object-cover" src="{{ asset($activity['image']) }}" alt="activity" />
            </div>

            <p class="text-gray-700 text-sm sm:text-base text-justify leading-relaxed">
                {{ $activity['long_description'] }}
            </p>
        </div>
    </div>
</x-layout.app>
