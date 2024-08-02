<?php


namespace OTP\Helper;

if (defined("\x41\x42\123\x50\x41\x54\x48")) {
    goto jw5;
}
exit;
jw5:
if (class_exists("\x4d\x6f\105\x78\143\145\x70\x74\151\x6f\x6e")) {
    goto P4v;
}
class MoException extends \Exception
{
    private $mo_code;
    public function __construct($CU, $WZ, $mV)
    {
        $this->mo_code = $CU;
        parent::__construct($WZ, $mV, null);
    }
    public function getmo_code()
    {
        return $this->mo_code;
    }
}
P4v:
