<script type="text/javascript">
    	jQuery.noConflict();
    	jQuery(document).ready(function() {
    		if ( jQuery(".delete_confirm").length > 0 ) {
                    jQuery(".delete_confirm").click(function() {
                    var response = confirm('هل أنت متأكد من الحذف ؟');

                    if (response == true)
                    {
                            jQuery(this).parents("tr").css({ "background-color" : "#fbcdcd" }, 'slow');
                            jQuery(this).parents("tr").fadeOut("slow");
                    }

                    return response;
                    });
    		}
                //Initiate lightbox script
                jQuery(function() {
                        jQuery('.box').lightBox({
                                // Configuration related to images
                                imageLoading:			'<?= base_url()?>global/modules/admin/images/lightbox-ico-loading.gif',
                                imageBtnPrev:			'<?= base_url()?>global/modules/admin/images/lightbox-btn-prev.gif',
                                imageBtnNext:			'<?= base_url()?>global/modules/admin/images/lightbox-btn-next.gif',
                                imageBtnClose:			'<?= base_url()?>global/modules/admin/images/lightbox-btn-close.gif',
                                imageBlank:			'<?= base_url()?>global/modules/admin/images/lightbox-blank.gif',
                                containerResizeSpeed: 350,
                                txtImage: 'صورة',
                                txtOf: 'من'
                                });
                });

  			//Initiate password strength script
//			jQuery('.password').pstrength();

        	//Categories Table
    		jQuery("#categoryTable")
			.tablesorter({
				// zebra coloring
				widgets: ['zebra'],
				// pass the headers argument and assing a object
				headers: {
					// assign the sixth column (we start counting zero)
					3 : {
						// disable it by setting the property sorter to false
						sorter: false
					},
					4 : {
						// disable it by setting the property sorter to false
						sorter: false
					}
				}
			})
		.tablesorterPager({container: jQuery("#categoryPager")});

		// Pages Table
         jQuery("#pageTable")
                .tablesorter({
                // zebra coloring
                widgets: ['zebra'],
                // pass the headers argument and assing a object
                headers: {
                        // assign the sixth column (we start counting zero)
                        4: {
                                // disable it by setting the property sorter to false
                                sorter: false
                        },
                        5 : {
                                // disable it by setting the property sorter to false
                                sorter: false
                        }
                }
                })
		.tablesorterPager({container: jQuery("#pagePager")});

     	// Products Table
         jQuery("#productTable")
 			.tablesorter({
 				// zebra coloring
 				widgets: ['zebra'],
 				// pass the headers argument and assing a object
 				headers: {
 					// assign the sixth column (we start counting zero)
 					2 : {
 						// disable it by setting the property sorter to false
 						sorter: false
 					},
					6 : {
 						// disable it by setting the property sorter to false
 						sorter: false
 					}

 				}
 			})
 		.tablesorterPager({container: jQuery("#productPager")});

  		// Banners Table
         jQuery("#bannerTable")
 			.tablesorter({
 				// zebra coloring
 				widgets: ['zebra'],
 				// pass the headers argument and assing a object
 				headers: {
 					// assign the sixth column (we start counting zero)
 					2 : {
 						// disable it by setting the property sorter to false
 						sorter: false
 					},
					5 : {
 						// disable it by setting the property sorter to false
 						sorter: false
 					}

 				}
 			})
 		.tablesorterPager({container: jQuery("#bannerPager")});
	});
</script>