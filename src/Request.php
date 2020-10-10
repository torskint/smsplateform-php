<?php

namespace Smsplateform\Client;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Exception\ClientException;
use Smsplateform\Client\Auth;
use Smsplateform\Client\Payload;

/**
 * Initialize the http request
 */
class Request {

	private $authKey =  '';
	private $postData =  array();
	private $response = [];


	public function __construct(array $data=[]) {
		$this->authKey = Auth::Token();
		$this->postData = $data;
	}

	private function Init($uri) {

		$client = HttpClient::create();

		$this->response = $client->request( Payload::REQUEST_METHOD, Payload::BASE_URL . $uri, [
				
				'body' => json_encode($this->postData),
			    'headers' => [
			        'Accept' => 'application/json'
			    ],
			    'auth_basic' => $this->authKey

			]
		);

		return $this;

	}

	public function getHeaderCode() {
		if ($this->response) {
			return $this->response->getStatusCode();
		}
	}


	public function getResponse() {
		if ($this->response) {
			return $this->response->toArray();
		}
	}

	public function Send() {
		return $this->Init('/send-sms');
	}

	public function View() {
		return $this->Init('/view-sms');
	}

	public function List() {
		return $this->Init('/sms-list');
	}

	public function Profile() {
		return $this->Init('/profile');
	}

}
