<x-nav/>

<form action="{{ route('userMonastery') }}" method="GET">
    @csrf
    <div class="mx-20">
    <h1 class="text-3xl font-bold p-2 text-red-800 mb-10">Monastery</h1>
    <div class="flex flex-row space-x-3">

        <form action="{{ route('celebrated') }}" method="GET">
            @csrf
            <button type="submit" class=" text-red-800 w-20 h-10 border border-red-800 rounded-lg hover:bg-red-800 hover:text-white">Celebrated</button>
        </form>

        <form action="{{ route('uncelebrated') }}" method="GET">
            @csrf
            <button type="submit" class="text-red-800 w-26 h-10 border border-red-800 rounded-lg hover:bg-red-800 hover:text-white">Uncelebrated</button>
        </form>

    </div>
    <div class="relative mb-5 text-right">
        <label for="monastery" class="text-xl text-red-800 p-2">Monastery:</label>
        <input type="text" class="w-64 h-10 border border-red-800 rounded-lg shadow-lg text-red-800" placeholder="Search Monastery...">
        <button type="submit" class="bg-red-800 w-16 h-10 rounded-lg hover:bg-orange-600 text-white" name="search">Search</button>
        <button type="submit" class="bg-red-800 w-16 h-10 rounded-lg hover:bg-orange-600 text-white" name="refresh">Refresh</button>
    </div>
    </div>


\
    <section class="parent-section">

        @foreach ($monasteries as $monastery)
        <div class="card flex flex-col lg:flex-row mx-20 rounded-lg md:mx-20 lg:mx-60 bg-white mb-5">
            <img src="{{ asset($monastery->photo) }}" alt="{{ $monastery->photo }}" width="400" height="300" class="thumbnail p-2">


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
                    <button type="submit" class="justify-center">Donate Now</button>
                </div>
            </div>
        </div>

    </div>

    @endforeach
    </section>
    </form>
<x-footer/>
{{-- >>>>>>> Stashed changes --}}
