<!doctype html>
<html class="h-full">
<head>
    <title>TEACHER | DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('images') }}">
</head>

<body class="h-full w-full">
    <div class ="flex h-full">
        <div class="container w-80 h-auto border">
            <div class="w-full h-auto  px-1  border border-gray">
                <img src="images/teacher_image.jpg" alt="" class="px-2 mt-3 py-3  rounded-full ">
                <p class="mt-2 text-center text-xl font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">Mr. Nasrollah L. Gandamato</p>
                <p class="mt-1 mb-2 text-center text-lg font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">(2014-0001)</p>
            </div>
            <a href="teacher_dashboard" class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" >Evaluate</a>
            <a href="teacher_analytics" class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" >Analytics</a>          
            <a href="teacher_settings" class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" href="settings">Settings</a>
            <a href="/" class="flex  w-full h-auto bg-sky-300 hover:bg-sky-700 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" onclick=" return confirm('Are You sure you want to logout?')">Logout</a>
        </div>

        <div class="w-full h-auto bg-gradient-to-r from-sky-300 to-blue-500">  
        </div>
    </div>
</body>
</html>