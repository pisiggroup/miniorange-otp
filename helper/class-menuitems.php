<?php


namespace OTP\Helper;

if (defined("\x41\102\123\120\101\124\x48")) {
    goto t1h;
}
exit;
t1h:
use OTP\MoInit;
use OTP\Objects\TabDetails;
use OTP\Traits\Instance;
if (class_exists("\x4d\x65\156\x75\111\x74\145\x6d\163")) {
    goto v7t;
}
final class MenuItems
{
    use Instance;
    private $callback;
    private $menu_slug;
    private $menu_logo;
    private $tab_details;
    private function __construct()
    {
        $this->callback = array(MoInit::instance(), "\x6d\x6f\137\143\x75\x73\164\157\x6d\145\162\x5f\x76\x61\x6c\151\144\x61\164\151\157\x6e\137\157\x70\x74\151\x6f\x6e\x73");
        $this->menu_logo = MOV_ICON;
        $W1 = TabDetails::instance();
        $this->tab_details = $W1->tab_details;
        $this->menu_slug = $W1->parent_slug;
        $this->add_main_menu();
        $this->add_sub_menus();
    }
    private function add_main_menu()
    {
        add_menu_page("\x4f\x54\x50\x20\x56\x65\x72\151\x66\x69\x63\x61\164\x69\x6f\x6e", "\117\124\x50\x20\126\145\162\x69\x66\151\x63\141\x74\151\157\x6e", "\155\x61\156\141\147\x65\137\x6f\x70\164\151\157\156\x73", $this->menu_slug, $this->callback, $this->menu_logo);
    }
    private function add_sub_menus()
    {
        foreach ($this->tab_details as $sj) {
            add_submenu_page($this->menu_slug, $sj->page_title, $sj->menu_title, "\x6d\x61\x6e\141\147\x65\x5f\x6f\x70\164\151\x6f\x6e\x73", $sj->menu_slug, $this->callback);
            NWb:
        }
        nKR:
    }
}
v7t:
