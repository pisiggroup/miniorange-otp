<?php


namespace OTP\Objects;

if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto Pkp;
}
exit;
Pkp:
if (class_exists("\x49\107\141\x74\x65\x77\141\x79\124\171\160\145")) {
    goto dGc;
}
interface IGatewayType
{
    public function handle_gateway_response($zk, $WZ, $M9);
    public function send_otp_request($WZ, $M9);
    public function get_gateway_config_view($U5, $x5);
    public function save_gateway_details($bD);
}
dGc:
