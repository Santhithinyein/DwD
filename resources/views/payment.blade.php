<x-nav />
<link rel="stylesheet" href="{{ asset('/css/donate.css') }}">
{{-- <script src="{{ asset('js/donate.js') }}"></script> --}}
<div class="container mt-7">
    <div class="flex flex-row pl-60 gap-5 mb-9">

        <!------------ Card Images ------------>
        <div class="basis-2/5 border-4 border-white bg-white rounded-md">
            <div class="flex flex-wrap -m-4">
                <div class="p-4">
                    <div class="h-full border-2 border-white border-opacity-60 rounded-lg overflow-hidden">
                        <img src="/images/donate7.jpg" alt="image"
                            class="lg:h-72 md:h-48 w-full object-cover object-center">
                        <div class="p-6">
                            <p class="leading-relaxed mb-3">It is a web app that will be able to contribute to the merits of any kind of charity. With special reference to the Kathin period, which is a tradition of Burmese people, aim to have Kathin in the monasteries in Pyay. Donors are encouraged to participate and donate that there is no donation.
                                Donations are designated as common funds and are intended to be donated through the Ministry of Religious Affairs to unearned monks. For those who want to make their own Kahtein donation, Donating with Devotion can also contact monasteries that do not have Kahtein and ask for donations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------ Payment ------------>
        <div class="basis-1/4 border-4 border-white bg-white rounded-md">
            <form id="paymentForm" action="{{ route('qrpay') }}" method="get">
                @csrf
                <div class="text-center mb-5 pt-5">
                    <h5 class="text-base md:text-lg text-gray-500 mb-1">
                        <a href="{{ route('cash') }}" class="text-gray-900">&#11164;</a>
                        &nbsp;&nbsp;Your Donation
                    </h5>
                    <p class="text-sm text-gray-900">Choose a payment method</p>
                </div>
                <input type="hidden" name="payment" id="paymentType">
                <input type="hidden" name="id" id="userId" value="{{ $id }}">
                <input type="hidden" name="price" id="price" value="{{ $price }}">

                <!-- Kpay Button -->
                <div class="relative rounded-md flex justify-start items-center p-2">
                    <button type="button" class="border border-gray-400 rounded-lg mr-8 ml-14"
                            style="background-color: #0053ab;"
                            onclick="submitForm('1')">
                        <img src="/images/kpay-remove.png" alt="" class="w-16">
                    </button>
                    <span class="relative z-10">Kpay</span>
                </div>

                <!-- Wave Button -->
                <div class="relative rounded-md flex justify-start items-center p-2">
                    <button type="button" class="border border-gray-400 rounded-lg mr-8 ml-14"
                            style="background-color: #ffe512;"
                            onclick="submitForm('2')">
                        <img src="/images/wave-remove.png" alt="" class="w-16">
                    </button>
                    <span class="relative z-10">Wave</span>
                </div>

                <input type="text"
                       class="text-sm uppercase bg-transparent border border-gray-500 px-3 py-2 tracking-widest rounded-md w-32 text-center mt-32 ml-20"
                       placeholder="{{ $price }}" readonly>

                    </form>
            <!-- JavaScript -->
                <script>
                    function submitForm(paymentType) {
                // Set the value of the hidden payment type field
                        document.getElementById('paymentType').value = paymentType;

                // Submit the form
                        document.getElementById('paymentForm').submit();
                    }
                </script>



        </div>
    </div>
</div>
<x-footer />
