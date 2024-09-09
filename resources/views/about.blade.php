<x-nav/>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <form action="#" method="GET">
        @csrf

    <h1 class="mt-10 mb-20 text-4xl text-red-800 text-center">
        <span class="en">About Our Story</span>
                    <span class="mm">အကြောင်းအရာ</span></h1>
    <div class="mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Card 1 -->
            <div class="overflow-hidden">
                <div class="ml-20">
                    <p class="text-red-800 text-2xl" style="text-align: justify;">
                        <span class="en">  We are writing this donation project with the purpose of informing about the monasteries in Pyay that have not yet celebrated in Myanmar's seasonal festival, Kathon Festival, through our website.

                            It is written with the intention of saving the time spent in the practical search for monasteries that have not yet been established.


                            This website will be donated to the religious department.</span>
                        <span class="mm">မြန်မာ့ရာသီပွဲတော်ဖြစ်သော ကထိန်ပွဲတော်တွင် ပြည်မြို့အတွင်းရှိ ကထိန်မခင်းရသေးသော ဘုန်းကြီးကျောင်းများကို အလွယ်တကူသိရှိနိုင်ရန် ရည်ရွယ်ချက်ဖြင့် ဤ donation website ကို ကျွန်ုပ်တို့ ရေးသားဖော်ပြထားခြင်းဖြစ်ပါသည်။ ကထိန်မခင်းရသေးသော ဘုန်းကြီးကျောင်းများကို အလွယ်တကူရှာဖွေရင်း အချိန်ကုန်သက်သာစေရန် ရည်ရွယ်၍ ရေးသားထားခြင်းဖြစ်ပါသည်။ </span>
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="mr-48">
                <img src="/Images/vb.jpg" alt="Photo 2" class="w-full h-80 border rounded-lg">
            </div>
        </div>
    </div>

    <div class="text-center">
        <h1 class="mt-40 mb-20 text-4xl text-red-800 "><span class="en">Contact Us</span>
            <span class="mm">ဆက်သွယ်ရန်</span></h1>

        <ion-icon name="pin" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>
            <span class="en">
            Unity IT Solution Provider Co., Ltd. No.124,Room.22, Sule Pagoda Road, Kyauktada Township, Yangon, Myanmar</span>
            <span class="mm">Unity IT Solution Provider ကုမ္ပဏီ။ အမှတ် ၁၂၄၊ အခန်း ၂၂၊ ဆူးလေဘုရားလမ်း၊ ကျောက်တံတားမြို့နယ်၊ ရန်​ကုန်​မြို့</span>
            </b></p>

        <ion-icon name="phone-portrait"class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>
            <span class="en">01-245802, 09-43085731, 09-974744233</span>
                    <span class="mm"> ၀၁-၂၄၅၈၀၂၊ ၀၉-၄၃၀၈၅၇၃၁၊ ၀၉-၉၇၄၇၄၄၂၃၃</span></b></p>

        <ion-icon name="tv" class=" text-red-800 text-xl"></ion-icon><br>
        <a href="http://www.unityitsolutionprovider.com" class="text-lg text-red-800 mb-3" target="_blank">
            <b>www.unityitsolutionprovider.com</b>
        </a>
        {{-- <h1 class="mt-40 mb-10 text-4xl text-red-800 ">Contact Us</h1>
        <table>
            <tr>
                <td><ion-icon name="pin" class=" text-red-800 text-xl"></ion-icon></td>
                <td><p class=" text-lg text-red-800 mb-3"><b>Unity IT Solution Provider Co., Ltd. No.124,Room.22, Sule Pagoda Road, Kyauktada Township, Yangon, Myanmar</b></p></td>
            </tr>
            <tr>
                <td><ion-icon name="phone-portrait"class=" text-red-800 text-xl"></ion-icon></td>
                <td><p class=" text-lg text-red-800 mb-3"><b>01-245802, 09-43085731, 09-974744233</b></p></td>
            </tr>
            <tr>
                <td><ion-icon name="tv" class=" text-red-800 text-xl"></ion-icon></td>
                <td><a class=" text-lg text-red-800 mb-3"><b>www.unityitsolutionprovider.com</b></a></td>
            </tr>
        </table> --}}
    </div>
</form>
<x-footer/>
