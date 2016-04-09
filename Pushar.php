<?php

namespace \phpvikas;

class Pushar {

    protected $apikey;
    protected $apisecret;

    public function __construct($apikey, $apisecret) {
        $this->apikey = $apikey;
        $this->apisecret = $apisecret;
    }

    public function printKeys() {
        return [
            'apukey' => $this->apikey,
            'apukey' => $this->apisecret,
        ];
    }

}
