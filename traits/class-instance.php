<?php


namespace OTP\Traits;

if (defined("\101\x42\x53\120\101\124\x48")) {
    goto wT8;
}
exit;
wT8:
trait Instance
{
    private static $instance = null;
    public static function instance()
    {
        if (!is_null(self::$instance)) {
            goto YSC;
        }
        self::$instance = new self();
        YSC:
        return self::$instance;
    }
}
