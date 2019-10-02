<?php
// Link: https://quvor.com/exclude-posts-pages-autoptimize/
add_filter('autoptimize_filter_noptimize','my_ao_noptimize',10,0);
function my_ao_noptimize() {
if (strpos($_SERVER['REQUEST_URI'],'test')!==false) {
return true;
} else {
return false;
}
}
?>
