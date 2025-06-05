@props([
    'url' => '/',
    'icon' => null,
    'bgClass'=> 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'block' => false
])

<a href="{{ $url }}"
        class="{{$bgClass}} {{$hoverClass}} {{$textClass}} rounded hover:shadow-md transition duration-300 px-1 {{$block ? 'block' : ''}}">
        @if($icon)
        <i class="fa fa-{{$icon}}"></i> {{ $slot }}
        @endif
      </a>
