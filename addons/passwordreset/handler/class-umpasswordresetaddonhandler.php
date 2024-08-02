<?php


namespace OTP\Addons\PasswordReset\Handler;

if (defined("\x41\x42\x53\120\x41\x54\x48")) {
    goto gq;
}
exit;
gq:
use OTP\Objects\BaseAddOnHandler;
use OTP\Traits\Instance;
use OTP\Helper\MoFormDocs;
if (class_exists("\x55\x4d\x50\141\163\163\x77\x6f\x72\144\x52\x65\163\145\164\101\144\144\117\156\x48\141\156\x64\154\145\162")) {
    goto Yg;
}
class UMPasswordResetAddOnHandler extends BaseAddOnHandler
{
    use Instance;
    public function __construct()
    {
        parent::__construct();
        if ($this->moAddOnV()) {
            goto la;
        }
        return;
        la:
        UMPasswordResetHandler::instance();
    }
    public function set_addon_key()
    {
        $this->add_on_key = "\165\x6d\x5f\x70\x61\163\163\x5f\162\145\x73\x65\164\x5f\x61\x64\144\x6f\156";
    }
    public function set_add_on_desc()
    {
        $this->add_on_desc = mo_("\101\154\154\x6f\167\x73\x20\171\x6f\165\x72\x20\x75\x73\x65\x72\x73\40\164\x6f\x20\x72\145\163\x65\x74\40\164\x68\145\x69\162\x20\160\x61\163\163\x77\157\x72\x64\40\165\x73\x69\x6e\147\x20\x4f\x54\120\40\x69\156\163\x74\x65\x61\144\40\157\x66\x20\x65\x6d\x61\x69\x6c\40\154\151\156\x6b\163\56" . "\103\154\151\x63\153\x20\157\156\40\x74\150\145\x20\163\x65\x74\x74\x69\156\x67\163\40\x62\x75\164\164\157\156\40\x74\157\x20\164\x68\145\x20\162\x69\x67\x68\164\40\164\x6f\x20\x63\x6f\x6e\x66\151\147\x75\162\145\x20\163\x65\x74\164\x69\x6e\147\x73\x20\146\157\x72\x20\164\x68\145\40\x73\x61\x6d\x65\x2e");
    }
    public function set_add_on_name()
    {
        $this->addon_name = mo_("\x55\154\x74\x69\x6d\141\164\x65\x20\115\145\155\x62\145\162\40\120\x61\163\x73\x77\157\x72\144\x20\x52\x65\163\x65\x74\x20\117\166\x65\x72\x20\117\x54\x50");
    }
    public function set_add_on_docs()
    {
        $this->add_on_docs = MoFormDocs::ULTIMATEMEMBER_PASSWORD_RESET_ADDON_LINK["\x67\x75\x69\144\x65\x4c\x69\x6e\153"];
    }
    public function set_add_on_video()
    {
        $this->add_on_video = MoFormDocs::ULTIMATEMEMBER_PASSWORD_RESET_ADDON_LINK["\x76\151\x64\x65\157\114\151\x6e\x6b"];
    }
    public function set_settings_url()
    {
        $this->settings_url = add_query_arg(array("\141\x64\144\x6f\156" => "\x75\x6d\x70\162\x5f\156\x6f\x74\151\146"), isset($_SERVER["\122\105\x51\x55\x45\123\x54\137\125\x52\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\122\x45\121\x55\105\x53\124\x5f\125\122\111"])) : null);
    }
}
Yg:
