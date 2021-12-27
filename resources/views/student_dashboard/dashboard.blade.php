<!doctype html>
<html class="h-full">
<head>
    <title>STUDENT | DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('images') }}">
</head>

<body class="h-full w-full">
    <div class="container w-80 border h-full">
        <div class="w-full h-auto  px-1  border border-gray">
            <img src="images/Profile_image.jpg" alt="" class="px-2 mt-3 py-3  rounded-full ">
           
            <p class="mt-2 text-center text-xl font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">Nasrollah L. Gandamato</p>
            <p class="mt-1 mb-2 text-center text-lg font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">(2018-2197)</p>
    
        </div>
        
    
        <a class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" href="dashboard">Evaluate</a>
        
        <a class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" href="settings">Settings</a>


        <a href="/" class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" onclick=" return confirm('Are You sure you want to logout?')">Logout</a>
  
    </div>
    
</body>
</html>