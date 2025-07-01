<x-layout.app>
    <div class="flex items-center justify-center p-2">
        <div class="group p-9 relative flex flex-col my-2 bg-gray-100 border border-slate-200 w-[64rem]">
            <h1 class=" items-center mb-4 md:mb-8 text-gray-800 justify-center flex text-2xl sm:text-3xl  font-bold">
                {{ $project['title'] }}
            </h1>

            <div class="flex flex-col sm:flex-row md:gap-2 gap-4">
                <div class="flex flex-col w-full sm:w-1/2">
                    <div class="relative flex items-center justify-center w-full md:h-80 h-64 overflow-hidden bg-gray-100 p-4">
                        <img src="{{ asset($project['image']) }}" alt="Gambar 1" class="w-80 h-full object-cover" />
                    </div>

                    <div class="relative flex items-center justify-center w-full md:h-80 h-64 overflow-hidden bg-gray-100 p-4">
                        <img src="{{ asset($project['image2']) }}" alt="Gambar 2" class="w-80 h-full object-cover" />
                    </div>
                </div>

                <div class="flex flex-col w-full sm:w-1/2 text-gray-700 gap-4">
                    <p class="text-justify">
                        {{ $project['long_description'] }}
                    </p>
                </div>
            </div>


            <h2 class="items-center text-gray-800 justify-center mt-8 flex text-2xl">Contributor</h2>

            <div class="flex flex-wrap md:gap-3 gap-1 items-center justify-center mt-6">
                @foreach ($project['profiles'] as $profile)
                    <img src="{{ asset($profile['src']) }}" alt="{{ $profile['alt'] }}"
                        class="md:w-16 md:h-16 w-12 h-12 rounded-full border-2 border-white object-cover" />
                @endforeach
            </div>

        </div>
    </div>
</x-layout.app>
