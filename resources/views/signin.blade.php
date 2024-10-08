<x-nav/>
<link rel="stylesheet" href="{{asset('/css/donate.css')}}">
{{-- <script src="{{asset('js/donate.js')}}"></script> --}}

@if (session('success') || session('error'))
    <div id="message-box" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-6 z-50">
        <div class="max-w-sm w-full {{ session('success') ? 'bg-blue-500' : 'bg-red-500' }} text-white text-center py-3 px-4 rounded-lg shadow-lg">
            <p>{{ session('success') ?? session('error') }}</p>
        </div>
    </div>

    <script>
        // Automatically hide the message box after 5 seconds
        setTimeout(() => {
            const messageBox = document.getElementById('message-box');
            if (messageBox) {
                messageBox.style.display = 'none';
            }
        }, 6000);
    </script>
@endif

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
                        <img src="/images/kt1.jpg" alt="image"
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

            <!------------ Sign In------------>
            <form action="{{route('signinPost')}}" method="POST">
                @csrf
                <div class="flex flex-col gap-2 justify-between items-center h-full" id="signup">
                    <p class="text-2xl md:text-2xl text-gray-900 mb-1 pt-5 text-center font-bold">

                        <span class="en">  Sign In</span>
                        <span class="mm">အကောင့်ဝင်ရန် </span>
                    </p>
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4 mt-4">
                            <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                    <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                                </svg>
                            </span>
                            <input type="text" class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5 @error('email') is-invalid @enderror" name="email" required/>
                            <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">
                                <span class="en">Email</span>
                                <span class="mm">အီးမေးလ်</span>
                            </label>
                            @error('email')
                                <span class="invalid-feedback text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4">
                            <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input type="password" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5" name="password"/>
                            <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">
                                <span class="en">Password</span>
                                <span class="mm">လျှို့ဝှက်နံပါတ်</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-32 ml-1">
                        <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16" type="submit" id="signupBtn">
                            Sign In
                        </button>
                    </div>
                    <div class="text-sm text-gray-900 text-center font-medium my-2">
                        <p class=" text-black">
                            <span class="en"> Don't have an account? </span>
                            <span class="mm">အကောင့်မရှိဘူးလား။</span>
                            <a href="{{route('signup')}}" class="text-gray-900 no-underline text-indigo-500 hover:underline hover:font-semibold" id="signinLink">Sign Up</a>
                        </p>
                    </div>
                </div>
            </form>


    </div>
</div>
</div>
<x-footer/>
