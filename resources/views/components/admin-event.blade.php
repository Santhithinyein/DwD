<div class="flex-none w-80 bg-side">
    <div class="flex justify-end px-3 pt-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
        </svg>
          
    </div>
    <h1 class="text-3xl text-white mx-3 my-3">Event Section</h1>
    <div class="flex">
        
        <div class="border border-white w-40 h-24 ml-3 rounded">
            <h3 class="text-white mx-2">Past Events</h3>
            <p class="text-4xl my-3 mx-3 text-white">40</p>
        </div>
        <div class="border border-white w-44 h-24 mx-3 rounded">
            <h3 class="text-white mx-2">Upcoming Events</h3>
            <p class="text-4xl my-3 mx-3 text-white">3</p>
        </div>
    </div>
    <div class="border border-white rounded mx-3 my-3 h-44">
        <p class="px-3 py-1 text-center text-white">Distribution of Attended Events</p>
        <button id="openModalBtn" class="bg-slate-200 hover:bg-slate-600 hover:text-white mx-3 px-4 py-2 rounded">Create</button>
    </div>
     <!-- Modal -->
    <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <form action="{{route('event')}}" method="post">
                @csrf
                <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Create New Event</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Fill out the form below to create a new event.</p>
                        </div>
                        <div class="mt-5">
                            <input type="text" placeholder="Event Name" class="w-full px-3 py-2 border rounded-md">
                            <input type="date" class="w-full mt-3 px-3 py-2 border rounded-md">
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" id="createEventBtn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Create</button>
                        <button type="button" id="closeModalBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h1 class="text-3xl px-3 text-white">Events</h1>
    <div class="divide-y py-1 overflow-y-auto h-40">
        <div class="flex h-20 px-3 items-center">
            <img class="w-16 h-16 rounded-full" src="/images/k.jpg" alt="">
            <p class="px-3 text-white">Kahtain Festival</p>
        </div>
        <div class="flex h-20 px-3 items-center">
            <img class="w-16 h-16 rounded-full" src="/images/k.jpg" alt="">
            <p class="px-3 text-white">Kahtain Festival</p>
        </div>
        <div class="flex h-20 px-3 items-center">
            <img class="w-16 h-16 rounded-full" src="/images/k.jpg" alt="">
            <p class="px-3 text-white">Kahtain Festival</p>
        </div>
        {{-- <div class="h-20 px-3">
            <p>Hello</p>
        </div> --}}
        

    </div>
    
</div>
<script>
    // Get the modal and button elements
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.querySelectorAll('#closeModalBtn');

    // When the user clicks the button, open the modal
    openModalBtn.onclick = function() {
        modal.classList.remove('hidden');
    }

    // When the user clicks on <span> (x), close the modal
    closeModalBtn.forEach(button => {
        button.onclick = function() {
            modal.classList.add('hidden');
        }
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    }
</script>