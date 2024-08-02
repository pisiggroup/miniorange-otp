<?php


namespace OTP\Objects;

use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
if (defined("\101\x42\123\120\x41\124\x48")) {
    goto IDD;
}
exit;
IDD:
if (class_exists("\102\141\x73\145\x41\x63\x74\151\157\156\110\141\156\x64\154\145\x72")) {
    goto M42;
}
class BaseActionHandler
{
    protected $nonce;
    protected function __construct()
    {
    }
    protected function is_valid_request()
    {
        if (!(!current_user_can("\155\x61\156\141\147\x65\x5f\157\160\164\x69\157\x6e\x73") || !check_admin_referer($this->nonce))) {
            goto FRg;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        FRg:
        return true;
    }
    protected function is_valid_ajax_request($a6)
    {
        if (check_ajax_referer($this->nonce, $a6)) {
            goto DPN;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        DPN:
    }
    public function get_nonce_value()
    {
        return $this->nonce;
    }
}
M42:
