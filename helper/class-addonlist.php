<?php


namespace OTP\Helper;

if (defined("\x41\102\123\120\101\x54\110")) {
    goto dST;
}
exit;
dST:
use OTP\Objects\BaseAddOnHandler;
use OTP\Traits\Instance;
if (class_exists("\101\144\144\x4f\156\114\x69\x73\x74")) {
    goto Ggz;
}
final class AddOnList
{
    use Instance;
    private $add_ons;
    private function __construct()
    {
        $this->add_ons = array();
    }
    public function add($a6, $form)
    {
        $this->add_ons[$a6] = $form;
    }
    public function get_list()
    {
        return $this->add_ons;
    }
}
Ggz:
