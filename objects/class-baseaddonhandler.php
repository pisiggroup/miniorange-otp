<?php


namespace OTP\Objects;

use OTP\Helper\MoUtility;
if (defined("\x41\x42\123\120\101\124\x48")) {
    goto OuI;
}
exit;
OuI:
if (class_exists("\102\141\163\145\101\x64\x64\x4f\x6e\x48\141\x6e\144\154\145\x72")) {
    goto Hzv;
}
abstract class BaseAddOnHandler extends BaseActionHandler implements AddOnHandlerInterface
{
    protected $add_on_key;
    protected $add_on_desc;
    protected $addon_name;
    protected $settings_url;
    protected $add_on_docs;
    protected $add_on_video;
    public function __construct()
    {
        parent::__construct();
        $this->set_addon_key();
        $this->set_add_on_desc();
        $this->set_add_on_name();
        $this->set_settings_url();
        $this->set_add_on_docs();
        $this->set_add_on_video();
    }
    public function getAddOnKey()
    {
        return $this->add_on_key;
    }
    public function getAddOnDesc()
    {
        return $this->add_on_desc;
    }
    public function get_add_on_name()
    {
        return $this->addon_name;
    }
    public function getAddOnDocs()
    {
        return $this->add_on_docs;
    }
    public function getAddOnVideo()
    {
        return $this->add_on_video;
    }
    public function getSettingsUrl()
    {
        return $this->settings_url;
    }
    public function moAddOnV()
    {
        return MoUtility::micr() && MoUtility::mclv();
    }
}
Hzv:
