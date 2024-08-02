<?php


namespace OTP\Helper;

use OTP\Objects\NotificationSettings;
if (defined("\x41\102\123\120\x41\x54\x48")) {
    goto eCq;
}
exit;
eCq:
if (class_exists("\x4d\157\143\125\x52\114\x43\x61\154\x6c")) {
    goto g6u;
}
class MocURLCall
{
    public static function create_customer($ZG, $eT, $L8, $M9 = '', $qk = '', $cT = '')
    {
        $XF = MoConstants::HOSTNAME . "\57\x6d\x6f\x61\x73\x2f\162\145\x73\164\x2f\143\x75\x73\164\x6f\x6d\x65\162\x2f\x61\144\144";
        $ik = MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\x63\157\x6d\x70\141\x6e\171\x4e\x61\155\x65" => $eT, "\141\x72\145\141\x4f\146\111\156\164\145\162\145\x73\164" => MoConstants::AREA_OF_INTEREST, "\x66\151\162\x73\x74\156\x61\155\145" => $qk, "\154\141\163\x74\156\x61\155\145" => $cT, "\145\155\x61\x69\154" => $ZG, "\160\x68\x6f\x6e\x65" => $M9, "\x70\x61\x73\x73\x77\x6f\x72\x64" => $L8);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function get_customer_key($ZG, $L8)
    {
        $XF = MoConstants::HOSTNAME . "\57\155\157\141\163\x2f\x72\x65\x73\x74\x2f\143\x75\163\164\x6f\155\145\x72\57\153\145\171";
        $ik = MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\145\155\x61\x69\154" => $ZG, "\160\x61\x73\163\167\157\162\x64" => $L8);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function check_customer($ZG)
    {
        $XF = MoConstants::HOSTNAME . "\57\x6d\157\x61\163\x2f\162\x65\x73\164\x2f\x63\165\x73\164\x6f\x6d\145\162\x2f\x63\x68\145\x63\x6b\55\x69\x66\x2d\x65\x78\151\163\x74\163";
        $ik = MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\x65\x6d\x61\151\x6c" => $ZG);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function mo_send_otp_token($Ya, $ZG = '', $M9 = '')
    {
        $ZG = "\123\x4d\x53" === $Ya ? null : $ZG;
        $XF = MoConstants::HOSTNAME . "\x2f\155\157\141\163\57\x61\x70\151\x2f\141\165\x74\150\x2f\x63\150\x61\154\154\145\x6e\147\145";
        $ik = !MoUtility::is_blank(get_mo_option("\x61\x64\x6d\x69\x6e\x5f\143\165\163\x74\157\155\x65\x72\137\x6b\145\171")) ? get_mo_option("\x61\144\x6d\151\x6e\x5f\x63\165\x73\164\157\155\x65\162\137\x6b\x65\x79") : MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = !MoUtility::is_blank(get_mo_option("\141\x64\x6d\151\156\137\141\x70\x69\x5f\153\145\x79")) ? get_mo_option("\141\x64\x6d\151\x6e\x5f\x61\x70\151\x5f\x6b\x65\x79") : MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\x63\x75\x73\164\157\x6d\x65\162\113\x65\x79" => $ik, "\145\155\x61\151\x6c" => $ZG, "\160\150\x6f\x6e\145" => $M9, "\x61\x75\164\x68\124\171\x70\x65" => $Ya, "\164\x72\x61\x6e\163\x61\x63\164\151\x6f\156\x4e\141\x6d\x65" => MoConstants::AREA_OF_INTEREST);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function validate_otp_token($SI, $Ns)
    {
        $XF = MoConstants::HOSTNAME . "\x2f\x6d\157\x61\163\x2f\141\x70\x69\x2f\141\x75\164\150\x2f\166\x61\154\151\x64\141\x74\x65";
        $ik = !MoUtility::is_blank(get_mo_option("\141\x64\x6d\151\x6e\137\143\x75\163\x74\x6f\x6d\x65\x72\x5f\153\x65\171")) ? get_mo_option("\141\144\155\x69\156\x5f\x63\x75\x73\164\157\155\x65\162\137\x6b\x65\x79") : MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = !MoUtility::is_blank(get_mo_option("\141\x64\155\x69\156\x5f\141\x70\151\137\153\x65\171")) ? get_mo_option("\141\144\155\151\156\x5f\x61\160\151\137\x6b\x65\171") : MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\x74\x78\111\x64" => $SI, "\164\x6f\153\145\156" => $Ns);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function submit_contact_us($bv, $tL, $nz)
    {
        $current_user = wp_get_current_user();
        $eI = get_mo_option("\x61\x64\x6d\151\156\x5f\x65\x6d\x61\x69\154");
        $XF = MoConstants::HOSTNAME . "\57\x6d\x6f\x61\x73\57\162\145\163\x74\x2f\143\x75\x73\164\157\155\145\162\57\x63\x6f\x6e\x74\x61\x63\x74\x2d\x75\x73";
        $nz = "\x5b" . MoConstants::AREA_OF_INTEREST . "\x20\50" . MoConstants::PLUGIN_TYPE . "\x29\x20\135\50" . $eI . "\51\72\40" . $nz;
        $ik = !MoUtility::is_blank(get_mo_option("\141\x64\155\x69\x6e\x5f\x63\x75\x73\x74\x6f\x6d\145\x72\x5f\x6b\x65\x79")) ? get_mo_option("\x61\144\x6d\151\156\137\143\x75\x73\164\x6f\155\x65\162\137\153\145\171") : MoConstants::DEFAULT_CUSTOMER_KEY;
        $o1 = !MoUtility::is_blank(get_mo_option("\x61\x64\x6d\x69\x6e\137\141\160\x69\137\x6b\x65\171")) ? get_mo_option("\141\x64\155\151\x6e\x5f\141\x70\151\137\x6b\x65\171") : MoConstants::DEFAULT_API_KEY;
        $Z3 = array("\146\x69\x72\x73\164\x4e\141\155\145" => $current_user->user_firstname, "\x6c\141\x73\x74\x4e\x61\155\x65" => $current_user->user_lastname, "\x63\x6f\155\x70\141\x6e\171" => isset($_SERVER["\x53\105\122\126\105\122\137\116\x41\115\105"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\x45\x52\126\x45\x52\x5f\116\x41\x4d\105"])) : null, "\145\x6d\141\151\154" => $bv, "\x63\x63\x45\155\141\151\154" => MoConstants::FEEDBACK_EMAIL, "\x70\150\157\x6e\x65" => $tL, "\x71\165\145\x72\171" => $nz);
        $Wv = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $Wv, $bO);
        return true;
    }
    public static function forgot_password($ZG)
    {
        $XF = MoConstants::HOSTNAME . "\x2f\x6d\x6f\141\x73\x2f\162\x65\x73\164\x2f\x63\165\x73\x74\157\155\x65\x72\x2f\160\x61\x73\163\x77\157\x72\x64\55\162\x65\163\145\164";
        $ik = get_mo_option("\x61\x64\x6d\x69\156\137\x63\165\163\164\x6f\155\145\162\x5f\153\145\x79");
        $o1 = get_mo_option("\141\144\155\151\156\x5f\141\160\x69\x5f\153\145\171");
        $Z3 = array("\145\x6d\141\151\x6c" => $ZG);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function check_customer_ln($ik, $o1, $N5, $Sv = "\x44\x45\115\x4f")
    {
        $XF = MoConstants::HOSTNAME . "\x2f\x6d\157\x61\x73\57\162\145\163\x74\x2f\x63\165\163\x74\x6f\155\145\162\57\154\x69\143\145\x6e\x73\145";
        $Z3 = array("\143\x75\163\x74\157\155\145\x72\111\144" => $ik, "\x61\160\x70\x6c\x69\x63\141\x74\x69\x6f\156\116\141\x6d\145" => $N5, "\x6c\151\143\145\x6e\x73\145\x54\171\160\x65" => $Sv);
        $ur = wp_json_encode($Z3);
        $bO = self::create_auth_header($ik, $o1);
        $zk = self::call_api($XF, $ur, $bO);
        return $zk;
    }
    public static function create_auth_header($ik, $o1)
    {
        $EI = self::get_timestamp();
        if (!MoUtility::is_blank($EI)) {
            goto kXV;
        }
        $EI = round(microtime(true) * 1000);
        $EI = number_format($EI, 0, '', '');
        kXV:
        $k1 = $ik . $EI . $o1;
        $bO = hash("\x73\x68\141\x35\x31\x32", $k1);
        $fo = array("\x43\157\156\x74\x65\x6e\164\x2d\x54\x79\x70\x65" => "\141\x70\x70\x6c\x69\x63\141\164\151\x6f\156\57\x6a\163\x6f\156", "\x43\165\163\x74\157\155\145\x72\x2d\113\145\171" => $ik, "\x54\x69\x6d\x65\x73\164\x61\155\160" => $EI, "\x41\x75\164\150\157\162\x69\x7a\x61\x74\x69\x6f\x6e" => $bO);
        return $fo;
    }
    public static function get_timestamp()
    {
        $XF = MoConstants::HOSTNAME . "\x2f\155\157\141\x73\x2f\162\145\163\x74\57\155\x6f\142\151\x6c\145\57\x67\x65\164\x2d\x74\151\155\x65\x73\x74\x61\155\x70";
        return self::call_api($XF, null, null);
    }
    public static function call_api($XF, $nt, $C4 = array("\103\x6f\156\x74\145\156\164\x2d\x54\x79\160\145" => "\141\x70\x70\x6c\151\143\x61\x74\x69\157\x6e\57\152\x73\157\156"), $CP = "\120\x4f\x53\x54")
    {
        $rp = array("\x6d\145\x74\x68\157\144" => $CP, "\x62\157\144\x79" => $nt, "\x74\x69\155\145\x6f\x75\x74" => "\61\60\60\60\60", "\x72\145\x64\151\162\145\x63\164\151\157\x6e" => "\x31\60", "\150\164\x74\x70\166\x65\162\163\151\157\156" => "\x31\56\60", "\x62\x6c\157\x63\x6b\x69\156\x67" => true, "\x68\x65\141\x64\x65\162\x73" => $C4, "\163\163\154\166\145\162\x69\x66\x79" => MOV_SSL_VERIFY);
        $zk = wp_remote_post($XF, $rp);
        if (!is_wp_error($zk)) {
            goto jo1;
        }
        wp_die(wp_kses("\123\x6f\x6d\145\x74\150\x69\x6e\147\40\x77\145\156\x74\40\x77\162\157\156\147\72\x20\x3c\x62\x72\x2f\76\x20{$zk->get_error_message()}", array("\x62\162" => array())));
        jo1:
        return wp_remote_retrieve_body($zk);
    }
    public static function send_notif(NotificationSettings $Hz)
    {
        $k7 = GatewayFunctions::instance();
        return $k7->mo_send_notif($Hz);
    }
}
g6u:
