<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Srikaloka</title>
</head>

<body class="bg-orange-50">
  <nav class="p-3 bg-white shadow md:flex md:items-center md:justify-between shadow-lg">
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

  <section class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
      <h1 class="font-pt-serif text-5xl font-bold mb-7">
        Selamat Datang
        <div class="mt-2">
          di <span class="hover:text-orange-400 duration-300">UMKM Srikaloka</span>
        </div>
        </span>
      </h1>
      <p class="font-pt-serif font-normal mb-7">
        Jika Anda sedang mencari makanan yang <b>unik, baru, dan istimewa</b> UMKM Srikaloka solusinya.
        Getuk dengan berbagai varian rasa serta dibalut dengan oren-oren yang renyah membuat anda ketagihan.
      </p>
      <div class="font-montserrat">
        <a href="https://api.whatsapp.com/send/?phone=628978180071&text&type=phone_number&app_absent=0">
          <button class="bg-orange-400 px-8 py-2 rounded-lg border-2 border-orange-400 border-solid text-white mr-2 mb-2 hover:bg-orange-500 hover:border-orange-500 animate-pulse hover:animate-none">
            Pesan
          </button>
        </a>
        <a href="#produk">
          <button class="px-8 py-2 rounded-lg border-2 border-orange-400 text-black border-solid text-white mr-2 mb-2 hover:bg-orange-400">
            Produk & Layanan
          </button>
        </a>
      </div>
    </div>
    <div class="flex justify-around md:block mt-0 mb-0 md:mt-0 md:flex-1 animate-bounce">
      <img src='src/img/mangkokgetuk.png' alt="getuk" />
    </div>
  </section>

  <section id="produk" class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto block rounded-[30px] shadow-lg bg-white">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-2 text-gray-900 tracking-widest">PRODUK & LAYANAN</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="coklat" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="src/img/coklat.jpg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Getuk Coklat Krispi</h2>
              <p class="mb-4">Dengan isian cokelat hitam yang tidak terlalu manis ditambah daging singkong yang lembut, cocok buat Kamu yang kurang suka manis.</p>
              <span class="inline-flex">
                <img class="w-8" src="https://img.icons8.com/ios/50/null/halal-sign.png" />
                <img class="w-8 ml-2" src="src/img/bpom1.png" />
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="src/img/keju.jpg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Getuk Keju Krispi</h2>
              <p class="mb-4">Cream Cheese memiliki rasa manis & gurih dipadukan Singkong yang lembut membuat varian Getuk
                Crispy Keju ini bisa membuat moodmu kembali baik dan semakin bersemangat.</p>
              <span class="inline-flex">
                <img class="w-8" src="https://img.icons8.com/ios/50/null/halal-sign.png" />
                <img class="w-8 ml-2" src="src/img/bpom1.png" />
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="src/img/sri1.jpg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Getuk Cappuccino Krispi</h2>
              <p class="mb-4">Manjakan dirimu dengan rasa cappucino khas dan dipadukan dengan singkong yang lembut
                menciptakan perpaduan rasa yang sempurna. <br>Rasakan perpaduan manis dan kopi di setiap gigitannya!</p>
              <span class="inline-flex">
                <img class="w-8" src="https://img.icons8.com/ios/50/null/halal-sign.png" />
                <img class="w-8 ml-2" src="src/img/bpom1.png" />
              </span>
            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/2">
          <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
            <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="src/img/paxel.jpeg">
            <div class="flex-grow sm:pl-8">
              <h2 class="title-font font-medium text-lg text-gray-900">Layanan Pengiriman Paxel</h2>
              <p class="mb-4">Kerjasama dengan Paxel mejadikan jangkauan pengiriman Srikaloka lebih luas. Fitur-fitur yang diberikan Paxel membuat getuk Anda tiba dengan aman, selamat, dan fresh.</p>
            </div>
          </div>
        </div>
      </div>
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
</body>

</html>