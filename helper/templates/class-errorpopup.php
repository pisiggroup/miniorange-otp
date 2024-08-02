<?php


namespace OTP\Helper\Templates;

if (defined("\x41\102\x53\x50\x41\x54\x48")) {
    goto T8r;
}
exit;
T8r:
use OTP\Objects\MoITemplate;
use OTP\Objects\Template;
use OTP\Traits\Instance;
if (class_exists("\x45\x72\x72\157\x72\120\x6f\x70\x75\x70")) {
    goto fj6;
}
class ErrorPopup extends Template implements MoITemplate
{
    use Instance;
    protected function __construct()
    {
        $this->key = "\105\x52\122\117\122";
        $this->template_editor_id = "\143\165\163\164\157\155\x45\155\141\x69\x6c\x4d\x73\x67\x45\x64\151\x74\157\162\x34";
        $this->required_tags = array_diff($this->required_tags, array("\x7b\173\106\x4f\122\x4d\137\111\104\x7d\x7d", "\173\x7b\x52\x45\x51\125\x49\122\x45\x44\x5f\x46\x49\x45\114\104\x53\x7d\175"));
        parent::__construct();
    }
    public function get_defaults($zD)
    {
        if (is_array($zD)) {
            goto pQH;
        }
        $zD = array();
        pQH:
        $yE = wp_remote_get(MOV_URL . "\x69\156\x63\x6c\165\144\145\x73\x2f\x68\164\155\154\57\x65\162\162\x6f\x72\x2e\155\151\156\x2e\150\164\155\154");
        if (!is_wp_error($yE)) {
            goto Mv5;
        }
        return $zD;
        Mv5:
        $zD[$this->get_template_key()] = wp_remote_retrieve_body($yE);
        return $zD;
    }
    public function parse($zh, $WZ, $I2, $Df)
    {
        $Df = $Df ? "\x74\x72\x75\145" : "\146\x61\154\x73\145";
        $zS = $this->getRequiredFormsSkeleton($I2, $Df);
        $zh = str_replace("\x7b\173\112\x51\125\x45\122\x59\175\175", $this->jquery_url, $zh);
        $zh = str_replace("\173\173\107\x4f\x5f\102\101\x43\x4b\x5f\x41\103\124\111\x4f\x4e\x5f\x43\x41\114\x4c\x7d\175", "\x6d\x6f\137\x76\x61\x6c\151\x64\141\x74\151\157\156\x5f\x67\157\142\x61\x63\153\x28\51\73", $zh);
        $zh = str_replace("\173\x7b\115\x4f\137\103\x53\x53\x5f\125\122\x4c\175\175", MOV_CSS_URL, $zh);
        $zh = str_replace("\173\173\x52\105\121\x55\111\x52\105\104\137\x46\117\x52\x4d\x53\137\123\x43\x52\x49\x50\124\123\175\x7d", $zS, $zh);
        $zh = str_replace("\x7b\173\x48\x45\x41\104\105\x52\x7d\175", mo_("\126\141\154\x69\x64\x61\x74\x65\x20\117\x54\120\40\50\117\x6e\x65\x20\x54\151\x6d\145\40\x50\141\x73\163\143\157\x64\145\x29"), $zh);
        $zh = str_replace("\x7b\173\107\x4f\137\x42\x41\103\113\175\x7d", mo_("\x26\x6c\x61\x72\x72\x3b\x20\107\157\x20\102\141\x63\x6b"), $zh);
        $zh = str_replace("\x7b\173\x4d\105\x53\x53\x41\x47\105\175\x7d", mo_($WZ), $zh);
        return $zh;
    }
    private function getRequiredFormsSkeleton($I2, $Df)
    {
        $WA = "\x3c\x66\157\162\x6d\x20\156\141\155\145\x3d\x22\x66\42\40\x6d\145\164\150\x6f\x64\75\x22\x70\157\163\164\42\x20\x61\143\x74\151\x6f\x6e\x3d\x22\x22\40\151\144\75\x22\166\141\x6c\x69\x64\141\164\151\x6f\156\137\x67\157\x42\141\143\153\137\x66\x6f\x72\x6d\42\76\xd\12\x9\11\x9\74\x69\156\x70\165\164\x20\151\144\x3d\x22\166\141\x6c\151\x64\141\164\x69\x6f\x6e\x5f\x67\x6f\102\141\143\x6b\x22\x20\x6e\x61\x6d\x65\75\x22\157\160\x74\x69\157\x6e\42\40\x76\x61\154\165\145\x3d\42\166\141\154\151\144\x61\x74\x69\x6f\x6e\x5f\147\x6f\102\141\143\x6b\42\x20\164\x79\160\x65\75\42\150\x69\x64\144\145\156\x22\57\76\xd\xa\11\x9\74\x2f\x66\157\x72\x6d\x3e\x7b\x7b\123\x43\122\x49\x50\124\x53\x7d\175";
        $WA = str_replace("\173\173\123\103\x52\111\x50\x54\x53\x7d\x7d", $this->getRequiredScripts(), $WA);
        return $WA;
    }
    private function getRequiredScripts()
    {
        $lc = "\x3c\163\x74\x79\x6c\x65\76\x2e\x6d\157\x5f\143\x75\163\164\157\x6d\145\162\137\x76\x61\154\x69\144\x61\x74\151\x6f\x6e\x2d\x6d\x6f\144\141\154\x7b\x64\x69\x73\160\x6c\141\171\x3a\142\x6c\x6f\x63\x6b\41\x69\155\x70\x6f\162\x74\x61\x6e\164\175\74\57\x73\x74\x79\154\145\x3e";
        $lc .= "\74\x73\143\162\x69\160\x74\x3e\x66\x75\156\143\164\x69\157\156\x20\x6d\157\x5f\x76\141\x6c\x69\x64\x61\x74\151\157\x6e\137\x67\x6f\142\141\143\153\50\51\x7b\144\x6f\x63\x75\x6d\145\156\164\56\x67\x65\x74\105\x6c\x65\x6d\145\x6e\x74\x42\x79\111\x64\50\42\x76\141\154\151\x64\x61\x74\x69\x6f\x6e\137\147\x6f\x42\x61\143\153\137\146\157\x72\155\x22\x29\56\x73\165\x62\155\x69\x74\x28\x29\175\x3c\x2f\x73\143\162\x69\160\x74\x3e";
        return $lc;
    }
}
fj6:
