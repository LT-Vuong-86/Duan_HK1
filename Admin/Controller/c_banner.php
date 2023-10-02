<?php
$banner = $db->get('banner', array());
$thongtinshop = $db->get('thongtinshop', array());
require "view_web/v_banner.php";