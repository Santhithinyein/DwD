0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="password" required class="w-full h-full bg-transparent border-none outline-none text-gray-700 font-semibold px-8 py-0.5" name="cpswd"/>
                        <label class="absolute top-1/2 left-1 transform -translate-y-1/2 text-base text-gray-700 font-medium pointer-events-none transition-all duration-500">
                            <span class="en">Confirm Password</span>
                            <span class="mm">အတည်ပြု လျှို့ဝှက်နံပါတ်</span>
                        </label>
                    </div>
                </div>
                <div class="mt-24 ml-1">
                    <button class="bg-blue-500 rounded-lg uppercase font-arial text-sm rounded-md font-semibold text-white py-1 px-16 " type="submit" id="signupBtn">
                        Sign Up
                    </button>
                </div>

                <div class="text-sm text-gray-900 text-center font-medium my-2">
                    <p class=" text-black">

                        <span class="en"> Already have an account?</span>
                        <span class="mm">အကောင့်ရှိပြီးသားလား။ </span>
                        <a href="{{ route('signin') }}" class="text-gray-900 no-underline text-indigo-500 hover:underline hover:font-semibold" id="signinLink">Sign In</a>
                    </p>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>
<x-footer/>
