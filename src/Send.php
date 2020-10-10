<?php

namespace Smsplateform\Src;

use Symfony\Component\HttpClient\HttpClient;

/**
 * Envoi de sms via notre api
 */
class Send
{

	private const BASE_URL = 'https://smsplateform.com/gateway';
	
	function __construct(){

		// $client = HttpClient::create();
		// $response = $client->request('GET', 'https://api.github.com/repos/symfony/symfony-docs');

		// $statusCode = $response->getStatusCode();
		// // $statusCode = 200
		// $contentType = $response->getHeaders()['content-type'][0];
		// // $contentType = 'application/json'
		// $content = $response->getContent();
		// // $content = '{"id":521583, "name":"symfony-docs", ...}'
		// $content = $response->toArray();
		// // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

	}

	public function Auth($username, $password=null)
	{
		if (empty($password)) {
			$password = base64_decode($username);
		}
		return $password;
	}
}