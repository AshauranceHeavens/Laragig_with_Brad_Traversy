<x-layout>
    <div class="w-50 mx-auto bg-gray-50 border  p-5 mx-3 rounded mt-24">
        <header class="text-center">
            <h2 class="text-2xl fw-bold text-uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Log into your account to post gigs</p>
        </header>

        <form action="/users/authenticate" method="post">
            @csrf


            <div class="mb-6">
                <label for="email" class="d-inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-100"
                    name="email"value="{{ old('email') }}" />

                <x-error>
                    @error('email')
                        {{ $message }}
                    @enderror
                </x-error>
            </div>

            <div class="mb-6">
                <label for="password" class="d-inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-100" name="password" />

                <x-error>
                    @error('password')
                        {{ $message }}
                    @enderror
                </x-error>
            </div>


            <div class="mb-6">
                <button type="submit" class="btn btn-danger text-white fw-bold my-3 rounded py-2 px-4 ">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-danger text-decoration-none">Register</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>
