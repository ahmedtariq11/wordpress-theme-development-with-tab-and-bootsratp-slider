<?php
include_once('inc/after_theme_setup.php');
include_once('inc/enque_scripts.php');
include_once('inc/tinyMCE.php');
include_once('inc/extra_function.php');
include_once('inc/custom_widgets.php');

include_once('inc/custom_post.php');
include_once('inc/custom_shortcode.php');

include_once('inc/cmb2-custom-field.php');

require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/office-master-theme-options.php');
require_once('inc/class-wp-bootstrap-navwalker.php');


include_once('inc/office-master-plugin-activation.php');

include_once('inc/custom_register_fields.php');
?>
<script>

$('.dropdown-sub', this).click(function(e){
    $('.dropdown-menu', this).toggleClass('show');
})

//This is to stop the Bootstrap menu from closing when a link is clicked.
$(document).on('click', '.dropdown', function (e) {
    e.stopPropagation();
});

</script>