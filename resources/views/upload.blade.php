<x-nav/>
<link rel="stylesheet" href="{{asset('/css/donate.css')}}">
{{-- <script src="{{asset('js/donate.js')}}"></script> --}}
<script src="{{asset('js/uploadphoto.js')}}" defer></script>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container mt-7">

    <div class="flex flex-row pl-60 gap-5 mb-9">

        <!------------ Card Images ------------>

        <div class="basis-2/5 bg-white rounded-md">
            <!-- <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">Donation with Devotion</h5>
                <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold">ကိုးသိန်းစာသင်တိုက်</h1>
            </div> -->

            <div class="flex flex-warp -m-4">
                <div class="p-4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img src="/Images/vb.jpg" alt="image"
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
        <div class="basis-1/4 border border-red-500 bg-white rounded-md">

            <!------------ payment ------------>

            <form action="{{ route('details') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="payment" id="paymentType" value="{{$payment}}">
                <input type="hidden" name="id" id="userId" value="{{ $id }}">
                <input type="hidden" name="price" id="price" value="{{ $price }}">
                <div class="image">
                    <div class="card">
                        <img src="/images/pf1.png" alt="" srcset="" id="profile-pic">
                        <label for="input-file">
                            Upload Image
                            <ion-icon name="camera" class="i text-red-800 text-2xl px-2"></ion-icon>
                        </label>
                        <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" id="input-file" style="display:none;">

                        <div class="mt-32">
                            <button type="submit" class="text-white bg-red-800 rounded-md w-48 h-12 hover:bg-orange-600">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>

    </div>
</div>
</div>
<x-footer/>

