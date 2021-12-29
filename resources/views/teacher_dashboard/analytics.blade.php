<!doctype html>
<html class="h-full">
<head>
    <title>TEACHER | ANALYTICS</title>
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
            <a href="teacher_dashboard" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" >Evaluate</a>
            <a href="teacher_analytics" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" >Analytics</a>          
            <a href="teacher_settings" class="flex  w-full h-auto  bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" href="settings">Settings</a>
            <a href="/" class="flex  w-full h-auto  bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 text-xl font-sans md:font-serif text-black-100 font-black" onclick=" return confirm('Are You sure you want to logout?')">Logout</a>
        </div>

        <div class="w-full h-full bg-gradient-to-r from-blue-500 to-sky-300 px-4 py-3"> 
            <div class="w-full h-98 bg-white py-5 px-3 rounded-lg">
                <div class="w-auto h-auto px-5 py-3 font-sans md:font-serif ">
                    <p class="text-3xl mb-3 font-black">Rating</p>
                    <div class="inline-block text-xl ">
                        <a href="" class="px-2 py-2 text-blue-800 font-black">Rating</a>
                        <a href="" class="px-2 py-2 text-blue-800 font-black">Comments</a>
                        <a href="" class="px-2 py-2 text-blue-800 font-black">Download</a>
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white py-5 px-3 rounded-lg mt-5 font-sans md:font-serif overflow-y-auto ">
                <p class="text-3xl font-black px-5 py-3">Tabular Data</p>
                <select name="schoolYear" id="" class="py-3 px-3 mb-5 border w-80 rounded-lg text-xl">
                    <option value="">2021-2022: First Semester</option>
    
                </select>
                <table class="min-w-full py-5 px-5 border-collapse block md:table">
                        <thead class="block md:table-header-group">
                            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Question #</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Student</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Colleague</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Supervisor</th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group overflow-y-scroll w-full h-auto">

                           <tr class="bg-gray-300 border border-grey-500 md:border-none md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">1</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">98</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">97</td>
                            </tr>
                            <tr class="bg-gray-300 border border-grey-500 md:border-none md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">2</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">98</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">97</td>
                            </tr>
                            <tr class="bg-gray-300 border border-grey-500 md:border-none md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">3</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">98</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">97</td>
                            </tr>
                            <tr class="bg-gray-300 border border-grey-500 md:border-none md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">4</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">98</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">97</td>
                            </tr>

                            <tr class="bg-gray-300 border border-grey-500 md:border-none md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">5</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">98</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left md:table-cell">97</td>
                            </tr>
                                              
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    
</body>

</html>