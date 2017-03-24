<?php

/**
 * Created by IntelliJ IDEA.
 * User: poznye
 * Date: 3/13/2017
 * Time: 12:15 PM
 */
class ServiceDriver extends Driver implements ServiceInterface {

	// функция каптчи
	function checkCaptcha( $captcha ) {
		$ip       = $_SERVER['REMOTE_ADDR'];
		$url_data = $this->url . '?secret=' . $this->secret . '&response=' . $captcha . '&remoteip=' . $ip;
		$curl     = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url_data );
		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );
		$res = json_decode( $res );
		if ( $res->success ) {
			return true;
		}

		return false;
	}

	function trimData( $data ) {
	}


	function sendMail() {
		$email      = $_POST['inputEmail'];
		$name       = $_POST['inputName'];
		$text       = $_POST['Comment'];
		$fromName   = $_SERVER['HTTP_HOST'];
		$ip_address = $this->getIP();
		if ( $this->checkCaptcha( $_POST ['g-recaptcha-response'] ) ) {
			$subject   = '=== Message from: ' . $fromName . '===';
			$message   = "
                        <html>
                            <body>         
                                 <p>$text</p>
                                 <table>
                                    <tr>
                                        <th>Email:</th>
                                        <td>$email</td>
                                    </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td>$name</td>
                                    </tr>
                                    <tr>
                                        <th>IP:</th>
                                        <td>$ip_address</td>
                                    </tr>
                                </table>
                               <hr>
                               <p>* Message from: $fromName</p>
                            </body>
                        </html>
                        ";
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';
			// Additional headers
			$headers[] = 'From: Contact Form <webmaster@wordpress.poznyaks.com>';

			mail( $this->adminEmail, $subject, $message, implode( "\r\n", $headers ) );

	echo '<div style="text-align: center; color: white; background-color: #5bc6f7;" class="well"><h2>Thank you</h2></div>';
	echo '<style>.contact-us-to-hide{display: none;}</style>';
	echo '<script>
					$(document).ready(function(){
					      setTimeout(function() {
					       window.location.href = "https://wordpress.poznyaks.com/"
					      }, 2000);
					    });
    	</script>';
		} else {
			die( 'Try Again Later!' );
		}
	}

	function getIP() {
		// getting user ip
		if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( ! empty ( $_SERVER['HTTP_X_RORWARDED_FOR'] ) ) {
			$ip_address = $_SERVER['HTTP_X_RORWARDED_FOR'];
		} else {
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}

		return $ip_address;
	}

}