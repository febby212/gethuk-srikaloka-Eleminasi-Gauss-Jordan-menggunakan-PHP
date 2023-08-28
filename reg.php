<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="src/img/logo-nobg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Register</title>
</head>

<body>
  <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <div class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        ">
      <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
        Join us Now
      </div>
      <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
        Register to get your account
      </div>
      <div class="mt-4">
        <form method="POST" action="register.php">
          <div class="mb-4">
            <input name="username" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition 
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Username" />
          </div>
          <div class="mb-4">
            <input name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition 
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Email" />
          </div>
          <div class="mb-4">
            <input name="no_hp" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition 
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Phone Number" />
          </div>
          <div class="mb-4">
            <input name="password" type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Password" />
          </div>
          <div class="flex justify-end text-center pt-1 mb-6 pb-1">
            <button name="login" type="submit" class="inline-block px-6 py-2.5 text-white font-medium text-[14px] leading-tight rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-24 mb-0" data-mdb-ripple="true" data-mdb-ripple-color="light" style="
                              background: linear-gradient(
                                to right,
                                #ee7724,
                                #d8363a,
                                #dd3675,
                                #b44593
                              );">
              SignUp
            </button>
        </form>
      </div>
    </div>
    <div class="flex justify-center items-center mt-0">
      <a href="#" target="_blank" class=" inline-flex items-center text-gray-700 font-medium text-xs text-center"></a>
        <p class="ml-2 text-[12px] font-semibold">Alredy have an account?
          <a href="login.php" class="text-xs ml-2 text-orange-300 hover:text-orange-500 font-semibold text-base">Login here</a></p>
    </div>
  </div>

</body>
</html>