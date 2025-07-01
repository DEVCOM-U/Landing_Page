<div class="md:w-2/3 md:ml-12">
    <div class="bg-blue-500 rounded-2xl shadow-lg sm:p-6 p-5">
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-white">Nama</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 block w-full rounded-lg shadow-sm" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 p-2 block w-full rounded-lg shadow-sm" />
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-white">Deskripsi</label>
                <textarea name="description" id="description" rows="6" class="mt-1 block w-full rounded-lg shadow-sm resize-none"></textarea>
            </div>

            <div class="text-right">
                <button type="submit"
                    class="inline-flex items-center px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>
