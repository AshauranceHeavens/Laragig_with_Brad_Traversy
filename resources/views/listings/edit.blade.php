<x-layout>
    <div class="container px-5 pt-5">
        <x-card class="mx-5 mt-5 shadow">
            <header class="text-center">
                <h2 class="text-2xl fw-bold text-uppercase mb-1">
                    Edit Gig
                </h2>
                <p class="mb-4">Edit:{{ $listing->title }}</p>
            </header>

            <form class="" enctype="multipart/form-data" action="/listings/{{ $listing->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="company" class="d-inline-block fs-4 mb-2">Company Name</label>
                    <input type="text" value="{{ $listing->company }}"
                        class="border border-gray-200 rounded p-2 w-100" name="company" />

                    <x-error>
                        @error('company')
                            {{ $message }}
                        @enderror
                    </x-error>

                </div>

                <div class="mb-5">
                    <label for="title" class="d-inline-block fs-4 mb-2">Job Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-100" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" />
                    <x-error>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="location" class="d-inline-block fs-4 mb-2">Job Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-100" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}" />
                    <x-error>
                        @error('location')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="email" class="d-inline-block fs-4 mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-100" name="email"
                        value="{{ $listing->email }}" />
                    <x-error>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="website" class="d-inline-block fs-4 mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-100"
                        value="{{ $listing->website }}" name="website" />
                    <x-error>
                        @error('website')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="tags" class="d-inline-block fs-4 mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-100" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />
                    <x-error>
                        @error('tags')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="logo" class="d-inline-block fs-4 mb-2">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-100" name="logo" />
                    <img class="w-48 me-6 mb-3"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                        alt="" height="130" />
                    <x-error>
                        @error('logo')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <label for="description" class="d-inline-block fs-4 mb-2">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-100" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>
                    <x-error>
                        @error('description')
                            {{ $message }}
                        @enderror
                    </x-error>
                </div>

                <div class="mb-5">
                    <button class=" btn btn-danger text-white rounded py-2 fw-bold px-4 hover:bg-black">
                        Update Gig
                    </button>

                    <a href="/" class="text-black fw-bold text-decoration-none ms-4"> Back </a>
                </div>
            </form>
        </x-card>

    </div>
</x-layout>
