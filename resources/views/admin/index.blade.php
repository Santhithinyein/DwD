<x-admin-layout>
    <div class="">
        <div class="flex-1 flex flex-col ">
            <!-- Include Top Nav with Gradient here -->
            {{-- <div class="flex items-center justify-between h-16 bg-gradient-to-r from-purple-600 to-indigo-600 px-6 text-white">
                <div class="text-xl font-semibold">Dashboard</div>
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="px-3 py-2 border-none rounded-lg shadow-inner focus:outline-none focus:ring-2 focus:ring-indigo-300">
                    </div>
                    <div class="relative">
                        <button class="text-white hover:text-gray-300">
                            <!-- Custom Icon for Notifications -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-1h-1v1H9v-1H8v1H7v-2h1v-2h1v-1h1v-2H9V9h1V7h1V6h2v1h1v1h1v1h1v1h1v2h-1v1h-1v2h1v2h1v2h-3v-2h-2v2z" />
                            </svg>
                        </button>
                        <!-- Notifications dropdown -->
                    </div>
                    <div class="relative">
                        <button class="flex items-center text-white hover:text-gray-300">
                            <span class="mr-2">John Doe</span>
                            <img src="https://via.placeholder.com/150" class="w-8 h-8 rounded-full shadow-lg" alt="User Avatar">
                        </button>
                        <!-- Profile dropdown -->
                    </div>
                </div>
            </div> --}}
            <!-- Include Main Content Area with Gradient Cards here -->
            <div class="flex-1 p-8 ">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <!-- Premium Cards -->
                    <div class="bg-gradient-to-r from-green-400 to-blue-500 p-6 rounded-lg shadow-lg">
                        <div class="text-sm font-medium text-white">Total Donors</div>
                        <div class="mt-2 text-3xl font-bold text-white">{{$donersCount}}</div>
                    </div>
                    <div class="bg-gradient-to-r from-pink-500 to-orange-500 p-6 rounded-lg shadow-lg">
                        <div class="text-sm font-medium text-white">Total Donation Amount</div>
                        <div class="mt-2 text-3xl font-bold text-white">{{$total}} Ks</div>
                    </div>
                    <!-- Add more premium cards as needed -->
                </div>
            
                <div class="mt-8">
                    <div class="p-6 rounded-lg shadow-lg bg-white">
                        <div class="text-lg font-semibold">Recent Donor</div>
                        <table class="min-w-full mt-4 bg-white border border-gray-300 text-center ">
                            <thead>
                                <tr class="bg-gray-200 border-gray-200">
                                    {{-- <th class="px-4 py-2">No</th> --}}
                                    <th class="px-4 py-2">Donor</th>
                                    <th class="px-4 py-2">Amount</th>
                                    <th class="px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentDoners as $recentDoner)
                                    <tr>
                                        {{-- <td class="border px-4 py-2">{{$recentDoner->id}}</td> --}}
                                        <td class="border px-4 py-2">{{$recentDoner->user->name}}</td>
                                        <td class="border px-4 py-2">{{$recentDoner->amount}} Ks</td>
                                        <td class="border px-4 py-2 text-green-600">{{$recentDoner->created_at->format('d-m-Y')}}</td>
                                    </tr>                                    
                                @endforeach
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <div class="flex justify-end mt-2">
                            <a href="{{ route('doners') }}" class="inline-block px-4 py-2
                             text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">
                                See More
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
          </div>
      
          <div class="chart-container ml-5" style="position: relative; height:40vh; width:80vw">
              <button id="download" class="inline-block px-4 py-2
              text-white bg-gradient-to-r from-red-600 to-orange-500 rounded-lg shadow-lg hover:from-red-700 hover:to-orange-600 transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600">Download Chart</button>
      
              <canvas id="myChart"></canvas>
              
          </div>
    </div>
    
    {{-- <div>
        <canvas id="myChart"></canvas>
    </div> --}}
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        // const ctx = document.getElementById('myChart').getContext('2d');
        const canvas = document.getElementById('myChart');
        const ctx = canvas.getContext('2d');
        // const data = [
        //     { year: 2010, count: 10 },
        //     { year: 2011, count: 20 },
        //     { year: 2012, count: 15 },
        //     { year: 2013, count: 25 },
        //     { year: 2014, count: 22 },
        //     { year: 2015, count: 30 },
        //     { year: 2016, count: 28 },
        // ];
        let data=@json($doners);
      
        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.map(row => {
            const date = new Date(row.created_at);
            return date.toLocaleDateString('en-GB').replace(/\//g, '-'); // Formats as DD-MM-YYYY
            }),
            datasets: [
            {
                label: 'Donation Records',
                backgroundColor: '#22577a',
                data: data.map(row => row.amount)
            }
            ]
        },
        options: {
           
        }
        });

        // Download chart image
        document.getElementById('download').addEventListener('click', function() {
            // Convert the canvas to a Data URL (base64 encoded image)
            const imageURL = canvas.toDataURL('image/png');

            // Create a temporary anchor element to trigger the download
            const a = document.createElement('a');
            a.href = imageURL;
            a.download = 'chart.png';
            a.click();
        });

      </script>
      
    

</x-admin-layout>