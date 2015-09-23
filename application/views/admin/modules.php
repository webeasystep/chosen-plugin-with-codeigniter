<?php foreach(Back_end::$modules as $m){
          if($m['m_tabs']){ ?>
            <li <?= ($this->uri->segment(1) == $m['m_name']) ? "id='current'" : ""?>><a href="<?= base_url().$m['m_name']?>/admin_<?= $m['m_name'] ?>"><?= lang($m['m_name']);?></a></li>
<?php     }
      }
?>