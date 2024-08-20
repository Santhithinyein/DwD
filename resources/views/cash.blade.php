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
                            <p class="leading-relaxed mb-3 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Dolorum ipsa quisquam eius deserunt sequi minus, odit numquam inventore dolore
                                sint soluta, error eum, quibusdam qui corrupti itaque repudiandae consectetur
                                nostrum.</p>
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
                        <a href="{{route('signin')}}" class="text-gray-900">&#11164;</a>&nbsp;&nbsp;Donating with Devotion
                    </h5>
                </div>
                <div class="flex flex-row gap-2 items-center justify-center mb-5">
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="50000" > 50 MMK</div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="40000" > 40 MMK</div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="35000" > 35 MMK</div>
                </div>
                <div class="flex flex-row gap-2 items-center justify-center mb-5">
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="30000" > 30 MMK</div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="25000" > 25 MMK</div>
                    <div class="border pay_btn border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate btn" data-value="20000" > 20 MMK</div>
                </div>
                <div class="border border-gray-500 px-3 py-2 tracking-widest rounded-md w-10/12 ml-5">
                    <input type="text" id="donate_rate" name="donate_rate" class="text-sm uppercase bg-transparent border-none outline-none" placeholder="MMK">
                </div>
                <div class="mt-36 w-full mb-2 flex items-center justify-center">
                    <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16" type="submit" id="DBtn">Donate</button>
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
