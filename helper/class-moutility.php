<?php


namespace OTP\Helper;

use OTP\Objects\NotificationSettings;
use OTP\Objects\TabDetails;
use OTP\Objects\Tabs;
use ReflectionClass;
use ReflectionException;
use stdClass;
if (defined("\x41\102\123\x50\x41\124\110")) {
    goto cNm;
}
exit;
cNm:
if (class_exists("\115\157\125\164\151\x6c\x69\x74\x79")) {
    goto uVr;
}
class MoUtility
{
    public static function check_for_script_tags($zh)
    {
        return preg_match("\74\x73\x63\x72\x69\x70\x74\x3e", $zh, $Dy);
    }
    public static function mo_sanitize_array($GX)
    {
        $xx = array();
        foreach ($GX as $a6 => $bh) {
            if (is_array($bh)) {
                goto p1s;
            }
            $xx[$a6] = sanitize_text_field($bh);
            goto z6B;
            p1s:
            $xx[$a6] = self::mo_sanitize_array($bh);
            z6B:
            afi:
        }
        BNS:
        return $xx;
    }
    public static function mo_allow_html_array()
    {
        $r9 = array("\x61" => array("\163\164\x79\x6c\145" => array(), "\x6f\156\x63\154\151\143\x6b" => array(), "\x63\154\141\x73\x73" => array(), "\150\x72\x65\146" => array(), "\x72\145\x6c" => array(), "\164\151\164\x6c\145" => array(), "\x68\151\x64\x64\145\x6e" => array()), "\x62" => array("\x73\164\171\154\x65" => array(), "\x63\x6c\141\163\163" => array(), "\151\144" => array()), "\x62\154\157\143\153\x71\165\157\x74\x65" => array("\143\x69\x74\145" => array()), "\143\157\x64\x65" => array(), "\x64\x65\154" => array("\x64\x61\x74\x65\164\151\x6d\145" => array(), "\164\151\x74\154\x65" => array()), "\144\151\x76" => array("\x6e\x61\x6d\x65" => array(), "\151\x64" => array(), "\143\x6c\x61\163\x73" => array(), "\x74\151\164\154\145" => array(), "\x73\164\171\154\145" => array(), "\150\151\x64\144\145\156" => array()), "\x73\143\x72\151\x70\164" => array(), "\163\x74\171\x6c\x65" => array(), "\x64\x6c" => array(), "\144\x74" => array(), "\145\155" => array(), "\x68\61" => array(), "\x68\62" => array(), "\150\63" => array(), "\150\64" => array(), "\x68\65" => array(), "\150\x36" => array(), "\x68\162" => array(), "\x69" => array(), "\x74\145\x78\164\141\162\145\141" => array("\151\144" => array(), "\143\x6c\141\163\x73" => array(), "\156\141\x6d\145" => array(), "\x72\157\167" => array(), "\163\x74\171\x6c\x65" => array(), "\160\154\141\x63\x65\150\x6f\x6c\144\145\x72" => array(), "\x72\x65\x61\144\157\x6e\154\x79" => array()), "\x69\155\x67" => array("\141\x6c\x74" => array(), "\x63\154\141\163\x73" => array(), "\150\x65\151\x67\150\x74" => array(), "\163\x74\x79\154\145" => array(), "\163\162\x63" => array(), "\167\151\x64\164\150" => array(), "\150\x72\x65\146" => array(), "\150\x69\144\144\x65\x6e" => array()), "\154\151\156\153" => array("\162\145\x6c" => array(), "\x74\x79\160\145" => array(), "\x68\162\x65\x66" => array(), "\x68\151\144\144\145\x6e" => array()), "\154\151" => array("\143\x6c\x61\163\x73" => array(), "\150\x69\144\144\145\156" => array()), "\x6f\154" => array("\143\x6c\141\x73\x73" => array()), "\160" => array("\143\x6c\x61\163\163" => array(), "\150\151\144\x64\145\x6e" => array()), "\x71" => array("\x63\x69\164\145" => array(), "\164\x69\x74\x6c\145" => array()), "\163\x70\x61\156" => array("\x63\x6c\x61\x73\x73" => array(), "\x74\151\164\x6c\x65" => array(), "\163\x74\x79\154\x65" => array(), "\x68\151\x64\144\145\156" => array()), "\x73\x74\162\151\x6b\145" => array(), "\163\x74\162\x6f\x6e\147" => array(), "\165" => array(), "\x75\x6c" => array("\x63\154\x61\163\163" => array(), "\x73\164\x79\x6c\145" => array()), "\x66\157\x72\x6d" => array("\x6e\x61\x6d\x65" => array(), "\x6d\x65\x74\150\157\x64" => array(), "\151\x64" => array(), "\163\164\171\154\x65" => array(), "\x68\151\144\144\x65\x6e" => array()), "\x74\x61\142\154\145" => array("\x63\x6c\141\163\163" => array(), "\x73\164\x79\x6c\x65" => array()), "\x74\142\157\x64\171" => array(), "\142\x75\164\164\x6f\x6e" => array(), "\x74\x72" => array(), "\164\x64" => array("\x63\154\x61\x73\x73" => array(), "\x73\x74\171\154\x65" => array()), "\151\x6e\160\165\x74" => array("\164\171\160\x65" => array(), "\151\144" => array(), "\156\x61\155\x65" => array(), "\x76\141\154\x75\x65" => array(), "\143\x6c\141\x73\163" => array(), "\163\151\x7a\145\x20" => array(), "\x74\x61\142\151\x6e\x64\145\x78" => array(), "\x68\x69\x64\x64\145\x6e" => array(), "\x73\164\x79\x6c\x65" => array(), "\x70\154\x61\x63\145\x68\x6f\154\144\145\162" => array(), "\x64\151\x73\x61\x62\154\x65\144" => array()), "\142\x72" => array(), "\x74\x69\x74\154\145" => array("\x74\x69\164\x6c\x65" => true));
        return $r9;
    }
    public static function mo_allow_svg_array()
    {
        $r9 = array("\163\166\x67" => array("\143\x6c\x61\x73\163" => true, "\167\x69\x64\x74\150" => true, "\x68\x65\151\147\150\164" => true, "\166\151\145\x77\142\157\x78" => true, "\x66\x69\154\x6c" => true), "\x63\x69\162\x63\154\x65" => array("\151\x64" => true, "\143\x78" => true, "\143\x79" => true, "\x63\172" => true, "\x72" => true, "\x73\164\x72\157\x6b\145" => true, "\x73\164\x72\x6f\x6b\145\55\167\151\x64\164\x68" => true), "\x67" => array("\146\151\154\154" => true, "\151\x64" => true), "\160\141\164\150" => array("\x64" => true, "\x66\x69\x6c\154" => true, "\151\144" => true, "\163\164\162\157\x6b\145" => true, "\163\164\x72\157\153\145\x2d\167\151\x64\164\x68" => true, "\x73\164\x72\157\153\x65\x2d\x6c\x69\x6e\145\x63\141\160" => true));
        return $r9;
    }
    public static function get_hidden_phone($M9)
    {
        return "\x78\170\170\x78\170\x78\170" . substr($M9, strlen($M9) - 3);
    }
    public static function is_blank($bh)
    {
        return !isset($bh) || empty($bh);
    }
    public static function create_json($WZ, $R7)
    {
        return array("\155\x65\x73\x73\x61\x67\x65" => $WZ, "\x72\145\x73\165\154\x74" => $R7);
    }
    public static function check_for_selected_country_addon($M9)
    {
        $q6 = CountryList::get_countrycode_list();
        $q6 = apply_filters("\x73\145\x6c\x65\143\164\145\x64\x5f\143\157\x75\x6e\x74\162\151\145\x73", $q6);
        foreach ($q6 as $a6 => $bh) {
            if (!("\x41\x6c\x6c\x20\103\157\x75\156\164\x72\x69\x65\x73" !== $bh["\x6e\141\x6d\x65"])) {
                goto NMp;
            }
            if (!(strpos($M9, $bh["\143\157\x75\x6e\164\x72\x79\x43\157\144\145"]) !== false)) {
                goto rjz;
            }
            return false;
            rjz:
            NMp:
            V_h:
        }
        PFF:
        return true;
    }
    public static function mo_is_curl_installed()
    {
        return in_array("\x63\165\162\x6c", get_loaded_extensions(), true);
    }
    public static function current_page_url()
    {
        $aw = "\150\164\x74\160";
        if (!(isset($_SERVER["\110\x54\x54\x50\123"]) && sanitize_text_field(wp_unslash($_SERVER["\x48\x54\x54\x50\x53"])) === "\x6f\x6e")) {
            goto Qa9;
        }
        $aw .= "\163";
        Qa9:
        $aw .= "\x3a\x2f\57";
        $Ix = isset($_SERVER["\123\105\x52\x56\105\x52\137\120\117\122\124"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\x45\122\126\x45\122\x5f\x50\x4f\122\x54"])) : '';
        $K3 = isset($_SERVER["\122\x45\121\125\105\x53\x54\x5f\x55\122\111"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\125\x45\123\x54\137\x55\122\x49"])) : '';
        $zy = isset($_SERVER["\123\105\122\x56\x45\122\137\116\x41\115\x45"]) ? sanitize_text_field(wp_unslash($_SERVER["\x53\105\122\126\x45\122\137\116\101\115\x45"])) : '';
        if ("\x38\60" !== $Ix) {
            goto n_N;
        }
        $aw .= $zy . $K3;
        goto IMh;
        n_N:
        $aw .= $zy . "\72" . $Ix . $K3;
        IMh:
        if (!function_exists("\141\x70\x70\x6c\x79\137\x66\x69\154\164\x65\x72\163")) {
            goto y1v;
        }
        apply_filters("\x6d\x6f\137\x63\x75\162\154\x5f\160\x61\147\x65\x5f\165\162\154", $aw);
        y1v:
        return $aw;
    }
    public static function get_domain($ZG)
    {
        $Lt = substr(strrchr($ZG, "\100"), 1);
        return $Lt;
    }
    public static function validate_phone_number($M9)
    {
        return preg_match(MoConstants::PATTERN_PHONE, self::process_phone_number($M9), $aW);
    }
    public static function is_country_code_appended($M9)
    {
        return preg_match(MoConstants::PATTERN_COUNTRY_CODE, $M9, $aW) ? true : false;
    }
    public static function process_phone_number($M9)
    {
        if ($M9) {
            goto J2E;
        }
        return;
        J2E:
        $M9 = preg_replace(MoConstants::PATTERN_SPACES_HYPEN, '', ltrim(trim($M9), "\60"));
        $wW = CountryList::get_default_countrycode();
        $M9 = !isset($wW) || self::is_country_code_appended($M9) ? $M9 : $wW . $M9;
        return apply_filters("\155\157\x5f\x70\162\x6f\x63\x65\x73\163\137\160\150\x6f\x6e\145", $M9);
    }
    public static function micr()
    {
        $ZG = get_mo_option("\x61\144\x6d\151\156\x5f\145\x6d\141\151\x6c");
        $ik = get_mo_option("\141\144\155\x69\x6e\137\x63\x75\x73\164\x6f\155\x65\x72\137\x6b\x65\171");
        if (!$ZG || !$ik || !is_numeric(trim($ik))) {
            goto nSL;
        }
        return 1;
        goto sws;
        nSL:
        return 0;
        sws:
    }
    public static function rand()
    {
        $jD = wp_rand(0, 15);
        $dx = "\x30\x31\x32\x33\x34\65\66\x37\70\71\x61\142\x63\144\145\x66\x67\x68\x69\152\153\154\155\156\x6f\160\x71\x72\x73\x74\165\166\167\170\171\172\101\x42\x43\x44\x45\x46\x47\x48\111\x4a\x4b\114\115\x4e\x4f\120\x51\122\x53\124\x55\126\x57\130\131\132";
        $DM = '';
        $MD = 0;
        DKh:
        if (!($MD < $jD)) {
            goto zJC;
        }
        $DM .= $dx[wp_rand(0, strlen($dx) - 1)];
        sMN:
        $MD++;
        goto DKh;
        zJC:
        return $DM;
    }
    public static function micv()
    {
        $ZG = get_mo_option("\141\x64\155\x69\156\137\x65\155\141\151\154");
        $ik = get_mo_option("\x61\x64\155\151\x6e\137\143\165\163\164\157\x6d\x65\162\x5f\x6b\x65\x79");
        $kk = get_mo_option("\x63\150\x65\143\153\x5f\x6c\x6e");
        if (!$ZG || !$ik || !is_numeric(trim($ik))) {
            goto YqN;
        }
        return $kk ? $kk : 0;
        goto nl1;
        YqN:
        return 0;
        nl1:
    }
    public static function handle_mo_check_ln($Qz, $ik, $o1)
    {
        $A9 = MoMessages::FREE_PLAN_MSG;
        $ob = array();
        $k7 = GatewayFunctions::instance();
        $U0 = json_decode(MocURLCall::check_customer_ln($ik, $o1, $k7->get_application_name(), "\120\122\105\115\x49\125\x4d"), true);
        if (isset($U0["\163\x74\x61\164\165\x73"]) && strcasecmp($U0["\x73\x74\141\x74\x75\163"], "\123\125\103\103\x45\x53\x53") === 0) {
            goto knD;
        }
        $U0 = json_decode(MocURLCall::check_customer_ln($ik, $o1, "\167\x70\x5f\x65\x6d\141\151\x6c\x5f\x76\x65\162\x69\x66\x69\x63\x61\x74\151\157\156\x5f\x69\x6e\164\162\x61\156\145\164", "\x50\x52\x45\x4d\111\125\x4d"), true);
        $D4 = isset($U0["\x65\155\141\x69\154\x52\145\155\x61\x69\x6e\151\156\147"]) ? $U0["\x65\x6d\141\151\154\122\145\x6d\141\151\x6e\151\x6e\x67"] : 0;
        $SS = isset($U0["\163\155\x73\122\x65\x6d\141\151\x6e\x69\156\147"]) ? $U0["\163\155\163\x52\x65\x6d\x61\x69\156\x69\156\147"] : 0;
        update_mo_option("\x65\155\141\x69\154\x5f\x74\x72\x61\x6e\x73\x61\143\164\151\x6f\x6e\x73\x5f\162\x65\x6d\141\151\x6e\x69\156\x67", $D4);
        update_mo_option("\160\x68\x6f\156\145\x5f\164\162\141\x6e\163\x61\143\x74\151\157\x6e\163\x5f\x72\145\x6d\x61\x69\x6e\x69\156\147", $SS);
        if (!self::sanitize_check("\154\x69\x63\x65\156\x73\x65\x50\154\141\x6e", $U0)) {
            goto Eb8;
        }
        $A9 = MoMessages::INSTALL_PREMIUM_PLUGIN;
        Eb8:
        goto DSS;
        knD:
        $D4 = isset($U0["\145\155\141\x69\x6c\x52\x65\x6d\141\x69\156\151\156\147"]) ? $U0["\145\x6d\x61\151\x6c\122\x65\155\x61\x69\x6e\x69\156\x67"] : 0;
        $SS = isset($U0["\163\x6d\163\x52\x65\155\141\151\x6e\151\x6e\x67"]) ? $U0["\163\x6d\163\122\145\x6d\141\151\156\x69\156\x67"] : 0;
        if (!self::sanitize_check("\x6c\x69\143\x65\156\163\x65\120\x6c\x61\x6e", $U0)) {
            goto x1t;
        }
        if (strcmp(MOV_TYPE, "\x4d\151\x6e\x69\x4f\x72\141\x6e\x67\145\x47\x61\164\x65\x77\x61\x79") === 0 || strcmp(MOV_TYPE, "\x45\x6e\x74\145\x72\160\x72\151\x73\x65\x47\x61\x74\145\x77\x61\171\x57\151\x74\x68\101\x64\x64\157\x6e\163") === 0) {
            goto vvx;
        }
        $A9 = MoMessages::UPGRADE_MSG;
        $ob = array("\160\154\x61\156" => $U0["\x6c\151\143\x65\x6e\x73\x65\x50\x6c\x61\156"]);
        goto Qlo;
        vvx:
        $A9 = MoMessages::REMAINING_TRANSACTION_MSG;
        $ob = array("\160\x6c\x61\x6e" => $U0["\154\x69\x63\145\x6e\163\x65\x50\154\x61\156"], "\163\x6d\x73" => $SS, "\145\155\141\151\154" => $D4);
        Qlo:
        update_mo_option("\x63\150\145\143\x6b\x5f\154\156", base64_encode($U0["\154\x69\x63\x65\156\x73\x65\120\x6c\x61\156"]));
        x1t:
        update_mo_option("\145\155\141\x69\154\137\x74\162\141\x6e\163\141\143\164\x69\157\156\163\x5f\162\x65\x6d\141\x69\x6e\151\156\147", $D4);
        update_mo_option("\x70\150\x6f\x6e\145\x5f\x74\162\141\x6e\163\141\143\x74\151\x6f\x6e\163\137\x72\x65\155\x61\151\156\x69\x6e\147", $SS);
        DSS:
        if (!(isset($U0["\x73\164\x61\x74\x75\163"]) && strcasecmp($U0["\163\164\x61\164\165\x73"], "\x46\x41\x49\x4c\105\x44") === 0)) {
            goto yf3;
        }
        $U0 = json_decode(MocURLCall::check_customer_ln($ik, $o1, ''), true);
        $D4 = isset($U0["\x65\x6d\x61\x69\x6c\122\x65\155\x61\x69\x6e\x69\x6e\147"]) ? $U0["\145\x6d\141\x69\154\x52\145\x6d\x61\151\156\151\156\147"] : 0;
        $SS = isset($U0["\x73\155\x73\122\145\155\x61\151\x6e\x69\x6e\147"]) ? $U0["\x73\155\x73\x52\145\x6d\x61\151\156\x69\156\147"] : 0;
        update_mo_option("\145\x6d\x61\x69\154\137\164\x72\141\x6e\163\x61\x63\x74\151\157\x6e\163\x5f\162\145\155\x61\151\x6e\x69\x6e\x67", $D4);
        update_mo_option("\x70\x68\x6f\x6e\x65\137\164\162\141\x6e\x73\141\143\x74\151\x6f\x6e\x73\x5f\162\145\155\x61\151\x6e\151\156\x67", $SS);
        yf3:
        if (!$Qz) {
            goto u4M;
        }
        do_action("\x6d\157\137\162\145\147\151\163\164\x72\141\164\151\157\x6e\x5f\x73\x68\157\x77\x5f\x6d\x65\163\x73\x61\147\145", MoMessages::showMessage($A9, $ob), "\123\125\103\x43\x45\123\123");
        u4M:
    }
    public static function initialize_transaction($form)
    {
        $vG = new ReflectionClass(FormSessionVars::class);
        foreach ($vG->getConstants() as $a6 => $bh) {
            MoPHPSessions::unset_session($bh);
            QrX:
        }
        DIW:
        SessionUtils::initialize_form($form);
    }
    public static function get_invalid_otp_method()
    {
        return get_mo_option("\x69\156\166\x61\x6c\151\x64\x5f\155\145\x73\163\x61\x67\145", "\155\x6f\x5f\x6f\x74\x70\137") ? mo_(get_mo_option("\x69\156\166\141\154\x69\144\137\x6d\x65\x73\163\141\147\145", "\155\x6f\137\157\x74\x70\x5f")) : MoMessages::showMessage(MoMessages::INVALID_OTP);
    }
    public static function is_polylang_installed()
    {
        return function_exists("\160\x6c\154\x5f\137") && function_exists("\x70\x6c\x6c\137\162\x65\147\x69\x73\164\145\x72\137\163\164\x72\x69\156\147");
    }
    public static function replace_string(array $eV, $f2)
    {
        foreach ($eV as $a6 => $bh) {
            $f2 = str_replace("\173" . $a6 . "\x7d", $bh, $f2);
            W6n:
        }
        wJ7:
        return $f2;
    }
    private static function test_result()
    {
        $Eb = new stdClass();
        $Eb->status = MO_FAIL_MODE ? "\x45\122\x52\x4f\x52" : "\123\125\x43\x43\x45\123\123";
        return $Eb;
    }
    public static function send_phone_notif($Xu, $A9)
    {
        $uL = function ($Xu, $A9) {
            return json_decode(MocURLCall::send_notif(new NotificationSettings($Xu, $A9)));
        };
        $Xu = self::process_phone_number($Xu);
        $A9 = self::replace_string(array("\160\x68\x6f\x6e\x65" => str_replace("\x2b", '', "\x25\62\102" . $Xu)), $A9);
        $U0 = MO_TEST_MODE ? self::test_result() : $uL($Xu, $A9);
        $tI = strcasecmp($U0->status, "\123\x55\103\103\x45\123\x53") === 0 ? "\x53\x4d\123\137\116\117\124\111\x46\x5f\x53\x45\x4e\124" : "\x53\x4d\123\137\116\117\x54\x49\106\x5f\106\x41\111\114\105\104";
        $Mi = isset($U0->txId) ? $U0->txId : '';
        apply_filters("\155\157\x5f\163\x74\141\x72\164\137\162\x65\x70\x6f\x72\x74\151\156\x67", $Mi, $Xu, $Xu, "\x4e\x4f\x54\111\x46\x49\x43\101\x54\111\x4f\116", $A9, $tI);
        return strcasecmp($U0->status, "\123\125\x43\103\105\123\123") === 0 ? true : false;
    }
    public static function send_email_notif($mv, $XM, $sJ, $ih, $WZ)
    {
        $uL = function ($mv, $XM, $sJ, $ih, $WZ) {
            $TI = new NotificationSettings($mv, $XM, $sJ, $ih, $WZ);
            return json_decode(MocURLCall::send_notif($TI));
        };
        $U0 = MO_TEST_MODE ? self::test_result() : $uL($mv, $XM, $sJ, $ih, $WZ);
        $tI = strcasecmp($U0->status, "\x53\x55\103\x43\105\x53\123") === 0 ? "\x45\x4d\101\111\x4c\137\x4e\x4f\x54\x49\x46\137\x53\x45\116\x54" : "\105\x4d\101\111\114\x5f\116\117\124\x49\x46\x5f\x46\x41\111\x4c\x45\x44";
        $Mi = isset($U0->txId) ? $U0->txId : '';
        apply_filters("\x6d\x6f\137\163\x74\141\x72\164\x5f\x72\145\x70\x6f\162\x74\151\156\x67", $Mi, $sJ, $sJ, "\x4e\117\124\x49\x46\x49\x43\101\x54\x49\117\x4e", '', $tI);
        return strcasecmp($U0->status, "\123\x55\103\x43\105\123\123") === 0 ? true : false;
    }
    public static function sanitize_check($a6, $i3)
    {
        if (is_array($i3)) {
            goto fnc;
        }
        return $i3;
        fnc:
        $bh = !array_key_exists($a6, $i3) || self::is_blank($i3[$a6]) ? false : $i3[$a6];
        return is_array($bh) ? $bh : sanitize_text_field($bh);
    }
    public static function mclv()
    {
        $k7 = GatewayFunctions::instance();
        return $k7->mclv();
    }
    public static function is_gateway_config()
    {
        $k7 = GatewayFunctions::instance();
        return $k7->is_gateway_config();
    }
    public static function is_mg()
    {
        $k7 = GatewayFunctions::instance();
        return $k7->is_mg();
    }
    public static function are_form_options_being_saved($TU)
    {
        if (!(!isset($_POST["\137\167\160\156\157\x6e\143\x65"]) || !wp_verify_nonce(sanitize_key(wp_unslash($_POST["\137\167\160\156\x6f\x6e\143\145"])), "\x6d\157\137\x61\x64\x6d\x69\x6e\x5f\x61\143\164\151\x6f\x6e\x73"))) {
            goto Iah;
        }
        return;
        Iah:
        return current_user_can("\155\141\156\x61\x67\145\137\x6f\x70\x74\151\x6f\x6e\x73") && self::mclv() && isset($_POST["\157\160\x74\151\157\156"]) && $TU === $_POST["\157\x70\x74\x69\x6f\x6e"];
    }
    public static function is_addon_activated()
    {
        if (!(self::micr() && self::mclv())) {
            goto zWG;
        }
        return;
        zWG:
        $W1 = TabDetails::instance();
        $K3 = isset($_SERVER["\x52\105\121\x55\105\123\x54\137\125\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\105\x51\x55\105\123\124\137\125\x52\x49"])) : '';
        $xU = add_query_arg(array("\x70\141\x67\145" => $W1->tab_details[Tabs::ACCOUNT]->menu_slug), remove_query_arg("\x61\x64\x64\157\156", $K3));
        echo "\74\x64\x69\166\40\163\164\171\x6c\x65\75\x22\144\x69\x73\160\154\141\x79\x3a\142\154\157\x63\153\x3b\x6d\141\x72\x67\x69\x6e\x2d\164\157\160\72\61\60\x70\x78\x3b\x63\157\x6c\x6f\x72\72\x72\145\x64\x3b\142\141\x63\153\x67\x72\x6f\x75\x6e\144\x2d\x63\157\x6c\x6f\162\x3a\162\x67\142\141\50\62\65\x31\54\x20\62\x33\62\x2c\x20\x30\54\x20\60\56\61\x35\x29\x3b\15\xa\x9\11\x9\x9\11\x9\x9\x9\160\x61\x64\x64\151\x6e\x67\x3a\x35\x70\170\73\x62\x6f\162\x64\145\x72\72\163\157\x6c\x69\144\40\x31\x70\170\40\162\x67\x62\141\x28\62\65\65\x2c\x20\x30\54\x20\71\54\40\x30\56\x33\66\51\x3b\x22\76\15\12\11\x9\11\x20\x9\x9\74\141\40\x68\162\x65\146\x3d\42" . esc_url($xU) . "\x22\76" . esc_html(mo_("\126\x61\x6c\151\x64\x61\164\x65\x20\x79\157\x75\162\x20\x70\x75\162\143\x68\x61\163\x65")) . "\x3c\x2f\x61\76\xd\xa\x9\11\11\x20\11\11\x9\x9" . esc_html(mo_("\40\164\x6f\40\x65\156\x61\x62\x6c\x65\x20\x74\150\145\40\x41\x64\x64\x20\117\x6e")) . "\x3c\57\x64\151\x76\x3e";
    }
    public static function get_active_plugin_version($JK, $ZP = 0)
    {
        if (!function_exists("\x67\145\164\137\160\154\x75\147\151\x6e\163")) {
            require_once ABSPATH . "\167\160\x2d\x61\144\x6d\x69\156\x2f\151\x6e\x63\154\165\x64\145\163\57\x70\x6c\x75\147\x69\x6e\x2e\x70\x68\160";
        }
        $nb = get_plugins();
        $UC = get_option("\x61\x63\x74\151\x76\145\137\160\154\165\147\151\156\163");
        foreach ($nb as $a6 => $bh) {
            if (!(strcasecmp($bh["\x4e\141\155\145"], $JK) === 0)) {
                goto CwC;
            }
            if (!in_array($a6, $UC, true)) {
                goto VQH;
            }
            return (int) $bh["\x56\x65\x72\x73\151\x6f\x6e"][$ZP];
            VQH:
            CwC:
            qWR:
        }
        tl2:
        return null;
    }
}
uVr:
