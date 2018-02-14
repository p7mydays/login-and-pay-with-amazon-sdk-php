<?php

namespace PayWithAmazon;

/**
 * Class Config
 *
 * Simple configuration class for the client
 *
 * @package PayWithAmazon
 * @author Friedrich Roell
 */
class Config
{
    private $merchant_id = null;
    private $secret_key = null;
    private $access_key = null;
    private $region = null;
    private $currency_code = null;
    private $sandbox = false;
    private $platform_id = null;
    private $cabundle_file = null;
    private $application_name = null;
    private $application_version = null;
    private $proxy_host = null;
    private $proxy_port = -1;
    private $proxy_username = null;
    private $proxy_password = null;
    private $client_id = null;
    private $handle_throttle = true;
    private $ssl_verify = true;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * @return null
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @param null $access_key
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->access_key = $access_key;
        return $this;
    }

    /**
     * @return null
     */
    public function getApplicationName()
    {
        return $this->application_name;
    }

    /**
     * @param null $application_name
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->application_name = $application_name;
        return $this;
    }

    /**
     * @return null
     */
    public function getApplicationVersion()
    {
        return $this->application_version;
    }

    /**
     * @param null $application_version
     * @return $this
     */
    public function setApplicationVersion($application_version)
    {
        $this->application_version = $application_version;
        return $this;
    }

    /**
     * @return null
     */
    public function getCabundleFile()
    {
        return $this->cabundle_file;
    }

    /**
     * @param null $cabundle_file
     * @return $this
     */
    public function setCabundleFile($cabundle_file)
    {
        $this->cabundle_file = $cabundle_file;
        return $this;
    }

    /**
     * @return null
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param null $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @return null
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * @param null $currency_code
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isHandleThrottle()
    {
        return $this->handle_throttle;
    }

    /**
     * @param boolean $handle_throttle
     * @return $this
     */
    public function setHandleThrottle($handle_throttle)
    {
        $this->handle_throttle = $handle_throttle;
        return $this;
    }

    /**
     * @return null
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * @param null $merchant_id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }

    /**
     * @return null
     */
    public function getPlatformId()
    {
        return $this->platform_id;
    }

    /**
     * @param null $platform_id
     * @return $this
     */
    public function setPlatformId($platform_id)
    {
        $this->platform_id = $platform_id;
        return $this;
    }

    /**
     * @return null
     */
    public function getProxyHost()
    {
        return $this->proxy_host;
    }

    /**
     * @param null $proxy_host
     * @return $this
     */
    public function setProxyHost($proxy_host)
    {
        $this->proxy_host = $proxy_host;
        return $this;
    }

    /**
     * @return null
     */
    public function getProxyPassword()
    {
        return $this->proxy_password;
    }

    /**
     * @param null $proxy_password
     * @return $this
     */
    public function setProxyPassword($proxy_password)
    {
        $this->proxy_password = $proxy_password;
        return $this;
    }

    /**
     * @return int
     */
    public function getProxyPort()
    {
        return $this->proxy_port;
    }

    /**
     * @param int $proxy_port
     * @return $this
     */
    public function setProxyPort($proxy_port)
    {
        $this->proxy_port = $proxy_port;
        return $this;
    }

    /**
     * @return null
     */
    public function getProxyUsername()
    {
        return $this->proxy_username;
    }

    /**
     * @param null $proxy_username
     * @return $this
     */
    public function setProxyUsername($proxy_username)
    {
        $this->proxy_username = $proxy_username;
        return $this;
    }

    /**
     * @return null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param null $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSandbox()
    {
        return $this->sandbox;
    }

    /**
     * @param boolean $sandbox
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->sandbox = $sandbox;
        return $this;
    }

    /**
     * @return null
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * @param null $secret_key
     * @return $this
     */
    public function setSecretKey($secret_key)
    {
        $this->secret_key = $secret_key;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSslVerify()
    {
        return $this->ssl_verify;
    }

    /**
     * @param boolean $ssl_verify
     * @return $this
     */
    public function setSslVerify($ssl_verify)
    {
        $this->ssl_verify = $ssl_verify;
        return $this;
    }

}