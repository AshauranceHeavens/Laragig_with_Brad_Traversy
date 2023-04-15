<x-layout>
    @include('partials._hero')
    @include('partials._search')


    @unless (count($listings) == 0)

        <div class="">

            <div class="row justify-content-around">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach

            </div>
        </div>
    @else
        <div class="d-flex justify-content-center">
            <p>No listings found</p>
        </div>
    @endunless

    <div class="p-5 ">
        {{ $listings->links() }}
    </div>
</x-layout>
