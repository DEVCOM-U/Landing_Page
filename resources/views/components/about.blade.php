<div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('img/rapat.jpg') }}');">
    <div
        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-4xl md:text-5xl font-bold">DevCom U</h1>
        <p class="text-lg md:text-xl mt-2">We Make <span class="italic">Space</span><br>For Your <span
                class="italic">Creativity</span></p>
    </div>
</div>

<div class="my-8 md:mx-8 mx-5 grid grid-cols-1 lg:grid-cols-2 md:gap-6 gap-3">
    <div class="p-6 border-2 rounded-2xl shadow-sm bg-white">
        <h2 class="text-3xl font-bold mb-4 text-blue-700">Our Story</h2>
        <p class="text-gray-700 text-justify leading-relaxed">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatum ducimus quae possimus fugiat
            soluta veritatis nemo quibusdam quia! Temporibus atque natus ducimus quae nisi ad ea quod facere culpa.
            <br><br>
            Ipsa tempore similique aliquam tempora itaque necessitatibus delectus, laudantium assumenda ratione in quos
            dolorum at quae sint vero maxime magni doloribus quo corrupti neque exercitationem fugiat, nemo eius?
            <br><br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti non, iste reprehenderit cupiditate
            doloribus minima, cum corporis quaerat, illum similique fugiat. Voluptatem mollitia minus reprehenderit
            facere harum, dolor dolores exercitationem?
        </p>
    </div>

    <div class="md:space-y-6 space-y-3">
        <div class="p-6 border-2 rounded-2xl shadow-sm bg-white">
            <h2 class="text-3xl font-bold mb-4 text-blue-700">Visi</h2>
            <p class="text-gray-700">Menciptakan wadah kreatif bagi mahasiswa untuk pengembangan ilmu teknologi, serta
                menjalin kolaborasi antar komunitas kreatif.</p>
        </div>

        <div class="p-6 border-2 rounded-2xl shadow-sm bg-white">
            <h2 class="text-3xl font-bold mb-4 text-blue-700">Misi</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Menciptakan Kompetensi</li>
                <li>Menciptakan Ekosistem kreatif</li>
                <li>Mendukung Kolaborasi & Inovasi</li>
                <li>Memperluas Relasi Antar Sesama Developer</li>
            </ul>
        </div>
    </div>
</div>

{{-- stat --}}

<div class="flex flex-wrap justify-center sm:gap-16 gap-6 p-6 rounded-2xl shadow-md">
    <div class="flex items-center gap-4 px-10 py-6 rounded-2xl bg-[#E1FF01] text-blue-700 border">
        <div class="text-4xl font-extrabold">80+</div>
        <div class="text-left leading-tight">
            <div class="text-md uppercase tracking-wide font-medium">Members</div>
        </div>
    </div>

    <div class="flex items-center gap-4 px-10 py-6 rounded-2xl bg-[#E1FF01] text-blue-700">
        <div class="text-4xl font-extrabold">5</div>
        <div class="text-left leading-tight">
            <div class="text-md uppercase tracking-wide font-medium">Sessions</div>
            <div class="text-md uppercase tracking-wide font-medium">Held</div>
        </div>
    </div>

    <div class="flex items-center gap-4 px-10 py-6 rounded-2xl bg-[#E1FF01] text-blue-700">
        <div class="text-4xl font-extrabold">1</div>
        <div class="text-left leading-tight">
            <div class="text-md uppercase tracking-wide font-medium">Project</div>
            <div class="text-md uppercase tracking-wide font-medium">Completed</div>
        </div>
    </div>
</div>


{{-- carousel --}}

<section class="py-12 px-6 bg-gray-50">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Gallery</h2>

    <div class="swiper max-w-4xl mx-auto rounded-2xl overflow-hidden shadow-md">
        <div class="swiper-wrapper">

            {{-- slide 1 --}}
            <div class="swiper-slide relative">
                <img src="/img/diskusi.jpg" alt="Session 1" class="w-full h-80 object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-black/50 text-white p-4">
                    <h3 class="text-lg font-semibold">First Meet Devcom U</h3>
                </div>
            </div>

            {{-- slide 2 --}}
            <div class="swiper-slide relative">
                <img src="/img/rapat.jpg" alt="Workshop" class="w-full h-80 object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-black/50 text-white p-4">
                    <h3 class="text-lg font-semibold">Workshop: Backend with NodeJS</h3>
                </div>
            </div>

            {{-- slide 3 --}}
            <div class="swiper-slide relative">
                <img src="/img/meet.jpg" alt="Mini Project" class="w-full h-80 object-cover" />
                <div class="absolute bottom-0 left-0 w-full bg-black/50 text-white p-4">
                    <h3 class="text-lg font-semibold">Monthly Online Meet</h3>
                </div>
            </div>

        </div>

        <div class="swiper-button-next text-blue-600"></div>
        <div class="swiper-button-prev text-blue-600"></div>

        <div class="swiper-pagination"></div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
