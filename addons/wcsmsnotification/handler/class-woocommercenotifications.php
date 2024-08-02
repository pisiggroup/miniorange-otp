<?php


namespace OTP\Addons\WcSMSNotification\Handler;

if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto M4;
}
exit;
M4:
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnMessages;
use OTP\Addons\WcSMSNotification\Helper\MoWcAddOnUtility;
use OTP\Addons\WcSMSNotification\Helper\WcOrderStatus;
use OTP\Addons\WcSMSNotification\Helper\WooCommerceNotificationsList;
use OTP\Helper\MoConstants;
use OTP\Helper\MoUtility;
use OTP\Helper\MoFormDocs;
use OTP\Objects\BaseAddOnHandler;
use OTP\Traits\Instance;
use OTP\Objects\BaseMessages;
use WC_Emails;
use WC_Order;
use OTP\Helper\MoMessages;
if (class_exists("\x57\157\x6f\103\x6f\x6d\x6d\145\162\143\x65\116\x6f\164\x69\146\151\143\141\164\x69\157\x6e\x73")) {
    goto Ca;
}
class WooCommerceNotifications extends BaseAddOnHandler
{
    use Instance;
    private $notification_settings;
    protected function __construct()
    {
        parent::__construct();
        if ($this->moAddOnV()) {
            goto R7;
        }
        return;
        R7:
        $this->notification_settings = get_wc_option("\156\x6f\x74\151\146\x69\143\141\x74\x69\157\156\x5f\163\145\164\164\151\156\x67\163") ? get_wc_option("\156\x6f\164\x69\146\x69\x63\141\164\x69\157\156\x5f\163\145\164\x74\151\156\x67\163") : WooCommerceNotificationsList::instance();
        add_action("\167\x6f\x6f\x63\157\x6d\x6d\x65\x72\143\145\x5f\143\x72\x65\x61\x74\145\x64\x5f\143\x75\163\x74\157\155\145\162\x5f\x6e\x6f\164\x69\146\151\x63\x61\x74\151\157\x6e", array($this, "\x6d\x6f\137\163\x65\156\x64\x5f\x6e\145\167\x5f\143\x75\163\x74\x6f\155\145\x72\137\x73\155\x73\x5f\156\157\x74\x69\146"), 1, 3);
        add_action("\x77\x6f\157\143\x6f\155\155\145\162\143\145\x5f\156\145\x77\x5f\x63\165\163\x74\157\155\145\x72\137\156\157\164\x65\137\x6e\x6f\x74\x69\x66\x69\x63\141\x74\x69\157\x6e", array($this, "\155\x6f\137\x73\145\156\x64\x5f\156\x65\x77\137\x63\x75\x73\164\157\x6d\145\x72\137\163\x6d\x73\137\x6e\x6f\164\x65"), 1, 1);
        add_action("\167\x6f\x6f\143\157\x6d\x6d\145\162\143\145\137\x6f\162\144\145\x72\x5f\x73\x74\x61\x74\x75\163\137\x63\x68\141\x6e\x67\x65\x64", array($this, "\155\157\x5f\x73\145\x6e\144\x5f\141\144\x6d\151\x6e\x5f\157\162\144\x65\x72\137\x73\x6d\163\137\x6e\157\x74\151\x66"), 1, 3);
        add_action("\x77\x6f\x6f\x63\157\155\x6d\x65\162\x63\145\x5f\157\162\x64\x65\x72\x5f\163\164\141\164\165\x73\x5f\x63\x68\141\156\x67\x65\x64", array($this, "\x6d\157\x5f\143\x75\x73\164\x6f\155\x65\162\x5f\157\162\x64\x65\x72\x5f\150\157\154\144\137\x73\x6d\163\137\156\157\164\x69\146"), 1, 3);
        add_action("\x61\x64\x64\x5f\x6d\145\164\x61\x5f\142\157\x78\x65\x73", array($this, "\141\144\144\137\x63\x75\163\164\x6f\155\x5f\155\163\x67\137\155\x65\164\x61\137\x62\x6f\170"), 1);
        add_action("\141\x64\155\x69\x6e\x5f\x69\x6e\x69\x74", array($this, "\150\141\x6e\x64\x6c\145\137\141\144\155\151\x6e\137\x61\143\x74\x69\157\x6e\163"));
    }
    public function handle_admin_actions()
    {
        if (current_user_can("\x6d\141\x6e\x61\147\x65\x5f\x6f\x70\x74\151\x6f\156\x73")) {
            goto m0;
        }
        return;
        m0:
        if (!(array_key_exists("\155\x6f\x5f\163\x65\x6e\144\137\x63\165\x73\164\157\x6d\x65\137\155\163\x67\x5f\x6f\160\x74\x69\157\x6e", $_POST) && !check_ajax_referer($this->nonce, $this->nonce_key))) {
            goto r0;
        }
        wp_send_json(MoUtility::create_json(MoMessages::showMessage(BaseMessages::INVALID_OP), MoConstants::ERROR_JSON_TYPE));
        exit;
        r0:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $Xd = MoUtility::mo_sanitize_array($_GET);
        if (!(isset($Xd["\x6d\157\137\x73\145\156\x64\137\x63\165\163\164\157\x6d\145\137\155\x73\147\x5f\157\160\164\151\x6f\156"]) && sanitize_text_field($Xd["\155\157\137\163\x65\x6e\x64\137\143\x75\163\164\x6f\x6d\145\137\x6d\x73\x67\x5f\x6f\x70\164\151\157\156"]) === "\155\157\137\x73\145\x6e\144\137\157\162\x64\x65\x72\x5f\x63\165\x73\x74\x6f\155\137\155\163\147")) {
            goto Hq;
        }
        $this->send_custom_order_msg($GX);
        Hq:
    }
    public function mo_send_new_customer_sms_notif($F_, $hh = array(), $i2 = false)
    {
        $this->notification_settings->get_wc_new_customer_notif()->send_sms(array("\143\165\163\x74\157\x6d\x65\x72\137\x69\x64" => $F_, "\156\x65\x77\x5f\143\x75\x73\x74\157\155\x65\x72\137\144\x61\164\x61" => $hh, "\160\141\x73\163\167\x6f\x72\144\137\147\x65\156\x65\x72\141\164\145\x64" => $i2));
    }
    public function mo_send_new_customer_sms_note($rp)
    {
        $this->notification_settings->get_wc_customer_note_notif()->send_sms(array("\157\162\144\x65\x72\104\145\164\141\151\x6c\163" => wc_get_order($rp["\x6f\162\144\x65\162\x5f\x69\x64"])));
    }
    public function mo_send_admin_order_sms_notif($W3, $Ny, $um)
    {
        $DW = new WC_Order($W3);
        if (is_a($DW, "\x57\103\137\117\x72\144\145\162")) {
            goto aQ;
        }
        return;
        aQ:
        $this->notification_settings->get_wc_admin_order_status_notif()->send_sms(array("\157\x72\x64\x65\162\104\145\164\x61\151\154\x73" => $DW, "\156\x65\x77\137\x73\164\141\x74\x75\163" => $um, "\x6f\154\x64\x5f\x73\164\x61\x74\x75\x73" => $Ny));
    }
    public function mo_customer_order_hold_sms_notif($W3, $Ny, $um)
    {
        $DW = new WC_Order($W3);
        if (is_a($DW, "\x57\103\x5f\x4f\x72\x64\145\x72")) {
            goto QF;
        }
        return;
        QF:
        if (strcasecmp($um, WcOrderStatus::ON_HOLD) === 0) {
            goto C3;
        }
        if (strcasecmp($um, WcOrderStatus::PROCESSING) === 0) {
            goto VA;
        }
        if (strcasecmp($um, WcOrderStatus::COMPLETED) === 0) {
            goto gg;
        }
        if (strcasecmp($um, WcOrderStatus::REFUNDED) === 0) {
            goto ni;
        }
        if (strcasecmp($um, WcOrderStatus::CANCELLED) === 0) {
            goto OL;
        }
        if (strcasecmp($um, WcOrderStatus::FAILED) === 0) {
            goto Fb;
        }
        if (strcasecmp($um, WcOrderStatus::PENDING) === 0) {
            goto y0;
        }
        return;
        goto ci;
        C3:
        $W6 = $this->notification_settings->get_wc_order_on_hold_notif();
        goto ci;
        VA:
        $W6 = $this->notification_settings->get_wc_order_processing_notif();
        goto ci;
        gg:
        $W6 = $this->notification_settings->get_wc_order_completed_notif();
        goto ci;
        ni:
        $W6 = $this->notification_settings->get_wc_order_refunded_notif();
        goto ci;
        OL:
        $W6 = $this->notification_settings->get_wc_order_cancelled_notif();
        goto ci;
        Fb:
        $W6 = $this->notification_settings->get_wc_order_failed_notif();
        goto ci;
        y0:
        $W6 = $this->notification_settings->get_wc_order_pending_notif();
        ci:
        $W6->send_sms(array("\157\162\144\x65\x72\x44\x65\x74\x61\x69\154\x73" => $DW));
    }
    private function unhook($kT)
    {
        $DS = array($kT->emails["\127\x43\137\105\155\x61\x69\x6c\x5f\116\x65\167\x5f\117\x72\x64\x65\162"], "\x74\x72\151\147\147\145\x72");
        $lx = array($kT->emails["\127\103\x5f\105\155\x61\151\x6c\137\x43\165\163\164\157\x6d\x65\x72\137\120\x72\157\x63\x65\163\x73\x69\x6e\147\137\x4f\x72\x64\x65\162"], "\164\162\151\x67\x67\145\x72");
        $tt = array($kT->emails["\x57\x43\137\x45\x6d\141\x69\x6c\x5f\x43\165\x73\164\x6f\155\x65\162\137\x43\x6f\x6d\160\154\x65\164\x65\x64\137\117\162\x64\145\162"], "\164\162\151\147\147\145\162");
        $iT = array($kT->emails["\127\103\137\105\x6d\141\x69\154\137\x43\165\163\164\157\x6d\x65\162\x5f\x4e\157\x74\145"], "\164\162\x69\x67\x67\145\x72");
        remove_action("\167\x6f\x6f\143\x6f\155\155\x65\x72\x63\145\137\x6c\157\167\137\163\x74\x6f\143\x6b\x5f\x6e\x6f\x74\151\x66\151\143\141\x74\x69\x6f\156", array($kT, "\154\157\x77\x5f\163\x74\x6f\143\153"));
        remove_action("\167\x6f\157\143\x6f\x6d\155\x65\x72\x63\x65\137\x6e\157\x5f\x73\164\157\143\x6b\x5f\x6e\157\164\x69\146\x69\x63\x61\164\151\157\x6e", array($kT, "\x6e\157\137\x73\x74\x6f\x63\153"));
        remove_action("\x77\157\x6f\x63\157\155\155\145\162\x63\x65\x5f\x70\162\x6f\x64\x75\143\x74\x5f\157\156\x5f\x62\141\x63\153\157\162\144\x65\x72\x5f\x6e\157\164\151\x66\151\x63\x61\164\151\157\x6e", array($kT, "\142\x61\143\x6b\x6f\x72\144\x65\162"));
        remove_action("\167\157\157\x63\157\155\155\x65\162\x63\145\137\157\x72\144\145\x72\137\x73\164\141\x74\165\163\x5f\x70\x65\x6e\x64\151\x6e\x67\x5f\164\x6f\x5f\x70\162\x6f\x63\x65\x73\x73\x69\156\x67\137\156\x6f\x74\x69\x66\x69\x63\141\x74\151\157\156", $DS);
        remove_action("\167\157\157\x63\x6f\x6d\x6d\145\162\143\145\137\157\x72\x64\x65\x72\x5f\x73\164\141\164\x75\163\137\x70\145\x6e\144\x69\156\x67\x5f\x74\x6f\137\x63\157\155\160\154\145\x74\145\x64\137\x6e\157\x74\151\x66\151\x63\141\x74\x69\157\156", $DS);
        remove_action("\x77\157\x6f\143\157\155\x6d\x65\162\x63\x65\x5f\157\x72\x64\145\162\x5f\163\164\x61\x74\x75\x73\137\160\x65\156\144\151\x6e\x67\137\x74\157\x5f\x6f\x6e\x2d\150\x6f\154\x64\137\156\157\164\151\146\x69\x63\x61\164\x69\157\156", $DS);
        remove_action("\x77\x6f\157\143\x6f\155\x6d\x65\x72\143\x65\137\157\x72\144\145\162\x5f\x73\x74\x61\x74\165\163\137\146\141\151\154\145\x64\x5f\x74\x6f\x5f\x70\162\157\x63\145\163\x73\x69\x6e\x67\x5f\x6e\x6f\164\151\x66\x69\x63\141\x74\x69\x6f\156", $DS);
        remove_action("\167\157\x6f\x63\x6f\155\x6d\x65\x72\x63\145\137\x6f\x72\144\145\162\137\163\x74\x61\x74\165\x73\137\146\141\x69\154\145\x64\x5f\x74\157\x5f\x63\x6f\x6d\160\154\145\x74\145\144\x5f\x6e\x6f\x74\x69\x66\x69\143\141\x74\x69\x6f\156", $DS);
        remove_action("\x77\157\157\x63\157\155\x6d\145\x72\143\x65\x5f\x6f\x72\144\x65\162\x5f\163\x74\x61\164\x75\163\x5f\146\x61\151\x6c\x65\x64\x5f\x74\157\x5f\x6f\156\55\150\x6f\x6c\x64\x5f\x6e\x6f\164\x69\146\151\143\x61\164\151\157\x6e", $DS);
        remove_action("\x77\x6f\157\143\157\155\155\145\162\143\x65\x5f\157\x72\144\145\x72\x5f\x73\164\x61\164\165\x73\137\160\x65\156\144\x69\x6e\x67\137\164\x6f\x5f\160\162\x6f\143\x65\163\163\151\x6e\x67\137\156\157\164\151\146\x69\x63\141\164\151\157\x6e", $lx);
        remove_action("\x77\x6f\157\143\157\155\x6d\145\162\x63\x65\137\x6f\162\x64\145\x72\137\x73\x74\x61\164\165\x73\137\x70\x65\156\x64\151\156\147\137\164\x6f\x5f\157\156\x2d\150\x6f\x6c\x64\137\156\x6f\164\x69\146\x69\x63\x61\164\x69\157\156", $lx);
        remove_action("\x77\x6f\157\143\157\x6d\155\x65\x72\143\145\x5f\x6f\x72\144\x65\x72\137\x73\164\141\164\165\163\x5f\x63\157\155\160\154\x65\x74\145\x64\137\x6e\157\164\151\146\x69\x63\x61\164\x69\157\156", $tt);
        remove_action("\x77\157\157\143\x6f\x6d\155\x65\x72\x63\145\x5f\x6e\x65\x77\x5f\143\165\x73\164\157\155\145\x72\137\156\157\x74\x65\137\156\157\x74\151\x66\151\143\141\x74\x69\157\x6e", $iT);
    }
    public function add_custom_msg_meta_box()
    {
        add_meta_box("\x6d\x6f\137\167\143\137\143\x75\x73\x74\157\155\x5f\x73\155\163\x5f\155\x65\x74\141\137\x62\x6f\170", "\x43\165\163\164\157\x6d\40\123\x4d\x53", array($this, "\155\x6f\137\163\150\x6f\x77\x5f\163\x65\156\144\x5f\143\165\x73\164\157\155\137\x6d\x73\x67\x5f\142\x6f\x78"), "\x73\150\x6f\160\137\157\x72\144\x65\162", "\x73\x69\144\x65", "\x64\x65\x66\141\x75\x6c\164");
    }
    public function mo_show_send_custom_msg_box($GX)
    {
        $Cp = new WC_Order($GX->ID);
        $Eo = MoWcAddOnUtility::get_customer_number_from_order($Cp);
        include MSN_DIR . "\166\x69\x65\x77\x73\57\x63\x75\163\x74\157\x6d\x2d\x6f\162\144\x65\162\55\x6d\x73\x67\56\x70\150\160";
    }
    private function send_custom_order_msg($GX)
    {
        if (!array_key_exists("\156\x75\x6d\142\x65\162\163", $GX) || MoUtility::is_blank(sanitize_text_field($GX["\156\x75\x6d\x62\145\162\x73"]))) {
            goto qm;
        }
        foreach (explode("\x3b", $GX["\156\165\155\x62\145\162\163"]) as $Xu) {
            if (MoUtility::send_phone_notif($Xu, $GX["\x6d\x73\x67"])) {
                goto d0;
            }
            wp_send_json(MoUtility::create_json(MoWcAddOnMessages::showMessage(MoWcAddOnMessages::ERROR_SENDING_SMS), MoConstants::ERROR_JSON_TYPE));
            goto bB;
            d0:
            wp_send_json(MoUtility::create_json(MoWcAddOnMessages::showMessage(MoWcAddOnMessages::SMS_SENT_SUCCESS), MoConstants::SUCCESS_JSON_TYPE));
            bB:
            NZ:
        }
        lB:
        goto rO;
        qm:
        MoUtility::create_json(MoWcAddOnMessages::showMessage(MoWcAddOnMessages::INVALID_PHONE), MoConstants::ERROR_JSON_TYPE);
        rO:
    }
    public function set_addon_key()
    {
        $this->add_on_key = "\167\143\137\x73\x6d\163\x5f\156\x6f\x74\x69\146\x69\143\x61\164\151\x6f\x6e\x5f\x61\144\144\157\x6e";
    }
    public function set_add_on_desc()
    {
        $this->add_on_desc = mo_("\101\x6c\154\157\167\163\x20\171\x6f\165\x72\x20\163\x69\x74\145\40\164\x6f\x20\x73\145\x6e\144\40\157\162\x64\145\x72\40\x61\156\144\40\127\157\x6f\103\157\155\155\x65\162\x63\x65\40\x6e\x6f\x74\151\146\x69\x63\x61\164\x69\x6f\x6e\x73\x20\x74\x6f\40\142\165\171\x65\x72\x73\x2c\x20" . "\x73\x65\154\x6c\x65\162\163\40\141\x6e\x64\40\141\x64\x6d\x69\156\x73\x2e\x20\x43\154\x69\143\153\40\x6f\156\40\164\x68\145\x20\x73\x65\x74\164\151\156\x67\x73\x20\x62\x75\164\164\157\x6e\40\164\157\x20\x74\x68\145\40\x72\x69\147\150\164\x20\164\x6f\40\163\145\x65\40\x74\x68\x65\x20\x6c\151\163\x74\40\x6f\x66\40\x6e\x6f\x74\151\x66\151\x63\141\164\x69\157\x6e\x73\x20" . "\x74\x68\141\164\40\x67\157\x20\157\x75\x74\x2e");
    }
    public function set_add_on_name()
    {
        $this->addon_name = mo_("\127\157\x6f\103\157\x6d\x6d\x65\x72\143\145\x20\123\x4d\x53\x20\x4e\157\x74\x69\146\x69\143\141\164\151\x6f\156");
    }
    public function set_add_on_docs()
    {
        $this->add_on_docs = MoFormDocs::WOCOMMERCE_SMS_NOTIFICATION_LINK["\147\165\x69\144\145\114\151\x6e\x6b"];
    }
    public function set_add_on_video()
    {
        $this->add_on_video = MoFormDocs::WOCOMMERCE_SMS_NOTIFICATION_LINK["\166\151\144\145\x6f\114\151\156\153"];
    }
    public function set_settings_url()
    {
        $L1 = isset($_SERVER["\x52\105\121\x55\x45\123\124\x5f\x55\x52\111"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\x45\x51\125\105\123\x54\x5f\125\x52\x49"])) : '';
        $this->settings_url = add_query_arg(array("\141\x64\x64\x6f\156" => "\x77\x6f\x6f\x63\157\x6d\x6d\145\x72\x63\x65\137\x6e\157\x74\x69\146"), $L1);
    }
}
Ca:
