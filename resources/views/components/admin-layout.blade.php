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
    </style>
</head>
<body>
    <div class="flex flex-row h-screen ">
        <x-admin-sidebar/>
        
        <div class="h-screen overflow-y-auto w-2/3 bg-middle px-5 py-3">
            {{$slot}}
            
        </div>
        <x-admin-event/>
    </div>
    
</body>
</html>