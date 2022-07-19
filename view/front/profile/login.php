<?php $title = "login"; ?>

<?php ob_start(); ?>

<section class="pt-20 pb-20 bg-gray-200">
  <div class=" flex content-center justify-center h-full items-center">
    <div class="bg-white shodow-lg max-w-lg md:flex justify-around">
      <div class="flex-1">
        <img class=" w-full h-40 md:h-full object-cover" src="public/assets/images/blog/blog-details-01.jpg" alt="">
      </div>
      <div class="p-4 flex-1 md:flex md:flex-col justify-center items-center">
        <form action="index.php?action=login" method="POST">
          <h2 class="text-2xl font-bold text-gray-650 mb-2 text-center">Login</h2>
          <div class="mb-4">
            <label for="username" class="block text-gray-600 mb-2">Username</label>
            <input class="border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-outline" id="username" name="username" type="text" required="required" />
          </div>
          <div class="mb-4">
            <label for="password" class="block  text-gray-600 mb-2">Password</label>
            <input class="border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-outline" id="password" name="password" type="password" required="required" />
          </div>
          <div class="p-2 flex-1 md:flex justify-center ">
            <button class=" mr-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit" name="submit">Login</button>
            <button class=" ml-2 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" type="reset">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/front/layout/template.php'); ?>
