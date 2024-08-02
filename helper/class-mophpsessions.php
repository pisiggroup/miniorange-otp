<?php


namespace OTP\Helper;

use OTP\Objects\IMoSessions;
if (defined("\101\102\x53\x50\101\x54\x48")) {
    goto m26;
}
exit;
m26:
if (class_exists("\x4d\x6f\120\110\120\123\145\x73\163\x69\157\156\x73")) {
    goto vxy;
}
class MoPHPSessions implements IMoSessions
{
    public static function add_session_var($a6, $qD)
    {
        switch (MOV_SESSION_TYPE) {
            case "\103\117\117\113\x49\x45":
                setcookie($a6, maybe_serialize($qD));
                goto Aqa;
            case "\x53\105\123\x53\111\117\116":
                self::check_session();
                $_SESSION[$a6] = maybe_serialize($qD);
                goto Aqa;
            case "\103\x41\x43\110\x45":
                if (wp_cache_add($a6, maybe_serialize($qD))) {
                    goto Wtr;
                }
                wp_cache_replace($a6, maybe_serialize($qD));
                Wtr:
                goto Aqa;
            case "\124\x52\101\x4e\123\x49\x45\x4e\x54":
                if (!isset($_COOKIE["\x74\x72\x61\156\163\151\x65\156\x74\137\153\145\x79"])) {
                    goto ceQ;
                }
                $gU = sanitize_text_field(wp_unslash($_COOKIE["\x74\162\x61\156\x73\151\145\156\x74\137\x6b\145\x79"]));
                goto J_d;
                ceQ:
                if (!wp_cache_get("\x74\x72\141\x6e\x73\151\x65\156\164\x5f\x6b\145\x79")) {
                    goto lT5;
                }
                $gU = wp_cache_get("\x74\162\141\x6e\x73\151\145\156\x74\137\153\x65\171");
                goto TQH;
                lT5:
                $gU = MoUtility::rand();
                if (!ob_get_contents()) {
                    goto N2Y;
                }
                ob_clean();
                N2Y:
                setcookie("\164\162\x61\x6e\x73\151\145\x6e\164\x5f\153\145\x79", $gU, time() + 12 * HOUR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
                wp_cache_add("\164\162\x61\156\163\151\145\x6e\x74\x5f\153\145\x79", $gU);
                TQH:
                J_d:
                set_site_transient($gU . $a6, $qD, 12 * HOUR_IN_SECONDS);
                goto Aqa;
        }
        BQy:
        Aqa:
    }
    public static function get_session_var($a6)
    {
        switch (MOV_SESSION_TYPE) {
            case "\103\x4f\x4f\113\x49\x45":
                return maybe_unserialize(isset($_COOKIE[$a6]) ? sanitize_text_field(wp_unslash($_COOKIE[$a6])) : null);
            case "\x53\x45\x53\123\111\117\116":
                self::check_session();
                return maybe_unserialize(MoUtility::sanitize_check($a6, $_SESSION));
            case "\103\x41\x43\x48\105":
                return maybe_unserialize(wp_cache_get($a6));
            case "\x54\122\101\116\123\x49\x45\116\x54":
                $gU = isset($_COOKIE["\164\162\x61\156\x73\x69\x65\156\164\137\153\x65\171"]) ? sanitize_text_field(wp_unslash($_COOKIE["\164\162\141\x6e\x73\x69\145\x6e\x74\137\x6b\x65\171"])) : wp_cache_get("\x74\x72\x61\x6e\163\151\145\x6e\x74\137\153\145\171");
                return get_site_transient($gU . $a6);
        }
        sA5:
        d4D:
    }
    public static function unset_session($a6)
    {
        switch (MOV_SESSION_TYPE) {
            case "\x43\x4f\117\113\111\x45":
                unset($_COOKIE[$a6]);
                setcookie($a6, '', time() - 15 * 60);
                goto oSS;
            case "\123\105\x53\x53\111\x4f\116":
                self::check_session();
                unset($_SESSION[$a6]);
                goto oSS;
            case "\x43\x41\103\110\105":
                wp_cache_delete($a6);
                goto oSS;
            case "\x54\122\101\x4e\123\x49\105\116\124":
                $gU = isset($_COOKIE["\x74\x72\141\x6e\x73\x69\x65\156\164\137\153\x65\x79"]) ? sanitize_text_field(wp_unslash($_COOKIE["\164\162\x61\156\163\x69\145\156\164\137\x6b\145\x79"])) : wp_cache_get("\x74\x72\x61\x6e\x73\x69\x65\x6e\164\x5f\153\145\171");
                if (MoUtility::is_blank($gU)) {
                    goto DOu;
                }
                delete_site_transient($gU . $a6);
                DOu:
                goto oSS;
        }
        O8e:
        oSS:
    }
    public static function check_session()
    {
        if (!("\123\105\123\x53\111\x4f\x4e" === MOV_SESSION_TYPE)) {
            goto QYo;
        }
        if (!(session_id() === '' || !isset($_SESSION))) {
            goto raY;
        }
        session_start();
        raY:
        QYo:
    }
}
vxy:
