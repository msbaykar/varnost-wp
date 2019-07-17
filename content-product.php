<main class="singleProductPage">
  <section class="singleProductContent">
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    <?php  $meta_data = get_post_meta($post->ID, 'post_', true); // var_dump($meta_data)?>

    <div class="singleProductHeader">
      <h1><?php the_title(); ?></h1>
    </div>
    <?php // Individual Post Styling?>
    <div class="singleProductContainer">
      <div class="singleProductDesc">
        <div class="singleProductHead">
          Özellikleri
        </div>
        <div class="singleProductText">
          <?php the_content(); ?>
        </div>
        <?php $pdf = $meta_data['pdf_upload']; ?>
        <?php if (!empty($pdf)): ?>

        <div class="singleProductHead">
          indirmeler
        </div>

        <div class="singleProductPdf">

          <a href="<?php echo $pdf ?>"><?php echo $meta_data['pdf_name'] ?></a>
        </div>
        <?php endif; ?>
      </div>

      <?php // var_dump($meta_data)?>
      <div class="singleProductGallery">
        <?php $gallery = $meta_data['post_gallery'] ?>

        <?php if (!empty($gallery)): ?>
        <div class="singleProductSlider">
          <div class="owl-carousel owl-theme singleGallery">
            <?php $gallery = explode(',', $gallery); ?>

            <?php foreach ($gallery as $img): ?>
            <?php $img = wp_get_attachment_image_src($img, "full") ?>
            <img src="<?php echo $img[0] ?>" alt="">
              <?php endforeach; ?>

            </div>
          </div>
        <?php else: ?>
          <div class="singleProductSlider singleImg animated  ">
            <?php the_post_thumbnail(''); ?>
          </div>

          <?php endif; ?>

        </div>
        <?php // var_dump(get_field('pdf_1_')) ?>
        <?php $pdf1 = get_field('pdf_1_') ?>
        <?php $pdf2 = get_field('pdf_2') ?>
        <?php $pdf3 = get_field('pdf_3') ?>



        <?php $teknik = get_field('teknik_bilgiler'); ?>
        <?php $opsiyon = get_field('opsiyonlar'); ?>
        <?php $ozellik = get_field('ozellikler'); ?>
        <?php $katalog = get_field('katalog'); ?>


        <?php if (!empty($teknik) or !empty($opsiyon) or !empty($ozellik) or !empty($katalog)): ?>

        <div class="vrTabsContainer">
          <div id="TabsButtons" class="vrTabsButtons">

            <?php if (!empty($ozellik)): ?>

            <button class="vrBtn active" onclick="openCity('ozellik')">Özellikler</button>
            <?php endif; ?>
            <?php if (!empty($teknik)): ?>

            <button class="vrBtn  " onclick="openCity('teknik')">Teknik Bilgiler</button>
            <?php endif; ?>
            <?php if (!empty($opsiyon)): ?>

            <button class="vrBtn" onclick="openCity('opsiyon')">Opsiyonlar</button>
            <?php endif; ?>
            <?php if (!empty($pdf1)): ?>

            <button class="vrBtn" onclick="openCity('katalog')">Katalog</button>
            <?php endif; ?>

          </div>
          <div id="tabCotents" class="vrTabcontents">
            <?php if ($ozellik): ?>
            <div id="ozellik" class="vrTabcontent tab">
              <div class="singleProductTec">
                <?php echo $ozellik; ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if ($teknik): ?>
            <div id="teknik" class="vrTabcontent tab" style="display:none">
              <div class="singleProductTec">
                <?php echo get_field('teknik_bilgiler'); ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if ($opsiyon): ?>
            <div id="opsiyon" class="vrTabcontent tab" style="display:none">
              <?php echo $opsiyon; ?>
            </div>
            <?php endif; ?>
            <?php // var_dump($pdf1)?>
            <?php if (!empty($pdf1)): ?>

            <?php $pdfName = $pdf1['title']; ?>
            <?php $tag =  explode("_", $pdfName) ?>
            <?php $pdfName2 = $pdf2['title']; ?>
            <?php $tag2 =  explode("_", $pdfName2) ?>
            <?php $pdfName3 = $pdf3['title']; ?>
            <?php $tag3 =  explode("_", $pdfName3) ?>


            <div id="katalog" class="vrTabcontent tab" style="display:none">

            <div class="katalogs">
              <a href="<?php echo $pdf1['url'] ?>" title="<?php echo $pdf1['title'] ?>" alt="<?php echo $pdf1['description'] ?>" target="_blank">
                <?php foreach ($tag as $key => $value): ?>
                <?php echo $value; ?>
                <?php endforeach; ?>
              </a>
              <?php // var_dump($pdf2); ?>
              <a href="<?php echo $pdf2['url'] ?>" title="<?php echo $pdf2['title'] ?>" alt="<?php echo $pdf2['description'] ?>" target="_blank">
                <?php foreach ($tag2 as $key => $value): ?>
                <?php echo $value; ?>
                <?php endforeach; ?>
              </a>
              <a href="<?php echo $pdf3['url'] ?>" title="<?php echo $pdf3['title'] ?>" alt="<?php echo $pdf3['description'] ?>" target="_blank">
                <?php foreach ($tag3 as $key => $value): ?>
                <?php echo $value; ?>
                <?php endforeach; ?>
              </a>

            </div>


            </div>


            <?php endif; ?>

          </div>

        </div>
        <?php endif; ?>

        <?php endwhile; ?>

        <?php // Navigation?>

      <?php else : ?>

        <?php // No Posts Found?>

        <?php endif; ?>

      </section>

    </main>
