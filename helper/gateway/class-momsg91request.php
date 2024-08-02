<?php


namespace OTP\Helper\Gateway;

if (defined("\101\x42\123\x50\101\124\x48")) {
    goto D2Y;
}
exit;
D2Y:
use OTP\Objects\IGatewayType;
use OTP\Traits\Instance;
use OTP\Helper\GatewayType;
use OTP\Helper\Gateway\MoGatewayURL;
use OTP\Helper\MoMessages;
use OTP\Addons\WcSMSNotification\Helper\WooCommerceNotificationsList;
use OTP\Addons\UmSMSNotification\Helper\UltimateMemberNotificationsList;
use OTP\Helper\MocURLCall;
use OTP\Helper\MoPHPSessions;
if (class_exists("\x4d\x6f\115\x53\107\x39\x31\x52\145\x71\165\145\163\164")) {
    goto gGD;
}
class MoMSG91Request implements IGatewayType
{
    use Instance;
    private $gateway;
    public $gateway_name;
    public $gateway_type;
    public $notif_session_var;
    public function __construct()
    {
        $this->gateway_name = "\x4d\123\107\71\x31";
        $this->notif_session_var = "\155\x6f\x5f\141\x64\144\x6f\x6e\x5f\156\157\164\151\146\x5f\x74\171\160\145";
        $this->gateway_type = "\x4d\x6f\x4d\123\107\x39\x31\x52\145\161\x75\145\x73\x74";
    }
    public function send_otp_request($WZ, $M9)
    {
        $XF = $this->changeGatewayURLWithTemplate(get_mo_option("\x63\x75\x73\x74\157\155\137\x73\155\x73\x5f\147\141\164\x65\167\x61\171"));
        $CP = get_mo_option("\x63\165\x73\164\x6f\x6d\x65\137\x67\141\x74\145\167\x61\171\137\155\145\x74\x68\x6f\144");
        $WZ = str_replace("\40", "\x2b", $WZ);
        $XF = str_replace("\43\x23\x6d\145\x73\x73\x61\147\145\x23\43", $WZ, $XF);
        $XF = str_replace("\43\43\x70\x68\157\156\145\x23\43", apply_filters("\x6d\157\137\146\151\x6c\164\145\x72\137\x70\x68\x6f\156\x65\137\x62\x65\146\x6f\162\145\137\x61\x70\x69\x5f\x63\141\154\x6c", $M9), $XF);
        $XF = apply_filters("\143\x75\163\x74\x6f\x6d\x69\x7a\x65\137\x6f\164\160\x5f\165\162\x6c\x5f\x62\x65\146\x6f\x72\x65\x5f\x61\x70\x69\x5f\x63\141\x6c\154", $XF, $WZ, apply_filters("\155\x6f\x5f\146\151\x6c\x74\x65\162\x5f\160\150\157\x6e\145\137\x62\x65\146\157\162\145\x5f\x61\160\151\x5f\x63\x61\x6c\154", $M9));
        $zk = MocURLCall::call_api($XF, null, null, $CP);
        return $zk;
    }
    public function changeGatewayURLWithTemplate($XF)
    {
        $E1 = $this->getNotifInSession();
        $jO = !$E1 ? $this->getTemplateID("\x6f\x74\x70\x5f\x74\x65\155\160\x6c\x61\x74\145") : $this->getTemplateID($E1);
        return str_replace("\43\43\x74\145\x6d\160\154\x61\164\x65\x69\x64\x23\x23", $jO, $XF);
    }
    public function getNotifInSession()
    {
        return MoPHPSessions::add_session_var($this->notif_session_var);
    }
    public function unsetNotifInSession()
    {
        MoPHPSessions::unset_session($this->notif_session_var);
    }
    public function handle_gateway_response($zk, $WZ, $M9)
    {
        $this->unsetNotifInSession();
        $zk = apply_filters("\155\x6f\137\x63\165\163\164\157\x6d\137\147\x61\164\x65\x77\141\171\137\162\145\x73\x70\x6f\156\x73\145", $zk, $WZ, $M9);
        return $zk;
    }
    public function get_gateway_config_view($U5, $x5)
    {
        $kY = get_mo_option("\x63\x75\x73\164\x6f\x6d\145\x5f\x67\x61\x74\x65\x77\141\171\137\155\145\x74\150\157\144");
        $Kz = "\x50\117\123\x54" === $kY ? "\143\x68\145\143\153\x65\x64" : '';
        $VH = "\x47\105\x54" === $kY ? "\x63\150\145\x63\153\x65\144" : '';
        $fK = "\x3c\x64\151\x76\x20\x69\x64\75\42\x6d\157\x5f\x6d\x65\164\150\157\x64\x22\x3e\15\xa\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\x3c\142\x3e" . mo_("\x53\x4d\123\40\x47\141\x74\x65\x77\141\x79\x20\x55\122\x4c\40\115\145\x74\150\x6f\144") . "\x3a\74\57\142\76\xd\xa\40\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\40\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\x3c\151\156\x70\165\x74\x20\164\171\x70\145\x3d\x22\x72\141\x64\x69\157\42\40" . $U5 . "\40\143\154\x61\163\163\x3d\x22\141\x70\x70\x5f\x65\156\141\142\154\x65\x22\40\x69\144\x3d\x22\x6d\x6f\x5f\160\x6f\x73\164\x22\40\x6e\141\155\145\75\42\155\x6f\x5f\143\165\x73\x74\x6f\x6d\x65\x72\137\166\141\x6c\x69\144\x61\164\151\x6f\x6e\137\x63\165\163\164\157\155\137\147\141\x74\145\x77\141\171\x5f\155\x65\x74\150\157\x64\x22\x20" . $Kz . "\40\x76\141\154\165\x65\x3d\x22\120\x4f\x53\x54\42\76\15\xa\x20\40\40\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\40\40\40\x20\x20\40\x20\74\x6c\x61\142\x65\x6c\40\x66\x6f\x72\x3d\x22\x6d\x6f\x5f\x70\157\163\x74\42\x20\x73\164\x79\x6c\145\75\x22\x70\x61\x64\144\151\x6e\147\x3a\x30\x20\62\x35\160\170\x20\x30\x20\60\x22\76\x50\x4f\123\124\x3c\57\154\x61\142\145\154\76\xd\12\40\40\40\40\40\x20\40\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\40\40\x20\40\40\40\40\40\x3c\x69\x6e\160\x75\x74\x20\164\171\160\145\75\x22\162\141\x64\151\157\42\x20" . $U5 . "\40\x63\x6c\141\163\163\x3d\42\141\160\x70\x5f\x65\156\x61\x62\x6c\x65\x22\x20\x69\x64\x3d\42\x6d\x6f\137\x67\x65\x74\x22\x20\40\156\x61\x6d\x65\x3d\42\x6d\x6f\x5f\143\165\163\164\157\155\145\x72\x5f\166\141\x6c\151\144\141\x74\151\157\156\x5f\143\165\x73\x74\x6f\155\x5f\x67\141\164\x65\167\141\x79\137\x6d\145\164\150\x6f\144\x22\40" . $VH . "\40\166\141\x6c\165\x65\x3d\42\x47\x45\124\x22\x3e\xd\12\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\40\40\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\74\x6c\x61\142\x65\154\x20\146\x6f\x72\x3d\x22\x6d\157\137\x67\145\x74\x22\x3e\x47\105\124\x3c\x2f\154\x61\x62\x65\154\76\74\x62\162\76\xd\12\40\x20\40\x20\40\40\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\74\57\x64\x69\x76\x3e\x3c\142\162\x3e\15\12\15\xa\40\40\40\40\40\40\x20\40\74\142\x3e" . mo_("\x53\x4d\x53\x20\x47\x61\x74\x65\x77\141\171\x20\x55\x52\114") . "\x3a\74\57\142\76\15\12\40\x20\40\40\x20\40\40\x20\40\x20\40\x20\40\40\x20\40\x3c\144\x69\166\40\x3e\xd\12\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\74\151\156\160\165\164\x20\164\171\160\145\75\x22\x75\x72\x6c\x22\40" . $U5 . "\40\15\xa\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\40\40\40\40\151\x64\x3d\42\x63\x75\163\164\x6f\155\137\163\x6d\163\137\147\141\164\x65\x77\141\x79\x22\x20\xd\xa\40\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\x20\143\x6c\141\163\163\x3d\42\x6d\x6f\137\162\x65\147\x69\163\164\x72\x61\164\151\x6f\156\137\x74\x61\x62\154\145\x5f\164\145\170\x74\142\x6f\170\x22\x20\xd\xa\x20\40\40\x20\40\40\x20\40\40\x20\40\40\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\x73\x74\x79\x6c\145\75\42\142\x6f\x72\x64\x65\x72\72\61\x70\170\40\163\x6f\154\x69\x64\x20\43\x64\144\144\x22\40\xd\xa\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\x6e\x61\x6d\145\x3d\42\155\x6f\137\x63\165\163\164\x6f\155\145\162\137\x76\141\154\x69\x64\141\164\151\x6f\x6e\137\143\x75\x73\164\x6f\155\x5f\163\155\163\137\x67\x61\164\x65\167\x61\171\42\x20\15\12\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\40\x20\162\x65\161\x75\x69\162\x65\144\40\15\12\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\40\x20\x20\x20\40\40\160\x6c\141\143\x65\150\x6f\x6c\144\145\162\x3d\42" . mo_("\x45\156\x74\145\162\x20\107\x61\x74\x65\167\141\x79\40\125\x52\114") . "\x22\x20\166\141\154\x75\x65\40\75\x20\42" . $x5 . "\x22\40\57\76\xd\12\40\x20\x20\40\40\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\74\x62\x72\x3e\15\12\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\x3c\x2f\x64\151\166\x3e\15\xa\40\40\40\x20\x20\40\40\40\x20\40\40\40\x20\40\x20\x20\74\142\x72\76";
        $fK .= "\74\144\151\166\x20\x63\x6c\x61\x73\163\75\x22\x6d\157\137\157\x74\160\137\156\157\164\x65\x22\76\xd\12\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x3c\151\x3e\74\163\x70\141\x6e\40\x73\x74\x79\154\x65\75\42\143\x6f\x6c\x6f\x72\x3a\162\145\144\x3b\x22\x3e" . MoMessages::showMessage(MoMessages::GATEWAY_PARAM_NOTE) . "\74\57\163\x70\x61\x6e\76\74\57\x69\x3e\15\12\40\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\40\x3c\x2f\144\151\x76\76\x3c\x64\151\x76\76\x3c\x62\162\x3e";
        $fK = $this->showOTPTemplateIdField($U5, $fK);
        $fK = $this->showWCNotificationStatuses($U5, $fK);
        $fK = $this->showUMNotificationStatuses($U5, $fK);
        $fK .= "\x3c\57\x64\151\166\76";
        return $fK;
    }
    public function showOTPTemplateIdField($U5, $fK)
    {
        $I3 = get_mo_option("\143\x75\x73\x74\x6f\155\x65\x72\137\x73\x6d\163\137\157\164\160\137\164\145\155\160\x6c\141\x74\x65");
        $fK .= "\x3c\144\x69\166\x20\x63\x6c\x61\x73\x73\x3d\42\155\157\x5f\157\164\x70\137\x6e\x6f\x74\x65\x22\x3e\xd\xa\40\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\40\40\74\x69\76\x3c\x73\160\x61\156\40\163\x74\x79\154\x65\75\42\143\x6f\154\157\162\x3a\162\x65\144\x3b\x22\76\x4b\145\x65\160\x20\x79\x6f\x75\x72\x20\x44\x4c\x54\x5f\124\105\137\111\104\40\x70\141\x72\141\x6d\x20\x61\x73\x20\x23\x23\164\x65\x6d\160\x6c\x61\x74\x65\151\144\x23\x23\x20\151\156\x20\x74\150\145\40\x61\x62\157\166\x65\40\x55\122\x4c\74\x62\162\x3e\x50\x6c\145\x61\x73\145\x20\145\156\164\x65\x72\x20\x79\157\x75\x72\40\x54\x65\x6d\x70\x6c\x61\x74\145\40\x49\x44\40\x62\x65\x6c\x6f\x77\x20\x61\143\x63\157\x72\x64\x69\x6e\x67\x6c\x79\56\74\57\163\x70\x61\156\76\x3c\57\x69\76\15\12\x20\x20\40\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\40\40\x20\x20\40\40\x20\x20\x20\74\57\144\x69\166\x3e\74\144\151\x76\76\74\142\x72\76";
        $fK .= "\15\12\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\74\144\x69\166\40\143\154\x61\x73\x73\x3d\x22\x66\x6c\145\170\x22\76\x3c\x6c\141\x62\145\x6c\x20\x73\164\171\154\x65\75\x22\167\151\x64\x74\150\72\x20\61\60\x30\45\73\x22\76\x3c\142\76\x4f\124\120\40\126\x65\162\151\x66\x69\143\141\164\151\x6f\x6e\72\x3c\57\142\x3e\x3c\57\154\x61\142\145\x6c\76\xd\xa\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\74\x69\x6e\x70\x75\164\x20\x74\x79\x70\145\75\x22\164\x65\x78\x74\42\x20" . $U5 . "\x20\15\xa\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\40\151\x64\75\42\x63\165\x73\x74\157\x6d\x5f\163\x6d\163\137\147\x61\164\x65\167\x61\x79\42\40\xd\xa\x20\40\40\x20\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\143\154\x61\x73\x73\x3d\x22\x6d\x6f\137\x72\145\147\151\x73\x74\162\x61\x74\151\157\x6e\x5f\164\141\x62\154\x65\137\164\145\170\x74\142\x6f\x78\42\40\15\xa\x20\40\40\x20\40\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\163\x74\x79\x6c\145\x3d\x22\x62\x6f\x72\144\x65\162\x3a\x31\160\x78\x20\x73\157\154\x69\x64\40\43\x64\x64\x64\42\x20\xd\12\40\x20\x20\x20\40\40\x20\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\x6e\141\x6d\145\75\42\x6d\x6f\x5f\143\165\x73\x74\157\155\145\x72\137\166\x61\154\151\x64\141\x74\151\157\x6e\137\x63\x75\x73\x74\157\155\x5f\x73\155\163\x5f\x6f\x74\x70\137\x74\x65\x6d\x70\x6c\141\x74\x65\42\x20\xd\xa\x20\x20\40\x20\40\x20\x20\40\40\x20\40\40\x20\x20\40\40\x20\40\40\x20\40\40\40\40\160\154\x61\143\x65\150\157\154\144\x65\x72\75\42" . mo_("\x45\156\164\145\x72\40\124\x65\155\160\x6c\x61\x74\145\x20\111\104") . "\x22\40\x76\141\154\165\145\40\x3d\x20\42" . $I3 . "\x22\x20\57\76\x3c\x2f\144\151\166\x3e\15\12\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x3c\142\x72\76\15\12\40\40\40\40\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40";
        return $fK;
    }
    public function showWCNotificationStatuses($U5, $fK)
    {
        foreach (WooCommerceNotificationsList::instance() as $a6 => $bh) {
            $I3 = $this->getTemplateID($bh->page);
            $fK .= "\xd\xa\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x3c\144\151\x76\40\143\154\141\163\x73\75\x22\146\154\x65\x78\42\76\x3c\x6c\141\x62\145\x6c\40\163\x74\x79\x6c\145\75\x22\167\x69\x64\x74\150\x3a\40\61\60\x30\45\73\x22\x3e\x3c\x62\76\x57\x6f\157\x43\x6f\155\x6d\x65\162\143\x65\40" . $bh->title . "\40\146\x6f\162\40" . $bh->notification_type . "\x3a\x3c\x2f\x62\76\74\57\x6c\x61\142\145\154\x3e\15\xa\x20\40\40\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\40\74\151\156\160\x75\164\x20\164\171\160\x65\75\x22\164\145\170\164\x22\40" . $U5 . "\40\xd\xa\40\x20\40\x20\40\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\151\x64\x3d\x22\x63\165\163\x74\x6f\155\x5f\x73\x6d\x73\137\147\x61\164\145\x77\141\171\x22\40\15\12\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\40\40\40\40\40\x20\40\40\x20\40\40\40\x63\x6c\x61\x73\163\75\x22\x6d\157\137\162\145\x67\x69\x73\164\x72\x61\x74\151\x6f\x6e\x5f\x74\x61\142\x6c\x65\137\164\145\x78\x74\x62\157\x78\x22\x20\xd\xa\40\x20\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\x20\40\x20\x20\40\x73\164\171\x6c\145\x3d\42\x62\x6f\162\144\x65\x72\x3a\61\x70\x78\40\163\157\x6c\151\x64\40\x23\144\x64\144\42\x20\xd\12\40\x20\40\40\x20\x20\40\40\40\x20\x20\40\40\x20\40\40\40\40\x20\40\x20\40\40\40\x6e\141\155\145\75\x22\155\x6f\x5f\x63\x75\x73\x74\x6f\155\x65\162\137\x76\x61\x6c\151\144\141\x74\151\157\156\x5f\143\165\x73\x74\x6f\x6d\x5f\163\155\x73\x5f\156\x6f\164\151\x66\x5b" . $bh->page . "\135\x22\40\15\xa\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x70\154\x61\x63\145\150\157\x6c\144\x65\162\75\42" . mo_("\105\156\164\145\x72\x20\x54\x65\155\160\154\x61\164\145\x20\111\x44") . "\42\x20\166\x61\154\165\x65\x20\75\x20\42" . $I3 . "\x22\x20\x2f\76\74\57\144\x69\x76\x3e\xd\12\40\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x3c\142\x72\x3e\xd\12\40\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\40\x20";
            gq4:
        }
        ciY:
        return $fK;
    }
    public function showUMNotificationStatuses($U5, $fK)
    {
        foreach (UltimateMemberNotificationsList::instance() as $a6 => $bh) {
            $I3 = $this->getTemplateID($bh->page);
            $fK .= "\15\12\x20\x20\x20\40\40\40\40\x20\40\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\74\x64\x69\x76\40\143\154\141\163\163\75\x22\146\x6c\145\170\42\76\74\x6c\x61\x62\145\154\40\x73\x74\171\x6c\x65\x3d\42\167\x69\x64\164\150\x3a\x20\x31\60\60\x25\x3b\42\76\74\x62\x3e\125\154\x74\151\155\141\x74\x65\x20\x4d\145\155\142\145\162\x20" . $bh->title . "\40\146\157\x72\x20" . $bh->notification_type . "\x3a\x3c\x2f\142\x3e\x3c\x2f\x6c\141\142\145\x6c\76\xd\12\x20\40\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\40\x3c\x69\156\160\165\x74\40\x74\171\x70\x65\75\x22\164\x65\170\x74\x22\40" . $U5 . "\40\15\xa\40\40\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\40\40\40\40\40\x20\151\144\x3d\x22\x63\165\x73\x74\157\x6d\x5f\x73\x6d\163\137\x67\x61\164\x65\167\141\171\42\x20\xd\12\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\x63\154\141\x73\163\75\42\155\157\x5f\162\145\x67\x69\x73\x74\x72\141\164\151\x6f\x6e\137\164\x61\142\x6c\x65\137\164\145\170\x74\142\157\170\x22\x20\15\12\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x73\164\x79\154\145\75\42\142\157\x72\x64\x65\x72\x3a\x31\x70\170\40\x73\x6f\x6c\x69\144\40\43\144\144\144\42\40\15\12\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\x6e\141\x6d\x65\x3d\x22\155\x6f\137\x63\x75\163\x74\x6f\155\145\x72\137\166\141\x6c\151\144\x61\x74\151\157\x6e\x5f\x63\165\163\x74\x6f\x6d\x5f\x73\x6d\x73\137\x6e\157\164\151\x66\133" . $bh->page . "\135\x22\x20\40\15\xa\x20\40\x20\40\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\x70\154\x61\x63\145\x68\157\154\144\x65\x72\x3d\42" . mo_("\x45\x6e\164\x65\x72\40\124\x65\x6d\160\154\x61\164\x65\40\x49\x44") . "\42\40\166\141\154\165\145\x20\x3d\40\x22" . $I3 . "\42\x20\x2f\x3e\74\57\x64\x69\166\x3e\xd\xa\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\74\142\x72\x3e\xd\12\40\x20\x20\40\x20\40\40\x20\40\x20\40\40\40\x20\x20\40\40\40\x20\40";
            CVQ:
        }
        QF1:
        return $fK;
    }
    public function save_gateway_details($bD)
    {
        update_mo_option("\x63\165\x73\164\157\155\137\163\155\163\x5f\147\x61\x74\x65\x77\141\171", $bD["\155\157\x5f\143\165\163\164\157\x6d\x65\x72\x5f\x76\x61\154\151\144\141\164\x69\x6f\156\x5f\143\165\163\164\x6f\x6d\137\163\x6d\163\x5f\147\141\164\x65\167\x61\x79"]);
        update_mo_option("\143\165\x73\164\157\155\145\137\147\141\164\x65\x77\x61\x79\x5f\155\145\164\150\157\x64", !empty($bD["\x6d\x6f\x5f\143\x75\163\x74\x6f\x6d\x65\x72\137\x76\x61\x6c\151\x64\141\x74\x69\157\156\x5f\x63\165\163\x74\157\155\137\x67\x61\164\145\x77\x61\x79\x5f\155\145\164\x68\157\144"]) ? $bD["\155\157\x5f\x63\x75\x73\164\157\x6d\145\x72\x5f\x76\x61\x6c\151\144\141\x74\x69\x6f\x6e\x5f\143\165\x73\164\x6f\x6d\x5f\x67\141\x74\145\x77\141\x79\x5f\155\x65\164\x68\x6f\144"] : "\120\117\123\x54");
        update_mo_option("\143\x75\163\x74\157\155\137\x73\x6d\x73\x5f\x67\141\x74\x65\167\141\x79\x5f\156\x6f\164\x69\146\151\143\141\164\x69\157\156\x5f\x6f\164\x70\x5f\164\x65\x6d\160\x6c\x61\x74\x65", $bD["\155\157\137\143\x75\x73\x74\157\x6d\x65\x72\x5f\x76\141\154\151\144\141\x74\151\x6f\x6e\137\x63\x75\x73\x74\157\155\x5f\163\x6d\x73\137\x6f\164\160\x5f\164\x65\x6d\160\x6c\x61\164\145"]);
        $this->saveNotificationsValues($bD);
    }
    public function saveNotificationsValues($bD)
    {
        if (!isset($bD["\x6d\157\137\143\165\163\x74\x6f\155\145\x72\137\166\x61\154\151\x64\x61\164\x69\x6f\x6e\x5f\143\165\x73\164\x6f\x6d\137\163\x6d\163\137\156\157\x74\x69\x66"])) {
            goto bzl;
        }
        foreach ($bD["\x6d\157\137\x63\x75\x73\x74\157\x6d\x65\162\x5f\x76\x61\154\151\x64\x61\164\x69\157\156\137\143\165\x73\164\x6f\x6d\x5f\x73\155\163\x5f\x6e\x6f\x74\x69\x66"] as $a6 => $bh) {
            update_mo_option("\143\165\x73\x74\157\155\137\x73\x6d\163\x5f\x67\x61\x74\x65\x77\x61\171\x5f\156\157\164\151\146\x69\x63\141\164\x69\157\x6e\x5f" . $a6, $bh);
            ay1:
        }
        RuX:
        bzl:
    }
    public function getTemplateID($E1)
    {
        return get_mo_option("\143\165\163\x74\157\x6d\137\x73\x6d\x73\x5f\x67\141\164\x65\x77\x61\171\137\x6e\x6f\x74\x69\146\x69\143\141\164\151\x6f\x6e\137" . $E1);
    }
}
gGD:
