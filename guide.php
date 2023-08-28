<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Guide</title>
</head>
<body class="bg-orange-50">
    <nav class="p-3 bg-white shadow md:flex md:items-center md:justify-between" :class="{'flex': open, 'hidden': !open}">
        <div class="flex justify-between items-center hover:text-orange-400 duration-500">
        <a href="index.php">
        <span class="text-2xl font-sans font-bold cursor-pointer">
            <img class="h-10 inline"
            src="src/img/logo-nobg.png">
            Srikaloka
        </span>
        </a>
        </div>
    
        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-2 my-4 md:my-0">
            <a href="index.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Home</a>
        </li>
        <li class="mx-2 my-4 md:my-0">
            <a href="guide.php" class="text-xl hover:text-orange-400 duration-500 font-sans">Guide</a>
        </li>
        <li class="mx-2 my-4 md:my-0">
            <a href="tentang.php" class="text-xl hover:text-orange-400 duration-500 font-sans">About</a>
        </li>
        <a href="login.php">
          <button class="bg-orange-300 text-grey-800 duration-500 px-1.5 py-0.5 mx-3 hover:bg-orange-400 rounded-[7px]">
            Login             
          </button>
        </a>
        </ul>
    </nav>

    <section class="container mx-auto px-6 p-10">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">
            Guide Website
        </h2>
    </section>
        <section class="bg-black text-white shadow-lg">
            <div>
              <h2 class="text-3xl font-serif font-bold text-center text-grey-800 mb-4">How it works</h2>
            </div>
            <div class="flex flex-col md:flex-row">
              <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                  <h2 class="text-white text-center font-bold text-xl">1</h2>
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Masukkan jumlah bahan</h3>
              </div>
              <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    <h2 class="text-white text-center font-bold text-xl">2</h2>
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Proses perhitungan</h3>
              </div>
              <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    <h2 class="text-white text-center font-bold text-xl">3</h2>
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Hasil perhitungan</h3>
              </div>
            </div>
        </section>

        <section class="container mx-auto px-6 p-10">
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
              <img class="rounded-lg" src="src/img/tut3.png" alt="Reporting" />
            </div>
            <div class="w-full md:w-1/2 pl-10">
              <div class="rounded-full bg-orange-400 text-black h-12 w-12 flex justify-center items-center mb-3">
                <h2 class="text-white text-center font-bold text-xl">1</h2>
              </div>
              <h4 class="text-3xl text-gray-800 font-bold mb-3">Masukkan jumlah bahan</h4>
              <p class="text-gray-600 mb-8">Masukkan banyaknya bahan untuk membuat 1 jenis produk ke dalam tabel. Untuk memasukkan bahan disesuaikan jenisnya. 
                Misal singkong berada pada tabel atas, gula berada pada tabel tengah, dan isian berada pada tabel bawah. Untuk satuannya digunakan gram.
                Selanjutnya masukkan jumlah bahan yang dimiliki pada tabel paling kanan.</p>
            </div>
          </div>
    
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <div class="rounded-full bg-orange-400 text-black h-12 w-12 flex justify-center items-center mb-3">
                <h2 class="text-white text-center font-bold text-xl">2</h2>
              </div>
              <h4 class="text-3xl text-gray-800 font-bold mb-3">Proses perhitungan</h4>
              <p class="text-gray-600 mb-8">Proses perhitungan akan dilakukan oleh mesin dibalik layar, jadi anda tenang duduk manis nikmati gethuknya.</p>
            </div>
            <div class="w-full md:w-1/2 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
              <img class="rounded-lg" src="src/img/tut4.jpg" alt="Syncing" />
            </div>
          </div>

          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
              <img class="rounded-lg" src="src/img/tut5.jpg" alt="Reporting" />
            </div>
            <div class="w-full md:w-1/2 pl-10">
              <div class="rounded-full bg-orange-400 text-black h-12 w-12 flex justify-center items-center mb-3">
                <h2 class="text-white text-center font-bold text-xl">3</h2>
              </div>
              <h4 class="text-3xl text-gray-800 font-bold mb-3">Hasil perhitungan</h4>
              <p class="text-gray-600 mb-8">Hasil perhitungan akan keluar pada box dibawah anda melakukan proses memasukkan bahan yang akan dihitung.</p>
            </div>
          </div>
        </section>

        <section class="mt-10">
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
                        <img src="https://img.icons8.com/fluency/48/null/visit.png" class="h-8 w-8 mr-2"/>
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
                        <img src="https://img.icons8.com/offices/30/null/deliver-food.png" class="h-8 w-8 mr-2"/>
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
                          <img src="https://img.icons8.com/fluency/48/null/instagram-new.png" class="h-9 w-9 mr-2"/>
                        Gethuk Srikaloka
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=100023769024386" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                        <img src="https://img.icons8.com/fluency/48/null/facebook-new.png" class="h-9 w-9 mr-2"/>
                      Gethuk Srikaloka
                      </a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send/?phone=628978180071&text&type=phone_number&app_absent=0" class="flex items-center justify-center text-white font-sans hover:text-orange-400 mb-4">
                        <img src="https://img.icons8.com/external-those-icons-flat-those-icons/24/null/external-WhatsApp-Logo-social-media-those-icons-flat-those-icons.png" class="h-7 w-7 mr-2"/>
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
      </section>
</body>
</html>