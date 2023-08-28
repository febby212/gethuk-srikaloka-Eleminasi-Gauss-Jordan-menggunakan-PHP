<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login Admin</title>
</head>

<body>
  <section class="h-screen bg-orange-50">
    <div class="container px-6 py-12 h-full">
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
          <div class="text-center">
            <span class="text-3xl font-sans font-bold cursor-pointer">
            </span>
            <img class="mx-auto w-48" src="src/img/logo-nobg.png" alt="logo" />
            <h4 class="text-xl font-semibold mt-1 mb-12 pb-1"></h4>
          </div>
          <form method="POST">
            <!-- Email input -->
            <div class="mb-6">
              <input type="text" name="username" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Username" />
            </div>

            <!-- Password input -->
            <div class="mb-6">
              <input type="password" name="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password" />
            </div>

            <!-- Submit button -->
            <button type="submit" name="login" class="inline-block px-4 py-3 bg-orange-400 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-orange-500 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-700 active:shadow-lg transition duration-300 ease-in-out w-full" data-mdb-ripple="true" data-mdb-ripple-color="light">
              Sign in
            </button>
          </form>
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
  $cek_user = mysqli_query($con, "SELECT * FROM admin WHERE username='$username'");
  $row = mysqli_num_rows($cek_user);
  if ($row === 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);
    $cek_pass = $fetch_pass['password'];
    if ($cek_pass <> $password) {
      echo "<script>alert('Password Salah');</script>";
    } else {
      $_SESSION['log'] = true;
      echo "<script>document.location.href='admhome.php'</script>";
    }
  } else {
    echo "<script>alert('Username salah atau belum terdaftar');</script>";
  }
}
?>