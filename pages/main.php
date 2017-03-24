<?php

?>
<div class="container container-custom">
    <h1 class="page-header custom-header-one"><?php echo $header; ?></h1>
    <p class="text-info"><?php echo $object ?></p>
    <p class="text-info"><?php /*var_dump($this->pluginsList);*/ ?></p>

<!--    <div class="col-lg-8">
        <div style="font-weight: bold; font-size: 16px; padding: 10px" class="bg-primary"></div>
        <p class="text-info"><?php /**/?></p>
    </div>-->

    <div class="col-lg-8 main-column">
        <span style="font-size: 66px; font-family: 'Diplomata SC'">O</span> <span main-column>
            n my wordpress developer source. Take a look for my current plugins.
            If you would like to custom build plugin you can contact me any time.
        </span>

    </div>


    <div class="col-lg-4">
        <h4 class="page-header custom-header">Here is a list of my plugins:</h4>
		<?php
        foreach ( $this->pluginsList as $name => $link ) { ?>
            <a href="?plugin=<?php echo $link ?>"
               class="btn-danger plugin-list-on-main-page "><?php echo $name; ?></a>
		<?php } ?>


        <!--<p class="text-info"><?php /**/ ?></p>
                <div style="padding: 10px" class="bg-info"></div>
                <p class="text-info"><?php /**/ ?></p>-->
    </div>
    <br><br><br><br>


</div>
