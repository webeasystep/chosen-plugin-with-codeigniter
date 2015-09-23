<!-- Form elements -->
<div class="grid_12">
<div class="module">
    <h2><span>اعدادت الموقع</span></h2>
    <div class="module-body">
	        <?php echo form_open('cp/settings/index/', array('id' => 'site_settings'))?>

           <?php echo $this->template->flash_msg(); ?>

            <p>
                <label>عنوان الموقع</label>
                <input type="text" class="input-short" name="site_name" value="<?= set_value('site_name', $SiteTitle); ?>" />
	            <?php echo form_error('site_name'); ?>
            </p>

            <p>
                <label>عنوان لوحة التحكم</label>
                <input type="text" class="input-short" name="admin_panel_title" value="<?= set_value('admin_panel_title', $AdminTitle); ?>" />
	            <?php echo form_error('admin_panel_title"'); ?>
            </p>

           
            <p>
                <label>البريد الالكترونى</label>
                <input type="text" class="input-short" name="site_email" value="<?= set_value('site_email', $SiteEmail); ?>" />
	            <?php echo form_error('site_email"'); ?>
            </p>
            
             
            <fieldset>
                <input class="submit-silver" type="submit" name="save" value="حفظ" />
            </fieldset>
        </form>
        </div> <!-- End .module-body -->

</div>  <!-- End .module -->
<div style="clear:both;"></div>
</div> <!-- End .grid_12 -->