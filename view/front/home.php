<?php $title = "home"; ?>

<?php ob_start(); ?>

<section class="u-clearfix u-section-1" id="sec-95e8">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <img class="u-image u-image-1" src="public/frontend/images/<?= $sec[0]["image"] ?>">
              <div class="u-border-3 u-border-grey-dark-1 u-line u-line-vertical u-line-1"></div>
              <h4 class="u-text u-text-palette-5-dark-2 u-text-1"><?= $sec[0]["description"] ?></h4>
              <h1 class="u-custom-font u-font-playfair-display u-text u-title u-text-2"><?= $sec[0]["title"] ?></h1>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout">
              <img class="u-expanded-width u-image u-image-2" src="public/frontend/images/<?= $sec[1]["image"] ?>">
              <h4 class="u-align-left u-custom-font u-font-playfair-display u-text u-text-3"><?= $sec[1]["title"] ?></h4>
              <p class="u-text u-text-grey-40 u-text-4"><?= $sec[1]["description"] ?></p>
              <a href="#" class="u-border-2 u-border-grey-dark-1 u-btn u-button-style u-btn-1">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-clearfix u-section-2" id="sec-71c5">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-size-30 u-size-60-md">
            <div class="u-layout-col">
              <div class="u-align-right u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout">
                  <h2 class="u-custom-font u-font-playfair-display u-text u-text-1"><?= $sec[2]["title"] ?></h2>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-border-3 u-border-grey-dark-1 u-line u-line-vertical u-line-1"></div>
                  <p class="u-text u-text-grey-40 u-text-2"><?= $part[0] ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-30 u-size-60-md">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                <div class="u-container-layout">
                  <img class="u-expanded-width-xs u-image u-image-1" src="public/frontend/images/<?= $sec[2]["image"] ?>">
                  <p class="u-text u-text-grey-40 u-text-3"><?= $part[1] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-clearfix u-section-3" id="carousel_562f">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <p class="u-text u-text-grey-40 u-text-1"><?= $sec[3]["title"].". ".$sec[3]["description"] ?></p>
              <img class="u-image u-image-1" src="public/frontend/images/<?= $sec[3]["image"] ?>">
            </div>
          </div>
          <div class="u-container-style u-image u-layout-cell u-size-20 u-image-2">
            <div class="u-container-layout"></div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
            <div class="u-container-layout">
              <img class="u-image u-image-3" src="public/frontend/images/<?= $sec[4]["image"] ?>">
              <p class="u-text u-text-grey-40 u-text-2"><?= $sec[4]["title"].". ".$sec[4]["description"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-clearfix u-section-4" id="sec-0e65">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout">
              <h2 class="u-custom-font u-font-playfair-display u-text u-text-1"><?= $sec[5]["title"]?></h2>
              <img class="u-align-center u-image u-image-1" src="public/frontend/images/<?= $sec[5]["image"] ?>">
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-container-layout-2">
              <p class="u-align-center u-text u-text-grey-40 u-text-2"><?= $sec[5]["description"]?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/front/layout/template.php'); ?>
