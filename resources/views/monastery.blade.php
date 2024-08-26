<x-nav/>

<link rel="stylesheet" href="{{asset('/css/monastery.css')}}">
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
    <div class="relative mb-5 text-right">
        <form action="{{ route('search') }}" method="POST" style="display: inline">
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
        @if (session('success'))
        <div id="message-box" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-6 z-50">
            <div class="max-w-sm w-full {{ session('success') ? 'bg-sky-500' : 'bg-red-500' }} text-white text-center py-3 px-4 rounded-lg shadow-lg">
                <p>{{ session('success') }}</p>
            </div>
        </div>
    
        <script>
            // Automatically hide the message box after 5 seconds
            setTimeout(() => {
                const messageBox = document.getElementById('message-box');
                if (messageBox) {
                    messageBox.style.display = 'none';
                }
            }, 5000);
        </script>
    @endif
        @foreach ($monasteries as $monastery)
        <form action="{{ route('donate') }}" method="get" style="display: inline">
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
                        <input type="hidden" name="status" value="{{  $monastery->mStatus }}">
                    </div>

                   
                        <button type="submit" class="w-68 h-10 bg-red-800 text-white text-xl rounded-full text-center px-10 justify-center hover:bg-orange-600">Donate Now</button>
                  

                    {{-- <div class="donateButton w-68 h-10 bg-red-800 text-white text-xl rounded-full text-center p-1 justify-center hover:bg-orange-600" onclick="window.location.href='{{route('donate')}}';">
                        <button type="button" class="justify-center">Donate Now</button> <!-- Changed to type="button" to avoid form submission -->
                    </div> --}}
                </div>
            </div>
</form>
@endforeach
    </section>

    <!-- Pagination Links -->
    <div class="flex justify-center mt-5">
        {{ $monasteries->links() }}
    </div>
</div>

<x-footer/>
