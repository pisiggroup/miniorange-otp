<?php


namespace OTP\Objects;

if (defined("\101\102\123\x50\x41\124\110")) {
    goto SqP;
}
exit;
SqP:
if (class_exists("\120\154\x75\147\151\x6e\x50\141\x67\145\104\145\x74\x61\151\154\x73")) {
    goto nlI;
}
class PluginPageDetails
{
    public function __construct($jh, $RC, $ta, $m0, $Q6, $fK, $FL, $xW = '', $Fr = true)
    {
        $this->page_title = $jh;
        $this->menu_slug = $RC;
        $this->menu_title = $ta;
        $this->tab_name = $m0;
        $this->url = add_query_arg(array("\160\x61\147\x65" => $this->menu_slug), $Q6);
        $this->url = remove_query_arg(array("\x61\x64\x64\157\156", "\146\157\x72\155", "\163\155\163", "\x73\x75\142\x70\x61\147\x65"), $this->url);
        $this->view = $fK;
        $this->id = $FL;
        $this->show_in_nav = $Fr;
        $this->css = $xW;
    }
    public $page_title;
    public $menu_slug;
    public $menu_title;
    public $tab_name;
    public $url;
    public $view;
    public $id;
    public $show_in_nav;
    public $css;
}
nlI:
