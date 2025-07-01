<div class="w-full sm:p-3 p-10 bg-white rounded" x-data="{ selected: null }">
    @foreach ($faqs as $index => $faq)
        <div class="border-b border-gray-400 sm:me-8">
            <button
                @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null"
                class="w-full text-justify py-4 px-2 flex justify-between items-center focus:outline-none"
            >
                <span class="sm:text-lg text-md font-normal text-gray-800">
                    {{ $faq['question'] }}
                </span>
                <svg
                    :class="{ 'rotate-180': selected === {{ $index }} }"
                    class="w-5 h-5 text-gray-600 transform transition-transform duration-200"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="selected === {{ $index }}" x-collapse class="px-4 pb-4 text-gray-600 text-sm">
                {{ $faq['answer'] }}
            </div>
        </div>
    @endforeach
</div>
