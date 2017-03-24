<?php

/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/11/2017
 * Time: 12:36 AM
 */
interface MainInterface {

	function getHeader($title);

	function getMenu($array);

	function getBody($header,$content);

	function getFooter();

	function switchByGet($data);

}