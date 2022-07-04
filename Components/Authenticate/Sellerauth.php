<?php
/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User License Agreement (EULA)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://cedcommerce.com/license-agreement.txt
 *
 * @category    Ced
 * @package     Ced_Magentowebapi
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CEDCOMMERCE (http://cedcommerce.com/)
 * @license     http://cedcommerce.com/license-agreement.txt
 */

namespace App\Testwebapi\Components\Authenticate;

use Exception;

/**
 * Handle authentication process.
 */
class Sellerauth extends \App\Apiconnect\Components\Authenticate\Common
{

    /**
     * The redirect url.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * Get the auth url.
     *
     * @param array $postData posted data for authoriation.
     * @return array
     */
    public function fetchAuthenticationUrl($postData)
    {

        try{
            $response = $this->getRedirectUrl($postData);
         
            if(! $response['success']) {
                return [
                    'success' => true,
                    'authUrl' => $this->redirectUrl
                ];
            }
            else{
                return [
                    'success' => true,
                    'authUrl' => $response['authUrl']
                ];
            }
        } catch (\Exception $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        } 
    }

    /**
     * Get app redirect url.
     *
     * @param array $postData
     * @return array
     */
    public function getRedirectUrl($postData) 
    {
        
    }

    public function getAppCredentials()
    {
        
    }

    /**
     * filter allowed data for shop.
     * @param array $data data for filter.
     * @since 1.0.0
     * @return array
     */
    public function getAllowedDataForShop( $data = [] ) 
    {
        
    }
    
}
