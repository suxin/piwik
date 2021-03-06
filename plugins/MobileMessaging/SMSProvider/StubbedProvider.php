<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package SMSProvider
 */
namespace Piwik\Plugins\MobileMessaging\SMSProvider;

use Piwik\Plugins\MobileMessaging\SMSProvider;

/**
 * Used for testing
 *
 * @package SMSProvider
 */
class StubbedProvider extends SMSProvider
{

    public function verifyCredential($apiKey)
    {
        return true;
    }

    public function sendSMS($apiKey, $smsText, $phoneNumber, $from)
    {
        // nothing to do
    }

    public function getCreditLeft($apiKey)
    {
        return 1;
    }
}