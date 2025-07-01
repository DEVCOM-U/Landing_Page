<x-layout.app>
    <div class="flex flex-col md:flex-row md:gap-10 gap-2 mt-8 md:mb-16">
        <div
            class="flex flex-col font-bold md:pl-12 pt-8 text-2xl md:w-1/2 text-center md:text-left w-full text-gray-800">
            Frequently Ask Question
        </div>
        <x-accordion />
    </div>

    <div class="flex flex-col md:flex-row md:my-6 mx-12">
        <div class="w-full md:w-1/3 space-y-4 text-gray-800 mb-6">
            <div>
                <h2 class="md:text-5xl text-2xl font-bold leading-snug text-center md:text-left">
                    Questions or <br> Suggestions? <br> Let Us Know!
                </h2>
                <p class="mt-3 text-md text-gray-700 font-light text-center md:text-left">
                    Fill out the form, we’ll get back to you soon
                </p>
            </div>

            <div class="mt-12 hidden md:block">
                <h3 class="text-lg font-medium text-gray-800 md:mt-10">Chat with us</h3>
                <p class="text-md text-gray-700 font-light mt-2">Our friendly team is here to help</p>
                <p class="text-md text-gray-700 font-light">
                    <a href="mailto:devcommunity@gmail.com" class="hover:underline">
                        devcommunity@gmail.com
                    </a>
                </p>
            </div>
        </div>

        <x-form />

        <div class="block md:hidden mt-8 space-y-2 text-gray-800 text-center">
            <h3 class="text-lg font-medium">Chat with us</h3>
            <p class="text-md text-gray-600 font-light">Our friendly team is here to help</p>
            <p class="text-md text-gray-600 font-light">
                <a href="mailto:devcommunity@gmail.com" class="hover:underline">
                    devcommunity@gmail.com
                </a>
            </p>
        </div>

    </div>
</x-layout.app>
