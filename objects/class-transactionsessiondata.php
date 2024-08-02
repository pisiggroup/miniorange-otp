<?php


namespace OTP\Objects;

if (defined("\x41\102\x53\120\x41\124\x48")) {
    goto w1T;
}
exit;
w1T:
if (class_exists("\x54\162\141\156\x73\141\143\x74\151\x6f\x6e\123\x65\x73\x73\x69\x6f\x6e\x44\x61\164\x61")) {
    goto QQT;
}
class TransactionSessionData
{
    private $email_transaction_id;
    private $phone_transaction_id;
    public function get_email_transaction_id()
    {
        return $this->email_transaction_id;
    }
    public function set_email_transaction_id($Bl)
    {
        $this->email_transaction_id = $Bl;
    }
    public function get_phone_transaction_id()
    {
        return $this->phone_transaction_id;
    }
    public function set_phone_transaction_id($VX)
    {
        $this->phone_transaction_id = $VX;
    }
}
QQT:
