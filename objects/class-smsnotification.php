<?php


namespace OTP\Objects;

if (defined("\101\x42\123\120\101\124\x48")) {
    goto dpE;
}
exit;
dpE:
use OTP\Helper\MoPHPSessions;
if (class_exists("\123\115\x53\x4e\x6f\164\x69\x66\x69\143\141\x74\x69\157\x6e")) {
    goto V8n;
}
abstract class SMSNotification
{
    public $page;
    public $is_enabled;
    public $tool_tip_header;
    public $tool_tip_body;
    public $recipient;
    public $sms_body;
    public $default_sms_body;
    public $title;
    public $available_tags;
    public $page_header;
    public $page_description;
    public $notification_type;
    public function __construct()
    {
    }
    public abstract function send_sms(array $rp);
    public function set_notif_in_session($E1)
    {
        MoPHPSessions::add_session_var("\155\157\137\141\144\144\x6f\x6e\x5f\156\x6f\x74\x69\x66\137\x74\x79\x70\145", $this->page);
    }
    public function set_is_enabled($fJ)
    {
        $this->is_enabled = $fJ;
        return $this;
    }
    public function set_recipient($Kj)
    {
        $this->recipient = $Kj;
        return $this;
    }
    public function set_sms_body($SG)
    {
        $this->sms_body = $SG;
        return $this;
    }
}
V8n:
