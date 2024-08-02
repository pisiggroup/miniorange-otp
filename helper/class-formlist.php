<?php


namespace OTP\Helper;

use OTP\Objects\FormHandler;
use OTP\Traits\Instance;
if (defined("\101\x42\123\x50\x41\124\x48")) {
    goto R7w;
}
exit;
R7w:
if (class_exists("\106\157\162\155\114\x69\x73\x74")) {
    goto y02;
}
final class FormList
{
    use Instance;
    private $forms;
    private $important_forms;
    private $enabled_forms;
    private function __construct()
    {
        $this->forms = array();
    }
    public function add($a6, $form)
    {
        $this->forms[$a6] = $form;
        if (!$form->is_form_enabled()) {
            goto hGr;
        }
        $this->enabled_forms[$a6] = $form;
        hGr:
    }
    public function get_list()
    {
        return $this->forms;
    }
    public function get_important_forms_list()
    {
        $this->important_forms = array("\x57\120\137\104\x45\106\x41\125\114\x54\x5f\x4c\117\x47\111\x4e", "\127\103\137\x52\x45\x47\x5f\106\x4f\122\x4d", "\x57\x43\137\x43\x48\x45\x43\113\x4f\x55\x54\137\106\117\x52\x4d", "\x47\122\x41\126\111\x54\x59\x5f\x46\117\122\115", "\x4e\111\x4e\112\101\137\x46\117\122\x4d\137\101\x4a\x41\x58", "\103\106\67\137\106\x4f\122\x4d", "\x46\117\x52\115\x49\116\101\x54\x4f\122", "\x57\120\x46\117\122\x4d\123", "\125\114\x54\111\x4d\101\124\x45\x5f\106\117\122\115");
        return $this->important_forms;
    }
    public function get_enabled_forms()
    {
        return $this->enabled_forms;
    }
}
y02:
