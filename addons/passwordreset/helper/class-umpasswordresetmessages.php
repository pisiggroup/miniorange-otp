<?php


namespace OTP\Addons\PasswordReset\Helper;

if (defined("\101\x42\x53\120\101\124\110")) {
    goto qA;
}
exit;
qA:
use OTP\Helper\MoUtility;
use OTP\Objects\BaseMessages;
use OTP\Traits\Instance;
if (class_exists("\125\x4d\120\141\x73\x73\x77\x6f\x72\144\x52\x65\163\145\x74\x4d\x65\163\x73\x61\147\x65\x73")) {
    goto fv;
}
final class UMPasswordResetMessages extends BaseMessages
{
    use Instance;
    private function __construct()
    {
        define("\x4d\117\x5f\x55\x4d\120\x52\137\101\x44\x44\117\116\137\115\105\x53\123\101\107\x45\x53", maybe_serialize(array(self::USERNAME_MISMATCH => mo_("\x55\163\145\162\x6e\x61\x6d\145\40\x74\150\x61\164\x20\x74\x68\x65\x20\117\x54\x50\40\167\141\x73\x20\163\145\156\164\40\x74\157\40\x61\x6e\144\40\x74\150\x65\x20\165\x73\145\x72\x6e\x61\x6d\x65\x20\x73\x75\142\x6d\x69\164\164\145\x64\x20\x64\x6f\40\156\157\x74\40\x6d\141\164\x63\150"), self::USERNAME_NOT_EXIST => mo_("\x57\145\x20\143\141\x6e\47\x74\x20\x66\151\x6e\144\x20\141\x6e\x20\x61\143\x63\x6f\165\156\164\40\x72\x65\x67\x69\163\164\x65\162\145\144\x20\x77\x69\164\150\x20\x74\x68\141\164\x20\x61\144\144\x72\x65\163\163\x20\x6f\x72\40" . "\x75\163\145\x72\x6e\x61\x6d\145\x20\x6f\x72\x20\x70\x68\x6f\156\x65\40\x6e\x75\x6d\x62\145\x72"), self::RESET_LABEL => mo_("\124\157\40\x72\x65\x73\145\x74\x20\x79\x6f\x75\x72\40\x70\141\x73\x73\x77\x6f\x72\x64\x2c\x20\x70\x6c\x65\141\x73\x65\x20\x65\x6e\164\x65\162\x20\x79\x6f\165\162\40\x65\155\x61\151\x6c\40\x61\144\144\x72\145\x73\x73\x2c\x20\x75\163\145\x72\156\141\x6d\145\40\x6f\x72\x20\x70\x68\x6f\156\x65\40\x6e\165\155\x62\x65\162\x20\142\145\154\157\167"), self::RESET_LABEL_OP => mo_("\x54\157\40\162\x65\163\x65\164\40\171\x6f\165\162\x20\x70\x61\x73\x73\x77\x6f\162\x64\54\40\x70\x6c\145\x61\x73\x65\x20\x65\156\x74\x65\162\x20\x79\x6f\x75\162\40\162\145\x67\x69\163\164\x65\162\x65\144\40\160\x68\x6f\156\145\40\156\x75\x6d\x62\145\162\x20\142\145\154\x6f\167"))));
    }
    public static function showMessage($kh, $GX = array())
    {
        $B_ = '';
        $kh = explode("\40", $kh);
        $g_ = maybe_unserialize(MO_UMPR_ADDON_MESSAGES);
        $f5 = maybe_unserialize(MO_MESSAGES);
        $g_ = array_merge($g_, $f5);
        foreach ($kh as $Nj) {
            if (!MoUtility::is_blank($Nj)) {
                goto Lb;
            }
            return $B_;
            Lb:
            $HD = $g_[$Nj];
            foreach ($GX as $a6 => $bh) {
                $HD = str_replace("\173\173" . $a6 . "\x7d\x7d", $bh, $HD);
                ob:
            }
            v7:
            $B_ .= $HD;
            vj:
        }
        GO:
        return $B_;
    }
}
fv:
