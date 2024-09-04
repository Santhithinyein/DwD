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
                    <p class="text-red-800 text-2xl">
                        We are writing this donation project with the purpose of informing about the monasteries that have not yet celebrated in Myanmar's seasonal festival, Kathon Festival, through our website.

It is written with the intention of saving the time spent in the practical search for monasteries that have not yet been established.


This website will be donated to the religious department.
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
        <h1 class="mt-40 mb-10 text-4xl text-red-800 ">Contact Us</h1>
        <ion-icon name="pin" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>Unity IT Solution Provider Co., Ltd. No.124,Room.22, Sule Pagoda Road, Kyauktada Township, Yangon, Myanmar</b></p>
        <ion-icon name="phone-portrait"class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>01-245802, 09-43085731, 09-974744233</b></p>
        <ion-icon name="call" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>01-245802</b></p>
        <ion-icon name="tv" class=" text-red-800 text-xl"></ion-icon>
        <p class=" text-lg text-red-800 mb-3"><b>unityitsolutionprovider.com</b></p>
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
