<!doctype html>
<html class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('images') }}">
</head>
    <body class="bg-cover h-full" style ="background-image: url('images/wallpaper.jpg');">
    
    <div class="container float-right place-content-center h-full  opacity-100 w-1/4 h-full flex items-center justify-center"  style="">

            <form action="/login" method="POST" class=" py-5 px-5 h-auto w-auto rounded-lg mt-5 mr-5 border">
              @csrf
            <h1 class=" block w-full text-3xl	 font-sans md:font-serif text-center text-blue-100 mb-5 font-black mt-5">Teacher's Efficiency Rating  (For Teachers)</h1>
                <label for="username" name="" class="block w-full text-xl font-sans md:font-serif text-center text-blue-100 font-black" > USERNAME</label>
                <input class="mt-3 py-2 px-3 w-full block text-xl text-center font-sans md:font-serif hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" type="text" name="username" placeholder="Input School ID (2018-2197)">
                @if($errors->get('username'))
                <div class="flex justify-center mt-3">
                    <div class="w-full px-4 py-2 text-red-600 bg-red-100 rounded text-center  text-lg font-sans md:font-serif font-black">
                        <p>@error('username'){{$message}}@enderror</p>
                    </div>
                </div>
                @endif
                <label for="password" name="" class="block w-full text-xl font-sans md:font-serif text-center text-blue-100 mt-5 font-black">PASSWORD</label>
                <input class="mt-3 py-2 px-3 w-full block text-xl text-center font-sans md:font-serif hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md"type="password" name="password" placeholder="Enter Password">
                @if($errors->get('password'))
                <div class="flex justify-center mt-3">
                    <div class="w-full px-4 py-2 text-red-600 bg-red-100 rounded text-center  text-lg font-sans md:font-serif font-black">
                        <p>@error('password'){{$message}}@enderror</p>
                    </div>
                </div>
                @endif
                <p class="text-xl font-sans md:font-serif text-right text-blue-100 mt-5 font-black">Are you a student? Sign in <a href="/" class=" text-blue-800 mt-5 underline underline-offset-4">Here</a></p>
                <button class="mt-4 py-2 border px-3 text-xl block justify-center font-sans md:font-serif bg-blue-700 rounded-lg w-auto text-blue-100 text-center justify-center font-black	" type="submit">Submit</button>
            </form>
    </div>
    
    </body>
</html>