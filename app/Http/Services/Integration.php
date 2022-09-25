<?php 

class integrationOmie
{
    /*Keys integrations for omie*/
    public string $app_key;
    public string $app_secret;
    public string $omie_call;
    
    public function __construct($app_key, $app_secret, $omie_call)
    {
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
        $this->omie_call = $omie_call;
    }
}