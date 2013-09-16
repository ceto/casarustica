<footer class="content-info container-fluid" role="contentinfo">
  <div class="row-fluid">
    <?php dynamic_sidebar('sidebar-footer'); ?>    
  </div>
  <div class="row-fluid">
  	<div class="span12">
      <?php if (ICL_LANGUAGE_CODE=='de') : ?>
          <p><strong> &copy; <?php echo date('Y'); ?> <a href="http://casarustica.hu">Casa Rustica Bauernhäuser</a></strong> |  Lingual Kft.  <br />
            Haus- und Ansichtspläne: <a target="_blank" href="http://www.arthitectbau.hu/">Arthitectbau</a> | Fotografien: Miklós Klotz, Zsolt Tátrai | Webdesign: <a href="http://hydrogene.hu" target="_blank">Hydrogene</a> </p>
      <?php else : ?>           
          <p><strong> &copy; <?php echo date('Y'); ?> <a href="http://casarustica.hu">Casa Rustica Parasztházak</a></strong> |  Lingual Kft.  <br />
            Ház- és látványtervek: <a target="_blank" href="http://www.arthitectbau.hu/">Arthitectbau</a> | Fotók: Klotz Miklós, Tátrai Zsolt | Honlapkészítés: <a href="http://hydrogene.hu" target="_blank">Hydrogene</a> </p>
      <?php endif; ?>
  		
		<a data-atoggle="collapse" data-atarget=".nav-collapse" class="tothetop" href="#top"><i class="icon-arrow-up"></i></a>
   	</div>
  </div>
</footer>
<?php wp_footer(); ?>
