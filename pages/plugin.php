<?php
//создаю ссылку для соместимости
$plugin = $object;
?>
<div class="custom-container">
<h1 class="page-header plugin-header"><?php echo $header; ?></h1>
        <div class="col-lg-7 col-md-8 col-sm-9">
            <div style="font-weight: bold; font-size: 16px; padding: 10px" class="bg-primary">Description:</div>
            <p class="text-info"><?php echo $plugin->pluginLongDescription;
		        ?></p>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-3">
            <div style="padding: 10px" class="bg-success">Installation:</div>
            <p class="text-info"><?php echo $plugin->pluginInstallation;
		        ?></p>
            <div style="padding: 10px" class="bg-info">Changelog:</div>
            <p class="text-info"><?php echo $plugin->pluginChangelog ;
		        ?></p>
        </div>


</div>

