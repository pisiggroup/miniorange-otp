<?php


namespace OTP\Helper;

if (defined("\x41\102\123\120\101\x54\x48")) {
    goto F97;
}
exit;
F97:
use OTP\Objects\IGatewayType;
use OTP\Traits\Instance;
if (class_exists("\107\x61\164\145\167\141\171\x54\171\x70\x65")) {
    goto Glg;
}
class GatewayType implements IGatewayType
{
    use Instance;
    private $gateway_type;
    public function __construct()
    {
        $Nt = get_mo_option("\143\x75\x73\x74\157\155\x65\137\x67\141\164\x65\167\x61\x79\137\164\x79\160\x65");
        $Nt = "\117\124\x50\x5c\110\145\154\160\x65\x72\134\x47\141\164\145\167\141\x79\x5c" . ($Nt ? $Nt : "\x4d\157\x47\x61\x74\x65\167\141\171\125\122\x4c");
        $this->gateway_type = $Nt::instance();
    }
    public function handle_gateway_response($zk, $WZ, $M9)
    {
        return $this->gateway_type->handle_gateway_response($zk, $WZ, $M9);
    }
    public function send_otp_request($WZ, $M9)
    {
        return $this->gateway_type->send_otp_request($WZ, $M9);
    }
    public function get_gateway_config_view($U5, $x5)
    {
        return $this->gateway_type->get_gateway_config_view($U5, $x5);
    }
    public function save_gateway_details($bD)
    {
        $this->gateway_type->save_gateway_details($bD);
    }
}
Glg:
