<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/12/2017
 * Time: 11:00 AM
 */
?>
<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header"><a class="navbar-brand" href="index.php">WordPress Developer </a>
            <a href="index.php"><img class="navbar-brand" src="src/img/favicon2.png"></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-menubuilder">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="index.php">Home</a>
				</li>
				<li class="dropdown" class="dropdown"><a href="/products" class="dropdown-toggle" data-toggle="dropdown">Plugins <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu">
						<?php
						foreach ( $pluginsList as $name=>$pluginFolder ) {

						?>
						<li ><a class="my" href="?plugin=<?php echo $pluginFolder?>"><?php echo $name?></a>
						</li>
                        <?php
						}
                        ?>
					</ul>
				</li>
				<!--<li><a href="#">About Us</a>
				</li>-->
				<li><a href="?page=contact">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>


