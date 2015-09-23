<link rel="stylesheet" type="text/css" href="<?= base_url() ?>global/modules/admin/chosen/chosen.css">
<script type="text/javascript" src="<?= base_url() ?>global/modules/admin/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".chosen").chosen();
        $(".chosen-select").chosen().change(function (evt, params) {
            var selectedValue = $(this).find('option:selected').val();
            if (selectedValue)
                $(this).find('option[value="' + selectedValue + '"]:not(:selected)').attr('disabled', 'disabled');
            else {
                $(this).find('option[value="' + params.deselected + '"]:disabled').removeAttr('disabled');
            }
            $(this).trigger("chosen:updated");
        });
    })
</script>
<!-- Form Start -->
<div class="block">
    <div class="title lightTextShadow"><?php echo $this->lang->line('category_edit'); ?></div>
    <br/>

    <div class="content">
        <?php echo form_open_multipart('country/admin_country/edit/' . $category->country_id) ?>
        <fieldset class="form boxStyle">

            <label for="category_name" class="label"><?php echo $this->lang->line('category_title'); ?></label>
            <input id="category_name" class="textBox med rnd5" name="category_name"
                   value="<?= set_value('category_name', $category->country_name) ?>"/>
            <?php echo form_error('category_name'); ?>
            <br/>
            <label class="label">الخدمات المرتبطة </label>
            <?= form_dropdown('service[]',$services,$selected, 'multiple="true" style="width:400px;" class="chosen chosen-select chosen-rtl" data-placeholder="قم باختيار الخدمة" id="service"'); ?>
           </br></br>

            <div class="center">

                <input id="submit" type="submit" value="update" class="button sml inlineBlock rnd5 drkTextShadow"/>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
</div>