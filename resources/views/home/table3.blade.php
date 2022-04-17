<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/output.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-Poppins">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="flex">
        <div class="bg-[#A0937D] w-[26%] h-screen shadow-black drop-shadow-2xl overflow-hidden" id="menu">
            <div class="w-full">
                <div class="px-7 py-8 flex">
                    <div class="w-14 h-14 rounded-full bg-slate-600"></div>
                    <div class="ml-5">
                        <h1 class="text-white text-base">Nama Lengkap</h1>
                        <p class="text-xs mt-2">User</p>
                    </div>
                </div>
            </div>

            <center>
                <hr class="w-4/5">
            </center>

            <div class="w-full">
                <ul class="text-sm">
                    <li class="mt-3">
                        <a class="w-full flex pl-10 py-5 hover:bg-[#E3CDC1] transition ease-in-out duration-500"
                            href="home.html">
                            <img class="" src="assets/logo/ant-design_home-outlined.svg" alt="">
                            <span class="ml-5 mt-2">Home</span>
                        </a>
                    </li>
                    <li>
                        <div @click.away="open = false" class="relative hover:bg-[#E3CDC1]" x-data="{ open: false }">
                            <input @click="open = !open" type="checkbox"
                                class="absolute top-0 left-0 inset-x-0 w-full h-20 opacity-0 z-10 cursor-pointer">
                            <a class="w-full flex pl-10 py-5" href="">
                                <img src="assets/logo/carbon_user-admin.svg" alt="">
                                <span class="ml-5 mt-2">Admin</span>
                                <img class="ml-14 transition-transform duration-300"
                                    :class="{'rotate-180': open, 'rotate-0': !open}" src="assets/logo/ooui_next-ltr.svg"
                                    alt="">
                            </a>
                            <div x-show="open" x-transition:enter="transition-all duration-75"
                                x-transition:enter-start="-mt-20 opacity-0"
                                x-transition:enter-end="-mt-[0.5px] opacity-100"
                                x-transition:leave="transition-all duration-75"
                                x-transition:leave-start="-mt-[0.5px] opacity-100"
                                x-transition:leave-end="-mt-20 opacity-0">
                                <ul>
                                    <li>
                                        <a class="w-full flex pl-10 py-5 bg-[#A0937D] hover:bg-[#E3CDC1]/50 transition ease-in-out duration-500"
                                            href="ingredients.html">
                                            <img src="assets/logo/carbon_data-base.svg" alt="">
                                            <span class="ml-5 mt-1">Ingredients</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="w-full flex pl-10 py-5 bg-[#A0937D] hover:bg-[#E3CDC1]/50 transition ease-in-out duration-500"
                                            href="gudang.html">
                                            <img src="assets/logo/tabler_building-warehouse.svg" alt="">
                                            <span class="ml-5 mt-1">Gudang</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="w-full flex pl-10 py-5 hover:bg-[#E3CDC1] transition ease-in-out duration-500"
                            href="">
                            <img src="assets/logo/carbon_logout.svg" alt="">
                            <span class="ml-5 mt-2">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full ml-10">

            <div class="flex justify-between w-[95%] pt-5">
                <a href="" onclick="closeMenu()">
                    <img src="assets/logo/Vector.svg" alt="">
                </a>
                <a href="">
                    <img src="assets/logo/codicon_account.svg" alt="">
                </a>
            </div>

            <div class="mt-5">
                <h1 class="text-4xl text-center">Home</h1>
            </div>

            <div class="flex mt-10">
                <a class="text-base text-white px-5 py-1.5 bg-[#A0937D] rounded-md tracking-normal ml-10" href="">Gudang
                    1</a>
                <a class="text-base text-white px-5 py-1.5 bg-[#A0937D] rounded-md tracking-normal ml-2" href="">Gudang
                    2</a>
                <a class="text-base text-white px-5 py-1.5 bg-[#A0937D] rounded-md tracking-normal ml-2" href="">Gudang
                    3</a>
                <a class="text-base text-white px-5 py-1.5 bg-[#A0937D] rounded-md tracking-normal ml-2" href="">Exp in
                    7 Days</a>
                <div class="flex ml-[67px]">
                    <img class="" src="assets/logo/akar-icons_search.svg" alt="">
                    <input type="search" name="" class="block w-56 px-3 py-1.5 text-base text-white bg-[#A0937D]/50 rounded transition ease-in-out
                    m-0 placeholder:text-white" placeholder="Search...">
                </div>
            </div>

            <table class="table-fixed mt-5 ml-10">
                <thead>
                    <tr class="bg-[#A0937D]">
                        <th class="px-20 py-5">Name</th>
                        <th class="px-16 py-5">Stock</th>
                        <th class="px-20 py-5">Location</th>
                        <th class="px-[67px] py-5">Expired Date</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="bg-[#E3CDC1]">
                        <td class="py-3">Wortel</td>
                        <td class="py-3">20</td>
                        <td class="py-3">Gudang 1</td>
                        <td class="py-3">01/03/2022</td>
                    </tr>
                    <tr class="bg-[#A0937D]/50">
                        <td class="py-3">Kentang</td>
                        <td class="py-3">0</td>
                        <td class="py-3">Gudang 1</td>
                        <td class="py-3">01/03/2022</td>
                    </tr>
                    <tr class="bg-[#E3CDC1]">
                        <td class="py-3">Wortel</td>
                        <td class="py-3">20</td>
                        <td class="py-3">Gudang 1</td>
                        <td class="py-3">01/03/2022</td>
                    </tr>
                    <tr class="bg-[#A0937D]/50">
                        <td class="py-3">Wortel</td>
                        <td class="py-3">20</td>
                        <td class="py-3">Gudang 1</td>
                        <td class="py-3">01/03/2022</td>
                    </tr>
                </tbody>
            </table>
            <div class="bg-[#A0937D] flex w-[853px] ml-10 px-5 py-5">
                <p class="text-white pt-1.5">Page</p>
                <a class="px-4 py-2 ml-20 hover:bg-[#E3CDC1] rounded-xl transition ease-in-out duration-500"
                    href="home.html">1</a>
                <a class="px-4 py-2 ml-3 hover:bg-[#E3CDC1] rounded-xl transition ease-in-out duration-500"
                    href="table2.html">2</a>
                <a class="px-4 py-2 ml-3 bg-[#E3CDC1] rounded-xl transition ease-in-out duration-500"
                    href="table3.html">3</a>
                <a class="px-4 py-2 ml-3 hover:bg-[#E3CDC1] rounded-xl transition ease-in-out duration-500"
                    href="table4.html">4</a>
                <p class="text-white pt-1.5 ml-72">Result 1 to 10 of 40</p>
            </div>

            <!--npx tailwindcss -i ./css/input.css -o ./css/output.css --watch-->
        </div>
    </div>

    <script>
        function openMenu() {
            document.getElementById('menu').style.display = 'block';
        }

        function closeMenu() {
            document.getElementById('menu').style.display = 'none';
        }

    </script>
</body>

</html>
