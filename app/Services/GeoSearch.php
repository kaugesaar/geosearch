<?php namespace Geosearch\Services;


class GeoSearch {

    /**
     * Google Domain
     *
     * @var string
     */
    public $domain = 'se';


    /**
     * Append pws parameter to url
     *
     * @var bool
     */
    public $pws = true;

    /**
     * Append lang parameter to url
     *
     * @var string
     */
    public $lang;

    /**
     * Secret key that Google uses
     *
     * @var array
     */
    private $key;

    /**
     * Initialize GeoSearch
     */
    public function __construct()
    {
        $this->key = array_merge(range('A','Z'), range('a','z'), range('0','9'), array('-', '_'));
    }

    /**
     * Returns the hash Google uses for &uule=
     *
     * @param $location
     * @return string
     */
    public function makeHash($location)
    {
        return trim('w+CAIQICI'.$this->key[strlen($location)%count($this->key)].base64_encode($location),'=');
    }


    /**
     * Returns the full search URL
     *
     * @param array $input
     * @return string
     */
    public function build($input = [])
    {
        $baseUrl = $this->getBaseUrl($this->domain);
        $hash = $this->makeHash($input['location']);
        $params = [
            'q' => $input['query'],
            'uule' => ''
        ];

        if($this->pws) $params = array_merge(['pws' => '0'],$params);
        if($this->lang) $params = array_merge(['hl' => $this->lang],$params);

        return $baseUrl.http_build_query($params).$hash;

    }


    /**
     * Get the Base URL
     *
     * @param $domain
     * @return string
     */
    public function getBaseUrl($domain)
    {
        return 'https://www.google.'.$domain.'/search?';
    }


}