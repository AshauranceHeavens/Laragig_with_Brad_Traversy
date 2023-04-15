<form action="/">
    <div class="relative d-flex align-items-center border border-secondary p-1 border-gray-100 m-4 rounded">
        <div class="absolute top-4 left-3 m-1">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <div class="input-group">
            <input type="text" name="search"
                class="h-14 w-full form-control pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Laravel Gigs..." value="{{ request('search') }}" />

            <button type="submit" class="text-white btn bg-danger  ">
                Search
            </button>
        </div>
    </div>
</form>
