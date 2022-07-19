<?php $title = "logout"; ?>

<?php ob_start(); ?>

<section class="pt-20 pb-20 bg-gray-200">
  <div class=" flex content-center justify-center h-full items-center">
    <div class="bg-white shodow-lg max-w-lg">
      <img src="w-full h-40 object-cover" src="" alt="">
      <div class="p-4 flex-1 md:flex md:flex-col justify-center">
        <form action="index.php?action=logout" method="POST">
          <button class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out" type="submit">Log out</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $content = ob_get_clean(); ?>

<?php require('view/front/layout/template.php'); ?>
