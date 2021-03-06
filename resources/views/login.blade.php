<!doctype html>
<html class="h-full">
<head>
    <title>Student | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('images') }}">
</head>
    <body class="bg-cover h-full bg-gradient-to-r from-blue-500 to-sky-300 px-5" style ="">
    
    <div class="md:container md:mx-auto place-content-center h-full   opacity-100 w-1/4 h-full flex items-center justify-center"  style="">

            <form action="/login" method="POST" class=" py-5 px-5 h-auto w-auto rounded-lg border-4 border-white">
              @csrf
            <h1 class=" block w-full text-3xl font-sans md:font-serif text-center text-white mb-5 mt-5">Teacher's Efficiency Rating (Students)</h1>
                <input type="hidden" value = "2" name="type">
                <label for="username" name="" class="block w-full text-2xl font-sans md:font-serif text-center text-sky-100 " >Username</label>
                <input class="mt-3 py-2 px-3 w-full block text-xl text-center font-sans md:font-serif hover:outline-none focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-md" type="text" name="username" placeholder="Input School ID (2018-2197)">
                @if($errors->get('username'))
                <div class="flex justify-center mt-3">
                    <div class="w-full px-4 py-2 text-red-600 bg-red-100 rounded text-center  text-lg font-sans md:font-serif font-black">
                        <p>@error('username'){{$message}}@enderror</p>
                    </div>
                </div>
                @endif
                <label for="password" name="" class="block w-full text-2xl font-sans md:font-serif text-center text-sky-100 mt-5">Password</label>
                <input class="mt-3 py-2 px-3 w-full block text-xl text-center font-sans md:font-serif hover:outline-none focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-md"type="password" name="password" placeholder="Input Password">
                @if($errors->get('password'))
                    <div class="flex justify-center mt-3">
                        <div class="w-full px-4 py-2 text-red-600 bg-red-100 rounded text-center  text-lg font-sans md:font-serif font-black">
                            <p>@error('password'){{$message}}@enderror</p>
                        </div>
                    </div>
                @endif

                @if(Session::has('error_message'))
                    <div class="flex justify-center mt-3">
                        <div class="w-full px-4 py-2 text-red-600 bg-red-100 rounded text-center  text-lg font-sans md:font-serif font-black">
                            <p>
                                {{Session::get('error_message')}}
                                {{Session::forget('error_message')}}
                            </p>
                        </div>
                    </div>
                @endif

                @if(Session::has('FN'))
                    {{Session::flush()}}
                @endif
                <p class="text-xl font-sans md:font-serif text-right text-white mt-5">Are you a teacher? Sign in <a href="teacher_login" class=" text-white mt-5 underline underline-offset-4">Here</a></p>
                <button type="submit" class="mt-4 py-2 px-3 text-xl border  block justify-center font-sans md:font-serif bg-blue-700 rounded-lg w-auto text-blue-100 text-center justify-center">Submit</button>
            </form>
    </div>
    
    </body>
</html>