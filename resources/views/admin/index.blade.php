<x-admin-layout>

    <div class="py-2">
        <a href="#" class="px-4 py-2 bg-red-800 rounded text-white">Excel Export</a>
    </div>
   
    <div class="chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="myChart"></canvas>
        <button id="download" class="bg-red-800 px-4 py-2 rounded my-2 text-white">Download Chart as Image</button>
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
            labels: data.map(row =>  {
                const date = new Date(row.created_at);
                return date.toLocaleDateString('en-GB').replace(/\//g, '-'); // Formats as DD-MM-YYYY
            }),
            datasets: [
            {
                label: 'Donation Records',
                // backgroundColor:['red','green','blue'],
                // data: data.map(row => row.count)
                data: [12, 19, 3, 5, 2, 3,8,9,2,5,7],
            }
            ]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
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