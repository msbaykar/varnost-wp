<?php
  /* Template Name: Referanslar */
  get_header();
 ?>
 <main class="categoryPage">
   <section class="vrBlock">
     <div class="vrContent">
       <div class="vrheader">

           <h2>REFERANSLAR</h2>
           <div class="vrLine"></div>

       </div>
     </div>
     <div class="catContainer">
       <!-- cat Menu -->
       <div class="catMenu">
        <?php $ref = cs_get_option('ref-slider') ?>
        <?php // var_dump($ref); ?>
        <!-- 'kamu'              => 'KAMU',
        'truzim'            => 'TRUZİM',
        'end'               => 'ENDÜSTRİYEL',
        'konut'             => 'KONUT',
        'egitim'            => 'EĞİTİM',
        'medya'             => 'MEDYA',
        'lojistik'          => 'LOJİSTİK',
        'ozel'              => 'ÖZEL',
        'finans'            => 'FİNANS', -->
         <div class="refMenu button-group sort-by-button-group" id="btnGroup">
           <a class="button active"  href="javascript:void(0)" onclick="filterSelection('all')"> Hepsi</a>
           <!-- note : eğer yeni bir referans kategori açmak gerekirse ilk önce buradan bir button yarat-->
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('kamu')"> KAMU</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('truzim')">TRUZİM</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('konut')"> KONUT</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('egitim')"> EĞİTİM</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('medya')"> MEDYA</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('lojistik')"> LOJİSTİK</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('ozel')"> ÖZEL</a>
           <a class="button "  href="javascript:void(0)" onclick="filterSelection('finans')"> FİNANS</a>



         </div>
       </div>
       <!-- cat Menu -->

       <div class="refLogoList">

         <?php foreach ($ref as $key ): ?>
           <?php $rcat = $key['Rcat']; ?>
             <?php //  var_dump($rcat); ?>
           <?php $rlogo = $key['Rlogo']; ?>

            <?php $img = wp_get_attachment_image_src($rlogo, "full") ?>
             <div class="filterDiv <?php echo $rcat[0] ?>"><img src="<?php echo $img[0] ?>" alt=" <?php echo $rcat[0] ?>"></div>

         <?php endforeach; ?>



       </div>
     <!--   cat catProductList -->
     </div>
   </section>


 </main>

 <?php get_footer(); ?>
