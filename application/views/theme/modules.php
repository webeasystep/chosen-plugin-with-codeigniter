<?php 
  foreach(Back_end::$modules as $m){
    if($m['m_name'] != "pages" && $m['m_tabs']){
    ?>
    <li><a href="<?= base_url().$m['m_name']?>/"><?= lang($m['m_name']);?></a></li>
    <?php
   
    } 
  } 
?>
<!--<li><a href="<?= base_url() ?>navigation/trips/list_public_trips"></a></li>-->