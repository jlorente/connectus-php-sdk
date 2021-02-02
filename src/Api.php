<?php

/**
 * Part of the Connectus package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Connectus
 * @version    1.0.0
 * @author     Jose Lorente
 * @license    BSD License (3-clause)
 * @copyright  (c) 2019, Jose Lorente
 */

namespace Jlorente\Connectus;

use Jlorente\Connectus\Core\Api as CoreApi;

/**
 * Class Api.
 * 
 * @author Jose Lorente <jose.lorente.martin@gmail.com>
 * @see https://web.connectus.cl/api_v2.html
 */
class Api extends CoreApi
{

    /**
     * Checks the account info.
     *
     * @return array
     */
    public function checkAccountInfo()
    {
        return $this->_get('api_v2/check_account_info/');
    }

    /**
     * Checks the sms balance.
     *
     * @return array
     */
    public function checkSmsBalance()
    {
        return $this->_get('api_v2/check_sms_balance/');
    }

    /**
     * Sends an SMS.
     *
     * @return array
     */
    public function sendSms($params)
    {
        return $this->_post('api_v2/send_sms/', $params);
    }

    /**
     * Sends an SMS batch.
     *
     * @return array
     */
    public function sendSmsBulk($params)
    {
        return $this->_post('api_v2/send_sms_bulk/', $params);
    }

    /**
     * Checks the email balance.
     *
     * @return array
     */
    public function checkEmailBalance()
    {
        return $this->_get('api_v2/check_email_balance/');
    }

    /**
     * Sends an email.
     *
     * @return array
     */
    public function sendEmail($params)
    {
        return $this->_post('api_v2/send_email/', $params);
    }

    /**
     * Sends an email batch.
     *
     * @return array
     */
    public function sendEmailBulk($params)
    {
        return $this->_post('api_v2/send_email_bulk/', $params);
    }

    /**
     * Gets a short link for the given url.
     *
     * @return array
     */
    public function shortenLink($params)
    {
        return $this->_post('api_v2/shorten_link/', $params);
    }

    /**
     * Gets the number of clicks performed on the short link.
     *
     * @return array
     */
    public function checkShortLinkEvents($params)
    {
        return $this->_get('api_v2/check_short_link_events/', $params);
    }

}
