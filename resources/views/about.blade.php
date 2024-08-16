<x-nav/>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <form action="#" method="GET">
        @csrf

    <h1 class="mt-10 mb-10 text-4xl text-red-800 text-center">About Our Story</h1>
    <div class="mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Card 1 -->
            <div class="overflow-hidden">
                <div class="ml-20">
                    <p class="text-red-800 text-lg">
                        It is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using 'Content here, content here', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for 'lorem ipsum' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="mr-20">
                <img src="/Images/vb.jpg" alt="Photo 2" class="w-full h-80">
            </div>
        </div>
    </div>

    <div class="text-center">
        <h1 class="mt-10 mb-10 text-4xl text-red-800 ">Contact Us</h1>
        <ion-icon name="pin" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>Unity IT Solution Provider Co., Ltd. No.124,Room.22, Sule Pagoda Road, Kyauktada Township, Yangon, Myanmar</b></p>
        <ion-icon name="phone-portrait"class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>01-245802, 09-43085731, 09-974744233</b></p>
        <ion-icon name="call" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>01-245802</b></p>
        <ion-icon name="tv" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>unityitsolutionprovider.com</b></p>
    </div>
</form>
<x-footer/>
