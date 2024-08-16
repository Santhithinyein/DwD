<x-nav/>
<section class="home" id="home">
    <div class="head_container">
        <div class="box">
            <div class="text">
                <h5 class="text-grey-300">Welcome To</h5>
                <p>Donating with Devotion</p>
                <button type="submit" class="DBtn">Donate Now</button>
            </div>
        </div>
    </div>

    <div class="image">
        <img src="/images/dbg4.jpg" alt="" class="slide">
    </div>

</section>

<section class="h-[20vh] w-full mt-[2%] time">
    <div
        class="flex flex-row gap-10 items-center justify-center mx-auto border border-black rounded-md w-[75%] bg-white px-10">
        <div class="font-arial font-semibold flex flex-row gap-1 justify-center items-center py-5">
            <p id="days" class="text-white p-2 rounded-full bg-red-800"></p>
            <span class="text-gray-900">Days</span>
        </div>
        <div
            class="flex flex-col gap-3 py-4 justify-center items-left font-arial text-md font-semibold overflow-hidden truncate">
            <p class="truncate">
                <span>Upcoming Event :</span>
                <span class="text-red-800">Kahtain Festival</span>
            </p>
            <p class="truncate">
                <i class="fa-solid fa-calendar-days text-red-800"></i>
                <span>Time :</span>
                <span class="text-red-800">5:23 p.m</span>
            </p>
            <p class="truncate">
                <i class="fa-solid fa-location-dot text-red-800"></i>
                <span>Place :</span>
                <span class="text-red-800">Heaven</span>
            </p>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="hours" class="text-red-800">00</p>
            <span class="text-sm">Hours</span>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="minutes" class="text-red-800">00</p>
            <span class="text-sm">Minutes</span>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="seconds" class="text-red-800">00</p>
            <span class="text-sm">Seconds</span>
        </div>

    </div>
</section>
<script src="/js/home.js"></script>
<x-footer/>
