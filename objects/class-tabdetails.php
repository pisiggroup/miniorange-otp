<?php


namespace OTP\Objects;

use OTP\Helper\MoUtility;
use OTP\Traits\Instance;
if (defined("\101\x42\x53\x50\101\x54\110")) {
    goto itf;
}
exit;
itf:
if (class_exists("\124\141\142\104\x65\164\x61\x69\154\163")) {
    goto R9J;
}
final class TabDetails
{
    use Instance;
    public $tab_details;
    public $parent_slug;
    private function __construct()
    {
        $W7 = MoUtility::micr();
        $this->parent_slug = "\155\x6f\163\145\x74\164\x69\156\147\163";
        $XF = isset($_SERVER["\x52\105\121\125\105\x53\124\137\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\105\x51\x55\105\x53\x54\137\x55\122\111"])) : '';
        $Q6 = remove_query_arg("\141\144\x64\x6f\156", $XF);
        $this->tab_details = array(Tabs::ACCOUNT => new PluginPageDetails("\x4f\x54\x50\40\x56\145\162\x69\146\151\143\141\164\151\x6f\x6e\x20\55\x20\101\143\x63\x6f\165\156\x74\163", "\157\x74\160\141\143\x63\x6f\x75\156\x74", !$W7 ? "\101\143\143\x6f\x75\x6e\164\40\123\x65\164\165\160" : "\x55\163\x65\x72\x20\x50\x72\x6f\146\x69\154\x65", !$W7 ? "\101\143\143\157\x75\156\164\40\x53\145\164\x75\160" : "\x50\162\157\146\151\x6c\145", $Q6, "\x61\x63\x63\157\165\156\164\x2e\x70\150\160", "\141\143\143\x6f\165\x6e\164", '', false), Tabs::FORMS => new PluginPageDetails("\x4f\124\120\40\126\145\162\151\146\x69\143\141\x74\x69\157\156\x20\55\40\106\157\x72\x6d\x73", $this->parent_slug, mo_("\106\157\x72\155\163"), mo_("\x46\157\162\x6d\163"), $Q6, "\163\145\164\164\x69\156\147\163\x2e\160\150\x70", "\x74\141\142\111\x44", "\x62\141\143\x6b\147\162\x6f\165\156\144\x3a\43\104\x38\104\x38\x44\x38"), Tabs::OTP_SETTINGS => new PluginPageDetails("\117\124\x50\x20\x56\145\x72\151\146\x69\x63\x61\164\x69\157\156\x20\x2d\40\117\124\120\40\x53\x65\x74\x74\x69\x6e\147\163", "\157\x74\x70\163\145\x74\x74\151\156\147\x73", mo_("\x4f\x54\x50\x20\x53\x65\164\164\x69\x6e\147\163"), mo_("\x4f\124\120\x20\123\x65\x74\164\x69\x6e\147\163"), $Q6, "\x6f\164\x70\163\x65\164\164\151\x6e\x67\x73\56\160\150\160", "\157\x74\x70\x53\x65\164\164\x69\x6e\147\x73\x54\141\x62", "\142\x61\x63\153\x67\162\157\165\x6e\144\72\x23\104\70\x44\70\104\70"), Tabs::SMS_EMAIL_CONFIG => new PluginPageDetails("\x4f\124\120\x20\x56\145\162\151\146\151\143\141\x74\x69\x6f\156\40\55\40\123\115\x53\x20\x26\40\x45\x6d\x61\x69\154", "\x6d\157\143\157\156\146\x69\147", mo_("\x53\x4d\123\57\105\x6d\x61\x69\154\x20\103\x6f\x6e\146\151\147"), mo_("\x53\x4d\123\x2f\x45\x6d\141\x69\x6c\40\x43\157\156\x66\151\147"), $Q6, "\143\157\156\x66\151\147\165\162\x61\164\151\x6f\156\56\x70\x68\x70", "\x65\x6d\141\x69\154\123\155\x73\x54\145\155\x70\x6c\x61\164\x65", "\142\141\x63\153\147\162\157\x75\x6e\x64\72\43\104\x38\104\x38\x44\x38"), Tabs::MESSAGES => new PluginPageDetails("\117\124\120\x20\126\x65\x72\151\x66\x69\143\x61\164\151\157\156\x20\55\40\x4d\x65\x73\163\x61\x67\145\x73", "\x6d\x6f\155\145\x73\x73\x61\x67\145\163", mo_("\103\x6f\155\x6d\157\156\40\115\x65\163\x73\141\x67\145\x73"), mo_("\103\x6f\155\x6d\157\156\40\115\145\x73\163\x61\147\145\x73"), $Q6, "\155\x65\x73\163\x61\147\x65\x73\56\160\x68\x70", "\x6d\145\163\x73\141\147\145\x73\x54\141\x62", "\142\x61\143\153\x67\x72\x6f\x75\156\x64\72\x23\104\70\x44\70\104\70"), Tabs::DESIGN => new PluginPageDetails("\x4f\124\120\x20\126\x65\162\x69\x66\x69\143\x61\164\151\157\156\40\55\x20\x44\x65\163\151\x67\156", "\155\x6f\x64\145\x73\x69\147\156", mo_("\x50\x6f\160\x2d\x55\x70\40\104\145\163\x69\x67\x6e"), mo_("\x50\157\160\55\x55\x70\40\x44\x65\x73\151\147\x6e"), $Q6, "\x64\145\x73\x69\x67\x6e\x2e\x70\150\160", "\160\x6f\x70\104\145\163\151\147\156\x54\141\x62", "\x62\141\143\x6b\147\162\157\x75\x6e\144\x3a\x23\x44\x38\104\x38\x44\x38"), Tabs::CONTACT_US => new PluginPageDetails("\117\124\x50\40\x56\145\x72\x69\146\151\x63\x61\x74\151\157\156\x20\x2d\x20\x43\157\x6e\x74\141\143\164\x20\125\x73", "\x63\x6f\x6e\x74\x61\x63\164\165\x73", "\x43\x6f\156\164\x61\x63\164\x20\x55\163", mo_("\103\157\156\164\141\143\164\x20\x55\x73"), $Q6, "\x63\157\x6e\164\141\x63\x74\x75\x73\56\160\150\x70", "\x63\x6f\x6e\164\x61\143\x74\x75\163\x54\x61\142", '', false), Tabs::CUSTOMIZATION => new PluginPageDetails("\117\x54\120\x20\x56\x65\162\x69\146\151\143\141\x74\151\x6f\156\x20\x2d\40\x43\165\163\x74\x6f\x6d\x20\x57\157\x72\153", "\x63\x75\x73\164\x6f\x6d\167\157\162\153", "\116\x65\145\144\40\x43\x75\163\164\x6f\x6d\x20\x57\x6f\162\153\x3f", mo_("\x4e\145\145\144\x20\x43\165\x73\x74\x6f\155\40\x57\x6f\x72\153\x3f"), $Q6, "\x63\x75\x73\x74\157\155\167\x6f\162\x6b\56\x70\150\160", "\x63\157\156\x74\x61\143\x74\x75\163\124\141\142", '', false), Tabs::PRICING => new PluginPageDetails("\117\x54\x50\40\126\x65\162\x69\x66\151\x63\141\x74\151\157\x6e\40\x2d\x20\114\x69\x63\145\156\163\145", "\x6d\x6f\157\x74\x70\x70\x72\x69\x63\x69\x6e\147", "\x3c\163\160\141\156\40\163\x74\171\154\145\x3d\47\143\x6f\x6c\157\x72\72\x6f\162\141\x6e\147\x65\x3b\x66\157\156\164\55\167\x65\x69\147\150\x74\x3a\142\x6f\154\x64\47\x3e" . mo_("\x4c\151\x63\x65\156\163\x69\x6e\147\40\x50\x6c\141\156\163") . "\x3c\x2f\x73\x70\x61\x6e\x3e", mo_("\114\151\143\x65\156\x73\151\156\147\40\120\x6c\x61\x6e\163"), $Q6, "\160\x72\x69\143\151\x6e\x67\56\160\x68\160", "\165\160\147\x72\x61\x64\x65\124\x61\142", "\142\x61\143\153\147\162\157\165\156\144\72\x23\x44\x38\104\70\x44\70", false), Tabs::ADD_ONS => new PluginPageDetails("\x4f\124\x50\x20\126\x65\x72\x69\146\x69\143\141\x74\x69\157\156\40\55\x20\101\x64\144\x20\117\156\x73", "\x61\144\144\x6f\x6e", "\74\163\x70\141\x6e\40\163\x74\x79\x6c\x65\75\47\x63\x6f\154\x6f\162\x3a\x6f\x72\141\x6e\x67\x65\x3b\146\157\x6e\164\55\167\x65\151\x67\150\x74\72\142\157\154\x64\x27\x3e" . mo_("\101\144\x64\117\x6e\x73") . "\74\x2f\x73\160\141\x6e\76", mo_("\x41\144\x64\117\x6e\x73"), $Q6, "\x61\x64\144\55\x6f\156\56\160\x68\x70", "\x61\144\144\117\x6e\x73\x54\141\142", "\x62\x61\143\153\x67\162\157\165\x6e\x64\72\x6f\162\x61\x6e\x67\x65"), Tabs::REPORTING => new PluginPageDetails("\x4f\x54\120\40\126\145\x72\151\x66\151\143\x61\x74\x69\157\x6e\x20\x2d\40\122\x65\x70\157\162\164\151\156\x67", "\155\x6f\162\x65\x70\157\162\164\151\156\x67", "\x3c\163\160\x61\x6e\40\x73\x74\171\x6c\x65\75\x27\143\x6f\x6c\157\x72\x3a\43\x38\x34\x63\143\x31\145\73\x66\x6f\x6e\x74\x2d\167\145\151\147\x68\x74\x3a\x62\x6f\x6c\x64\47\x3e" . mo_("\124\162\x61\x6e\163\x61\143\x74\151\x6f\x6e\40\x52\145\x70\x6f\162\164") . "\74\x2f\x73\x70\x61\x6e\x3e", mo_("\124\x72\x61\x6e\163\x61\143\164\x69\x6f\156\40\x52\x65\160\x6f\162\x74"), $Q6, "\155\x6f\162\x65\x70\x6f\x72\164\x2e\x70\150\x70", "\x72\145\160\x6f\x72\164\x54\x61\x62", "\x62\x61\143\153\147\x72\x6f\165\x6e\144\72\43\144\64\145\x32\x31\145\145\x30"), Tabs::CUSTOM_FORM => new PluginPageDetails("\117\x54\x50\40\x56\x65\x72\151\146\x69\143\x61\x74\x69\x6f\156\x20\x2d\40\103\165\163\164\157\x6d\x69\x7a\x61\x74\x69\157\156", "\143\165\x73\164\157\155\x69\172\x61\x74\151\157\156", "\x3c\x73\x70\x61\156\x20\163\x74\x79\x6c\145\75\x27\143\x6f\154\157\x72\72\x23\x38\x34\x63\143\x31\x65\x3b\x66\x6f\156\164\x2d\x77\x65\151\x67\150\x74\x3a\142\x6f\154\144\x27\76" . mo_("\x44\157\40\x49\164\x20\131\x6f\x75\162\163\145\154\x66") . "\x3c\57\163\x70\141\156\76", mo_("\104\157\40\x49\164\x20\131\x6f\x75\x72\x73\x65\154\146"), $Q6, "\x63\165\163\164\x6f\155\146\157\x72\155\56\160\150\x70", "\x63\165\x73\164\157\x6d\124\x61\x62", "\x62\x61\x63\x6b\x67\x72\x6f\165\156\x64\72\43\x61\62\145\143\x33\142", false), Tabs::WHATSAPP => new PluginPageDetails("\117\x54\120\x20\x56\x65\x72\151\146\x69\143\141\x74\151\157\156\40\x2d\40\x57\x68\x61\x74\163\x41\160\x70", "\x6d\x6f\x77\150\141\x74\163\141\160\x70", "\x3c\x73\x70\x61\156\x20\163\164\171\x6c\x65\75\x27\143\157\154\x6f\x72\x3a\43\x38\x34\143\x63\x31\145\73\x66\157\156\164\55\x77\145\151\x67\150\x74\x3a\142\x6f\x6c\x64\47\x3e" . mo_("\127\x68\x61\x74\x73\101\x70\160") . "\x3c\x2f\x73\x70\141\156\76", mo_("\127\150\x61\x74\x73\101\x70\160"), $Q6, "\155\157\x77\x68\141\x74\163\141\x70\160\56\x70\150\160", "\127\x68\141\x74\163\101\x70\160\124\x61\142", "\142\141\143\153\147\162\x6f\165\x6e\x64\72\x23\x61\62\145\x63\x33\x62"));
    }
}
R9J:
