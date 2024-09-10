<x-homenav/>

<section class="home" id="home">
    <div class="head_container">
        <div class="box">
            <div class="text">
                <h5 class="">
                    <span class="en">Welcome To</span>
                    <span class="mm">ကြိုဆိုပါတယ်</span>
                </h5>
                <p>
                    <span class="en">Donating with Devotion</span>
                    <span class="mm">စေတနာဖြင့်လှူဒါန်းခြင်း မှ</span>
                </p>
                <form action="{{route('donate')}}">
                <button type="submit" class="DBtn font-bold">
                    <span class="en">Donate Now</span>
                    <span class="mm">လှူဒါန်းရန်</span></button>
            </form>
            </div>
        </div>
    </div>

    <div class="image">
        <img src="/images/pyay.jpg" alt="" class="slide">
    </div>

</section>

<section class="h-[20vh] w-full mt-[2%] time">
    <div
        class="flex flex-row gap-10 items-center justify-center mx-auto border-2 border-white hover:border-orange-400 rounded-md w-[75%] bg-white px-10">
        <div class="font-arial font-semibold flex flex-row gap-1 justify-center items-center py-5">
            <p id="days" class="text-white p-2 rounded-full bg-red-800"></p>
            <span class="text-gray-900">
                <span class="en">Days</span>
                    <span class="mm">ရက်</span>
            </span>
        </div>
        <div
            class="flex flex-col gap-3 py-4 justify-center items-left font-arial text-md font-semibold overflow-hidden truncate">
            <p class="truncate">
                <span class="en">Upcoming Event:</span>
                <span class="mm">လာမည့်အစီအစဉ်:</span>

                <span class="text-red-800 hover:text-orange-400">
                    <span class="en">Collective Common Kahtein</span>
                <span class="mm">စုပေါင်းဘုံကထိန်</span>
                </span>
            </p>
            <p class="truncate">
                <i class="fa-solid fa-calendar-days text-red-800"></i>
                    <span class="en">Time:</span>
                    <span class="mm">အချိန်:</span>

                <span class="text-red-800 hover:text-orange-400">
                    <span class="en">15.11.2024 (1:00 P.M)</span>
                    <span class="mm">၁၅.၁၁.၂၀၂၄ (နေ့လည် ၁ နာရီ)</span>
                </span>
            </p>
            <p class="truncate">
                <i class="fa-solid fa-location-dot text-red-800"></i>
                    <span class="en">Place:</span>
                    <span class="mm">နေရာ:</span>

                <span class="text-red-800 hover:text-orange-400">
                    <span class="en">Sri Cheetah Sirindara Religious Temple</span>
                    <span class="mm">သီရိခေတ္တသိရိန္ဒရ သာသနာ့ဗိမာန်တော်ကြီး</span>
                </span>
            </p>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="hours" class="text-red-800 hover:text-orange-400">00</p>
            <span class="text-sm"><span class="en">Hours</span>
            <span class="mm">နာရီ</span></span>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="minutes" class="text-red-800 hover:text-orange-400">00</p>
            <span class="text-sm"><span class="en">Minutes</span>
            <span class="mm">မိနစ်</span></span>
        </div>
        <div class="flex flex-col font-semibold">
            <p id="seconds" class="text-red-800 hover:text-orange-400">00</p>
            <span class="text-sm"><span class="en">Seconds</span>
            <span class="mm">စက္ကန့်</span></span>
        </div>

    </div>
</section>
<script src="/js/home.js"></script>
<x-footer/>
