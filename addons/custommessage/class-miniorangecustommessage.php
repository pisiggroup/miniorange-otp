<?php


namespace OTP\Addons\CustomMessage;

use OTP\Addons\CustomMessage\Handler\CustomMessages;
use OTP\Addons\CustomMessage\Handler\CustomMessagesShortcode;
use OTP\Helper\AddOnList;
use OTP\Objects\AddOnInterface;
use OTP\Objects\BaseAddOn;
use OTP\Traits\Instance;
if (defined("\101\102\x53\x50\x41\124\110")) {
    goto mQ;
}
exit;
mQ:
require "\141\x75\164\x6f\154\x6f\x61\x64\56\160\150\160";
if (class_exists("\x4d\x69\x6e\151\x4f\162\x61\156\x67\145\103\165\163\164\x6f\x6d\115\145\163\x73\141\x67\x65")) {
    goto l7;
}
class MiniOrangeCustomMessage extends BaseAddOn implements AddOnInterface
{
    use Instance;
    public function initialize_handlers()
    {
        $AM = AddOnList::instance();
        $gp = CustomMessages::instance();
        $AM->add($gp->getAddOnKey(), $gp);
    }
    public function initialize_helpers()
    {
        CustomMessagesShortcode::instance();
    }
    public function show_addon_settings_page()
    {
        include MCM_DIR . "\143\157\x6e\x74\x72\157\x6c\154\145\162\x73\x2f\x6d\x61\x69\x6e\55\x63\x6f\x6e\164\x72\157\x6c\x6c\x65\162\x2e\x70\150\160";
    }
}
l7:
