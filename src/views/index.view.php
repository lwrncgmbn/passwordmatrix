<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="src\views\css\output.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-[Poppins]">
  <!-- //? HEADER -->
  <div class="h-16 w-full bg-[#323643] flex items-center justify-end px-2 md:px-14">
    <a href="/accounts" class="bg-[#93DEFF] text-[#323643] font-bold py-2 px-6 rounded-full border-2 border-[#93DEFF] hover:bg-transparent hover:text-white duration-300">View Accounts</a>
  </div>
  <!-- //? END OF HEADER -->
  <!-- //? MAIN  -->
  <main class="-mt-16 flex flex-col lg:flex-row items-center min-h-screen justify-center ">
    <!-- IMAGE -->
    <div class=" md:block">
      <img src="/src/views/assets/image/image.png" alt="" class="transform -scale-x-100">
    </div>
    <!-- FORM -->
    <div>
      <h1 class="text-center text-4xl font-bold py-2">Hello!</h1>
      <form action="/store" class="flex flex-col gap-2 w-72 md:w-96" method="POST">
        <input type="text" placeholder="Username" name="username" class="py-1 rounded-md bg-transparent border-[#00000050] border-[1px] outline-none pl-4 ">
        <div class="relative border-[#00000050] border-[1px] rounded-md">
          <input type="password" name="password" id="password" placeholder="Password" class="py-1  outline-none pl-4 w-11/12 bg-transparent">
          <i class="fa-solid fa-eye absolute top-1/2 right-0 -translate-x-1/2 -translate-y-1/2 cursor-pointer text-[#00000050]" id="showPass"></i>
        </div>
        <?php if (isset($errors['account'])) : ?>
          <p class="text-red-500 text-cs mt-2 text-center"><?= $errors['account'] ?></p>
        <?php endif; ?>
        <div class="flex justify-center">
          <input type="submit" value="STORE" class="bg-[#93DEFF] w-40 my-2 py-1 text-lg font-bold rounded-md cursor-pointer hover:bg-transparent border-[#93DEFF] border-2 duration-300">
        </div>
      </form>
    </div>
  </main>

</body>

<script>
  const password = document.getElementById("password");
  const showPass = document.getElementById("showPass");

  showPass.addEventListener("click", () => {
    if (password.type == 'password') {
      password.setAttribute('type', 'text');
      showPass.classList.remove("fa-eye");
      showPass.classList.add("fa-eye-slash");
    } else {
      password.setAttribute('type', 'password');
      showPass.classList.remove("fa-eye-slash");
      showPass.classList.add("fa-eye");
    }
  });
</script>

</html>