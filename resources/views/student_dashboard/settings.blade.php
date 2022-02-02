<!doctype html>
<html class="h-full">
<head>
    <title>STUDENT | SETTINGS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('images') }}">
    <link href="{{ asset('js/app.js') }}">
</head>

<body class="h-full w-full overflow-hidden">
<div class="flex h-full">
        <div class="container w-80 border-2 h-full">
            <div class="w-full h-auto  px-1  border-2">
                <img src="images/Profile_image.jpg" alt="" class="px-2 mt-3 py-3  rounded-full ">
            
                <p class="mt-2 text-center text-xl font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">
                    @if(Session::has('FN'))
                        {{Session::get('FN')}}
                    @endif

                    @if(Session::has('MI'))
                        {{Session::get('MI')}}.
                    @endif

                    @if(Session::has('LN'))
                        {{Session::get('LN')}}
                    @endif
                </p>
                
                <p class="mt-1 mb-2 text-center text-lg font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">(2018-2197)</p>
            </div>
            <a href="dashboard" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border-2 text-xl font-sans md:font-serif text-black-100 font-black">Evaluate</a>
            <a href="settings" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border-2 text-xl font-sans md:font-serif text-black-100 font-black">Settings</a>
            <a href="/" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border-2 text-xl font-sans md:font-serif text-black-100 font-black" onclick=" return confirm('Are You sure you want to logout?')">Logout</a>
        </div>
        <div class="w-full h-full bg-gradient-to-r from-blue-500 to-sky-300 ">
            <div class="w-full h-full bg-gradient-to-r from-blue-500 to-sky-300 px-4 py-3">
                <div class="w-full h-98 bg-white py-5 px-3 rounded-lg">
                    <div class="w-auto h-auto px-5 py-3 font-sans md:font-serif ">
                        <p class="text-3xl mb-3 font-black">Account Information</p>
                        <p class="py-1 px-1 text-xl">Full Name: Nasrollah L. Gandamato</p>
                        <p class="py-1 px-1 text-xl">ID Number: 2018 - 2197</p>
                        <p class="py-1 px-1 text-xl">Grade & Section: 12 - Neptune</p>
                        <p class="py-1 px-1 text-xl">Previous GPA: 1.67777</p>
                        <P class="py-1 px-1 text-xl">Registration Date: September 9, 2021</P>
                        <p class="py-1 px-1 text-xl">Contact #: 09362273537</p>
                        <button class="bg-blue-500 rounded-lg w-auto text-white px-3 py-3 mt-2 font-black">Update Contact #</button>
                    </div>
                </div>

                <div class="w-full h-98 bg-white py-5 px-3 rounded-lg mt-5">
                    <div class="w-auto h-full px-5 py-3 text-lg ont-sans md:font-serif">
                        <form action="">
                            <h1 class="text-3xl mb-2 font-black">Change Password</h1>
                            <p class="py-2 px-1 text-2xl ">Old Password</p>
                            <input type="password" class="w-96 py-2 px-3 rounded-lg border border-blue-500 border text-xl" require placeholder="Enter Old Password">
                            <p class="py-2 px-1 text-2xl ">New Password</p>
                            <input type="password" class="w-96 py-2 px-3 rounded-lg border border-blue-500 border text-xl" id="password" name="password" placeholder="Enter New Password" >
                            <p class="py-2 px-1 text-2xl ">Confirm New Password</p>
                            <input type="password" class="w-96 py-2 px-3 rounded-lg border border-blue-500 border text-xl" id="confirm_password" name="confirm_password" placeholder="Confirm New Password">
                            <button type ="submit"class="bg-blue-500 rounded-lg w-auto text-white px-3 py-3 mt-5 font-black block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("New Password Don't Match");
        } 
        else {
            confirm_password.setCustomValidity('');
        }
    }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
</script>
