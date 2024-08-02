<?php


namespace OTP\Addons\UmSMSNotification\Helper;

if (defined("\x41\x42\123\x50\x41\x54\110")) {
    goto LS;
}
exit;
LS:
use OTP\Helper\MoUtility;
use OTP\Objects\BaseMessages;
use OTP\Traits\Instance;
if (class_exists("\125\154\164\151\x6d\x61\x74\x65\115\x65\155\142\145\x72\123\x4d\123\x4e\157\x74\151\x66\x69\143\x61\164\x69\157\156\x4d\x65\x73\163\x61\x67\x65\163")) {
    goto DI;
}
final class UltimateMemberSMSNotificationMessages extends BaseMessages
{
    use Instance;
    private function __construct()
    {
        define("\x4d\117\x5f\x55\115\x5f\x41\x44\104\x4f\116\137\115\105\123\x53\101\107\105\123", maybe_serialize(array(self::NEW_UM_CUSTOMER_NOTIF_HEADER => mo_("\x4e\105\127\x20\101\103\x43\117\x55\116\x54\x20\x4e\x4f\124\x49\106\111\103\101\x54\x49\x4f\x4e"), self::NEW_UM_CUSTOMER_NOTIF_BODY => mo_("\x43\x75\x73\x74\157\x6d\x65\162\163\40\x61\162\x65\40\163\x65\156\164\x20\141\40\156\145\x77\x20\x61\x63\143\x6f\x75\156\164\40\x53\x4d\x53\x20\156\157\x74\x69\x66\151\x63\x61\x74\x69\157\156" . "\x20\x77\150\x65\x6e\40\164\150\x65\171\40\163\151\147\156\x20\x75\160\x20\x6f\x6e\40\x74\150\x65\40\163\x69\x74\x65\56"), self::NEW_UM_CUSTOMER_SMS => mo_("\124\x68\141\x6e\x6b\163\x20\x66\x6f\162\40\143\x72\145\x61\x74\151\x6e\147\x20\141\x6e\40\x61\143\143\x6f\165\x6e\164\x20\157\156\x20\173\x73\x69\x74\x65\55\x6e\141\155\145\175\x2e\x20\131\157\x75\x72\x20" . "\x75\x73\145\x72\156\x61\x6d\145\x20\x69\x73\40\173\165\163\x65\x72\156\141\155\x65\175\56\40\114\x6f\x67\151\156\40\110\145\x72\x65\72\40\x7b\x61\x63\x63\157\x75\156\x74\160\141\147\x65\x2d\x75\162\154\x7d\x20\55\x6d\x69\156\151\x6f\162\141\x6e\x67\x65"), self::NEW_UM_CUSTOMER_ADMIN_NOTIF_BODY => mo_("\101\x64\x6d\151\156\x73\x20\x61\162\145\x20\163\x65\x6e\x74\x20\x61\40\156\x65\x77\x20\x61\143\143\x6f\165\156\x74\x20\123\x4d\123\x20\156\x6f\x74\x69\146\151\143\141\x74\x69\x6f\x6e\40\167\150\x65\156" . "\x20\141\40\x75\x73\x65\162\40\163\x69\147\x6e\x73\x20\165\160\40\x6f\156\40\164\x68\x65\x20\x73\x69\164\x65\56"), self::NEW_UM_CUSTOMER_ADMIN_SMS => mo_("\116\x65\x77\40\125\x73\145\x72\40\x43\x72\145\x61\x74\x65\144\x20\157\x6e\40\x7b\x73\151\x74\x65\x2d\x6e\x61\x6d\x65\x7d\x2e\40\125\x73\x65\162\x6e\141\155\x65\72\x20" . "\x7b\x75\x73\x65\x72\156\141\x6d\x65\x7d\56\x20\x50\162\x6f\146\x69\x6c\145\40\x50\x61\147\145\x3a\40\x7b\141\143\x63\x6f\165\156\164\160\141\x67\145\x2d\x75\x72\x6c\175\40\x2d\x6d\151\156\x69\157\162\x61\x6e\147\145"))));
    }
    public static function showMessage($kh, $GX = array())
    {
        $B_ = '';
        $kh = explode("\40", $kh);
        $g_ = maybe_unserialize(MO_UM_ADDON_MESSAGES);
        $f5 = maybe_unserialize(MO_MESSAGES);
        $g_ = array_merge($g_, $f5);
        foreach ($kh as $Nj) {
            if (!MoUtility::is_blank($Nj)) {
                goto gQ;
            }
            return $B_;
            gQ:
            $HD = $g_[$Nj];
            foreach ($GX as $a6 => $bh) {
                $HD = str_replace("\173\x7b" . $a6 . "\x7d\175", $bh, $HD);
                y4:
            }
            Lh:
            $B_ .= $HD;
            Fq:
        }
        e7:
        return $B_;
    }
}
DI:
