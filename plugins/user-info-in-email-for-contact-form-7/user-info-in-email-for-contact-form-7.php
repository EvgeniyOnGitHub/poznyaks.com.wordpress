<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/12/2017
 * Time: 12:53 AM
 */
$plugin = new Plugin('User Info In Email For Contact Form 7', __DIR__);

$page = new Main();
echo $page->getHeader( $plugin->getName() );

//не уверен на счет этого, потому что меню везде одно
echo $page->getMenu( $page->pluginsList );

echo $page->getPage( $plugin->getName(), $plugin, 'plugin' );

echo $page->getFooter();


//echo $plugin->pluginShortDescription;

