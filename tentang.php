<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About</title>
</head>
<body class="bg-orange-50">
    <nav class="p-3 bg-white shadow md:flex md:items-center md:justify-between">
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

    <div class="float-right mt-4 mr-4">
      <div class="block p-2 rounded-lg shadow-lg bg-white max-w-sm">
        <p class="text-gray-700 text-sm">
        <img src="https://img.icons8.com/color/48/null/alarm.png" class="w-4 h-4"/>
          Wanna see our awesome team? 
          <a href="#dev" onclick="scrollFunction1()" class="hover:text-orange-400 duration-500">Click Here :)
          </a>
        </p>
      </div>
    </div>
    
    <section id="latarbelakang">
        <!-- Section: Latar Belakang -->
        <div class="container my-24 px-6 mx-auto">
    
            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800">
        
            <!-- Jumbotron -->
            <div class="container mx-auto xl:px-32 text-center lg:text-left">
                <div class="grid lg:grid-cols-2 flex items-center">
                <div class="mb-12 lg:mb-0">
                    <div
                    class="block rounded-lg shadow-lg px-6 py-12 lg:py-6 xl:py-12 md:px-12 lg:-mr-14"
                    style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)"
                    >
                    <h3 class="text-2xl font-bold mb-3">About Website</h3>
                    <h5 class="text-lg text-blue-600 font-bold mb-12 lg:mb-10 xl:mb-12"></h5>
        
                    <p class="font-bold mb-4">Singkong</p>
                    <p class="text-gra-500 mb-6">
                        Singkong menjadi salah satu bahan makanan pokok yang ada di Indonesia. 
                        Pesatnya pertubuhan tanaman singkong di wilayah tropis, sehingga menjadikannya sumber karbohidrat ke tiga setelah padi dan jagung di Indonesia.
                        Pada 100 gram singkong rebut, terdapat 98% karbohidrat dan sisanya protein serat, vitamin, mineral serta lemak.
                    </p>
        
                    <p class="font-bold mb-4">Gethuk</p>
                    <p class="text-gra-500 mb-6">
                        Di Indonesia banyak sekali makanan olahan yang berbahan dasar singkong, salah satunya adalah gethuk. Gethuk adalah makanan ringan yang berbahan dasar singkong.
                        Proses pembuatan Gethuk dimulai dengan merebus bahan baku, setelah matang kemudian ditumbuk atau dihaluskan dengan digiling lalu diberi pemanis gula dan pewarna makanan untuk mempercantik tampilannya.
                    </p>
        
                    <p class="font-bold mb-4">
                    Gethuk Srikaloka
                    </p>
                    <p class="text-gra-500">
                        Pada zaman sekarang olahan gehtuk telah memiliki banyak variasi, diantaranya ada gethuk frozen. 
                        Salah satu sentra produksi gethuk frozen dibuat oleh Srikaloka yang beralamat 
                        di Jl. Kaliurang km. 5, Karangwuni, Catur tunggal, Depok, Sleman, Yogyakarta. 
                        Varian gethuk yang diproduksi oleh Srikaloka ada berbagai macam jenis.
                    </p>
                    </div>
                </div>
                <div>
                    <img
                    src="src/img/sri1.jpg"
                    class="w-full rounded-lg shadow-lg"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <!-- Jumbotron -->
        
            </section>
            <!-- Section: Design Block -->
        
        </div>
        <!-- Container for demo purpose -->
    </section>

    <section id="dev">
      <div class="mt-8">
          <h2 class="text-4xl font-bold mb-8 text-center">About Us</h2>
      </div>  
          <!-- Section: Profil -->
        <div class="container my-24 px-6 mx-auto">
          <div class="place-content-center mb-20 text-gray-800 text-center">
              <div class="mb-0">
                  <div class="flex justify-center mb-6">
                      <img src="src/img/res.jpg" class="rounded-full shadow-lg w-32" />
                  </div>
              <h5 class="text-lg font-bold mb-4">Yumarlin MZ, S.Kom.,M.Pd., M.Kom</h5>
              <p class="mb-4">
                  yumarlin@janabadra.ac.id
              </p>
              <h6 class="font-medium text-orange-500 mb-2">Dosen Pembimbing</h6>
              </div>
              <p class="mb-4">
                  Doesn Fakultas Teknik Universitas Janabadra
              </p>
          </div>

          <section class="mb-32 text-gray-800 text-center">
        
            <div class="grid md:grid-cols-3 gap-x-6 lg:gap-x-12">
              <div class="mb-12 md:mb-0">
                <div class="flex justify-center mb-6">
                  <img src="src/img/res1.jpg" class="rounded-full shadow-lg w-32" />
                </div>
                <h5 class="text-lg font-bold mb-4">Johanes Yoga Restu kristiaji</h5>
                <p class="mb-2 mt-0">
                  johanesrestu187@gmail.com
                </p>
                <h6 class="font-medium text-orange-500 mb-4">Mahasiswa Teknik Informatika</h6>
                <p class="mb-2">
                  20330011
                </p>
              </div>
              <div class="mb-12 md:mb-0">
                <div class="flex justify-center mb-6">
                  <img src="src/img/ivo1.jpg" class="rounded-full shadow-lg w-32" />
                </div>
                <h5 class="text-lg font-bold mb-4">Hillarius Yuan Ivo Kurniawan</h5>
                <p class="mb-2">
                  yuanivo13@gmail.com
                </p>
                <h6 class="font-medium text-orange-500 mb-4">Mahasiswa Teknik Informatika</h6>
                <p class="mb-2">
                  20330046
                </p>
              </div>
              <div class="mb-0">
                <div class="flex justify-center mb-6">
                  <img src="src/img/feb.jpg" class="rounded-full shadow-lg w-32" />
                </div>
                <h5 class="text-lg font-bold mb-4">Muhammad Febby Wadzaka Ahlul Haq</h5>
                <p class="mb-4">
                  muhammadfebby212@gmail.com
                </p>
                <h6 class="font-medium text-orange-500 mb-4">Mahasiswa Teknik Informatika</h6>
                <p class="mb-4">
                  20330049
                </p>
              </div>
            </div>
          </section>
        </div>
        <!-- Container for demo purpose -->
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

  <script>
          function scrollFunction1() {
        let e = document.getElementById("dev");
        e.scrollIntoView({
          block: 'start',
          behavior: 'smooth',
          inline: 'start'
        });
      }

  </script>
</body>
</html>