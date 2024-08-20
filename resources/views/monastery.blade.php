<x-nav/>

<div class="mx-20">
    <h1 class="text-3xl font-bold p-2 text-red-800 mb-10">Monastery</h1>

    <!-- Filter Buttons -->
    <div class="flex flex-row space-x-3">
        <form action="{{ route('celebrated') }}" method="GET">
            <button type="submit" class="text-white w-20 h-10 bg-red-800 rounded-lg hover:bg-white hover:text-red-800">Celebrated</button>
        </form>

        <form action="{{ route('uncelebrated') }}" method="GET">
            <button type="submit" class="text-red-800 w-26 h-10 border border-red-800 rounded-lg hover:bg-red-800 hover:text-white">Uncelebrated</button>
        </form>
    </div>

    <!-- Search and Refresh Section -->
    <div class="relative mb-5 text-right" >
        <form action="{{ route('search') }}" method="POST" style="display: inline"> <!-- Changed method to GET for consistency -->
            @csrf
            <label for="search" class="text-xl text-red-800 p-2">Monastery:</label>
            <input type="text" name="search" class="w-64 h-10 border-1 border-red-800 rounded-lg shadow-lg text-red-800" placeholder="  Search Monastery...">
            <button type="submit" class="bg-red-800 w-16 h-10 rounded-lg hover:bg-orange-600 text-white">Search</button>
        </form>

        <form action="{{ route('userMonastery') }}" method="GET" style="display: inline">
            <button type="submit" class="bg-red-800 w-16 h-10 rounded-lg hover:bg-orange-600 text-white">Refresh</button>
        </form>
    </div>

    <!-- Monastery Display Section -->
    <section class="parent-section">
        @foreach ($monasteries as $monastery)
            <div class="card flex flex-col lg:flex-row mx-20 rounded-lg md:mx-20 lg:mx-60 bg-white mb-5">
                <img src="{{ asset($monastery->photo) }}" alt="{{ $monastery->monasteryName }}" width="400" height="300" class="thumbnail p-2">

                <div class="card-details p-2 w-80 bg-grey-200">
                    <div class="text-2xl text-red-800 mb-5 font-semibold text-center">
                        <h1 class="name" id="{{ $monastery->id }}">{{ $monastery->monasteryName }}</h1>
                    </div>

                    <h2 class="title text-lg text-red-800 mb-2" id="{{ $monastery->id }}">
                        <i class="fa-solid fa-person-praying text-red-800 m-1"></i>
                        {{ $monastery->monkName }}
                    </h2>

                    <div>
                        <p class="text-red-800 mb-5 text-lg" id="{{ $monastery->id }}">
                            <i class="fa-solid fa-location-dot text-red-800 m-1"></i>
                            {{ $monastery->address }}
                        </p>
                        <p class="text-red-800 mb-5 font-semibold" id="{{ $monastery->id }}">
                            Total: <b>{{ $monastery->monkNo }}</b>
                        </p>
                    </div>

                    <div class="donateButton w-68 h-10 bg-red-800 text-white text-xl rounded-full text-center p-1 justify-center hover:bg-orange-600">
                        <button type="button" class="justify-center">Donate Now</button> <!-- Changed to type="button" to avoid form submission -->
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>

<x-footer/>
