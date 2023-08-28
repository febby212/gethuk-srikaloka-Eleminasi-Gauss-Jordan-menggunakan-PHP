<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
    <title>Dashboard | Admin</title>
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
        <a href="index.php" target="_blank" class="transform duration-500 ease-in-out animate-bounce bg-yellow-200 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
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
                <li><a href="admhitung.php" class="px-2 xl:px-4 py-2 text-gray-800 rounded-md hover:bg-yellow-400">Hitung</a></li>
                <li><a href="admubah.php" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-yellow-400">Ubah Persamaan</a></li>
                <li><a href="datauser.php" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-yellow-400">Data User</a></li>
                <li><a href="saranuser.php" class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-yellow-400">Saran User</a></li>
            </ul>
            <ul class="flex space-x-2 xl:space-x-4 text-sm font-semibold">
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="p-2 rounded hover:bg-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="flex items-center gap-6">
                <li>

                <?php
                    $no=1;
                    include "db.php";
                    $sql = "SELECT * FROM admin";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result)
                ?>
                    <p class="text-sm font-sans text-gray-800 font-semibold tracking-wider capitalize">
                    <?php echo $row['username']; ?>
                    </p>
                </li>
                <li>
                    <a href="#">
                        <div class="p-1 rounded bg-yellow-100 mr-4 hover:bg-yellow-400">
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
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Data User
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Saran User
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Nav -->
    <!-- Start Main -->
    <main class="container mx-w-6xl mx-auto py-4">
        <div class="flex flex-col space-y-8">
            <!-- First Row -->
            <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
                <div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
                    <div class="flex flex-col space-y-6 md:h-full md:justify-between">
                    <span class="text-base text-gray-500 font-bold capitalize tracking-wider">
                        Last user register
                    </span>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="border-b">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        No
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Username
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Email
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Phone Number
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no=1;
                                                include "db.php";
                                                $sql = "SELECT * FROM regis LIMIT 3";
                                                $result = mysqli_query($con,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                                <tr class="border-b">
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $no++; ?></td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap capitalize">
                                                        <?php echo $row['username']; ?>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <?php echo $row['email']; ?>
                                                    </td>
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        <?php echo $row['no_hp']; ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 p-6 rounded-2xl bg-gradient-to-r from-yellow-200 to-yellow-600 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <p class="text-black text-lg font-bold">Eliminasi Gauss-Jordan</p>
                        <p class="mt-1 text-xs md:text-sm text-black font-semibold font-light leading-tight max-w-sm">
                        Eliminasi Gauss-Jordan adalah prosedur pemecahan sistem persamaan 
                        linear dengan mengubahnya menjadi bentuk matriks eselon baris tereduksi dengan Operasi Baris Elementer.
                        </p>
                    </div>
                    <div class="flex justify-between items-end">
                        <a href="https://www.profematika.com/eliminasi-gauss-jordan-beserta-contoh-penerapannya/" class="bg-yellow-600 px-4 py-3 rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-yellow-300 hover:text-black">
                            Learn More
                        </a>
                        <img src="src/img/gaus.jpg" alt="calendar" class="w-24 h-24 object-cover rounded-full">
                    </div>
                </div>
            </div>
            <!-- End First Row -->
            <!-- Start Second Row -->
            <?php
            include "db.php";
            $sql = "SELECT * FROM hitung";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
                <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
                    <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                        Varian Gethuk
                    </h2>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-lg text-yellow-800 font-bold tracking-wide">Varian Coklat</p>
                            <span class="mt-2 text-xs text-gray-500"><?php echo $row['singkong1']; ?>gr Singkong</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['gula1']; ?>gr Gula</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['isian1']; ?>gr Isian</span>
                        </div>
                        <div class="p-2">
                            <img src="src/img/cok.png" alt="icon" class="w-auto h-20 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-lg text-yellow-400 font-bold tracking-wide">Varian Keju</p>
                            <span class="mt-2 text-xs text-gray-500"><?php echo $row['singkong2']; ?>gr Singkong</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['gula2']; ?>gr Gula</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['isian2']; ?>gr Isian</span>
                        </div>
                        <div class="p-2">
                            <img src="src/img/kej.png" alt="icon" class="w-auto h-20 rounded-md">
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl border border-gray-50">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <p class="text-lg text-yellow-600 font-bold tracking-wide">Varian Cappuccino</p>
                            <span class="mt-2 text-xs text-gray-500"><?php echo $row['singkong3']; ?>gr Singkong</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['gula3']; ?>gr Gula</span>
                            <span class="mt-1 text-xs text-gray-500"><?php echo $row['isian3']; ?>gr Isian</span>
                        </div>
                        <div class="p-2">
                            <img src="src/img/cap.png" alt="icon" class="w-auto h-20 rounded-md">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End Second Row -->
            <!-- Start Third Row -->
            <!-- End Third Row -->
        </div>
    </main>
    <!-- End Main -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        const data = {
            labels: [
                'Food & beverages',
                'Groceries',
                'Gaming',
            ],
            datasets: [{
                label: 'Total Expenses',
                data: [148, 150, 130, 170],
                backgroundColor: [
                    '#3B82F6',
                    '#10B981',
                    '#6366F1',
                ]
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };

        const chart = new Chart(ctx, config);
    </script>

</body>

</html>