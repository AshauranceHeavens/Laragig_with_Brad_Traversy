@props(['listing'])

<x-card class="col-md-6 border rounded py-3 px-5 my-2 d-grid align-items-center">

    <div class="d-flex flex-row align-items-center justify-content-center">
        <div class="col-md-4 ">
            <img class="w-100 img d-none d-md-block"
                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                alt="" />
        </div>
        <div class="mx-3 col-md-8">
            <h3 class="fw-bold fs-3">
                <a href="/listings/{{ $listing->id }}" class="text-dark text-decoration-none">
                    {{ $listing->title }}
                </a>
            </h3>
            <div class="fw-bolder mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" class="justify-content-start" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
