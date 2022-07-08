<?php $title = "grid"; ?>

<?php ob_start(); ?>

<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <?php foreach ($creations as $creation ) { ?>
      <div class="w-full md:w-1/2 lg:w-1/3 px-4">
        <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
          <div class="rounded overflow-hidden mb-8">
            <a href="blog-details.html" class="block">
              <img
                src="public/assets/images/blog/<?= $creation["image"] ?>"
                alt="image"
                class="
                  w-full
                  transition
                  group-hover:scale-125 group-hover:rotate-6
                "
              />
            </a>
          </div>
          <div>
            <span
              class="
                bg-primary
                rounded
                inline-block
                text-center
                py-1
                px-4
                text-xs
                leading-loose
                font-semibold
                text-white
                mb-5
              "
            >
              <?= $creation["creation_date"] ?>
            </span>
            <h3>
              <a
                href="blog-details.html"
                class="
                  font-semibold
                  text-xl
                  sm:text-2xl
                  lg:text-xl
                  xl:text-2xl
                  mb-4
                  inline-block
                  text-dark
                  hover:text-primary
                "
              >
                <?= $creation["title"] ?>
              </a>
            </h3>
            <p class="text-base text-body-color">
              <?= $creation["description"] ?>
            </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/front/layout/template.php'); ?>
