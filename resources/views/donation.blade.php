<x-nav/>
<link rel="stylesheet" href="{{asset('/css/donate.css')}}">
<script src="{{asset('js/donate.js')}}"></script>
<div class="container mt-7">

    <div class="flex flex-row pl-60 gap-5">

        <!------------ Card Images ------------>

        <div class="basis-2/5 border border-grey-500n bg-white rounded-md">
            <!-- <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">Donation with Devotion</h5>
                <h1 class="text-4xl md:text-4xl text-gray-700 font-semibold">ကိုးသိန်းစာသင်တိုက်</h1>
            </div> -->

            <div class="flex flex-warp -m-4">
                <div class="p-4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
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
        <div class="basis-1/4 border border-red-500 bg-white rounded-md">

        <!------------ Sign Up------------>
        <form action="">
            <div class="flex flex-col gap-2 justify-between items-center h-full" id="signup">
                <p class="text-2xl md:text-2xl text-gray-900 mb-1 pt-5 text-center font-bold">Sign Up</p>
                <div class="flex flex-col gap-2 items-center justify-center">

                    
                    <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4 mt-4">
                        <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                <path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                            </svg>
                        </span>
                        <input type="text" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">Email</label>
                    </div>

                    <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4">
                        <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">Password</label>
                    </div>

                    <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box">
                        <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">Confirm Password</label>
                    </div>

                </div>
                <div class="mt-24 ml-1">
                    <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16 " type="submit" id="signupBtn">
                        Sign Up
                    </button>
                </div>

                <div class="text-sm text-gray-900 text-center font-medium my-2" >
                    <p class=" text-black">Already have an account? 
                        <a href="#" class="text-gray-900 no-underline  hover:text-blue-700 hover:underline hover:font-semibold" id="signinLink">Sign In</a>
                    </p>
                </div>
            </div>
        </form>
            
        <!------------ Sign In------------>
        <form action="">
            <div class="flex flex-col gap-2 justify-between items-center h-full" id="signin">
                <p class="text-2xl md:text-2xl text-gray-900 mb-1 pt-5 text-center font-bold">Sign In</p>
                <div class="flex flex-col gap-2 items-center justify-center">

                    
                    <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4 mt-4">
                        <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="text" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">Email</label>
                    </div>

                    <div class="relative w-11/12 h-12 border-b-2 border-gray-700 my-7.5 input-box mb-4">
                        <span class="absolute right-2 top-2 text-xl text-gray-700 leading-14 icon">
                            <ion-icon name="lock"></ion-icon>
                        </span>
                        <input type="text" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">Password</label>
                    </div>

                </div>
                <div class="mt-24 ml-10">
                    <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16 " type="submit" id="signinBtn">
                        Sign In
                    </button>
                </div>

                <div class="text-sm text-gray-900 text-center font-medium my-2">
                    <p class=" text-black">Already have an account? 
                        <a href="#" class="text-gray-900 no-underline  hover:text-blue-700 hover:underline hover:font-semibold">Sign up</a>
                    </p>
                </div>
            </div>
        </form>

        <!------------ Donation ------------>

        <form action="" id="multiForm">
            <div class="flex flex-col gap-2 justify-between items-center h-full" id="donate">
            <div>
                <h5 class="text-base md:text-lg text-gray-500 mb-1 pt-5 text-center mb-5">Donating with Devotion</h5>
            </div>

           
                <div class="flex flex-row gap-2 items-center justify-center mb-5">
                    <button class="border border-gray-500 px-9 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate">Give</button>
                    <button class="border border-gray-500 px-9 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate">Give</button>
                </div>
           


            <div class="flex flex-row gap-2 items-center justify-center mb-5">
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md truncate">K
                    50K</button>
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md ">K
                    40K</button>
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md ">K
                    35K</button>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center mb-5">
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md ">K
                    30K</button>
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md ">K
                    25K</button>
                <button
                    class="border border-gray-500 px-3 py-2 text-sm uppercase tracking-widest hover:bg-black hover:text-white rounded-md ">K
                    20K</button>
            </div>

            <div class="border border-gray-500 px-3 py-2 tracking-widest rounded-md w-10/12 ml-5">
                <input type="text" class="text-sm uppercase bg-transparent border-none outline-none" placeholder="k">
            </div>

            <div class="mt-36 w-full mb-2 flex items-center justify-center">
                <button
                    class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16"
                    type="submit" id="DBtn">Donate</button>
            </div>
        </div>

        <!------------ Payment Type ------------>
        <div class="flex flex-col gap-2 justify-between items-center h-full" id="payment">
            <div>
                <h5 class="text-base md:text-lg text-gray-500 mb-1 pt-5 text-center mb-5">Your Donate</h5>
                <p class="text-sm  text-gray-900 mb-1 pt-5 text-center ">Choose a payment method</p>
            </div>

            <div class="relative  rounded-md flex justify-start items-center p-2">
                    <a href="#" class="border border-gray-400 rounded-lg mr-8 ml-14" style="background-color: #0053ab;" id="kpayBtn"><img src="/images/kpay-remove.png" alt="" class="w-16"></a>
                    <span class="relative z-10">Kpay</span>
            </div>

            <div class="relative  rounded-md flex justify-start items-center p-2">
                <a href="#" class="border border-gray-400 rounded-lg mr-8 ml-14" style="background-color: #ffe512;" id="waveBtn"><img src="/images/wave-remove.png" alt="" class="w-16"></a>
                <span class="relative z-10">Wave</span>
            </div>

            <div class="mt-36 w-full mb-2 flex items-center justify-center">
                <button
                    class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16"
                    type="submit" id="payBtn">Donate</button>
            </div>

        </div>
        </form>

        <!------------ Upload Images ------------>
        <div class="w-1/2" id="upload">                
            <form action="">                    
                <div class="image">
                    <div class="card">
                        <img src="/images/uploadimg" alt="" srcset="" id="profile-pic">
                        <label for="input-file">Upload Image<ion-icon name="camera" class="i text-red-800 text-2xl px-2"></ion-icon></label>
                        <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" style="display:none;">
                        <div class="mt-40">
                            <button type="submit" class="text-white bg-red-800 rounded-md w-48 h-12 hover:bg-red-500">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

         

        </div>
    </div>
</div>
<x-footer/>