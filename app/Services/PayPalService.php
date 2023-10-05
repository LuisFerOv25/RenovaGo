<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;
    protected $clientID;
    protected $clientSecret;

    public function __constructor()
    {
        $this->baseUri = config('services.paypal.$baseUri');
        $this->clientID = config('services.paypal.$clientID');
        $this->clientSecret = config('services.paypal.$clientSecret');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Autorization'] = $this->resolveAccessToken();
    }
    public function decodeResponse($response){
        return json_decode($response);
    }
    public function resolveAccessToken()
    {
        $credenciales = base64_encode("{$this->clientID}:{$this->clientSecret}");
        return "Basic {$credenciales}";
    }
}