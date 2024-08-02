<?php


namespace OTP\Objects;

if (defined("\x41\102\x53\120\101\x54\x48")) {
    goto qFu;
}
exit;
qFu:
if (class_exists("\106\x6f\162\155\x53\x65\163\x73\151\x6f\156\x44\141\x74\x61")) {
    goto RbN;
}
class FormSessionData
{
    private $is_initialized = false;
    private $email_submitted;
    private $phone_submitted;
    private $email_verified;
    private $phone_verified;
    private $email_verification_status;
    private $phone_verification_status;
    private $field_or_form_id;
    private $user_submitted;
    public function __construct()
    {
    }
    public function init()
    {
        $this->is_initialized = true;
        return $this;
    }
    public function get_is_initialized()
    {
        return $this->is_initialized;
    }
    public function get_email_submitted()
    {
        return $this->email_submitted;
    }
    public function set_email_submitted($TW)
    {
        $this->email_submitted = $TW;
    }
    public function get_phone_submitted()
    {
        return $this->phone_submitted;
    }
    public function set_phone_submitted($Nw)
    {
        $this->phone_submitted = $Nw;
    }
    public function get_email_verified()
    {
        return $this->email_verified;
    }
    public function set_email_verified($nq)
    {
        $this->email_verified = $nq;
    }
    public function get_phone_verified()
    {
        return $this->phone_verified;
    }
    public function set_phone_verified($Ni)
    {
        $this->phone_verified = $Ni;
    }
    public function get_email_verification_status()
    {
        return $this->email_verification_status;
    }
    public function set_email_verification_status($ey)
    {
        $this->email_verification_status = $ey;
    }
    public function get_phone_verification_status()
    {
        return $this->phone_verification_status;
    }
    public function set_phone_verification_status($ZT)
    {
        $this->phone_verification_status = $ZT;
    }
    public function get_field_or_form_id()
    {
        return $this->field_or_form_id;
    }
    public function set_field_or_form_id($xf)
    {
        $this->field_or_form_id = $xf;
    }
    public function get_user_submitted()
    {
        return $this->user_submitted;
    }
    public function set_user_submitted($ml)
    {
        $this->user_submitted = $ml;
    }
}
RbN:
