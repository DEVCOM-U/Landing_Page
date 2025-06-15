@php
    $abjad = chr(rand(65, 90)); // Random uppercase letter A-Z
    $colors = [
        'bg-red-500',
        'bg-blue-500',
        'bg-green-500',
        'bg-yellow-500',
        'bg-purple-500',
        'bg-pink-500',
        'bg-indigo-500',
        'bg-teal-500',
        'bg-orange-500',
    ];
    $randomColor = $colors[array_rand($colors)];
@endphp

@if ($avatarUrl ?? false)
    <img src="{{ $avatarUrl }}" alt="{{ $alt ?? $abjad }}" class="w-7 h-7 rounded-full" />
@else
    <div class="w-7 h-7 rounded-full {{ $randomColor }} flex items-center justify-center text-xs  text-white">
        {{ $abjad }}
    </div>
@endif
