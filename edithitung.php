<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
    <title>Hitung | Admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="relative antialiased bg-gray-100">
    <!-- Start Nav -->
    <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="tail.php" target="_blank" class="transform duration-500 ease-in-out animate-bounce bg-yellow-200 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
            <img class="w-8 h-8 rounded" src="src/img/logo-nobg.png" alt="Logo Srikaloka">
            Go to home website
        </a>
    </div>
    <nav class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto bg-white rounded-lg">
        <div class="hidden lg:flex lg:justify-between lg:items-center">
            <a href="admhome.php" class="flex items-start gap-2 group ml-4">
                <div class="bg-grey-100 text-white p-1 rounded-md group-hover:bg-yellow-300">
                    <img src="src/img/logo-nobg.png" alt="logo Srikaloka" class="w-7 h-8">
                </div>
                <p class="text-sm font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        Srikaloka
                    </span>
                </p>
            </a>
            <ul class="flex items-center space-x-4 text-sm font-semibold">
                <li><a href="admhitung.php" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-gray-200">Hitung</a></li>
                <li><a href="admubah.php" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Ubah Persamaan</a></li>
            </ul>
            <ul class="flex space-x-2 xl:space-x-4 text-sm font-semibold">
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="flex items-center gap-6">
                <li>
                    <a href="#" class="text-sm font-sans text-gray-800 font-semibold tracking-wider">
                        Admin
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-1 rounded bg-gray-100 mr-4 hover:bg-gray-200">
                            <a href="adlogin.php" class="font-sans text-sm font-semibold">Logout</a>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="text-sm font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        Srikaloka
                    </span>
                </p>
            </a>
            <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
                <ul class="p-4">
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Hitung
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Ubah Persamaan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2 class="animate-pulse mt-12 ml-12 text-2xl font-bold text-center text-yellow-600 mb-12">
        Ubah Persamaan
    </h2>
    <?php 
	include "db.php";
	$id_barang= $_GET['id_barang'];
	$sql="SELECT * FROM hitung WHERE id_barang=$id_barang";
	
	$hasil=mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($hasil);
	?>
    <section class="mt-12 mb-12 lg:mb-0 md:container md:mx-auto block rounded-lg shadow-md bg-white px-6 py-12 md:px-12">
        <form action="prosedit.php" method="POST">
            <div class="grid grid-rows-3 grid-flow-col gap-2 justify-items-center">
                
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Singkong 1</label>    
                <input type="number" name="singkong1" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['singkong1']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Gula 1</label>
                    <input type="number" name="gula1" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['gula1']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Isian 1</label>
                    <input type="number" name="isian1" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['isian1']; ?>"/>
                </div>
                
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Singkong 2</label>    
                <input type="number" name="singkong2" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['singkong2']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Gula 2</label>
                    <input type="number" name="gula2" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['gula2']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Isian 2</label>
                    <input type="number" name="isian2" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['isian2']; ?>"/>
                </div>
                
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Singkong 3</label>    
                <input type="number" name="singkong3" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['singkong3']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Gula 3</label>
                    <input type="number" name="gula3" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['gula3']; ?>"/>
                </div>
                <div class="mb-2 w-auto">
                <label for="exampleNumber0" class="form-label text-center inline-block base font-semibold -mb-4 text-gray-700">Isian 3</label>
                    <input type="number" name="isian3" class="form-control block px-1 py-1.5 text-base text-center font-semibold text-gray-700 bg-white bg-clip-padding border-yellow-400 border-2 rounded-lg transition ease-in-out m-0" value="<?php echo $data['isian3']; ?>"/>
                </div>
            </div>
            <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>"/>
            <button type="submit" name="submit" class="mt-4 ml-6 inline-block px-6 py-2.5 bg-yellow-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-400 hover:shadow-lg focus:bg-yellow-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg transition duration-150 ease-in-out">Submit</button>
        </form>
    </section>

</body>

</html>