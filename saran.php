<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Saran</title>
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

  <section class="mt-12 mb-12 lg:mb-0 md:container md:mx-auto block rounded-lg shadow-lg bg-white px-6 py-12 md:px-12">
    <main class="container mx-w-6xl mx-auto py-4">
      <div class="flex flex-col space-y-8">
        <!-- First Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
          <div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
            <div class="flex flex-col space-y-6 md:h-full md:justify-between">
              <span class="text-base text-gray-500 font-bold capitalize tracking-wider">
                Saran dari user
              </span>
              <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full">
                        <thead class="border-b tabel-auto">
                          <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Nama
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Saran
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          include "db.php";
                          $sql = "SELECT * FROM saran LIMIT 4";
                          $result = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_array($result)) {
                          ?>
                            <tr class="border-b">
                              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-8" src="https://img.icons8.com/external-anggara-flat-anggara-putra/64/null/external-checklist-basic-user-interface-anggara-flat-anggara-putra.png"/></td>
                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap capitalize">
                                <?php echo $row['nama']; ?>
                              </td>
                              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <?php echo $row['saran']; ?>
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
            <form method="POST" action="apisaran.php">
              <div class="mb-4">
                <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700 font-semibold capitalize">Masukkan nama anda</label>
                <input name="nama" type="text" class="form-control block w-48 px-3 py-1.5 text-base font-normal text-gray-700 
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded transition 
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Nama" />
              </div>
              <div class="mb-4">
                <div class="mb-3 xl:w-96">
                  <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700 font-semibold capitalize">Masukkan saran anda</label>
                  <textarea name="saran" class="
                                                form-control
                                                block
                                                w-full
                                                px-3
                                                py-1.5
                                                text-base
                                                font-normal
                                                text-gray-700
                                                bg-white bg-clip-padding
                                                border border-solid border-gray-300
                                                rounded
                                                transition
                                                ease-in-out
                                                m-0
                                                focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none
                                              " id="exampleFormControlTextarea1" rows="6" placeholder="Saran anda"></textarea>
                </div>
              </div>
              <div class="flex justify-start text-center pt-1 mb-2 pb-1">
                <button name="login" type="submit" class="inline-block px-6 py-2.5 text-black 
                bg-gradient-to-r from-yellow-500 to-amber-200 hover:from-orange-500 hover:to-yellow-500 font-medium text-[14px] leading-tight rounded-lg shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-24 mb-0" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    Submit
                </button>
            </form>
          </div>
        </div>
    </main>
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