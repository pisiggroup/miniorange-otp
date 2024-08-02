<?php


namespace OTP\Helper;

if (defined("\101\102\123\120\101\124\x48")) {
    goto HPy;
}
exit;
HPy:
if (class_exists("\x41\x45\x6e\143\162\x79\x70\x74\x69\x6f\x6e")) {
    goto skm;
}
class AEncryption
{
    public static function encrypt_data($f2, $sd)
    {
        $xD = '';
        $GT = strlen($f2);
        $MD = 0;
        VK4:
        if (!($MD < $GT)) {
            goto SC5;
        }
        $hD = substr($f2, $MD, 1);
        $ZV = substr($sd, $MD % strlen($sd) - 1, 1);
        $hD = chr(ord($hD) + ord($ZV));
        $xD .= $hD;
        XRZ:
        $MD++;
        goto VK4;
        SC5:
        return base64_encode($xD);
    }
    public static function decrypt_data($f2, $sd)
    {
        $xD = '';
        $f2 = base64_decode($f2, true);
        $GT = strlen($f2);
        $MD = 0;
        yLx:
        if (!($MD < $GT)) {
            goto cAn;
        }
        $hD = substr($f2, $MD, 1);
        $ZV = substr($sd, $MD % strlen($sd) - 1, 1);
        $hD = chr(ord($hD) - ord($ZV));
        $xD .= $hD;
        b6q:
        $MD++;
        goto yLx;
        cAn:
        return $xD;
    }
}
skm:
