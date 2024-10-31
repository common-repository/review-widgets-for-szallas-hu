<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_szallashu = new TrustindexPlugin_szallashu("szallashu", __FILE__, "12.4.1", "Review Widgets for Szallas.hu", "Szállás.hu");
$trustindex_pm_szallashu->uninstall();
?>