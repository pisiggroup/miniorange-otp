<?php


namespace OTP\Helper\Gateway;

if (defined("\101\102\123\120\101\x54\x48")) {
    goto QyZ;
}
exit;
QyZ:
use OTP\Objects\IGatewayType;
use OTP\Traits\Instance;
use OTP\Helper\GatewayType;
use OTP\Helper\MocURLCall;
if (class_exists("\x4d\x6f\120\117\123\124\x52\145\161\x75\145\x73\x74")) {
    goto Bpq;
}
class MoPOSTRequest implements IGatewayType
{
    use Instance;
    private $gateway_url;
    public $gateway_name;
    public $gateway_type;
    public function __construct()
    {
        $this->gateway_name = "\120\117\x53\124\x20\x52\145\x71\165\145\163\164";
        $this->gateway_type = "\x4d\157\120\117\x53\x54\122\145\161\165\x65\163\164";
    }
    public function send_otp_request($WZ, $M9)
    {
        $XF = get_mo_option("\143\x75\163\164\x6f\155\137\x73\x6d\x73\137\147\141\164\145\x77\x61\x79");
        $WZ = str_replace("\x20", "\53", $WZ);
        $M9 = apply_filters("\x6d\157\x5f\146\x69\x6c\164\x65\x72\137\x70\150\157\x6e\x65\137\x62\145\x66\157\x72\145\x5f\x61\x70\151\137\x63\x61\154\x6c", $M9);
        $XF = apply_filters("\143\165\163\x74\x6f\155\151\x7a\145\x5f\x6f\x74\160\137\x75\162\x6c\137\142\145\x66\157\162\x65\137\x61\160\151\137\x63\x61\154\x6c", $XF, $WZ, apply_filters("\x6d\x6f\137\x66\x69\154\164\x65\162\x5f\160\150\x6f\156\x65\137\142\145\x66\157\162\x65\137\x61\160\151\x5f\143\x61\x6c\x6c", $M9));
        $AY = maybe_unserialize(get_mo_option("\x63\165\163\x74\157\x6d\x5f\147\141\164\145\167\141\x79\x5f\160\x6f\163\x74\137\142\x6f\144\171"));
        $Iz = array();
        foreach ($AY as $a6 => $bh) {
            $Eb[$bh["\141\164\x74\162\113\x65\171"]] = $bh["\141\x74\x74\x72\x56\x61\154"];
            $Iz = array_merge($Iz, $Eb);
            tPP:
        }
        S1E:
        $ur = wp_json_encode($Iz);
        $ur = str_replace("\43\x23\x6d\x65\163\163\141\147\x65\43\43", $WZ, $ur);
        $ur = str_replace("\43\x23\x70\150\157\156\145\43\x23", $M9, $ur);
        $zk = MocURLCall::call_api($XF, $ur);
        return $zk;
    }
    public function handle_gateway_response($zk, $WZ, $M9)
    {
        return apply_filters("\x6d\x6f\x5f\143\165\x73\164\157\155\x5f\147\141\x74\x65\x77\x61\171\137\162\145\x73\160\157\156\163\x65", $zk, $WZ, $M9);
    }
    public function get_gateway_config_view($U5, $x5)
    {
        $t4 = maybe_unserialize(get_mo_option("\x63\165\x73\x74\x6f\x6d\137\147\x61\x74\145\167\x61\171\137\160\x6f\163\164\137\142\157\x64\171"));
        $dE = is_countable($t4) && count($t4) ? count($t4) : 2;
        $hz = "\74\142\76" . mo_("\x53\115\x53\40\x47\141\164\x65\167\141\x79\x20\125\x52\x4c") . "\72\x3c\57\142\76\xd\xa\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\x3c\x64\151\x76\40\x3e\15\12\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\x3c\x69\156\160\165\164\x20\164\x79\x70\x65\75\x22\x75\162\154\42\x20" . $U5 . "\40\15\12\x20\x20\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\x20\40\40\x20\151\144\x3d\42\x63\x75\x73\164\x6f\x6d\137\163\155\x73\137\147\x61\x74\145\x77\141\171\x22\x20\15\12\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x63\154\141\163\x73\75\42\155\x6f\137\x72\x65\147\151\x73\x74\162\141\x74\x69\157\x6e\x5f\164\x61\142\154\x65\137\164\145\x78\x74\x62\157\x78\x22\x20\xd\12\40\40\x20\x20\40\40\x20\40\40\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\163\x74\171\154\145\x3d\42\142\x6f\x72\x64\x65\162\72\x31\x70\170\x20\163\x6f\x6c\151\144\x20\43\144\x64\144\x22\x20\xd\12\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\156\141\155\145\75\x22\x6d\157\137\143\x75\x73\164\157\x6d\x65\162\137\166\141\x6c\x69\144\x61\x74\151\x6f\156\137\x63\x75\x73\x74\x6f\155\137\x73\x6d\x73\x5f\x67\x61\x74\145\x77\x61\171\x22\x20\15\12\x20\40\x20\40\40\40\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\40\x70\154\x61\143\145\x68\157\x6c\144\x65\x72\x3d\x22" . mo_("\105\x6e\x74\x65\x72\x20\107\x61\164\x65\167\x61\x79\x20\x55\122\114") . "\x22\40\x76\141\154\x75\x65\x20\x3d\40\42" . $x5 . "\42\40\x72\145\161\x75\151\x72\x65\144\x20\57\76\15\xa\x20\40\40\40\40\40\40\x20\40\40\40\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\40\x3c\x62\x72\76\xd\xa\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\40\x3c\x2f\144\151\x76\76\15\12\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\74\142\162\76\xd\12\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\x20\x20\x20\x20\40\74\x64\x69\x76\76\15\12\x20\40\x20\40\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\x3c\142\76" . mo_("\x47\x61\164\x65\x77\141\171\x20\160\x61\162\x61\155\145\x74\145\162\163") . "\74\x2f\x62\x3e\xd\12\40\40\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\40\40\x3c\144\151\166\40\x63\x6c\x61\x73\163\x3d\x22\155\x6f\55\147\x61\164\x65\167\141\171\x2d\x62\157\x64\x79\42\x3e";
        $hz .= "\74\144\151\x76\40\x63\154\x61\163\x73\75\42\x6d\x6f\55\x67\141\x74\145\167\141\171\x2d\x74\145\x78\x74\55\x70\141\x69\162\x22\x3e\xd\xa\40\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\74\151\x6e\160\165\x74\40\164\171\x70\x65\x3d\42\164\x65\170\x74\x22\x20\xd\xa\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\x20\40\40\x63\x6c\x61\x73\x73\75\42\155\157\x2d\147\141\164\x65\x77\x61\x79\x2d\160\x61\x72\x61\155\42\x20\xd\xa\40\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\40\x6e\x61\x6d\145\x3d\42\x6d\157\x5f\x70\157\163\x74\137\160\x61\x72\x61\155\x5b\x5d\x22\x20\xd\12\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\40\40\40\x20\40\x20\x20\40\x20\40\40\x20\x70\154\x61\143\x65\150\157\154\x64\x65\x72\x3d\x22\x50\150\157\156\x65\x20\120\141\162\141\x6d\145\164\x65\x72\42\40\x72\x65\x71\x75\151\162\145\144\x20\15\xa\x20\40\40\40\x20\x20\40\40\40\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x76\141\x6c\165\x65\x3d\42" . $t4[0]["\141\164\164\162\x4b\x65\x79"] . "\x22\x2f\x3e\x20\xd\12\x20\40\x20\x20\40\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\74\x69\156\160\165\164\40\x74\171\160\145\75\42\164\145\x78\164\x22\40\xd\12\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\x63\154\141\163\x73\75\42\155\157\55\147\141\164\x65\167\x61\171\55\x70\141\162\x61\x6d\42\x20\xd\xa\x20\x20\x20\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\x20\x20\x20\x20\x20\x6e\141\155\x65\75\x22\155\157\x5f\x70\x6f\163\164\x5f\x76\141\154\x75\x65\x5b\x5d\x22\40\xd\12\x20\40\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\40\40\x20\40\x20\40\x76\x61\154\x75\x65\x3d\x22\x23\43\160\x68\157\x6e\145\x23\x23\x22\x20\162\145\x61\144\157\x6e\154\171\57\76\xd\12\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\40\x3c\57\144\x69\x76\76";
        $hz .= "\74\x64\x69\166\40\143\x6c\x61\x73\163\x3d\42\x6d\157\55\147\x61\x74\x65\x77\x61\x79\55\164\145\170\164\x2d\x70\x61\x69\162\x22\x3e\xd\xa\40\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\x20\40\x3c\x69\156\x70\165\x74\40\164\171\160\145\75\x22\x74\145\170\164\42\x20\15\xa\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\x20\x20\40\40\40\40\40\143\154\x61\163\163\75\42\x6d\x6f\x2d\x67\x61\x74\145\x77\141\x79\x2d\x70\141\x72\141\155\x22\40\15\xa\x20\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\x20\x6e\x61\155\145\75\x22\155\157\137\160\x6f\x73\x74\137\160\x61\162\x61\x6d\133\135\42\x20\xd\xa\40\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\160\x6c\x61\x63\x65\150\157\x6c\144\145\x72\x3d\42\115\x65\163\163\141\x67\145\40\x50\141\x72\141\x6d\145\x74\x65\162\42\x20\162\145\161\165\151\162\145\x64\40\xd\xa\40\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\40\40\166\141\154\x75\x65\x3d\x22" . $t4[1]["\141\164\x74\162\113\145\171"] . "\42\x2f\76\40\xd\xa\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\40\40\40\x20\40\40\40\x20\40\x20\40\x20\x20\74\151\x6e\160\x75\164\x20\164\171\x70\145\x3d\42\164\145\x78\x74\42\40\xd\xa\40\40\40\x20\x20\40\40\40\x20\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\40\40\40\x20\40\40\143\154\141\x73\163\75\x22\155\x6f\x2d\147\141\x74\145\167\141\x79\55\160\141\x72\x61\x6d\x22\40\xd\12\40\x20\40\x20\x20\x20\x20\40\40\40\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\156\x61\155\x65\x3d\42\x6d\x6f\137\160\x6f\x73\164\x5f\166\x61\x6c\x75\145\133\x5d\x22\x20\15\xa\40\40\40\40\40\40\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\x76\141\x6c\x75\145\x3d\42\43\43\x6d\145\x73\163\141\147\x65\x23\x23\42\x20\x72\145\141\x64\x6f\156\154\x79\x2f\x3e\xd\xa\40\x20\40\40\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x3c\151\156\160\x75\x74\x20\x63\154\141\163\163\x3d\42\x62\165\x74\164\x6f\156\40\x62\x75\164\x74\x6f\x6e\55\x70\162\x69\155\141\162\171\x20\x6d\157\55\x61\x64\144\55\142\x75\x74\x74\x6f\x6e\x22\xd\12\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x74\x79\160\x65\x3d\x22\x62\x75\x74\x74\x6f\156\42\x20\15\12\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\40\40\x20\40\x20\40\40\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x69\144\75\x22\155\157\x41\144\144\x47\141\x74\x65\167\x61\x79\120\x61\x72\x61\155\42\40\15\xa\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\156\x61\155\x65\75\x22\155\x6f\101\x64\144\107\x61\164\145\167\141\171\x50\141\x72\141\x6d\x22\x20\xd\xa\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\40\x20\x20\166\x61\154\165\x65\x3d\42\x2b\x22\57\x3e\xd\xa\40\x20\40\40\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\x3c\x2f\144\x69\x76\x3e";
        $M0 = 2;
        wjp:
        if (!($M0 < $dE)) {
            goto PLH;
        }
        $hz .= "\x3c\x64\151\x76\40\x63\x6c\141\163\x73\x3d\42\x6d\x6f\x2d\147\x61\164\x65\x77\x61\171\x2d\164\145\170\x74\x2d\160\141\x69\x72\42\x3e\15\12\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\x20\x20\x3c\151\x6e\160\x75\x74\x20\x63\x6c\x61\x73\163\x3d\42\x6d\x6f\55\147\x61\164\x65\x77\x61\171\55\x70\141\162\141\155\42\40\15\12\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\x20\40\40\40\40\x74\171\160\145\x3d\x22\164\x65\170\x74\42\40\xd\xa\40\40\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\156\141\155\145\75\x22\155\157\137\x70\157\163\x74\137\x70\141\162\141\x6d\x5b\x5d\42\x20\xd\12\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\x70\154\141\143\145\150\157\154\144\x65\x72\x3d\42\120\x61\162\x61\x6d\x65\164\145\162\x20\116\141\x6d\x65\42\x20\166\x61\154\165\x65\x3d\x22" . $t4[$M0]["\x61\164\x74\x72\113\145\x79"] . "\x22\57\x3e\xd\12\40\40\40\40\40\40\40\40\40\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\74\x69\156\x70\165\164\x20\143\154\x61\x73\163\x3d\x22\155\157\55\147\x61\x74\145\167\141\171\55\160\141\162\x61\x6d\42\40\15\12\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\x20\40\40\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\40\164\171\x70\x65\x3d\x22\164\x65\170\x74\42\x20\15\12\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\x6e\x61\x6d\x65\x3d\42\x6d\157\x5f\x70\157\163\x74\x5f\x76\141\154\165\x65\x5b\x5d\42\40\15\xa\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x70\x6c\x61\x63\x65\150\157\x6c\x64\x65\x72\x3d\42\x76\141\154\x75\145\x22\x20\15\12\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\40\40\40\40\x20\40\40\40\x20\40\166\x61\x6c\x75\145\75\x22" . $t4[$M0]["\141\x74\164\162\x56\x61\154"] . "\42\57\x3e\15\xa\40\x20\40\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\x3c\151\x6e\160\x75\x74\x20\x63\154\141\x73\163\75\42\142\165\164\x74\x6f\156\x20\142\x75\164\164\157\x6e\55\160\x72\x69\x6d\x61\162\x79\40\155\157\55\162\x65\x6d\x6f\x76\145\x2d\x62\165\164\164\157\x6e\x22\xd\12\40\40\40\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\40\x20\164\171\160\145\x3d\42\142\165\164\164\157\156\x22\x20\15\12\x20\x20\40\40\40\x20\x20\40\40\x20\x20\x20\40\40\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\x20\40\x69\x64\x3d\42\155\x6f\x52\x65\155\157\x76\x65\x47\x61\x74\145\167\141\x79\x50\x61\x72\141\x6d\133\135\42\x20\15\xa\40\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\x6e\x61\155\145\x3d\42\155\x6f\x52\x65\155\x6f\x76\x65\x47\x61\164\x65\x77\141\171\x50\141\x72\x61\155\42\x20\15\12\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\x76\x61\x6c\165\145\75\42\55\x22\57\x3e\xd\12\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\40\x3c\57\x64\151\166\76";
        fcD:
        $M0++;
        goto wjp;
        PLH:
        $hz .= "\x3c\x2f\x64\x69\x76\76\x3c\x62\162\76\x3c\x2f\144\151\166\x3e";
        return $hz;
    }
    public function save_gateway_details($bD)
    {
        $t4 = array();
        $t4 = $this->parsePostParams($bD["\155\157\137\160\x6f\163\164\x5f\x70\141\x72\141\155"], $bD["\x6d\x6f\x5f\x70\157\x73\164\x5f\166\141\x6c\x75\x65"]);
        update_mo_option("\x63\x75\163\164\x6f\155\137\163\x6d\163\137\x67\x61\164\145\x77\x61\171", $bD["\x6d\x6f\x5f\x63\165\163\164\157\x6d\145\162\x5f\166\x61\x6c\151\144\x61\164\151\157\156\137\143\165\163\x74\157\x6d\x5f\163\155\x73\137\147\x61\164\x65\x77\x61\171"]);
        update_mo_option("\143\x75\163\164\x6f\x6d\x5f\147\x61\164\x65\167\141\x79\x5f\x70\157\163\164\137\142\157\x64\171", maybe_serialize($t4));
    }
    private function parsePostParams($aF, $bh)
    {
        $AV = array();
        foreach ($aF as $a6 => $fI) {
            array_push($AV, array("\x61\164\164\x72\x4b\145\x79" => $fI, "\x61\164\x74\162\x56\141\x6c" => $bh[$a6]));
            d0S:
        }
        KnF:
        return $AV;
    }
}
Bpq: