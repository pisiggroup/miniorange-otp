<?php


namespace OTP\Helper;

if (defined("\x41\x42\123\120\x41\x54\110")) {
    goto hge;
}
exit;
hge:
use OTP\Handler\MoActionHandlerHandler;
use OTP\Objects\NotificationSettings;
use OTP\Helper\GatewayType;
use OTP\SplClassLoader;
use OTP\Helper\MoSMSBackupGateway;
use OTP\Objects\Tabs;
if (class_exists("\x43\165\163\x74\157\155\107\x61\164\x65\167\x61\x79")) {
    goto a9v;
}
class CustomGateway
{
    public function __construct()
    {
        $this->nonce = "\x6d\157\137\x61\144\155\x69\x6e\x5f\141\x63\164\x69\x6f\x6e\163";
        $this->load_hooks();
    }
    protected $application_name;
    private $nonce;
    public function load_hooks()
    {
        add_action("\x77\160\x5f\x61\152\141\170\x5f\x77\x61\137\x6d\x69\156\x69\157\x72\x61\156\x67\145\137\147\145\x74\137\x74\145\x73\x74\x5f\x72\x65\163\160\157\x6e\163\x65", array($this, "\x67\x65\x74\x5f\147\141\164\145\167\x61\x79\x5f\x72\145\163\x70\x6f\x6e\x73\145"));
        add_action("\167\160\137\x61\152\141\170\x5f\155\151\x6e\x69\157\x72\x61\x6e\147\145\x5f\147\145\x74\137\x74\145\163\164\x5f\162\x65\163\160\157\x6e\x73\145", array($this, "\147\x65\x74\x5f\x67\x61\x74\x65\x77\141\171\137\162\145\x73\160\x6f\156\x73\x65"));
    }
    public function hourly_sync()
    {
        if ($this->ch_xdigit()) {
            goto Ix7;
        }
        $this->daoptions();
        Ix7:
    }
    public function flush_cache()
    {
        if (MO_TEST_MODE) {
            goto mab;
        }
        if ($this->mclv()) {
            goto FNs;
        }
        goto dHL;
        mab:
        delete_mo_option("\x73\151\x74\145\137\145\155\x61\x69\154\x5f\x63\x6b\154");
        delete_mo_option("\x65\155\141\x69\154\x5f\166\x65\x72\151\x66\151\x63\x61\x74\x69\x6f\156\x5f\x6c\153");
        goto dHL;
        FNs:
        $this->mius();
        dHL:
    }
    public function vlk($post)
    {
        if (!(!isset($_POST["\137\167\160\156\157\156\x63\x65"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\137\x77\x70\x6e\x6f\x6e\x63\x65"])), "\155\x6f\137\x72\145\147\x5f\x61\143\x74\x69\157\156\163"))) {
            goto hoM;
        }
        return;
        hoM:
        if (!MoUtility::is_blank($post["\x65\x6d\x61\151\154\x5f\x6c\x6b"])) {
            goto cnv;
        }
        do_action("\x6d\x6f\x5f\162\x65\147\x69\163\164\162\x61\x74\x69\x6f\156\x5f\163\x68\157\x77\x5f\x6d\x65\x73\163\141\x67\145", MoMessages::showMessage(MoMessages::REQUIRED_FIELDS), MoConstants::ERROR);
        return;
        cnv:
        $ZG = isset($_POST["\145\155\141\x69\154\x5f\x6c\153"]) ? sanitize_text_field(wp_unslash($_POST["\145\155\141\151\x6c\x5f\154\x6b"])) : '';
        $mV = trim($ZG);
        $xD = json_decode($this->ccl(), true);
        switch ($xD["\x73\x74\x61\x74\165\163"]) {
            case "\123\x55\103\103\x45\x53\x53":
                $this->vlk_success($mV);
                goto YND;
            default:
                $this->vlk_fail();
                goto YND;
        }
        HC8:
        YND:
    }
    public function mclv()
    {
        $a6 = get_mo_option("\x63\165\x73\164\157\155\145\162\x5f\x74\x6f\153\145\x6e");
        $PP = isset($a6) && !empty($a6) ? AEncryption::decrypt_data(get_mo_option("\x73\x69\164\x65\x5f\145\155\141\x69\154\x5f\143\x6b\x6c"), $a6) : "\x66\141\154\163\145";
        $HS = get_mo_option("\145\155\141\x69\154\x5f\166\145\x72\x69\146\x69\x63\x61\x74\151\x6f\x6e\137\x6c\153");
        $ZG = get_mo_option("\x61\x64\x6d\x69\156\x5f\145\x6d\x61\x69\x6c");
        $ik = get_mo_option("\x61\x64\x6d\x69\x6e\x5f\143\165\x73\x74\x6f\x6d\145\x72\137\x6b\x65\x79");
        $PP = $PP && $HS && is_numeric(trim($ik)) && $ZG ? true : false;
        return $PP;
    }
    public function is_gateway_config()
    {
        if (!get_mo_option("\143\165\x73\164\x6f\155\x65\137\147\141\164\145\167\x61\x79\137\x74\171\x70\x65")) {
            goto WLD;
        }
        return true;
        WLD:
        return false;
    }
    public function is_mg()
    {
        return false;
    }
    public function get_application_name()
    {
        return $this->application_name;
    }
    private function ch_xdigit()
    {
        if (get_mo_option("\163\151\x74\145\137\x65\155\141\151\154\x5f\x63\x6b\154")) {
            goto MNu;
        }
        return false;
        MNu:
        $a6 = get_mo_option("\143\x75\x73\x74\x6f\155\145\162\137\164\157\153\145\156");
        return AEncryption::decrypt_data(get_mo_option("\163\151\164\145\x5f\x65\x6d\141\151\x6c\x5f\143\x6b\x6c"), $a6) === "\x74\x72\x75\145";
    }
    private function daoptions()
    {
        delete_mo_option("\167\160\137\144\145\146\x61\x75\x6c\164\x5f\145\x6e\x61\x62\154\x65");
        delete_mo_option("\x77\143\x5f\x64\145\x66\x61\165\x6c\x74\137\145\156\141\142\154\x65");
        delete_mo_option("\160\142\x5f\144\145\x66\x61\x75\154\x74\x5f\145\x6e\141\x62\154\x65");
        delete_mo_option("\165\x6d\137\x64\x65\146\141\165\154\164\x5f\145\x6e\x61\x62\154\x65");
        delete_mo_option("\x73\x69\155\x70\x6c\x72\x5f\144\145\x66\141\165\154\x74\137\145\156\141\x62\154\145");
        delete_mo_option("\x65\x76\145\x6e\164\x5f\144\x65\x66\141\x75\x6c\x74\137\x65\x6e\141\x62\154\x65");
        delete_mo_option("\142\142\160\x5f\144\x65\146\x61\x75\154\x74\x5f\145\x6e\x61\142\x6c\145");
        delete_mo_option("\x63\162\146\x5f\144\x65\146\141\x75\154\164\x5f\x65\x6e\x61\142\154\x65");
        delete_mo_option("\x75\x75\154\164\x72\x61\x5f\144\x65\x66\x61\x75\154\164\137\x65\156\x61\x62\154\x65");
        delete_mo_option("\167\143\x5f\x63\x68\x65\x63\153\157\x75\x74\x5f\145\x6e\141\142\x6c\x65");
        delete_mo_option("\165\x70\155\x65\x5f\x64\145\x66\x61\165\154\164\x5f\145\x6e\141\x62\x6c\145");
        delete_mo_option("\160\151\x65\137\x64\145\x66\x61\165\x6c\164\x5f\145\x6e\x61\x62\154\145");
        delete_mo_option("\x63\146\67\137\143\x6f\156\x74\x61\143\x74\137\145\156\141\142\154\145");
        delete_mo_option("\143\x6c\141\x73\x73\151\146\171\x5f\x65\156\x61\x62\154\145");
        delete_mo_option("\147\146\x5f\x63\x6f\156\164\141\x63\164\137\x65\156\x61\x62\x6c\x65");
        delete_mo_option("\156\152\x61\137\x65\156\141\x62\x6c\145");
        delete_mo_option("\x6e\x69\x6e\x6a\141\137\x66\x6f\162\x6d\137\x65\156\x61\x62\x6c\x65");
        delete_mo_option("\x74\x6d\154\137\145\156\141\142\x6c\145");
        delete_mo_option("\x75\x6c\x74\151\x70\x72\157\x5f\x65\x6e\x61\142\154\x65");
        delete_mo_option("\165\163\x65\x72\x70\162\x6f\137\144\145\x66\x61\165\x6c\x74\x5f\145\156\x61\x62\154\145");
        delete_mo_option("\167\160\137\x6c\157\147\x69\x6e\137\x65\156\x61\142\154\x65");
        delete_mo_option("\146\x6f\162\155\x63\162\141\x66\164\x5f\160\x72\145\155\x69\165\x6d\137\x65\x6e\x61\x62\x6c\x65");
        delete_mo_option("\x77\160\x5f\x6d\x65\x6d\x62\145\162\137\x72\x65\x67\x5f\x65\156\141\x62\154\x65");
        delete_mo_option("\x67\146\x5f\157\x74\160\137\145\x6e\x61\x62\154\x65\x64");
        delete_mo_option("\167\x63\x5f\x73\x6f\x63\151\141\x6c\x5f\154\157\x67\151\156\x5f\145\x6e\141\x62\154\145");
        delete_mo_option("\146\x6f\x72\155\143\x72\x61\x66\x74\x5f\x65\156\x61\142\x6c\145");
        delete_mo_option("\155\157\137\x63\165\x73\164\157\x6d\145\x72\137\166\141\154\151\144\x61\x74\x69\x6f\156\137\141\144\x6d\x69\x6e\x5f\x65\x6d\x61\x69\x6c");
        delete_mo_option("\x77\x70\x63\x6f\155\x6d\145\156\164\137\x65\156\141\x62\x6c\x65");
        delete_mo_option("\144\x6f\143\144\x69\x72\x65\143\x74\137\145\x6e\x61\142\x6c\x65");
        delete_mo_option("\x77\x70\146\157\162\155\x5f\x65\x6e\x61\142\x6c\145");
        delete_mo_option("\143\162\x66\x5f\x6f\x74\x70\137\x65\156\141\142\x6c\x65\x64");
        delete_mo_option("\143\141\154\x64\145\162\x61\137\x65\156\141\142\154\145");
        delete_mo_option("\146\157\162\155\x6d\141\153\x65\162\137\x65\156\141\142\154\145");
        delete_mo_option("\x75\x6d\137\160\x72\x6f\x66\151\154\145\x5f\145\x6e\141\x62\154\x65");
        delete_mo_option("\x76\x69\163\165\x61\x6c\137\x66\x6f\x72\155\x5f\145\156\x61\x62\154\x65");
        delete_mo_option("\146\x72\155\x5f\x66\157\x72\x6d\137\145\x6e\x61\x62\x6c\145");
        delete_mo_option("\167\x63\137\x62\x69\154\154\x69\156\x67\x5f\x65\156\x61\x62\x6c\145");
        delete_mo_option("\160\154\x75\147\x69\156\x5f\141\143\164\151\x76\x61\x74\151\x6f\156\x5f\x64\141\x74\145");
    }
    private function vlk_success($mV)
    {
        $U0 = json_decode($this->vml($mV), true);
        if (isset($U0["\163\164\141\164\165\x73"]) && strcasecmp($U0["\x73\x74\x61\x74\x75\x73"], "\123\x55\103\x43\x45\123\x53") === 0) {
            goto hHt;
        }
        if (isset($U0["\163\x74\x61\x74\x75\163"]) && strcasecmp($U0["\x73\164\141\x74\x75\x73"], "\106\101\x49\114\105\104") === 0) {
            goto JVX;
        }
        do_action("\155\157\137\x72\x65\147\151\x73\164\x72\141\x74\x69\x6f\x6e\x5f\x73\150\x6f\167\137\155\145\x73\x73\x61\x67\x65", MoMessages::showMessage(MoMessages::UNKNOWN_ERROR), "\x45\x52\122\x4f\x52");
        goto ftI;
        hHt:
        $a6 = get_mo_option("\143\x75\x73\164\157\x6d\x65\x72\x5f\164\x6f\x6b\x65\x6e");
        update_mo_option("\145\155\x61\x69\x6c\x5f\166\145\x72\x69\x66\x69\143\141\164\x69\157\x6e\137\x6c\153", AEncryption::encrypt_data($mV, $a6));
        update_mo_option("\163\x69\x74\x65\x5f\x65\x6d\141\x69\154\137\x63\153\x6c", AEncryption::encrypt_data("\x74\162\165\x65", $a6));
        do_action("\155\157\x5f\162\145\x67\151\163\164\162\x61\164\151\157\156\x5f\x73\x68\x6f\167\x5f\155\x65\163\163\x61\147\145", MoMessages::showMessage(MoMessages::VERIFIED_LK), "\123\x55\103\x43\105\123\123");
        goto ftI;
        JVX:
        if (strcasecmp($U0["\x6d\145\x73\163\141\147\x65"], "\103\x6f\x64\145\x20\150\x61\x73\x20\x45\170\160\151\162\x65\144") === 0) {
            goto dQg;
        }
        do_action("\x6d\x6f\137\x72\145\x67\151\163\x74\162\141\164\151\x6f\156\x5f\163\x68\157\x77\137\155\x65\x73\163\141\147\x65", MoMessages::showMessage(MoMessages::INVALID_LK), "\105\x52\x52\117\x52");
        goto sA4;
        dQg:
        do_action("\x6d\x6f\137\162\x65\147\x69\x73\x74\162\x61\164\151\157\x6e\137\163\150\157\x77\x5f\155\x65\163\x73\141\x67\145", MoMessages::showMessage(MoMessages::LK_IN_USE), "\105\122\122\x4f\122");
        sA4:
        ftI:
    }
    private function vlk_fail()
    {
        $a6 = get_mo_option("\x63\x75\163\x74\157\155\x65\x72\137\164\x6f\x6b\145\x6e");
        update_mo_option("\163\151\x74\x65\x5f\x65\155\x61\151\154\137\143\153\x6c", AEncryption::encrypt_data("\146\x61\x6c\x73\x65", $a6));
        do_action("\x6d\x6f\x5f\162\145\x67\x69\163\164\x72\141\164\151\x6f\156\137\163\150\x6f\167\x5f\155\145\163\x73\141\x67\145", MoMessages::showMessage(MoMessages::NEED_UPGRADE_MSG), "\x45\122\x52\x4f\122");
    }
    private function vml($mV)
    {
        $XF = MoConstants::HOSTNAME . "\x2f\155\x6f\x61\163\x2f\141\x70\151\57\142\141\143\153\165\160\143\157\144\145\x2f\x76\x65\x72\151\146\x79";
        $ik = get_mo_option("\141\x64\155\x69\156\x5f\x63\165\163\164\x6f\155\x65\162\x5f\153\145\171");
        $o1 = get_mo_option("\141\144\155\151\x6e\137\x61\160\151\x5f\x6b\x65\171");
        $Z3 = array("\x63\x6f\144\145" => $mV, "\143\x75\163\x74\157\155\x65\162\113\x65\x79" => $ik, "\x61\x64\x64\x69\164\x69\157\156\141\154\106\151\145\154\x64\x73" => array("\x66\151\x65\154\x64\x31" => site_url()));
        $ur = wp_json_encode($Z3);
        $bO = MocURLCall::create_auth_header($ik, $o1);
        $zk = MocURLCall::call_api($XF, $ur, $bO);
        return $zk;
    }
    private function ccl()
    {
        $XF = MoConstants::HOSTNAME . "\x2f\155\x6f\141\163\57\162\x65\x73\x74\x2f\x63\165\x73\x74\x6f\155\x65\162\57\x6c\x69\x63\145\x6e\163\145";
        $ik = get_mo_option("\141\x64\155\x69\156\x5f\143\165\163\164\x6f\x6d\x65\162\x5f\x6b\x65\171");
        $o1 = get_mo_option("\x61\144\155\151\156\137\x61\x70\x69\x5f\153\145\171");
        $Z3 = array("\x63\x75\163\x74\x6f\x6d\x65\x72\111\144" => $ik, "\141\x70\160\154\x69\x63\x61\x74\x69\157\156\116\x61\155\x65" => $this->application_name);
        $ur = wp_json_encode($Z3);
        $bO = MocURLCall::create_auth_header($ik, $o1);
        $zk = MocURLCall::call_api($XF, $ur, $bO);
        return $zk;
    }
    private function mius()
    {
        $XF = MoConstants::HOSTNAME . "\x2f\155\157\141\x73\57\141\x70\151\57\x62\141\x63\153\165\x70\143\157\x64\145\57\x75\x70\144\x61\x74\x65\163\164\141\164\165\163";
        $ik = get_mo_option("\x61\144\155\151\x6e\137\x63\x75\163\x74\x6f\x6d\x65\x72\137\153\x65\x79");
        $o1 = get_mo_option("\141\144\155\151\156\x5f\x61\x70\151\x5f\x6b\145\x79");
        $a6 = get_mo_option("\x63\x75\163\x74\157\x6d\145\162\x5f\x74\157\x6b\145\156");
        $mV = AEncryption::decrypt_data(get_mo_option("\x65\x6d\141\x69\x6c\137\x76\x65\x72\151\x66\151\x63\x61\164\x69\x6f\x6e\x5f\154\153"), $a6);
        $Z3 = array("\x63\x6f\x64\x65" => $mV, "\x63\x75\163\x74\157\x6d\145\162\x4b\x65\171" => $ik);
        $ur = wp_json_encode($Z3);
        $bO = MocURLCall::create_auth_header($ik, $o1);
        $zk = MocURLCall::call_api($XF, $ur, $bO);
        return $zk;
    }
    public function custom_wp_mail_from_name($f0)
    {
        return get_mo_option("\x63\x75\163\164\x6f\155\x5f\x65\155\141\151\x6c\x5f\x66\x72\157\155\137\x6e\x61\x6d\145") ? get_mo_option("\x63\165\x73\x74\157\x6d\137\145\x6d\x61\151\x6c\137\146\162\157\155\137\x6e\141\155\x65") : $f0;
    }
    public function mo_configure_sms_template($bD)
    {
        if (!isset($bD["\155\157\137\143\165\x73\x74\x6f\x6d\145\x72\x5f\166\x61\x6c\151\144\141\164\x69\157\x6e\137\x63\x75\x73\164\x6f\x6d\x5f\x73\155\163\x5f\155\x73\x67"])) {
            goto You;
        }
        $En = trim($bD["\155\x6f\137\143\165\x73\x74\x6f\155\145\x72\x5f\166\141\x6c\151\144\x61\164\x69\x6f\156\x5f\143\165\163\164\x6f\x6d\137\163\155\163\x5f\155\163\147"]);
        $En = str_replace(PHP_EOL, "\45\60\141", $En);
        update_mo_option("\143\165\163\164\157\x6d\137\163\155\163\x5f\155\x73\147", $En);
        You:
        if (!isset($bD["\155\x6f\137\x63\x75\x73\x74\x6f\x6d\x65\x72\137\x76\x61\x6c\151\144\141\x74\x69\x6f\156\137\x63\165\x73\164\x6f\x6d\137\147\x61\164\x65\x77\141\171\137\164\x79\x70\145"])) {
            goto POK;
        }
        update_mo_option("\143\165\163\x74\x6f\x6d\145\137\147\x61\164\145\x77\x61\171\137\164\171\160\x65", $bD["\x6d\x6f\x5f\143\x75\x73\164\157\x6d\145\x72\137\166\x61\x6c\x69\144\x61\x74\151\157\156\x5f\x63\165\x73\x74\157\155\137\147\x61\164\x65\167\x61\x79\137\x74\171\x70\145"]);
        $ie = GatewayType::instance();
        $ie->save_gateway_details($bD);
        POK:
    }
    public function mo_configure_email_template($bD)
    {
        update_mo_option("\x63\165\x73\164\x6f\x6d\x5f\x65\x6d\141\x69\x6c\x5f\x6d\163\147", wpautop($bD["\155\x6f\137\143\165\x73\x74\157\x6d\145\x72\137\166\x61\x6c\x69\144\x61\x74\x69\x6f\x6e\x5f\x63\x75\x73\164\157\x6d\137\145\x6d\x61\x69\x6c\x5f\155\163\147"]));
        update_mo_option("\x63\x75\x73\164\x6f\x6d\x5f\x65\x6d\x61\151\x6c\137\163\x75\142\x6a\145\143\x74", sanitize_text_field($bD["\155\157\x5f\x63\165\163\x74\157\x6d\x65\x72\137\x76\x61\x6c\x69\144\141\x74\x69\157\x6e\137\x63\x75\163\164\157\155\137\x65\155\141\x69\154\x5f\x73\165\x62\x6a\x65\x63\164"]));
        update_mo_option("\x63\x75\x73\x74\x6f\x6d\x5f\145\155\x61\151\154\137\x66\162\157\155\x5f\x69\144", sanitize_text_field($bD["\155\157\x5f\x63\165\x73\x74\x6f\x6d\x65\162\137\x76\x61\x6c\x69\144\x61\164\x69\x6f\156\137\x63\x75\x73\x74\x6f\x6d\137\145\x6d\x61\x69\154\x5f\x66\x72\x6f\155\x5f\151\144"]));
        update_mo_option("\143\x75\163\x74\x6f\155\x5f\x65\x6d\x61\x69\154\x5f\146\x72\x6f\155\x5f\x6e\x61\x6d\145", sanitize_text_field($bD["\155\x6f\137\x63\165\163\164\x6f\x6d\x65\162\137\166\x61\154\x69\x64\x61\164\x69\x6f\x6e\137\x63\x75\163\x74\157\x6d\137\145\x6d\141\x69\x6c\137\x66\162\157\155\137\156\x61\x6d\x65"]));
    }
    public function show_configuration_page($U5)
    {
        $w4 = get_mo_option("\x63\165\x73\x74\x6f\155\x5f\x73\x6d\x73\x5f\155\x73\147") ? get_mo_option("\x63\x75\x73\164\x6f\x6d\x5f\x73\155\x73\x5f\155\x73\147") : MoMessages::showMessage(MoMessages::DEFAULT_SMS_TEMPLATE);
        $w4 = mo_($w4);
        $Ga = get_mo_option("\x63\x75\163\164\157\155\137\x65\155\x61\x69\154\x5f\163\x75\142\x6a\x65\x63\164") ? get_mo_option("\143\165\x73\x74\157\155\137\x65\x6d\141\151\154\x5f\163\165\x62\152\145\143\x74") : MoMessages::showMessage(MoMessages::EMAIL_SUBJECT);
        $pq = get_mo_option("\143\x75\x73\x74\157\x6d\137\x65\155\141\x69\x6c\x5f\146\162\157\155\x5f\151\144") ? get_mo_option("\143\165\x73\x74\x6f\155\137\x65\x6d\141\x69\154\x5f\146\x72\157\155\137\x69\144") : get_mo_option("\141\144\x6d\x69\x6e\x5f\145\x6d\x61\x69\154");
        $ho = get_mo_option("\143\x75\x73\164\x6f\x6d\137\x65\155\x61\x69\154\x5f\x66\162\157\x6d\x5f\x6e\141\155\145") ? get_mo_option("\x63\165\163\164\157\x6d\137\x65\x6d\x61\151\x6c\x5f\x66\162\x6f\155\137\x6e\x61\x6d\145") : get_bloginfo("\x6e\141\x6d\x65");
        $U0 = get_mo_option("\143\165\163\164\157\x6d\137\x65\x6d\x61\151\x6c\137\155\163\147") ? stripslashes(get_mo_option("\143\x75\163\x74\157\x6d\x5f\145\155\x61\x69\154\x5f\155\163\147")) : MoMessages::showMessage(MoMessages::DEFAULT_EMAIL_TEMPLATE);
        $L0 = "\x63\165\x73\x74\157\155\x65\x6d\x61\x69\x6c\145\x64\151\x74\157\162";
        $F8 = array("\155\x65\144\x69\x61\x5f\142\x75\x74\x74\157\156\x73" => false, "\164\145\x78\x74\141\x72\145\141\137\156\141\x6d\145" => "\155\x6f\x5f\143\x75\163\x74\x6f\x6d\145\x72\x5f\x76\x61\154\x69\144\141\164\151\157\x6e\137\143\x75\x73\164\157\155\x5f\x65\155\141\151\154\x5f\x6d\x73\x67", "\145\x64\151\164\157\x72\x5f\x68\145\151\147\150\164" => "\61\67\60\160\x78", "\x77\160\x61\x75\164\x6f\160" => false);
        $TG = MoActionHandlerHandler::instance();
        $Ft = $TG->get_nonce_value();
        $ZU = wp_nonce_field($Ft);
        $ix = mo_("\123\115\123\x20\124\105\115\120\x4c\x41\x54\105\x20\x43\117\116\106\111\x47\x55\122\x41\x54\111\117\x4e");
        $jE = mo_("\x53\115\123\x20\107\x41\x54\105\x57\x41\131\x20\x43\117\x4e\106\111\x47\x55\x52\x41\x54\x49\117\x4e");
        $yV = mo_("\x53\x4d\123\x20\124\x65\155\x70\x6c\x61\164\x65");
        $yZ = mo_("\105\x6e\x74\145\162\x20\x4f\x54\x50\40\123\x4d\x53\40\x4d\x65\163\163\141\147\145");
        $Fa = mo_("\131\x6f\x75\x20\156\145\x65\x64\x20\164\x6f\40\167\162\151\x74\145\x20\x23\43\157\164\x70\43\x23\x20\x77\150\x65\x72\x65\40\171\x6f\165\x20\167\x69\x73\150\x20\x74\x6f\x20\160\x6c\x61\143\x65\x20\x67\145\x6e\145\x72\x61\x74\145\x64\x20\157\164\x70\x20\151\156\40\164\150\x69\x73\40\164\x65\x6d\x70\154\141\164\145\56");
        $MQ = mo_("\131\x6f\x75\x20\x77\x69\154\154\x20\x6e\x65\145\144\40\x74\x6f\40\160\154\x61\x63\145\x20\x79\157\165\x72\x20\123\115\123\40\147\141\x74\145\x77\x61\171\40\125\x52\x4c\40\x69\x6e\x20\164\150\x65\x20\x66\x69\145\154\x64\40\x61\142\x6f\x76\x65\40\x69\x6e\40\157\162\x64\x65\162\x20\164\x6f\40\x62\145\xd\12\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\40\40\40\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\141\x62\154\145\x20\164\157\x20\163\x65\x6e\x64\40\117\x54\x50\163\40\164\x6f\40\164\x68\145\x20\x75\163\x65\162\47\163\x20\160\x68\157\x6e\145\x2e") . "\74\142\x72\57\76" . mo_("\131\157\165\40\x77\x69\x6c\x6c\x20\x62\145\x20\141\x62\x6c\x65\40\x74\x6f\x20\147\x65\x74\x20\164\150\x69\163\40\125\122\114\40\146\162\x6f\x6d\x20\171\x6f\165\x72\x20\123\115\x53\x20\x67\x61\x74\x65\x77\141\171\x20\160\162\x6f\x76\151\x64\145\x72\56");
        $x8 = mo_("\x49\146\40\171\157\165\40\141\x72\x65\x20\150\x61\x76\x69\x6e\147\40\164\162\x6f\x75\x62\154\x65\x20\x69\x6e\40\146\x69\x6e\144\151\x6e\147\x20\171\x6f\165\x72\40\x67\x61\164\145\x77\141\171\x20\125\x52\x4c\x20\x74\x68\145\x6e\40\x79\x6f\165\40\x64\x72\x6f\x70\x20\x75\x73\x20\141\x6e\xd\12\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\145\155\141\151\154\40\x61\164\40\x3c\141\40\163\164\171\154\145\75\47\x63\x75\x72\x73\x6f\162\x3a\x70\157\x69\156\x74\145\x72\73\x27\47\40\157\x6e\x43\154\151\x63\153\x3d\47\x6f\164\x70\x53\x75\160\x70\157\x72\164\x4f\156\103\x6c\151\x63\153\x28\51\73\x27\76\157\164\160\163\x75\x70\160\157\x72\164\x40\170\x65\x63\x75\162\x69\146\171\x2e\x63\157\155\74\x2f\141\76\56\40\127\145\x20\167\151\x6c\x6c\x20\x68\x65\x6c\160\40\171\157\x75\40\x77\151\164\150\x20\x74\x68\x65\40\x73\x65\x74\165\160\56");
        $Ag = mo_("\124\145\163\x74\x20\123\x4d\x53\40\107\141\164\x65\167\x61\171\x20\x43\157\156\x66\x69\147\165\x72\141\x74\151\x6f\156\163");
        $ms = mo_("\124\x65\x73\x74\40\x43\157\156\x66\151\147\x75\x72\141\x74\151\x6f\x6e");
        $Lf = mo_("\x47\141\164\x65\x77\141\x79\40\122\x65\163\160\x6f\x6e\163\145");
        $v_ = "\x45\x78\141\155\x70\154\145\x3a\x2d\x20\150\164\x74\x70\72\x2f\57\x61\154\145\x72\x74\163\x2e\163\x69\x6e\146\151\x6e\151\x2e\x63\157\x6d\57\x61\x70\x69\57\167\145\x62\x32\163\155\163\x2e\x70\x68\x70\x75\x73\145\x72\x6e\141\x6d\145\75\130\x59\x5a\x26\x70\141\x73\x73\x77\157\x72\x64\75\160\x61\163\163\x77\x6f\162\x64\x26\164\157\75\43\x23\x70\150\157\x6e\145\x23\x23\x26\x73\145\156\x64\x65\162\x3d\x73\x65\x6e\144\x65\x72\x69\x64\46\155\x65\x73\x73\x61\147\145\75\x23\43\155\145\x73\x73\x61\147\x65\43\43";
        $l2 = mo_("\103\x41\116\x4e\x4f\x54\x20\106\111\x4e\x44\40\124\x48\x45\x20\107\101\x54\105\x57\x41\131\x20\125\122\x4c\77");
        $sW = mo_("\x53\141\x76\x65\x20\123\115\x53\40\103\x6f\156\x66\x69\147\165\162\x61\x74\x69\x6f\156\x73");
        $m5 = mo_("\123\x61\x76\x65\40\x47\141\x74\x65\167\x61\171\40\103\157\156\x66\x69\x67\165\x72\141\164\151\x6f\x6e\x73");
        $oA = mo_("\x45\x4d\x41\111\114\40\x43\x4f\x4e\106\x49\107\125\122\101\124\x49\117\116");
        $Fz = mo_("\131\x6f\165\40\156\x65\145\144\x20\x74\x6f\40\143\x6f\156\x66\x69\x67\x75\x72\x65\40\171\157\165\x72\x20\x70\x68\160\56\x69\156\x69\x20\x66\x69\x6c\x65\x20\x77\151\164\150\x20\x53\115\124\x50\40\x73\145\x74\164\x69\156\x67\x73\x20\164\157\x20\x62\145\x20\x61\142\154\x65\x20\164\x6f\40\x73\145\156\x64\40\x65\x6d\141\151\154\163\x2e");
        $d8 = mo_("\123\x61\166\x65\x20\x45\x6d\x61\x69\x6c\40\x43\157\x6e\x66\x69\x67\x75\x72\x61\x74\x69\157\156\x73");
        $AO = mo_("\105\x6e\x74\145\x72\40\171\x6f\x75\162\40\117\124\x50\x20\105\x6d\141\x69\154\40\x53\165\142\152\x65\143\x74");
        $IU = mo_("\x45\x6e\x74\145\162\x20\116\x61\x6d\x65");
        $wz = mo_("\105\156\164\145\162\40\x65\155\141\x69\154\x20\x61\x64\x64\x72\145\x73\x73");
        $c0 = mo_("\x46\x72\x6f\x6d\x20\111\104");
        $XM = mo_("\x46\x72\157\x6d\40\116\x61\155\x65");
        $ih = mo_("\123\x75\x62\x6a\145\143\x74");
        $Iz = mo_("\102\x6f\144\x79");
        $ie = GatewayType::instance();
        $x5 = get_mo_option("\x63\x75\163\x74\157\155\x5f\x73\x6d\x73\x5f\x67\x61\164\145\167\x61\171") ? get_mo_option("\x63\165\x73\x74\x6f\x6d\137\x73\x6d\x73\137\147\x61\164\x65\x77\141\171") : '';
        $sB = $ie->get_gateway_config_view($U5, $x5);
        $fm = $this->get_gateway_list();
        $fT = get_mo_option("\143\165\163\164\x6f\x6d\x65\137\x67\x61\164\x65\167\141\171\x5f\164\171\x70\x65") ? get_mo_option("\143\x75\163\164\x6f\x6d\145\x5f\x67\141\164\145\x77\x61\x79\137\164\x79\x70\145") : "\x6d\x6f\x67\141\164\145\167\141\x79\165\162\x6c";
        include MOV_DIR . "\x76\151\x65\x77\x73\57\143\143\x6f\156\x66\x69\147\165\x72\141\164\x69\x6f\156\x2e\x70\150\x70";
    }
    public function get_gateway_list()
    {
        $AM = '';
        $IC = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(MOV_DIR . "\x68\x65\154\160\145\x72\x2f\x67\141\x74\x65\x77\141\171", \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($IC as $pb) {
            $mu = $pb->getFilename();
            $w5 = "\117\124\120\134\x48\145\154\x70\145\x72\134\x47\141\x74\145\x77\x61\x79\134" . ltrim(str_replace("\56\160\150\x70", '', $mu), "\x63\154\141\163\163\55");
            $k7 = $w5::instance();
            $AM .= $this->add_option($k7->gateway_name, $k7->gateway_type);
            svw:
        }
        eyT:
        return $AM;
    }
    public function get_gateway_response()
    {
        if (check_ajax_referer($this->nonce, "\163\145\x63\165\162\x69\164\x79", false)) {
            goto Owv;
        }
        return;
        Owv:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $mR = isset($GX["\x74\x65\163\x74\137\x63\157\x6e\146\151\x67\137\156\x75\x6d\142\x65\x72"]) ? $GX["\x74\145\163\164\x5f\143\157\156\146\x69\147\x5f\156\x75\x6d\x62\x65\162"] : '';
        $M2 = isset($GX["\x61\x63\164\151\x6f\156"]) ? $GX["\x61\x63\164\x69\x6f\x6e"] : '';
        if ("\x77\141\137\155\151\156\151\x6f\162\x61\156\147\x65\x5f\147\145\164\137\x74\145\163\164\x5f\x72\145\163\160\157\156\163\x65" === $M2) {
            goto or0;
        }
        $hN = $this->mo_send_otp_token("\123\x4d\123", '', $mR, $GX);
        print_r($hN);
        goto fdA;
        or0:
        $hN = $this->mo_send_otp_token("\127\110\101\x54\x53\x41\x50\x50", '', $mR, $GX);
        $xD = "\x53\x55\x43\x43\x45\123\x53" === $hN["\163\x74\x61\164\x75\163"] ? "\123\165\143\x63\x65\x73\x73\40\x21\x21\x20\131\157\x75\x72\x20\x6d\145\163\x73\141\147\x65\x20\x68\x61\163\40\142\145\145\x6e\40\163\145\156\164\56" : "\105\x72\162\157\x72\x20\x21\x21\x20\x59\x6f\x75\x20\155\145\163\163\x61\x67\x65\40\x68\141\x73\40\x6e\157\164\40\x62\145\x65\x6e\x20\x73\x65\156\164\56";
        print_r($xD);
        fdA:
        die;
    }
    private function add_option($Vk, $wa)
    {
        return "\x3c\x6f\160\x74\151\157\156\x20\x76\x61\x6c\x75\145\75\x22" . $wa . "\x22\x3e" . $Vk . "\74\x2f\157\x70\x74\x69\x6f\x6e\76";
    }
    public function mo_send_otp_token($Ya, $ZG, $M9, $GX = array())
    {
        if (MO_TEST_MODE) {
            goto Kuh;
        }
        $U0 = "\127\110\x41\x54\123\101\x50\120" === $Ya ? apply_filters("\155\157\137\167\x61\x5f\163\x65\x6e\144\137\x6f\x74\x70\x5f\164\157\x6b\x65\156", $Ya, $ZG, $M9, $GX) : $this->send_otp_token($Ya, $ZG, $M9, $GX);
        return json_decode($U0, true);
        goto YjS;
        Kuh:
        return array("\163\x74\141\x74\x75\163" => "\x53\x55\x43\x43\105\x53\x53", "\x74\170\111\144" => MoUtility::rand());
        YjS:
    }
    public function mo_send_notif(NotificationSettings $Hz)
    {
        $zk = $Hz->send_sms ? self::send_sms_token($Hz->message, $Hz->phone_number) : self::send_email_token($Hz->message, $Hz->to_email, $Hz->from_email, $Hz->subject);
        return !is_null($zk) ? wp_json_encode(array("\163\164\141\x74\165\163" => "\x53\x55\x43\103\x45\x53\x53")) : wp_json_encode(array("\x73\x74\x61\x74\165\163" => "\105\122\122\117\122"));
    }
    private function send_otp_token($Ya, $ZG = null, $M9 = null, $GX = null)
    {
        $gb = get_mo_option("\157\x74\x70\x5f\154\145\156\147\x74\x68") ? get_mo_option("\157\164\x70\137\x6c\x65\x6e\147\164\x68") : 5;
        $sc = wp_rand(pow(10, $gb - 1), pow(10, $gb) - 1);
        $sc = apply_filters("\155\x6f\x5f\141\154\160\x68\141\x6e\165\x6d\x65\x72\x69\143\137\157\x74\x70\137\x66\x69\154\164\145\162", $sc);
        $ik = get_mo_option("\141\x64\155\151\x6e\137\x63\x75\x73\x74\x6f\155\x65\x72\x5f\153\x65\x79");
        $k1 = $ik . $sc;
        $SI = hash("\x73\x68\x61\65\x31\62", $k1);
        $zk = self::http_request($Ya, $sc, $ZG, $M9);
        if ($zk) {
            goto xmG;
        }
        $U0 = array("\x73\164\x61\164\x75\x73" => "\106\101\x49\x4c\125\x52\105");
        goto qq0;
        xmG:
        MoPHPSessions::add_session_var("\x6d\x6f\137\x6f\x74\x70\164\x6f\x6b\x65\156", true);
        MoPHPSessions::add_session_var("\163\x65\156\164\x5f\157\156", time());
        $U0 = array("\x73\164\141\x74\165\x73" => "\x53\125\x43\103\105\x53\123", "\164\170\111\x64" => $SI);
        qq0:
        $jc = isset($GX["\x61\x63\164\151\157\x6e"]) ? $GX["\x61\143\x74\151\x6f\156"] : '';
        if (!("\155\151\x6e\151\x6f\x72\x61\x6e\x67\145\137\147\145\x74\137\164\145\x73\x74\x5f\162\x65\x73\x70\x6f\156\x73\x65" === $jc)) {
            goto DNf;
        }
        return wp_json_encode($zk);
        DNf:
        return wp_json_encode($U0);
    }
    private function http_request($Ya, $sc, $ZG = null, $M9 = null)
    {
        $zk = null;
        switch ($Ya) {
            case "\123\115\123":
                $WZ = get_mo_option("\143\165\163\164\x6f\x6d\137\x73\155\x73\137\155\x73\x67") ? mo_(get_mo_option("\143\165\x73\x74\x6f\x6d\137\x73\155\163\x5f\155\x73\147")) : mo_(MoMessages::showMessage(MoMessages::DEFAULT_SMS_TEMPLATE));
                $WZ = mo_($WZ);
                $WZ = str_replace("\x23\43\157\164\160\43\x23", $sc, $WZ);
                $zk = $this->send_sms_token($WZ, $M9);
                goto JRS;
            case "\x45\115\101\111\114":
                $WZ = get_mo_option("\x63\x75\x73\x74\157\x6d\137\x65\155\x61\x69\154\x5f\155\x73\147") ? mo_(get_mo_option("\x63\x75\x73\164\157\x6d\x5f\145\155\x61\151\x6c\137\x6d\x73\147")) : mo_(MoMessages::showMessage(MoMessages::DEFAULT_EMAIL_TEMPLATE));
                $WZ = mo_($WZ);
                $WZ = stripslashes($WZ);
                $WZ = str_replace("\43\x23\157\164\x70\x23\43", $sc, $WZ);
                $mv = get_mo_option("\143\165\163\164\x6f\155\137\145\x6d\x61\151\x6c\137\146\x72\157\x6d\x5f\x69\x64");
                $ih = get_mo_option("\143\165\163\x74\x6f\155\x5f\145\x6d\x61\x69\154\x5f\x73\165\x62\152\145\x63\164");
                $XM = get_mo_option("\x63\x75\163\x74\157\x6d\x5f\x65\155\x61\151\x6c\137\146\162\x6f\155\137\156\141\x6d\x65");
                $zk = $this->send_email_token($WZ, $ZG, $mv, $ih, $XM);
                goto JRS;
        }
        xXq:
        JRS:
        return $zk;
    }
    private function send_sms_token($WZ, $M9)
    {
        $k7 = GatewayType::instance();
        $zk = $k7->send_otp_request($WZ, $M9);
        return $k7->handle_gateway_response($zk, $WZ, $M9);
    }
    private function send_email_token($WZ, $ZG, $mv = null, $ih = null, $XM = null)
    {
        $mv = !MoUtility::is_blank($mv) ? $mv : MoConstants::FROM_EMAIL;
        $ih = !MoUtility::is_blank($ih) ? $ih : MoMessages::showMessage(MoMessages::EMAIL_SUBJECT);
        $XM = !MoUtility::is_blank($XM) ? $XM : $mv;
        $C4 = "\106\x72\x6f\x6d\72" . $XM . "\x20\74" . $mv . "\76\x20\12";
        $C4 .= MoConstants::HEADER_CONTENT_TYPE;
        $U0 = $WZ;
        return ini_get("\123\115\124\x50") !== false || ini_get("\163\x6d\x74\160\x5f\x70\157\162\164") !== false ? wp_mail($ZG, $ih, $U0, $C4) : false;
    }
    public function mo_validate_otp_token($Mi, $Ns)
    {
        return MO_TEST_MODE ? MO_FAIL_MODE ? array("\x73\164\x61\164\165\163" => '') : array("\163\164\141\164\165\x73" => "\123\125\x43\103\x45\x53\x53") : $this->validate_otp_token($Mi, $Ns);
    }
    private function validate_otp_token($SI, $Ns)
    {
        $ik = get_mo_option("\x61\144\155\x69\156\x5f\x63\x75\x73\x74\x6f\x6d\x65\x72\137\x6b\x65\x79");
        if (MoPHPSessions::get_session_var("\x6d\x6f\137\x6f\164\x70\x74\157\x6b\x65\156")) {
            goto wdy;
        }
        $U0 = array("\x73\164\141\164\x75\x73" => MoConstants::FAILURE);
        goto USR;
        wdy:
        $sd = $this->check_time_stamp(MoPHPSessions::get_session_var("\x73\145\156\164\137\157\156"), time());
        $sd = $this->check_transaction_id($ik, $Ns, $SI, $sd);
        if ($sd) {
            goto wJ2;
        }
        $U0 = array("\163\164\x61\164\x75\x73" => MoConstants::FAILURE);
        goto PQa;
        wJ2:
        $U0 = array("\x73\164\x61\164\165\163" => MoConstants::SUCCESS);
        PQa:
        MoPHPSessions::unset_session("\x24\x6d\157\137\x6f\164\x70\x74\x6f\x6b\x65\x6e");
        USR:
        return apply_filters("\x6d\x6f\x5f\x6d\141\x73\x74\x65\162\x5f\157\164\x70\137\146\x69\154\164\145\x72", $U0, $Ns);
    }
    private function check_time_stamp($yY, $tY)
    {
        $pv = get_mo_option("\157\164\160\137\166\x61\x6c\x69\x64\151\164\x79") ? get_mo_option("\x6f\x74\160\137\x76\141\x6c\x69\144\151\164\171") : 5;
        $GW = round(abs($tY - $yY) / 60, 2);
        return $GW > $pv ? false : true;
    }
    private function check_transaction_id($ik, $Ns, $SI, $sd)
    {
        if ($sd) {
            goto y5t;
        }
        return false;
        y5t:
        $k1 = $ik . $Ns;
        $Fg = hash("\x73\150\141\x35\x31\62", $k1);
        return $Fg === $SI;
    }
}
a9v:
