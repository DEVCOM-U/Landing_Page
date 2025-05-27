<x-layout.app>
    <!-- Hero Section -->
    <div class="bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('img/home.png') }}')">
        <h1 class="text-white text-center md:text-left font-bold text-5xl pt-36 px-6 md:px-20 leading-[4rem]">
            We Make <span class="italic">Space</span> <br />
            For Your <span class="italic">Creativity</span>
        </h1>

        <a href="#about"
            class="absolute bottom-24 right-10 px-6 py-2 hover:bg-gray-300/20 rounded-md transition duration-200">
            <i class="bi bi-arrow-right text-white text-6xl"></i>
        </a>
    </div>

    <!-- About Section -->
    <div id="about" class="px-6 py-14 max-w-3xl mx-auto">
        <h1 class="text-center text-4xl font-bold mb-16">About Us</h1>

        <div class="flex flex-col md:flex-row md:gap-48 gap-5 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-center md:w-[30%]">VISI</h2>
            <p class="text-base md:text-lg md:w-[70%] text-justify [text-wrap:balance]">
                Menciptakan wadah kreatif bagi mahasiswa untuk pengembangan ilmu teknologi, serta menjalin kolaborasi
                antar
                komunitas kreatif.
            </p>
        </div>

        <div class="flex flex-col md:flex-row md:gap-48 gap-5 mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-center md:w-[30%]">MISI</h2>
            <div class="text-base md:text-lg md:w-[70%] space-y-2 text-justify">
                <p>Menciptakan Kompetensi</p>
                <p>Menciptakan Ekosistem kreatif</p>
                <p>Mendukung Kolaborasi & Inovasi</p>
                <p>Memperluas Relasi Antar Sesama Developer</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:gap-48 gap-5 ">
            <h2 class="text-2xl md:text-3xl font-bold text-center md:w-[30%]">Our Program</h2>
            <div class="text-base md:text-lg md:w-[70%] space-y-2 text-justify">
                <p>Sharing Session</p>
                <p>Intensive Learning</p>
                <p>Study Group</p>
            </div>
        </div>
    </div>
</x-layout.app>
