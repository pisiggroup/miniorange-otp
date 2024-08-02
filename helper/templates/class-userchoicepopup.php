<?php


namespace OTP\Helper\Templates;

if (defined("\101\x42\x53\x50\x41\124\x48")) {
    goto Sit;
}
exit;
Sit:
use OTP\Objects\MoITemplate;
use OTP\Objects\Template;
use OTP\Traits\Instance;
if (class_exists("\125\x73\x65\162\x43\150\157\x69\x63\145\120\157\160\165\x70")) {
    goto MRd;
}
class UserChoicePopup extends Template implements MoITemplate
{
    use Instance;
    protected function __construct()
    {
        $this->key = "\x55\x53\x45\x52\103\x48\117\111\103\105";
        $this->template_editor_id = "\143\165\x73\164\157\155\x45\x6d\141\x69\154\115\x73\x67\105\144\x69\x74\157\x72\62";
        parent::__construct();
    }
    public function get_defaults($zD)
    {
        if (is_array($zD)) {
            goto T3S;
        }
        $zD = array();
        T3S:
        $yE = wp_remote_get(MOV_URL . "\x69\156\x63\x6c\x75\144\x65\x73\x2f\x68\x74\x6d\154\x2f\x75\163\145\162\143\x68\x6f\151\x63\x65\x2e\x6d\x69\156\x2e\150\x74\155\x6c");
        if (!is_wp_error($yE)) {
            goto ETE;
        }
        return $zD;
        ETE:
        $zD[$this->get_template_key()] = wp_remote_retrieve_body($yE);
        return $zD;
    }
    public function parse($zh, $WZ, $I2, $Df)
    {
        $zS = $this->getRequiredFormsSkeleton($I2, $Df);
        $UP = $this->preview ? '' : extra_post_data();
        $g7 = "\x7b\173\105\x58\124\122\101\137\120\x4f\x53\x54\x5f\x44\x41\124\x41\175\x7d\74\151\x6e\160\x75\x74\40\164\171\x70\145\75\42\x68\x69\144\144\145\156\x22\40\x6e\x61\155\145\x3d\x22\x6f\160\164\151\x6f\x6e\x22\40\166\x61\x6c\165\145\x3d\42\x6d\151\x6e\151\x6f\x72\141\156\x67\145\55\166\x61\154\x69\x64\x61\164\x65\x2d\x6f\164\x70\55\143\x68\x6f\x69\143\x65\x2d\146\x6f\x72\155\x22\x20\57\76";
        $g7 .= "\74\x69\156\160\165\164\40\x74\x79\160\x65\x3d\x22\150\x69\144\144\145\x6e\42\40\151\144\x3d\x22\x6d\157\x70\x6f\x70\165\x70\137\167\x70\156\x6f\156\143\145\x22\x20\156\x61\155\x65\75\x22\x6d\x6f\160\157\x70\x75\x70\x5f\x77\160\x6e\157\156\143\145\x22\x20\x76\x61\x6c\x75\145\75\42" . wp_create_nonce($this->nonce) . "\x22\57\x3e";
        $zh = str_replace("\173\x7b\x4a\x51\x55\x45\122\131\175\175", $this->jquery_url, $zh);
        $zh = str_replace("\173\173\106\x4f\x52\115\x5f\x49\x44\x7d\175", "\x6d\157\137\166\141\154\x69\x64\x61\164\145\137\146\x6f\x72\155", $zh);
        $zh = str_replace("\x7b\173\107\x4f\137\102\101\103\113\137\x41\x43\124\x49\117\116\x5f\x43\x41\114\114\175\175", "\x6d\x6f\137\166\x61\x6c\x69\144\141\164\151\x6f\156\x5f\147\x6f\142\x61\x63\153\x28\x29\x3b", $zh);
        $zh = str_replace("\173\173\115\x4f\137\103\123\123\x5f\x55\122\x4c\x7d\x7d", MOV_CSS_URL, $zh);
        $zh = str_replace("\x7b\173\122\x45\121\x55\111\122\x45\x44\137\x46\117\122\115\x53\137\123\x43\122\111\x50\124\123\x7d\175", $zS, $zh);
        $zh = str_replace("\173\173\x48\x45\x41\x44\x45\122\x7d\175", mo_("\126\x61\154\151\144\141\x74\145\40\x4f\x54\x50\40\50\x4f\156\145\x20\124\151\155\x65\x20\120\141\163\163\143\x6f\144\x65\51"), $zh);
        $zh = str_replace("\x7b\x7b\x47\117\137\102\101\103\113\175\x7d", mo_("\46\154\x61\162\x72\x3b\40\x47\x6f\x20\x42\x61\x63\x6b"), $zh);
        $zh = str_replace("\x7b\x7b\x4d\x45\123\x53\101\x47\x45\175\x7d", mo_($WZ), $zh);
        $zh = str_replace("\173\173\x42\125\x54\124\x4f\116\x5f\124\x45\130\124\175\x7d", mo_("\123\x65\156\144\x20\117\x54\120"), $zh);
        $zh = str_replace("\x7b\x7b\x52\105\121\125\111\122\x45\104\x5f\x46\x49\x45\114\104\123\175\x7d", $g7, $zh);
        $zh = str_replace("\x7b\173\105\x58\124\122\101\x5f\120\x4f\123\124\137\104\x41\x54\x41\x7d\175", $UP, $zh);
        return $zh;
    }
    private function getRequiredFormsSkeleton($I2, $Df)
    {
        $WA = "\x3c\146\157\x72\155\40\x6e\141\x6d\145\75\x22\146\x22\40\x6d\145\164\150\157\144\75\x22\160\x6f\x73\164\x22\40\141\143\x74\151\x6f\x6e\x3d\42\x22\40\x69\144\x3d\42\166\x61\154\151\144\141\164\x69\x6f\x6e\137\x67\x6f\x42\x61\143\153\x5f\146\x6f\162\155\42\76\15\12\x9\11\x9\x9\74\151\x6e\x70\165\164\40\151\x64\x3d\x22\166\141\154\151\144\141\x74\151\x6f\x6e\x5f\x67\157\102\x61\143\153\x22\40\156\141\155\x65\75\42\157\x70\x74\151\x6f\x6e\x22\x20\x76\141\x6c\x75\x65\75\x22\166\x61\154\151\144\141\x74\x69\157\156\137\147\157\x42\141\x63\153\x22\x20\164\171\160\x65\75\42\x68\x69\144\144\145\156\x22\57\76\15\xa\11\x9\x9\74\57\x66\x6f\162\155\x3e\x7b\x7b\x53\x43\x52\x49\x50\124\x53\175\x7d";
        $WA = str_replace("\x7b\173\x53\103\x52\111\120\124\x53\175\x7d", $this->getRequiredScripts(), $WA);
        return $WA;
    }
    private function getRequiredScripts()
    {
        $lc = "\74\163\x74\x79\x6c\x65\x3e\56\x6d\x6f\x5f\x63\x75\x73\x74\x6f\x6d\x65\162\x5f\166\x61\x6c\x69\144\x61\164\x69\157\x6e\55\x6d\x6f\144\x61\154\x7b\x64\x69\x73\x70\x6c\141\x79\x3a\142\x6c\x6f\x63\x6b\41\151\x6d\x70\157\162\x74\141\x6e\x74\x7d\74\57\x73\x74\171\x6c\x65\x3e";
        if (!$this->preview) {
            goto ORE;
        }
        $lc .= "\x3c\x73\143\x72\151\x70\x74\76\44\x6d\157\x3d\152\121\x75\145\162\x79\x3b\x24\155\157\x28\42\43\x6d\157\x5f\x76\141\154\151\144\x61\x74\x65\x5f\146\x6f\x72\155\42\x29\x2e\163\x75\142\x6d\x69\164\50\x66\165\156\x63\x74\x69\157\156\x28\145\51\x7b\145\x2e\160\x72\145\166\145\156\x74\x44\145\x66\x61\165\154\x74\50\x29\73\x7d\51\x3b\74\x2f\x73\x63\x72\x69\x70\x74\x3e";
        goto TTW;
        ORE:
        $lc .= "\x3c\x73\143\162\151\x70\x74\76\x66\x75\x6e\x63\164\x69\157\x6e\40\155\157\137\x76\141\x6c\x69\x64\141\x74\151\x6f\156\x5f\x67\x6f\x62\141\143\x6b\x28\51\173\x64\x6f\x63\x75\x6d\145\x6e\x74\x2e\147\145\x74\105\154\145\155\x65\156\164\102\171\111\144\x28\42\x76\x61\154\151\144\141\x74\151\x6f\x6e\x5f\x67\157\102\x61\x63\x6b\x5f\x66\157\x72\x6d\x22\51\56\x73\x75\x62\x6d\151\164\50\x29\x3b\175\x3c\x2f\163\143\x72\151\160\164\x3e";
        TTW:
        return $lc;
    }
}
MRd:
