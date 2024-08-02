<?php


namespace OTP\Helper\Gateway;

if (defined("\x41\x42\x53\120\101\x54\x48")) {
    goto EU7;
}
exit;
EU7:
use OTP\Objects\IGatewayType;
use OTP\Traits\Instance;
use OTP\Helper\GatewayType;
use OTP\Helper\MocURLCall;
use OTP\Helper\MoMessages;
use OTP\Helper\MoConstants;
use OTP\Objects\NotificationSettings;
if (class_exists("\x4d\157\x47\x61\164\x65\167\141\171")) {
    goto yBv;
}
class MoGateway implements IGatewayType
{
    use Instance;
    private $gateway_url;
    public $gateway_name;
    public $gateway_type;
    public function __construct()
    {
        $this->gateway_name = "\x6d\151\x6e\x69\117\162\x61\156\147\145\40\107\x61\164\145\x77\x61\171";
        $this->gateway_type = "\115\157\x47\141\x74\x65\x77\x61\171";
    }
    public function send_otp_request($WZ, $M9)
    {
        $WZ = str_replace("\40", "\53", $WZ);
        $XF = MoConstants::HOSTNAME . "\57\155\157\141\x73\x2f\x61\160\151\57\x70\154\165\x67\x69\x6e\57\156\157\164\x69\x66\x79\57\163\x65\156\x64";
        $ik = get_mo_option("\x61\144\155\x69\x6e\137\143\x75\163\x74\157\155\145\x72\x5f\x6b\x65\171");
        $o1 = get_mo_option("\141\x64\x6d\151\156\137\x61\x70\x69\x5f\x6b\x65\171");
        $Z3 = array("\143\x75\x73\x74\x6f\x6d\145\162\113\145\x79" => $ik, "\x73\145\x6e\144\x45\155\141\x69\154" => false, "\x73\145\x6e\x64\x53\115\x53" => true, "\x73\x6d\x73" => array("\143\x75\163\164\x6f\155\x65\x72\x4b\x65\171" => $ik, "\160\x68\x6f\156\x65\x4e\165\x6d\142\x65\162" => $M9, "\x6d\145\163\x73\141\147\145" => $WZ));
        $ur = wp_json_encode($Z3);
        $bO = MocURLCall::create_auth_header($ik, $o1);
        $zk = MocURLCall::call_api($XF, $ur, $bO);
        return $zk;
    }
    public function sendEmailOTPRequest($WZ, $ZG, $mv, $ih, $XM)
    {
        $XF = MoConstants::HOSTNAME . "\x2f\x6d\x6f\141\163\57\141\x70\151\x2f\x70\x6c\165\147\151\x6e\57\156\157\164\151\x66\171\x2f\163\145\156\144";
        $ik = get_mo_option("\x61\144\x6d\151\x6e\137\143\165\x73\x74\x6f\155\145\162\137\x6b\x65\x79");
        $o1 = get_mo_option("\x61\x64\155\151\156\x5f\x61\x70\x69\x5f\x6b\x65\x79");
        $Z3 = array("\143\x75\x73\x74\x6f\x6d\145\162\x4b\145\x79" => $ik, "\163\x65\156\144\105\x6d\141\151\154" => true, "\x73\x65\156\x64\123\x4d\x53" => false, "\145\x6d\141\151\x6c" => array("\x63\x75\163\x74\x6f\x6d\145\162\x4b\x65\x79" => $ik, "\x66\162\x6f\155\105\x6d\141\151\154" => $mv, "\142\143\143\x45\x6d\141\x69\154" => $r1, "\146\162\x6f\x6d\x4e\141\155\x65" => $XM, "\164\157\x45\x6d\x61\151\154" => $ZG, "\164\157\116\x61\155\x65" => $ZG, "\x73\x75\x62\x6a\x65\x63\x74" => $ih, "\143\157\x6e\164\x65\x6e\x74" => $WZ));
        $ur = wp_json_encode($Z3);
        $bO = MocURLCall::create_auth_header($ik, $o1);
        $zk = MocURLCall::call_api($XF, $ur, $bO);
        return $zk;
    }
    public function handle_gateway_response($zk, $WZ, $M9)
    {
        return apply_filters("\155\x6f\x5f\x63\x75\163\164\x6f\155\x5f\147\141\x74\x65\167\141\x79\137\x72\145\x73\x70\157\156\163\x65", $zk, $WZ, $M9);
    }
    public function get_gateway_config_view($U5, $x5)
    {
        return "\74\144\x69\x76\40\143\154\141\163\163\x3d\42\x6d\x6f\x5f\x6f\164\160\x5f\x6e\157\x74\145\42\76\15\12\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\74\x69\x3e\x3c\x73\160\141\x6e\40\163\164\x79\154\145\x3d\x22\x63\157\154\157\x72\72\x67\x72\x65\x79\73\x22\76\106\157\x72\x20\155\157\162\145\x20\x69\156\x66\157\x2c\x20\x70\x6c\145\x61\163\145\40\x63\157\x6e\164\141\x63\164\40\74\141\40\x73\164\x79\x6c\145\75\42\x63\x75\162\x73\x6f\162\72\160\157\x69\156\x74\x65\162\x3b\x22\40\x6f\156\103\x6c\x69\143\153\x3d\x22\x6f\164\x70\123\x75\160\x70\x6f\x72\164\x4f\x6e\x43\154\151\x63\153\x28\x29\73\x22\x3e\x3c\165\76\x20\157\x74\x70\x73\x75\x70\160\157\162\x74\100\170\x65\143\x75\x72\x69\146\x79\x2e\x63\157\x6d\74\x2f\x75\x3e\74\57\x61\76\74\x2f\163\160\141\156\x3e\x3c\57\x69\76\xd\12\40\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\x20\40\74\57\144\x69\166\x3e";
    }
    public function save_gateway_details($bD)
    {
    }
}
yBv:
