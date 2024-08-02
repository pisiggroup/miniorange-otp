<?php


namespace OTP\Addons\PasswordReset;

use OTP\Addons\PasswordReset\Handler\UMPasswordResetAddOnHandler;
use OTP\Addons\PasswordReset\Helper\UMPasswordResetMessages;
use OTP\Helper\AddOnList;
use OTP\Objects\AddOnInterface;
use OTP\Objects\BaseAddOn;
use OTP\Traits\Instance;
if (defined("\101\102\x53\x50\101\124\x48")) {
    goto eA;
}
exit;
eA:
require "\141\165\x74\157\154\x6f\141\144\x2e\x70\x68\160";
if (class_exists("\x55\154\164\x69\155\141\x74\x65\115\x65\x6d\x62\145\x72\x50\x61\x73\163\x77\157\x72\144\x52\x65\163\145\164")) {
    goto Pe;
}
final class UltimateMemberPasswordReset extends BaseAddOn implements AddOnInterface
{
    use Instance;
    public function __construct()
    {
        parent::__construct();
        add_action("\141\144\155\x69\x6e\137\x65\156\161\165\x65\x75\x65\137\x73\143\162\151\160\x74\163", array($this, "\165\x6d\137\x70\x72\x5f\x6e\157\164\151\x66\137\163\145\x74\164\x69\x6e\x67\163\x5f\x73\164\171\x6c\145"));
        add_action("\x6d\x6f\x5f\157\164\160\x5f\166\x65\162\151\x66\151\x63\141\x74\x69\x6f\156\137\x64\145\154\x65\164\x65\x5f\x61\x64\144\x6f\156\x5f\157\160\164\x69\x6f\x6e\163", array($this, "\165\x6d\137\x70\x72\x5f\156\x6f\x74\151\x66\137\144\x65\x6c\145\x74\145\x5f\x6f\160\x74\151\157\156\163"));
    }
    public function um_pr_notif_settings_style()
    {
        wp_enqueue_style("\165\x6d\x5f\x70\x72\137\156\x6f\x74\151\x66\x5f\x61\x64\155\x69\x6e\137\163\145\164\164\151\x6e\147\163\137\x73\164\x79\x6c\145", UMPR_CSS_URL, MOV_VERSION, true);
    }
    public function initialize_handlers()
    {
        $AM = AddOnList::instance();
        $gp = UMPasswordResetAddOnHandler::instance();
        $AM->add($gp->getAddOnKey(), $gp);
    }
    public function initializeHelpers()
    {
        UMPasswordResetMessages::instance();
    }
    public function initialize_helpers()
    {
        UMPasswordResetMessages::instance();
    }
    public function show_addon_settings_page()
    {
        include UMPR_DIR . "\x63\x6f\x6e\164\162\x6f\154\154\145\x72\163\57\x6d\141\151\x6e\55\x63\x6f\x6e\x74\162\157\x6c\x6c\x65\x72\x2e\160\x68\160";
    }
    public function um_pr_notif_delete_options()
    {
        delete_site_option("\x6d\x6f\137\x75\x6d\137\160\162\137\160\141\x73\163\x5f\145\156\x61\142\154\x65");
        delete_site_option("\155\157\137\x75\x6d\137\x70\162\x5f\x70\x61\163\163\137\142\x75\164\164\x6f\x6e\137\164\x65\170\x74");
        delete_site_option("\x6d\x6f\137\x75\x6d\x5f\160\162\x5f\x65\156\x61\142\x6c\x65\144\137\x74\x79\160\145");
    }
}
Pe:
