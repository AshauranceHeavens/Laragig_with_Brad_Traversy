@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv);
@endphp
<ul {{ $attributes->merge(['class' => 'd-flex align-items-center p-0']) }}>
    @foreach ($tags as $tag)
        <li class="bg-black rounded-5 px-3 py-1 list-unstyled me-2">
            <a href="/?tag={{ $tag }}" class="text-white text-decoration-none">
                {{ $tag }}
            </a>
        </li>
    @endforeach
</ul>
