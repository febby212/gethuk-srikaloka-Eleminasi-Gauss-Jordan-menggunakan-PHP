<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>

<body class="bg-orange-50">
  <section class="h-full gradient-form mb-28 bg-gray-200 md:h-screen">
    <div class="container py-12 px-6 h-full">
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="xl:w-10/12">
          <div class="block bg-white shadow-lg rounded-lg">
            <div class="lg:flex lg:flex-wrap g-0 my-10">
              <div class="lg:w-6/12 px-4 md:px-0">
                <div class="md:p-12 md:mx-6">
                  <div class="text-center">
                    <img class="mx-auto w-48" src="src/img/logo-nobg.png" alt="logo" />
                    <h4 class="text-xl font-semibold mt-1 mb-12 pb-1"></h4>
                  </div>
                  <form method="POST" action="">
                    <p class="mb-4">Please login to your account</p>
                    <div class="mb-4">
                      <input name="username" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded transition 
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Username" />
                    </div>
                    <div class="mb-4">
                      <input name="password" type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Password" />
                    </div>
                    <div class="text-center pt-1 mb-6 pb-1">
                      <button name="login" type="submit" class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3" data-mdb-ripple="true" data-mdb-ripple-color="light" style="
                              background: linear-gradient(
                                to right,
                                #ee7724,
                                #d8363a,
                                #dd3675,
                                #b44593
                              );
                            ">
                        Log in
                      </button>
                    </div>
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Don't have an account?</p>
                      <a href="reg.php">
                        <button type="button" class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                          Sign Up
                        </button>
                      </a>
                    </div>
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Are you an admin of this website?</p>
                      <a href="adlogin.php">
                        <button type="button" class="inline-block px-[30px] py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                          Login
                        </button>
                      </a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none" style="
                      background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                    ">
                <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                  <h4 class="text-xl font-semibold mb-6">Bukan gethuk bukan sihir<br>Gethuk kami yang paling mutakhir
                  </h4>
                  <p class="text-sm">
                    Gethuk Srikaloka memberikan kehangatan dalam setiap pertemuan keluarga. Dengan memoderenisasi grethuk ke dalam berbagai rasa yang kekinian, gethuk Srikaloka menjadi idaman diantara yang lainnya.
                  </p>
                  <div class="flex items-center justify-between pb-6 mt-16">
                      <p class="mb-0 mr-2 font-semibold">Wanna take a look our website?</p>
                      <a href="index.php">
                        <button type="button" class="inline-block px-6 py-2 border-2 border-[#CBCE31] text-white font-medium text-xs leading-tight uppercase rounded hover:bg-[#7dce31] hover:text-black focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                          Home
                        </button>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
if (isset($_POST['login'])) {
  include "db.php";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query($con, "SELECT * FROM regis WHERE username='$username'");
  $row = mysqli_num_rows($cek_user);
  if ($row === 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);
    $cek_pass = $fetch_pass['password'];
    if ($cek_pass <> $password) {
      echo "<script>alert('Password Salah');</script>";
    } else {
      $_SESSION['log'] = true;
      echo "<script>document.location.href='afloghome.php'</script>";
    }
  } else {
    echo "<script>alert('Username salah atau belum terdaftar');</script>";
  }
}
?>