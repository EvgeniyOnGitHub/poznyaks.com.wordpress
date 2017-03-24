<?php

/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/11/2017
 * Time: 12:38 AM
 */
interface ServiceInterface {

	function trimData($data);

	function checkCaptcha($captcha);

	function sendMail();

	function getIP();
}