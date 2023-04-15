<x-layout>
    @include('partials._search')
    <a href="/" class="d-inline-block text-black text-decoration-none ms-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 me-6 mb-3"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                    alt="" height="130" />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <x-listing-tags :tagsCsv="$listing->tags" class="justify-content-center" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4 mt-3">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>


                        <a href="mailto:{{ $listing->email }}"
                            class="d-block bg-danger text-decoration-none text-white mt-3 p-2 rounded-5 hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="{{ $listing->website }}" target="_blank"
                            class="d-block bg-black text-decoration-none text-white mt-3 py-2 rounded-5 hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>

        {{-- <x-card class="py-2 mt-4 d-flex align-items-center">
            <a href="/listings/{{ $listing->id }}/edit" class="text-decoration-none fw-bold text-black">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form class="ms-2" action="/listings/{{ $listing->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn text-danger"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
        </x-card> --}}
    </div>
</x-layout>
