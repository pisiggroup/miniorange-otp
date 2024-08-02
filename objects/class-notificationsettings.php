<?php


namespace OTP\Objects;

if (defined("\x41\x42\123\x50\101\124\x48")) {
    goto nNd;
}
exit;
nNd:
if (class_exists("\116\157\x74\x69\x66\151\x63\x61\164\x69\x6f\x6e\123\145\164\164\x69\156\x67\x73")) {
    goto t_2;
}
class NotificationSettings
{
    public $send_sms;
    public $send_email;
    public $phone_number;
    public $from_email;
    public $from_name;
    public $to_email;
    public $to_name;
    public $subject;
    public $bcc_email;
    public $message;
    public function __construct()
    {
        if (func_num_args() < 4) {
            goto qmm;
        }
        $this->create_email_notification_settings(func_get_arg(0), func_get_arg(1), func_get_arg(2), func_get_arg(3), func_get_arg(4));
        goto sPY;
        qmm:
        $this->create_sms_notification_settings(func_get_arg(0), func_get_arg(1));
        sPY:
    }
    public function create_sms_notification_settings($bV, $WZ)
    {
        $this->send_sms = true;
        $this->phone_number = $bV;
        $this->message = $WZ;
    }
    public function create_email_notification_settings($mv, $XM, $sJ, $ih, $WZ)
    {
        $this->send_email = true;
        $this->from_email = $mv;
        $this->from_name = $XM;
        $this->to_email = $sJ;
        $this->to_name = $sJ;
        $this->subject = $ih;
        $this->bcc_email = '';
        $this->message = $WZ;
    }
}
t_2:
