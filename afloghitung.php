<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Hitung</title>
</head>

<body class="bg-orange-50">
    <nav class="p-3 bg-white shadow md:flex md:items-center md:justify-between" :class="{'flex': open, 'hidden': !open}">
        <div class="flex justify-between items-center hover:text-orange-400 duration-500">
            <a href="afloghome.php">
                <span class="text-2xl font-sans font-bold cursor-pointer">
                    <img class="h-10 inline" src="src/img/logo-nobg.png">
                    Srikaloka
                </span>
            </a>
        </div>

        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-2 my-4 md:my-0">
                <a href="afloghome.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Home</a>
            </li>
            <li class="mx-2 my-4 md:my-0">
                <a href="aflogguide.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Guide</a>
            </li>
            <li class="mx-2 my-4 md:my-0">
                <a href="afloghitung.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Hitung</a>
            </li>
            <li class="mx-2 my-4 md:my-0">
                <a href="aflogtentang.php" class="text-xl hover:text-orange-400 duration-500 font-sans">About</a>
            </li>
            <li class="mx-2 my-4 md:my-0">
                <a href="saran.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Saran</a>
            </li>
            <a href="login.php">
                <button class="bg-orange-300 text-grey-800 duration-500 px-1.5 py-0.5 mx-3 hover:bg-orange-400 rounded-[7px]">
                    Logout
                </button>
            </a>
        </ul>
    </nav>

    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8 mt-8">
        Hitung
    </h2>
    <section id="hitung" class="mt-12 mb-12 lg:mb-0 md:container md:mx-auto block rounded-lg shadow-lg bg-white px-3 py-6 md:px-6">
        <form action="" method="post" class="mt-12">
            <div class="flex justify-center">
                <div class="flex justify-between">
                    <input type="text" size="5" id="a11" value="30" placeholder="Persamaan 1" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a12" value="28" placeholder="Persamaan 1" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a13" value="37" placeholder="Persamaan 1" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="25" id="b1" value="" placeholder="Masukkan jumlah bahan" class="input border-2 mb-2 ml-2 focus:border-orange-500 focus:outline-none rounded-lg border-orange-300 border-[2px] text-center font-mono">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex justify-between">
                    <input type="text" size="5" id="a21" value="10" placeholder="Persamaan 2" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a22" value="9" placeholder="Persamaan 2" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a23" value="7" placeholder="Persamaan 2" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="25" id="b2" value="" placeholder="Masukkan jumlah bahan" class="input border-2 mb-2 ml-2 focus:border-orange-500 focus:outline-none rounded-lg border-orange-300 border-[2px] text-center font-mono">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex justify-between">
                    <input type="text" size="5" id="a31" value="10" placeholder="Persamaan 3" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a32" value="13" placeholder="Persamaan 3" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="5" id="a33" value="6" placeholder="Persamaan 3" class="input border-2 mb-2 ml-2 rounded-lg border-orange-300 border-[2px] text-center font-mono" disabled>
                    <input type="text" size="25" id="b3" value="" placeholder="Masukkan jumlah bahan" class="input border-2 mb-2 ml-2 focus:border-orange-500 focus:outline-none rounded-lg border-orange-300 border-[2px] text-center font-mono">
                </div>
            </div>
            <div class="mt-6 flex justify-center ">
                <input type="button" value="Hitung" id="btn" class="btn inline-block px-6 py-2.5 mb-6 mt-0 bg-orange-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-600 hover:shadow-lg focus:bg-orange-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-500 active:shadow-lg transition duration-150 ease-in-out" onclick="hasil()">
            </div>
            <h2 class="text-base font-bold text-left text-gray-800">
                *)satuan yang digunakan adalah gram.
            </h2>
            <h2 class="text-base font-bold text-left text-gray-800">
            *) Masukkan jumlah bahan yang dimiliki pada kolom yang kosong.
            </h2>
        </form>
    </section>
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8 mt-8">
        Hasil Perhitungan
    </h2>
    <section id="hasilperhitungan" class="mt-5 mb-12 lg:mb-0 md:container md:mx-auto block rounded-lg shadow-lg bg-white px-3 py-6 md:px-6">
        <div class="flex justify-center">
            <table class="rounded-lg">
                <thead>
                    <tr class="text-center">
                        <th class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400">
                            Varian 1
                        </th>
                        <th class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400">
                            Varian 2
                        </th>
                        <th class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400">
                            Varian 3
                        </th>
                        <th class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400">
                            Jumlah bahan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="hasil" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil1" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil2" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil9" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                    </tr>
                    <tr>
                        <td id="hasil3" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil4" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil5" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil10" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                    </tr>
                    <tr>
                        <td id="hasil6" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil7" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil8" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                        <td id="hasil11" class="border-2 mb-2 ml-2 border-solid border-white text-center text-white rounded-lg font-mono w-40 bg-orange-400"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4 text-base font-bold text-left text-gray-800">
            Hasil perhitungan
            <div id="hasil13" class="text-base text-center font-bold text-left text-gray-800 tracking-wide"></div>
        </div>
        <div class="mt-20">
            <h3 class="text-base font-bold text-left text-gray-800">*)Untuk varian Coklat diambil dari deret pertama sebelum tanda koma (,).</h3>
            <h3 class="text-base font-bold text-left text-gray-800">*)Untuk varian Keju diambil dari deret kedua setelah tanda koma (,).</h3>
            <h3 class="text-base font-bold text-left text-gray-800">*)Untuk varian Cappuccino diambil dari deret ketiga (terakhir).</h3>

        </div>

    </section>
    <footer class="text-center bg-gray-700 text-white mt-16">
        <div class="container px-6 pt-6">
            <div class="flex justify-center mb-6">
                <p>
                    - Visi Srikaloka <br>
                    Mensejajarkan makanan tradisional yang berbahan dasar singkong dengan makanan modern lainnya.
                </p>
            </div>

            <div class="flex justify-evenly">
                <div class="mb-6">
                    <h5 class="uppercase font-bold mb-2.5 ">Alamat Usaha Kami</h5>
                    <ul class="list-none mb-0 text-center">
                        <li>
                            <a href="https://www.google.com/maps/place/Gethuk+Srikaloka/@-7.7621063,110.3822286,15z/data=!4m5!3m4!1s0x0:0x7c98ca51b31bcba8!8m2!3d-7.7620944!4d110.3821443" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                                <img src="https://img.icons8.com/fluency/48/null/visit.png" class="h-8 w-8 mr-2" />
                                Jl. Kaliurang Km 5 Blok H10 <br>Karangwuni, Caturtunggal
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="border-l-2">
                </div>

                <div class="mb-6">
                    <h5 class="uppercase font-bold mb-2.5">Layanan</h5>
                    <ul class="list-none mb-0 text-center">
                        <li>
                            <a href="https://paxel.co/id/berita-dan-promo/area-jangkauan-paxel" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                                <img src="https://img.icons8.com/offices/30/null/deliver-food.png" class="h-8 w-8 mr-2" />
                                Area Delivery
                            </a>
                        </li>
                </div>

                <div class="border-l-2">
                </div>

                <div class="mb-6">
                    <h5 class="uppercase font-bold mb-2.5">Kontak</h5>
                    <ul class="list-none mb-0 text-center">
                        <li>
                            <a href="https://www.instagram.com/gethuk.srikaloka/" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                                <img src="https://img.icons8.com/fluency/48/null/instagram-new.png" class="h-9 w-9 mr-2" />
                                Gethuk Srikaloka
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100023769024386" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                                <img src="https://img.icons8.com/fluency/48/null/facebook-new.png" class="h-9 w-9 mr-2" />
                                Gethuk Srikaloka
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=628978180071&text&type=phone_number&app_absent=0" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                                <img src="https://img.icons8.com/external-those-icons-flat-those-icons/24/null/external-WhatsApp-Logo-social-media-those-icons-flat-those-icons.png" class="h-7 w-7 mr-2" />
                                +628978180071
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-2 bg-grey-900 border-t-2 mt-4">
            © 2022 Copyright: Srikaloka
        </div>
    </footer>


    <script>
        function hasil() {
            var tamp = document.getElementById("hasil");
            var tamp1 = document.getElementById("hasil1");
            var tamp2 = document.getElementById("hasil2");
            var tamp3 = document.getElementById("hasil3");
            var tamp4 = document.getElementById("hasil4");
            var tamp5 = document.getElementById("hasil5");
            var tamp6 = document.getElementById("hasil6");
            var tamp7 = document.getElementById("hasil7");
            var tamp8 = document.getElementById("hasil8");
            var tamp9 = document.getElementById("hasil9");
            var tamp10 = document.getElementById("hasil10");
            var tamp11 = document.getElementById("hasil11");
            var tamp12 = document.getElementById("hasil12");
            var tamp13 = document.getElementById("hasil13");
            var a11 = parseFloat(document.getElementById("a11").value);
            var a12 = parseFloat(document.getElementById("a12").value);
            var a13 = parseFloat(document.getElementById("a13").value);
            var a21 = parseFloat(document.getElementById("a21").value);
            var a22 = parseFloat(document.getElementById("a22").value);
            var a23 = parseFloat(document.getElementById("a23").value);
            var a31 = parseFloat(document.getElementById("a31").value);
            var a32 = parseFloat(document.getElementById("a32").value);
            var a33 = parseFloat(document.getElementById("a33").value);
            var b1 = parseFloat(document.getElementById("b1").value);
            var b2 = parseFloat(document.getElementById("b2").value);
            var b3 = parseFloat(document.getElementById("b3").value);

            function print(M, msg) {
                console.log("" + msg + "")
                for (var k = 0; k < M.length; ++k) {
                    console.log(M[k]);
                }
                console.log()
            }

            function diagonalize(M) {
                var m = M.length;
                var n = M[0].length;
                for (var k = 0; k < Math.min(m, n); ++k) {
                    // Find the k-th pivot
                    i_max = findPivot(M, k);
                    if (A[i_max, k] == 0)
                        throw "matrix is singular";
                    swap_rows(M, k, i_max);
                    // Do for all rows below pivot
                    for (var i = k + 1; i < m; ++i) {
                        // Do for all remaining elements in current row:
                        var c = A[i][k] / A[k][k];
                        for (var j = k + 1; j < n; ++j) {
                            A[i][j] = A[i][j] - A[k][j] * c;
                        }
                        // Fill lower triangular matrix with zeros
                        A[i][k] = 0;
                    }
                }
            }

            function findPivot(M, k) {
                var i_max = k;
                for (var i = k + 1; i < M.length; ++i) {
                    if (Math.abs(M[i][k]) > Math.abs(M[i_max][k])) {
                        i_max = i;
                    }
                }
                return i_max;
            }

            function swap_rows(M, i_max, k) {
                if (i_max != k) {
                    var temp = A[i_max];
                    A[i_max] = A[k];
                    A[k] = temp;
                }
            }

            function makeM(A, b) {
                for (var i = 0; i < A.length; ++i) {
                    A[i].push(b[i]);
                }
            }

            function substitute(M) {
                var m = M.length;
                for (var i = m - 1; i >= 0; --i) {
                    var x = M[i][m] / M[i][i];
                    for (var j = i - 1; j >= 0; --j) {
                        M[j][m] -= x * M[j][i];
                        M[j][i] = 0;
                    }
                    M[i][m] = x;
                    M[i][i] = 1;
                }
            }

            function extractX(M) {
                var x = [];
                var m = A.length;
                var n = A[0].length;
                for (var i = 0; i < m; ++i) {
                    x.push(A[i][n - 1]);
                }
                return x;
            }

            function solve(A, b) {
                //print(A, "A");
                makeM(A, b);
                //print(A, "M");
                diagonalize(A);
                //print(A, "diag");
                substitute(A);
                //print(A, "subst");
                var x = extractX(A);
                //print(x, "x");
                return x;
            }

            A = [
                [a11, a12, a13],
                [a21, a22, a23],
                [a31, a32, a33]
            ]

            b = [b1,
                b2,
                b3
            ]
            print(A, " A ");
            print(b, " b ");

            var x = solve(A, b);

            document.getElementById("hasil13").innerHTML = x;

            var el = [
                a11
            ]
            document.getElementById("hasil").innerHTML = el;
            var el1 = [
                a12
            ]
            document.getElementById("hasil1").innerHTML = el1;
            var el2 = [
                a13
            ]
            document.getElementById("hasil2").innerHTML = el2;
            var el3 = [
                a21
            ]
            document.getElementById("hasil3").innerHTML = el3;
            var el4 = [
                a22
            ]
            document.getElementById("hasil4").innerHTML = el4;
            var el5 = [
                a23
            ]
            document.getElementById("hasil5").innerHTML = el5;
            var el6 = [
                a31
            ]
            document.getElementById("hasil6").innerHTML = el6;
            var el7 = [
                a32
            ]
            document.getElementById("hasil7").innerHTML = el7;
            var el8 = [
                a33
            ]
            document.getElementById("hasil8").innerHTML = el8;
            var el9 = [
                b1
            ]
            document.getElementById("hasil9").innerHTML = el9;
            var el10 = [
                b2
            ]
            document.getElementById("hasil10").innerHTML = el10;
            var el11 = [
                b3
            ]
            document.getElementById("hasil11").innerHTML = el11;













        }
    </script>
</body>

</html>