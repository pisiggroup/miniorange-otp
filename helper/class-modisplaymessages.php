<?php


namespace OTP\Helper;

if (defined("\x41\x42\x53\x50\x41\x54\x48")) {
    goto DZr;
}
exit;
DZr:
if (class_exists("\x4d\x6f\x44\151\163\160\x6c\141\x79\115\145\x73\163\141\x67\x65\x73")) {
    goto rU0;
}
class MoDisplayMessages
{
    private $message;
    private $type;
    public function __construct($WZ, $R7)
    {
        $this->message = $WZ;
        $this->type = $R7;
        add_action("\141\x64\x6d\151\x6e\137\156\x6f\164\x69\143\x65\x73", array($this, "\162\145\x6e\x64\x65\x72"));
    }
    public function render()
    {
        switch ($this->type) {
            case "\x43\125\123\x54\117\115\137\x4d\105\123\x53\x41\x47\105":
                echo esc_html(mo_($this->message));
                goto x4d;
            case "\116\117\x54\x49\103\105":
                echo "\74\x64\151\166\40\x73\164\171\154\145\x3d\x22\155\x61\x72\x67\151\x6e\55\164\157\160\x3a\x31\x25\x3b\42" . "\143\154\141\163\x73\75\42\151\163\x2d\x64\151\163\155\151\x73\163\151\x62\x6c\x65\x20\x6e\157\x74\151\143\145\x20\x6e\x6f\164\x69\x63\x65\x2d\x77\x61\x72\156\151\x6e\x67\40\x6d\x6f\x2d\x61\x64\155\x69\156\x2d\156\157\x74\x69\x66\42\76" . "\74\x70\x3e" . wp_kses(mo_($this->message), array("\160" => array())) . "\74\x2f\160\76" . "\74\x2f\x64\151\x76\x3e";
                goto x4d;
            case "\105\122\122\117\122":
                echo "\74\144\x69\166\x20\163\x74\x79\x6c\145\75\42\x6d\x61\162\x67\x69\156\x2d\164\157\160\x3a\61\x25\x3b\x22" . "\x63\154\141\x73\163\x3d\x22\x6e\157\x74\151\x63\145\40\156\157\164\x69\x63\x65\x2d\x65\x72\162\x6f\162\x20\151\163\x2d\x64\x69\x73\155\x69\x73\x73\x69\x62\x6c\145\40\155\157\x2d\x61\144\x6d\x69\156\x2d\x6e\x6f\x74\151\146\x22\x3e" . "\74\x70\76" . wp_kses(mo_($this->message), array("\x70" => array())) . "\x3c\x2f\x70\76" . "\x3c\57\x64\x69\166\x3e";
                goto x4d;
            case "\x53\x55\x43\103\x45\123\123":
                echo "\74\x64\x69\x76\x20\40\x73\164\171\x6c\x65\75\x22\x6d\x61\162\x67\x69\156\x2d\164\157\160\72\61\x25\x3b\42" . "\x63\x6c\x61\x73\163\75\42\156\157\x74\x69\143\145\x20\156\x6f\x74\151\143\145\55\x73\x75\143\143\x65\163\163\40\x69\x73\x2d\144\x69\163\155\x69\x73\163\151\x62\x6c\x65\40\x6d\x6f\55\x61\x64\155\151\x6e\55\156\x6f\x74\x69\x66\42\x3e" . "\74\x70\76" . wp_kses(mo_($this->message), array("\x70" => array())) . "\74\x2f\x70\x3e" . "\x3c\57\144\x69\x76\x3e";
                goto x4d;
        }
        qyT:
        x4d:
    }
    public function show_message_div_addons()
    {
        switch ($this->type) {
            case "\115\117\x5f\101\104\104\117\x4e\137\115\105\x53\x53\101\107\105\137\x43\125\123\124\117\x4d\x5f\x4d\105\123\x53\101\x47\105\137\123\125\103\103\x45\123\x53":
                echo "\x3c\144\x69\x76\40\40\x73\x74\171\154\x65\75\42\155\x61\162\147\x69\x6e\55\x74\157\x70\72\x31\x25\x3b\42" . "\x63\x6c\x61\163\163\x3d\x22\156\157\x74\x69\143\x65\40\x6e\157\164\x69\x63\145\55\163\165\x63\143\145\x73\x73\40\x69\163\55\144\x69\163\155\151\163\x73\151\142\154\x65\40\155\x6f\x2d\x61\x64\x6d\151\156\x2d\x6e\157\164\151\x66\x22\x3e" . "\x3c\x70\76" . wp_kses(mo_($this->message), array("\x70" => array())) . "\74\x2f\160\76" . "\74\57\x64\x69\166\x3e";
                goto ZQC;
            case "\x4d\117\x5f\101\x44\104\x4f\x4e\x5f\115\x45\123\x53\101\x47\105\x5f\103\x55\x53\124\117\x4d\137\x4d\105\x53\x53\101\107\x45\137\x45\x52\x52\117\122":
                echo "\74\144\x69\x76\x20\x73\x74\x79\x6c\x65\x3d\x22\x6d\x61\162\x67\151\156\55\x74\157\x70\x3a\x31\45\73\x22" . "\x63\x6c\x61\x73\163\75\42\156\157\x74\x69\143\145\x20\x6e\157\164\x69\143\145\55\x65\162\162\157\162\40\151\163\x2d\x64\151\163\x6d\151\x73\163\x69\142\154\x65\x20\x6d\x6f\x2d\x61\x64\x6d\151\x6e\55\x6e\x6f\164\x69\x66\42\76" . "\x3c\160\x3e" . wp_kses(mo_($this->message), array("\x70" => array())) . "\74\x2f\160\76" . "\74\x2f\x64\x69\166\x3e";
                goto ZQC;
        }
        wCv:
        ZQC:
    }
}
rU0: