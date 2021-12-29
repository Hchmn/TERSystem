<!doctype html>
<html class="h-full">
<head>
    <title>STUDENT | DASHBOARD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('images')}}">
</head>

<body class="h-full w-full overflow-hidden">
    <div class="flex h-full">
        <div class="container w-80 border h-full">
            <div class="w-full h-auto  px-1  border border-gray">
                <img src="images/Profile_image.jpg" alt="" class="px-2 mt-3 py-3  rounded-full ">
            
                <p class="mt-2 text-center text-xl font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">Nasrollah L. Gandamato</p>
                <p class="mt-1 mb-2 text-center text-lg font-sans md:font-serif text-center text-black-100 hover:text-sky-400 font-black block">(2018-2197)</p>
            </div>
            <a href="dashboard" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black">Evaluate</a>
            <a href="settings" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black">Settings</a>
            <a href="/" class="flex  w-full h-auto bg-blue-500 hover:bg-sky-300 px-2 py-2 hover:text-blue-100 border text-xl font-sans md:font-serif text-black-100 font-black" onclick=" return confirm('Are You sure you want to logout?')">Logout</a>
        </div>
        
        <div class="w-full h-full bg-gradient-to-r from-blue-500 to-sky-300 px-4 py-3">
            <div class="w-full h-64 bg-white py-5 px-3 rounded-lg">
                <div class="w-auto h-auto px-5 py-3 text-lg ont-sans md:font-serif font-black">
                    <p class="block">School Year: 2021-2022</p>
                    <p class="">Section: Neptune</p>
                    <p class="">Total Number of Evaluated: 3</p>
                </div>
            </div>

            <div class="w-full h-98 bg-white py-5 px-3 rounded-lg mt-5">
                <div class="w-auto h-full px-5 py-3 text-lg ont-sans md:font-serif font-black">
                    <table class="min-w-full border-collapse block md:table overflow-x-auto">
                        <thead class="block md:table-header-group">
                            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">ID</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Evaluate</th>
                                <th class="bg-gray-600 p-2 text-white text-2xl font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                            </tr>
                        </thead>
                        <tbody class="block md:table-row-group">

                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">2016-0001</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Hella Gay Avenido</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Computer Programming 1</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">
                                    <button class="bg-blue-600 hover:bg-blue-700 text-xl text-white font-bold py-1 disabled:border-blue-400 px-2 border border-blue-500 rounded disabled:bg-blue-400" disabled>Evaluate</button>
                                </td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell"> 
                                    <p class="bg-green-500 w-auto px-1 py-2 rounded-lg text-white w-24 text-center">Done</p>
                                </td>
                            </tr>
                            
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">2015-0100</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Eddie Bouy B. Palad</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Social Legal and Professional Issues in Computing</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">
                                    <button class="bg-blue-600 hover:bg-blue-700 text-xl text-white font-bold py-1 px-2 border border-blue-500 rounded">Evaluate</button>
                                </td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell"> 
                                    <p class="bg-red-500 w-auto px-1 py-2 rounded-lg text-white w-24">Ongoing</p>
                                </td>
                            </tr>
                            

                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row hover:bg-white">
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">2017-1000</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Paul B. Bokingkito Jr.</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">Data Visualization Techniques</td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell">
                                    <button class="bg-blue-600 hover:bg-blue-700 text-xl text-white font-bold py-1 px-2 border border-blue-500 rounded">Evaluate</button>
                                </td>
                                <td class="p-2 md:border md:border-grey-500 text-xl text-left block md:table-cell"> 
                                    <p class="bg-red-500 w-auto px-1 py-2 rounded-lg text-white w-24">Ongoing</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


