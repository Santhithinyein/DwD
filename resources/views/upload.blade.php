<x-nav/>
<link rel="stylesheet" href="{{asset('/css/donate.css')}}">
{{-- <script src="{{asset('js/donate.js')}}"></script> --}}
<script src="{{asset('js/uploadphoto.js')}}" defer></script>

@if ($errors->any())
    <div class="alert alert-danger flex justify-center align-items-center left-1/3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-80 ml-20 rounded relative">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success') || session('error'))
    <div id="message-box" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-6 z-50">
        <div class="max-w-sm w-full {{ session('success') ? 'bg-green-500' : 'bg-red-500' }} text-white text-center py-3 px-4 rounded-lg shadow-lg">
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
        }, 5000);
    </script>
@endif
<div class="container mt-7">

    <div class="flex flex-row pl-60 gap-5 mb-9">

        <!------------ Card Images ------------>

        <div class="basis-2/5 bg-white rounded-lg">
            <!-- <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">Donation with Devotion</h5>
                <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold">ကိုးသိန်းစာသင်တိုက်</h1>
            </div> -->

            <div class="flex flex-warp -m-4">
                <div class="p-5">
                    <div class="h-full border-2 border-white rounded-lg overflow-hidden">
                        <img src="/Images/vb.jpg" alt="image"
                            class="lg:h-72 md:h-48 w-full object-cover object-center">
                        <div class="p-6">
                            <!-- hover:bg-indigo-700 hover:text-white transition duration-300 ease-in -->
                            <p class="leading-relaxed mb-3 ">It is a web app that will be able to contribute to the merits of any kind of charity. With special reference to the Kathin period, which is a tradition of Burmese people, aim to have Kathin in the monasteries in Pyay. Donors are encouraged to participate and donate that there is no donation.
                                Donations are designated as common funds and are intended to be donated through the Ministry of Religious Affairs to unearned monks. For those who want to make their own Kahtein donation, Donating with Devotion can also contact monasteries that do not have Kahtein and ask for donations.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="basis-1/4 border-2 border-white bg-white rounded-md">

            <!------------ payment ------------>

            <form action="{{ route('details') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" id="userId" value="{{ $id }}">
                <input type="hidden" name="price" id="price" value="{{ $price }}">
                <input type="hidden" name="payment" id="paymentType" value="{{ $payment }}">
                <div class="image">
                    <div class="card">

                        <div>
                            <h5 class="text-base md:text-lg text-gray-500 mb-1 pt-5 text-center">
                                <a href="{{route('payment')}}" class="text-gray-900">&#11164;</a>&nbsp;&nbsp;Upload image
                            </h5>
                        </div>


                        <img src="/images/pf1.png" alt="" srcset="" id="profile-pic">
                        <label for="input-file">
                            Upload Image
                            <ion-icon name="camera" class="i text-red-800 text-2xl px-2"></ion-icon>
                        </label>
                        <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" id="input-file" style="display:none;">

                        <div class="mt-12 pb-7">
                            <button type="submit" class="text-white bg-red-800 rounded-md w-48 h-12 hover:bg-orange-600">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>

    </div>
</div>
</div>
<x-footer/>

