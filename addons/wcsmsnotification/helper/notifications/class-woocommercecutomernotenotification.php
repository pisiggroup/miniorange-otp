<?php


namespace OTP\Addons\WcSMSNotification\Helper\Notifications;

if (defined("\101\102\x53\x50\x41\x54\x48")) {
    goto Eq;
}
exit;
Eq:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Helper\MoUtility;
use OTP\Objects\SMSNotification;
if (class_exists("\127\157\157\103\x6f\x6d\x6d\x65\162\143\145\x43\165\164\157\155\x65\162\116\x6f\164\x65\x4e\157\164\151\x66\151\x63\x61\x74\x69\x6f\156")) {
    goto uZ;
}
class WooCommerceCutomerNoteNotification extends SMSNotification
{
    public static $instance;
    protected function __construct()
    {
        parent::__construct();
        $this->title = "\103\165\x73\164\x6f\155\x65\162\40\116\x6f\x74\x65";
        $this->page = "\167\143\137\143\165\x73\x74\x6f\x6d\145\162\x5f\156\x6f\x74\x65\137\156\x6f\164\x69\x66";
        $this->is_enabled = false;
        $this->tool_tip_header = "\x43\125\x53\124\117\x4d\x45\122\137\116\117\x54\x45\x5f\x4e\117\x54\x49\106\137\x48\105\101\104\x45\x52";
        $this->tool_tip_body = "\103\125\123\x54\x4f\x4d\x45\122\x5f\116\117\124\105\137\116\117\x54\111\x46\x5f\102\x4f\x44\131";
        $this->recipient = "\x63\165\x73\x74\157\x6d\145\x72";
        $this->sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::CUSTOMER_NOTE_SMS);
        $this->default_sms_body = MoWcAddOnMessages::showMessage(MoWcAddOnMessages::CUSTOMER_NOTE_SMS);
        $this->available_tags = "\x7b\157\162\x64\145\162\x2d\144\x61\164\x65\175\x2c\x7b\157\162\144\145\x72\55\156\165\x6d\142\x65\162\x7d\54\x7b\165\x73\x65\162\x6e\x61\155\145\175\x2c\x7b\163\x69\164\x65\x2d\x6e\141\155\x65\175";
        $this->page_header = mo_("\103\125\123\x54\117\x4d\x45\x52\x20\x4e\x4f\124\x45\x20\116\117\124\x49\x46\111\x43\x41\124\x49\117\x4e\x20\123\105\x54\124\111\x4e\107\123");
        $this->page_description = mo_("\123\115\123\40\156\x6f\x74\x69\x66\151\x63\x61\164\151\157\156\163\x20\163\145\x74\164\x69\156\x67\163\x20\146\157\162\40\103\x75\x73\164\157\155\145\x72\x20\x4e\x6f\x74\145\x20\x53\115\123\x20\x73\145\x6e\164\40\164\x6f\x20\x74\150\145\x20\x75\x73\x65\x72\x73");
        $this->notification_type = mo_("\103\x75\163\x74\x6f\x6d\x65\162");
        self::$instance = $this;
    }
    public static function getInstance()
    {
        return null === self::$instance ? new self() : self::$instance;
    }
    public function send_sms(array $rp)
    {
        if ($this->is_enabled) {
            goto nZ;
        }
        return;
        nZ:
        $Cp = $rp["\x6f\x72\144\145\x72\x44\145\x74\x61\x69\154\163"];
        if (!MoUtility::is_blank($Cp)) {
            goto sP;
        }
        return;
        sP:
        $this->set_notif_in_session($this->page);
        $YQ = get_userdata($Cp->get_customer_id());
        $AQ = get_bloginfo();
        $JG = MoUtility::is_blank($YQ) ? '' : $YQ->user_login;
        $bV = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        $NT = $Cp->get_date_created()->date_i18n();
        $FH = $Cp->get_order_number();
        $Yp = array("\163\x69\164\145\x2d\156\x61\x6d\145" => $AQ, "\x75\163\x65\x72\156\141\x6d\x65" => $JG, "\x6f\162\x64\145\162\x2d\144\141\164\145" => $NT, "\x6f\x72\x64\x65\162\x2d\x6e\165\x6d\142\x65\162" => $FH);
        $Yp = apply_filters("\x6d\x6f\x5f\160\162\145\155\151\x75\x6d\137\164\x61\147\163", $Yp, $rp);
        $Yp = apply_filters("\155\157\137\167\143\137\x63\165\163\164\x6f\x6d\x65\162\x5f\x6e\x6f\x74\145\x5f\163\164\x72\151\x6e\147\x5f\162\x65\x70\x6c\141\x63\145", $Yp);
        $SG = MoUtility::replace_string($Yp, $this->sms_body);
        if (!MoUtility::is_blank($bV)) {
            goto qP;
        }
        return;
        qP:
        MoUtility::send_phone_notif($bV, $SG);
    }
}
uZ:
