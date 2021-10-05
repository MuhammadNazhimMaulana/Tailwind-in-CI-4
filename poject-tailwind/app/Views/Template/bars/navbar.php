
<!-- Awal Navbar -->
<nav class="bg-white">
     <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <button id="btnSideBar" class="px-4 py-2 text-gray-700 text-2xl rounded-lg hover:bg-gray-200">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Awal Search -->
                <form action="" class="w-full invisible sm:visible">
                    <div class="relative text-gray-500 ml-6 px-3 pt-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-700 text-xl">
                            <button type="submit" class="pt-1 focus:outline-none focus:shadow-outline">
                                <i class="fas fa-search"></i>
                            </button>
                        </span>
                        <input type="search" class="py-2 text-base text-gray-900 w-full rounded-md pl-10 bg-transparent placeholder-gray-800 focus:outline-none focus:bg-white focus:text-gray-800" placeholder="Pencarian">
                    </div>
                </form>
                <!-- Akhir Search -->
            </div>

            <div class="ml-3 relative">
                <!-- Awal Icon -->
                <div>
                    <button id="btnNotif" class="text-xl text-gray-800 px-4 py-2 focus:outline-none">
                        <i class="far fa-bell"></i>
                    </button>
                </div>

                <!-- Popup Bell -->
                <div id="divNotif" class="hidden origin-top-left absolute right-0 mt-0 w-64 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <p class="p-2 text-sm text-gray-700">Tidak Ada Hasil</p>
                </div>
                <!-- Akhir Icon -->
            </div>

            <div class="ml-3 relative">
                <!-- Awal Icon -->
                <div>
                    <button id="btnWarna" class="text-xl text-gray-800 px-4 py-2 focus:outline-none">
                        <i class="fas fa-palette"></i>
                    </button>
                </div>

                <!-- Popup Bell -->
                <div id="divWarna" class="hidden origin-top-left absolute right-0 mt-0 w-20 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                    <p class="p-2 text-sm text-gray-700">Warna</p>
                    <div class="py-2">
                        <button onclick="setWarna('bg-blue-500')" class="bg-blue-500 w-12 h-8 rounded block mx-auto my-1"></button>
                        <button onclick="setWarna('bg-indigo-500')" class="bg-indigo-500 w-12 h-8 rounded block mx-auto my-1"></button>
                        <button onclick="setWarna('bg-green-500')" class="bg-green-500 w-12 h-8 rounded block mx-auto my-1"></button>
                        <button onclick="setWarna('bg-red-500')"class="bg-red-500 w-12 h-8 rounded block mx-auto my-1"></button>
                        <button onclick="setWarna('bg-gray-500')"class="bg-gray-800 w-12 h-8 rounded block mx-auto my-1"></button>
                    </div>
                </div>
                <!-- Akhir Icon -->
            </div>

            <div class="ml-3 relative">
                <!-- Awal Icon -->
                <div>
                    <button id="btnProfil" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">Buka Menu Pengguna</span>
                        <img src="<?= base_url('img/Bonevian.png') ?>" class="h-8 w-8 rounded-full">
                    </button>
                </div>

                <!-- Popup Bell -->
                <div id="divProfil" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"><i class="fas fa-user mr-2"></i>Profile Anda</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"><i class="fas fa-cog mr-2"></i>Seting</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a>
                </div>
                <!-- Akhir Icon -->
            </div>

        </div>
     </div>

 </nav>

<!-- Akhir Navbar -->