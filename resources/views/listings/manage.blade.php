<x-layout>
    <div class="mx-4">
        <x-card class="bg-gray-50 border border-gray-200 p-2 rounded">
            <header>
                <h1 class="text-3xl text-center fw-bold my-1 text-uppercase">
                    Manage Gigs
                </h1>
            </header>

            <table class="w-100 table-auto rounded-sm mt-3">
                <tbody>
                    @unless ($listings->isEmpty())
                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $listing->id }}" class="text-decoration-none text-black fw-bold">
                                        {{ $listing->title }}
                                    </a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $listing->id }}/edit"
                                        class="text-blue-400 text-decoration-none px-6 py-2 rounded-xl">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form class="ms-2" action="/listings/{{ $listing->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn text-danger"><i class="fa-solid fa-trash"></i>Delete</button>
                                    </form>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border">
                            <td class="px-1 py-2 ">
                                <p class="text-center fw-bold ">
                                    No listings found
                                </p>
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>
        </x-card>
</x-layout>
