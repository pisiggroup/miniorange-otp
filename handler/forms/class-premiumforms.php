<?php


namespace OTP\Handler\Forms;

if (defined("\101\102\x53\120\x41\124\x48")) {
    goto w14;
}
exit;
w14:
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\Traits\Instance;
use OTP\Helper\MoFormDocs;
use OTP\Helper\PremiumFeatureList;
if (class_exists("\x50\162\x65\x6d\151\x75\155\106\x6f\x72\x6d\x73")) {
    goto PMu;
}
class PremiumForms extends FormHandler implements IFormHandler
{
    use Instance;
    protected function __construct()
    {
        $this->form_name = sanitize_text_field(isset($_GET["\x66\157\x72\155\137\x6e\141\155\x65"]) ? wp_unslash($_GET["\146\x6f\x72\x6d\137\156\141\x6d\145"]) : '');
        $this->form_documents = MoFormDocs::PREMIUM_FORM_LINK;
        parent::__construct();
    }
    public function handle_form()
    {
        return '';
    }
    public function handle_failed_verification($kD, $Wb, $bV, $I2)
    {
        return '';
    }
    public function handle_post_verification($Ug, $kD, $Wb, $L8, $bV, $ia, $I2)
    {
        return '';
    }
    public function unset_otp_session_variables()
    {
        return '';
    }
    public function get_phone_number_selector($MI)
    {
        return $MI;
    }
    public function handle_form_options()
    {
        return '';
    }
}
PMu:
