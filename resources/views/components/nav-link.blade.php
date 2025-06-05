@props([
    'url' => '/',
    'active' => false,
    'icon'=> null,
    'mobile' => false
])

@if($mobile)
<a href="{{$url}}" class="block text-white hover:underline py-2 {{ $active ? 'text-yellow-500 font-bold' : '' }}">
  @if($icon)
  <i class="fa fa-{{ $icon }} mr-1"></i>
  @endif
    {{ $slot }}
</a>
@else

<a href="{{$url}}" class="text-white hover:underline py-2 {{ $active ? 'text-yellow-500 font-bold' : '' }}">
  @if($icon)
  <i class="fa fa-{{ $icon }} mr-1"></i>
  @endif
    {{ $slot }}
</a>
@endif
