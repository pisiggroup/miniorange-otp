<?php


namespace OTP\Addons\WcSMSNotification\Helper;

if (defined("\101\x42\123\x50\101\124\x48")) {
    goto vb;
}
exit;
vb:
use ReflectionClass;
if (class_exists("\x57\143\x4f\x72\144\x65\162\x53\164\x61\164\x75\x73")) {
    goto sJ;
}
final class WcOrderStatus
{
    const PROCESSING = "\x70\162\x6f\143\x65\163\x73\151\156\x67";
    const ON_HOLD = "\157\156\55\x68\157\154\144";
    const CANCELLED = "\143\141\x6e\143\x65\154\x6c\145\x64";
    const PENDING = "\x70\145\156\x64\151\156\x67";
    const FAILED = "\146\x61\151\x6c\145\144";
    const COMPLETED = "\x63\x6f\155\160\x6c\145\x74\x65\x64";
    const REFUNDED = "\x72\145\x66\165\156\144\x65\x64";
    public static function get_all_status()
    {
        $qq = new ReflectionClass(self::class);
        return array_values($qq->getConstants());
    }
}
sJ:
