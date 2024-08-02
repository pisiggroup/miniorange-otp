<?php


namespace OTP\Addons\CustomMessage\Handler;

if (defined("\101\102\x53\120\101\124\x48")) {
    goto gU;
}
exit;
gU:
use OTP\Traits\Instance;
if (class_exists("\103\x75\163\x74\157\x6d\x4d\x65\163\163\x61\x67\x65\163\123\150\157\x72\x74\143\157\144\x65")) {
    goto SE;
}
class CustomMessagesShortcode
{
    use Instance;
    private $admin_actions;
    private $nonce;
    public function __construct()
    {
        $Kl = CustomMessages::instance();
        $this->nonce = $Kl->get_nonce_value();
        $this->admin_actions = $Kl->admin_actions;
        add_shortcode("\155\x6f\x5f\x63\x75\163\x74\157\155\x5f\x73\x6d\163", array($this, "\x5f\143\165\x73\164\x6f\x6d\x5f\x73\155\x73\137\x73\150\157\162\164\143\x6f\144\145"));
        add_shortcode("\x6d\157\x5f\143\165\x73\x74\x6f\x6d\x5f\145\x6d\141\151\x6c", array($this, "\137\143\x75\163\164\157\155\x5f\x65\155\x61\151\x6c\137\x73\150\157\x72\x74\x63\x6f\x64\x65"));
    }
    public function custom_sms_shortcode()
    {
        if (is_user_logged_in()) {
            goto GM;
        }
        return;
        GM:
        $FB = array_keys($this->admin_actions);
        include MCM_DIR . "\166\151\x65\x77\x73\x2f\143\x75\x73\x74\x6f\155\123\115\123\102\x6f\170\x2e\x70\150\x70";
        wp_register_script("\x63\165\163\164\157\155\137\163\155\x73\137\x6d\163\147\137\x73\143\x72\x69\160\164", MCM_SHORTCODE_SMS_JS, array("\x6a\161\x75\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\143\x75\163\x74\x6f\x6d\137\163\x6d\163\x5f\x6d\163\x67\137\163\x63\x72\x69\160\x74", "\x6d\157\x76\143\x75\163\164\157\155\x73\x6d\163", array("\x61\x6c\x74" => mo_("\x53\x65\x6e\144\151\x6e\x67\x2e\56\56"), "\151\155\147" => MOV_LOADER_URL, "\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\x75\x72\154" => wp_ajax_url(), "\x61\x63\164\x69\x6f\x6e" => $FB[0], "\142\165\x74\x74\x6f\156\124\145\170\x74" => mo_("\x53\145\x6e\144\x20\123\x4d\x53")));
        wp_enqueue_script("\x63\x75\x73\x74\x6f\155\137\x73\x6d\163\137\155\163\x67\137\x73\x63\x72\x69\x70\x74");
    }
    public function custom_email_shortcode()
    {
        if (is_user_logged_in()) {
            goto Id;
        }
        return;
        Id:
        $FB = array_keys($this->admin_actions);
        include MCM_DIR . "\166\x69\145\167\x73\57\x63\165\x73\x74\157\155\x65\x6d\x61\151\154\x62\157\x78\x2e\160\150\160";
        wp_register_script("\143\165\x73\164\x6f\155\137\x65\x6d\x61\x69\x6c\137\x6d\163\x67\x5f\x73\143\162\151\x70\164", MCM_SHORTCODE_EMAIL_JS, array("\x6a\161\165\145\x72\x79"), MOV_VERSION, true);
        wp_localize_script("\143\165\163\x74\x6f\155\x5f\145\x6d\141\151\x6c\137\155\x73\x67\137\163\143\x72\x69\x70\164", "\155\x6f\166\143\x75\x73\164\157\x6d\145\155\141\x69\x6c", array("\141\x6c\x74" => mo_("\123\x65\156\144\151\156\x67\56\56\x2e"), "\x69\x6d\147" => MOV_LOADER_URL, "\x6e\x6f\156\x63\x65" => wp_create_nonce($this->nonce), "\x75\162\x6c" => wp_ajax_url(), "\141\143\x74\151\x6f\156" => $FB[1], "\x62\x75\x74\x74\x6f\156\124\145\x78\x74" => mo_("\123\145\156\x64\x20\x45\155\141\x69\154")));
        wp_enqueue_script("\143\x75\163\164\x6f\x6d\x5f\145\155\x61\151\x6c\x5f\x6d\163\147\x5f\x73\x63\162\x69\160\x74");
    }
}
SE:
