<?php require base_path('views/partials/head.php'); ?>



<!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="/img/an_archy.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-2xl font-semibold mb-4">Welcome Admin!</h1>
  <form action="#" method="POST">
    <!-- Username Input -->
    <div class="mb-4">
      <label for="employee_id" class="block text-gray-600">Employee email</label>
      <input type="email" id="employee_id" name="admin_email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="admin_password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>

    <!-- Login Button -->
    <button type="submit" class= "bg-gray-600 cursor-pointer hover:bg-black text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
  </form>
  <!-- Sign up  Link -->
  <div class="mt-6 text-blue-500 text-center">
    <a href="/AnArchyClinical-Laboratory/admin/register" class="hover:underline">Sign up Here</a>
  </div>
</div>
</div>


<?php require base_path('views/partials/footer.php'); ?>
