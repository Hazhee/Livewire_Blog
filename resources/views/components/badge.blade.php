@props(['textColor','bgColor'])
<button {{$attributes}} class="rounded-xl px-3 py-1 text-base" style="color: {{$textColor}}; background-color: {{$bgColor}}"> 
    {{$slot}}
</button>

{{-- bg-red-800  text-white --}}