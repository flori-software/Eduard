<?php
include "klassen/eduard.php";

jquery_laden();
jquery_ui_laden();
$eduard = new Eduard($_GET["mobile"]) ?? 0;







?>
<script>
$(document).ready(function() {
    $("#loginfeld").draggable();
});


</script>