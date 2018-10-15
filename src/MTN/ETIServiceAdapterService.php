<?php

namespace eskandari\MTN;

class ETIServiceAdapterService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'ETIRequestType' => '\\ETIRequestType',
        'ETIParameters' => '\\ETIParameters',
        'ETIParameter' => '\\ETIParameter',
        'ETIResponseType' => '\\ETIResponseType',
        'EMI_CommandResponseType' => '\\EMI_CommandResponseType',
        'EMI_TransactionResponseType' => '\\EMI_TransactionResponseType',
        'EMI_AccountSearchResponseType' => '\\EMI_AccountSearchResponseType',
        'T_AccountBalanceData' => '\\T_AccountBalanceData',
        'T_AccountLimitData' => '\\T_AccountLimitData',
        'EMI_CompanyAccountResponseType' => '\\EMI_CompanyAccountResponseType',
        'EMI_CommandRequestType' => '\\EMI_CommandRequestType',
        'EMI_AccountCommandRequestType' => '\\EMI_AccountCommandRequestType',
        'EMI_AccountSearchRequestType' => '\\EMI_AccountSearchRequestType',
        'EMI_CompanyAccountRequestType' => '\\EMI_CompanyAccountRequestType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://92.42.55.16:6022/erefill_bl/ETIServiceMerchant';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param ETIRequestType $ETIRequest
     * @return ETIResponseType
     */
    public function processRequest(ETIRequestType $ETIRequest)
    {
        return $this->__soapCall('processRequest', array($ETIRequest));
    }

}
