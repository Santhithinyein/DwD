<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
              gingerRed: '#B83C08',
              redFox:'#C35817',
              middle:'#f4d58d',
              textco:'#fdf0d5',
              side:'#001427',
              test:'#708d81'
              
            }
          }
        }
      }
    </script>
    <style>
     body{
      font-family: Arial;
     }
    
  #sidebar.collapsed {
      width: 16rem;
  }

  #sidebar.collapsed #sidebar-content {
      display: none;
  }

  #sidebar.collapsed #sidebar-content .hidden {
      display: inline;
  }
  
  #sidebar.collapsed #sidebar-content .flex {
      justify-content: center;
  }

  #sidebar.collapsed #toggle-btn {
      display: block;
  }
  .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }


    </style>
</head>
<body>
  
    
    <div class="relative w-full h-screen overflow-hidden bg-[url('/images/dbg4.jpg')] bg-cover">
      {{-- <video autoplay  muted playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="https://vxrcel-studio.vercel.app/abstract.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> --}}

    
      <div class="relative z-10  w-full h-full bg-white bg-opacity-20 backdrop-blur-md backdrop-saturate-150">
        {{-- <div class="p-8 bg-white bg-opacity-50 rounded-lg shadow-lg">
          <h1 class="text-4xl font-bold text-white">Glassmorphism Content</h1>
          <p class="text-lg text-white">This is some example content on top of the glassmorphism effect.</p>
        </div> --}}
        <div class="flex flex-row h-screen ">
      
          <x-admin-sidebar/>
          
          
          {{-- <div class="h-screen overflow-y-auto w-full px-5 py-3 bg-gradient-to-b from-[#f4f8c1] to-[#f19e50] min-h-screen shadow-lg">
            {{$slot}}
            
          </div> --}}
          <div class="h-screen overflow-y-auto w-full px-5 py-3 bg-gradient-to-b from-[#f4f8c1] to-[#f19e50]  min-h-screen shadow-lg">
            {{$slot}}
            
          </div>
          
          {{-- <x-admin-event/> --}}
      </div>
      </div>
    </div>
  
    
    
</body>
</html>