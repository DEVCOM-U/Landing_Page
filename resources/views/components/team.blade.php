<div class="max-w-4xl mx-auto p-6 text-center">
    {{-- Lead --}}
    <div class="mb-10">
        <img src="{{ asset('img/' . $lead['image']) }}" alt="{{ $lead['name'] }}" class="mx-auto w-24 h-24 rounded-full object-cover" />
        <p class="mt-4 text-sm text-gray-600">{{ $lead['role'] }}</p>
        <h2 class="text-md font-medium">{{ $lead['name'] }}</h2>
    </div>

    {{-- Treasurer --}}
    <div class="mb-10">
        <img src="{{ asset('img/' . $treasurer['image']) }}" alt="{{ $treasurer['name'] }}" class="mx-auto w-24 h-24 rounded-full object-cover" />
        <p class="mt-4 text-sm text-gray-600">{{ $treasurer['role'] }}</p>
        <h2 class="text-md font-medium">{{ $treasurer['name'] }}</h2>
    </div>

    {{-- Leads Section (4 orang pertama setelah treasurer) --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 p-2 mb-24">
        @foreach($leadsSection as $member)
            <div class="text-center">
                <img src="{{ asset('img/' . $member['image']) }}" alt="{{ $member['name'] }}" class="mx-auto w-24 h-24 rounded-full object-cover" />
                <p class="mt-3 text-sm text-gray-600">{{ $member['role'] }}</p>
                <h3 class="text-md font-medium">{{ $member['name'] }}</h3>
            </div>
        @endforeach
    </div>

    {{-- Members Section --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 p-2">
        @foreach($membersSection as $member)
            <div class="text-center">
                <img src="{{ asset('img/' . $member['image']) }}" alt="{{ $member['name'] }}" class="mx-auto w-24 h-24 rounded-full object-cover" />
                <p class="mt-3 text-sm text-gray-600">{{ $member['role'] }}</p>
                <h3 class="text-md font-medium">{{ $member['name'] }}</h3>
            </div>
        @endforeach
    </div>
</div>
