@props([
    'icon'  => '',
    'title' => ''
])

<li class="flex items-center flex-col gap-y-4 w-16 lg:w-32 min-w-16 lg:min-w-32">
    @if ($icon != '')
        {{ $icon }}
    @else
        <div class="bg-gray-300 h-32 w-24"></div>
    @endif
    <h4 class="text-[0.5rem] lg:text-base font-bold text-center">
        {{ $title }}
    </h4>
</li>
