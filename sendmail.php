<?php

// Turn off all error reporting
//error_reporting(0);


if( !empty($_POST['contact']) )
{
	$data["server"] = $_SERVER;
	file_put_contents("logs/log_entry_".date("d-m-Y_H-i-s").".json", json_encode($data));


	require_once('include/mail.php');

	$mail = new Mail();
	$mailRequired = false;

	$data = $_POST['contact'];

	$mailConfig = json_decode(file_get_contents('include/email_template/'.$data["type"].'/config.json'));

	$mail->address_to = $mailConfig->mailRecipient;
	$mail->address_from = $mailConfig->mailSender;
	$mail->subject = $mailConfig->mailSubject;


	$mailBody = file_get_contents('include/email_template/'.$data["type"].'/template.html');

	$vars = array('{{date}}' => date('d.m.Y'),
					'{{time}}' => date('H:i'));

	foreach ($data as $key => $value)
	{
		if(is_array($value)){
			$vars["{{".$key."}}"] = implode(",",$value);
		} else {
			$vars["{{".$key."}}"] = $value;

		}
	}

	$mail->html_body = strtr($mailBody,$vars);



	if(verfiyCaptcha())
	{
		if($mail->check_mail(false))
		{
			if(!empty($data['email']) || $mailRequired == false)
			{
				if($mail->PhpMail_send())
				{
					$response['data']['msg'] = 'Vaš upit je poslan';
					$response['data']['status'] = 'success';

					echo json_encode($response);
				} else {
					echo  "Error sending";
				}

			}else {
				echo  "Error :  No mail";
			}
		}else {
			echo  "Error: Mail settings error";
		}
	} else {
		echo "Error: Captcha error";
	}



}



function sanitazePost($data)
{
	foreach($data as $key => $var)
	{
		$sanitazedData[$key] = $var;
	}

	return $sanitazedData;
}


	function verfiyCaptcha(){

		$response = $_POST["g-recaptcha-response"];
		$url = 'https://www.google.com/recaptcha/api/siteverify';

		$ch = curl_init();

		curl_setopt_array($ch, [
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => [
				'secret' => "6LcHO2QUAAAAAHxPfHnq_2MzRxc6p2KPufS2suFv",
				'response' => $response,
				'remoteip' => $_SERVER['REMOTE_ADDR']
			],
			CURLOPT_RETURNTRANSFER => true
		]);

		$output = curl_exec($ch);
		curl_close($ch);
		$captcha_success = json_decode($output);

		if ($captcha_success->success == 1) {

			return true;
		}

		return false;
	}