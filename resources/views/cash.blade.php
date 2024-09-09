<x-nav/>
<link rel="stylesheet" href="{{asset('/css/donate.css')}}">
{{-- <script src="{{asset('js/donate.js')}}"></script> --}}
<div class="container mt-7">

    <div class="flex flex-row pl-60 gap-5 mb-9">

        <!------------ Card Images ------------>

        <div class="basis-2/5 border border-grey-500n bg-white rounded-md">
            <!-- <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">Donation with Devotion</h5>
                <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold">ကိုးသိန်းစာသင်တိုက်</h1>
            </div> -->

            <div class="flex flex-warp -m-4">
                <div class="p-4">
                    <div class="h-full border-4 border-white border-opacity-60 rounded-lg overflow-hidden">
                        <img src="/images/donate7.jpg" alt="image"
                            class="lg:h-72 md:h-48 w-full object-cover object-center">
                        <div class="p-6">
                            <!-- hover:bg-indigo-700 hover:text-white transition duration-300 ease-in -->
                            <p class="leading-relaxed mb-3" style="text-align: justify;">
                                <span class="en">Able to contribute any kind of a lot or a bit of the charity. With special reference to the Kathin period, aim to have Kathin in the monasteries within Pyay. Donations are designated as common funds and are intended to be donated through the Ministry of Religious Affairs to unearned monasteries. Donars who want to make their own Kahtein donation, can also contact monasteries that do not have Kahtein and ask for donations.</span>
                    <span class="mm">ကထိန်ကာလကို အထူးရည်ညွှန်း၍ ပြည်မြို့အတွင်းရှိ ဘုန်းကြီးကျောင်းများတွင် ကထိန်ပွဲပြုလုပ်ရန် ရည်ရွယ်ပါသည်။ အလှူငွေများကို ဘုံရန်ပုံငွေအဖြစ် သတ်မှတ်ကာ သာသနာရေး ဝန်ကြီးဌာနမှ တဆင့် မရရှိသော ဘုန်းကြီးကျောင်းများသို့ လှူဒါန်းရန် ရည်ရွယ်ပါသည်။ မိမိတို့ကိုယ်တိုင် ကထိန်လှူဒါန်းလိုသော အလှူရှင်များအနေဖြင့် ကထိန်မရှိသော ဘုန်းတော်ကြီးကျောင်းများသို့လည်း ဆက်သွယ်၍ လှူဒါန်းနိုင်ပါသည်။
                    </span>
                                </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="basis-1/4 border-4 border-white bg-white rounded-md">

            <!------------ cash ------------>

            <form action="{{ route('cashpay')}}" method="POST">
                @csrf
                <div>
                    <h5 class="text-base md:text-lg text-gray-500 mb-1 pt-5 text-center mb-10">
                        <a href="{{route('signin')}}" class="text-gray-900">&#11164;</a>&nbsp;&nbsp;<span class="en">Donating with Devotion</span>
                        <span class="mm">စေတနာဖြင့်လှူဒါန်းခြင်း</span>
                    </h5>
                </div>
                <div class="flex flex-row gap-2 items-center justify-center mb-5">
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="50000" >
                        <span class="en">50000K</span>
                        <span class="mm">၅၀၀၀၀ကျပ်</span></div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="40000" >
                        <span class="en">40000K</span>
                        <span class="mm">၄၀၀၀၀ကျပ်</span>
                    </div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="35000" >
                         <span class="en">35000K</span>
                         <span class="mm">၃၅၀၀၀ကျပ်</span>
                        </div>
                </div>
                <div class="flex flex-row gap-2 items-center justify-center mb-5">
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="30000" >
                         <span class="en">30000K</span>
                         <span class="mm">၃၀၀၀၀ကျပ်</span>
                    </div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="25000" >
                         <span class="en">25000K</span>
                         <span class="mm">၂၅၀၀၀ကျပ်</span>
                    </div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="20000" >
                        <span class="en">20000K</span>
                        <span class="mm">၂၀၀၀၀ကျပ်</span>
                    </div>
                </div>
                <div class="border border-gray-500 px-3 py-2 tracking-widest rounded-md w-10/12 ml-5">
                    <input type="text" id="donate_rate" name="donate_rate" class="text-sm uppercase bg-transparent border-none outline-none" placeholder="MMK">
                </div>
                <div class="mt-36 w-full mb-2 flex items-center justify-center">
                    <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16" type="submit" id="DBtn">
                        <span class="en">Donate</span>
                        <span class="mm">လှူဒါန်းရန်</span></button>
                </div>
                <input type="hidden" value="{{$id}}" name="userId">
                {{-- <input type="hidden" id="hidden_donate_rate" name="hidden_donate_rate"> --}}
            </form>

    </div>
</div>
</div>
<x-footer/>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('.pay_btn').forEach(button => {
            button.addEventListener('click', () => {
                const value = button.getAttribute('data-value');
                document.getElementById('donate_rate').value = value;
                // document.getElementById('hidden_donate_rate').value = value;
            });
        });
    });
</script>
