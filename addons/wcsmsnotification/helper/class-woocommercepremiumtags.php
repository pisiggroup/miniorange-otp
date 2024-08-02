<?php


namespace OTP\Addons\WcSMSNotification\Helper;

if (defined("\101\x42\x53\x50\x41\x54\x48")) {
    goto gk;
}
exit;
gk:
use OTP\Traits\Instance;
use OTP\Objects\WcPremiumTags;
if (class_exists("\127\x6f\x6f\103\x6f\x6d\x6d\145\162\x63\145\120\x72\145\155\151\165\155\124\141\147\x73")) {
    goto Nh;
}
class WooCommercePremiumTags
{
    use Instance;
    private $prem_billing_tags;
    private $prem_shipping_tags;
    protected function __construct()
    {
        $this->prem_billing_tags = array(WcPremiumTags::BILLING_FIRST_NAME, WcPremiumTags::BILLING_PHONE, WcPremiumTags::BILLING_EMAIL, WcPremiumTags::BILLING_ADDRESS, WcPremiumTags::BILLING_CITY, WcPremiumTags::BILLING_STATE, WcPremiumTags::BILLING_POSTCODE, WcPremiumTags::BILLING_COUNTRY);
        $this->prem_shipping_tags = array(WcPremiumTags::SHIPPING_FIRST_NAME, WcPremiumTags::SHIPPING_PHONE, WcPremiumTags::SHIPPING_ADDRESS, WcPremiumTags::SHIPPING_CITY, WcPremiumTags::SHIPPING_STATE, WcPremiumTags::SHIPPING_POSTCODE, WcPremiumTags::SHIPPING_COUNTRY);
        add_filter("\x6f\x72\x64\145\x72\137\163\x74\x61\164\x75\163", array($this, "\x61\x76\x61\151\x6c\x61\142\154\x65\137\x74\141\x67\163\137\x61\x64\155\x69\x6e\137\157\x72\x64\x65\x72\x5f\x73\164\x61\164\165\163"), 1, 2);
        add_filter("\x6e\x65\x77\137\143\x75\x73\x74\x6f\x6d\x65\162", array($this, "\x61\x76\x61\x69\154\141\x62\154\x65\137\x74\x61\x67\x73\x5f\x6e\145\167\137\143\x75\163\164\x6f\155\145\162"), 1, 2);
        add_filter("\x6d\157\137\x70\x72\x65\155\151\165\x6d\x5f\x74\x61\147\163", array($this, "\x70\x72\x65\x6d\x69\165\x6d\x5f\164\141\x67\x73"), 1, 2);
        add_filter("\155\x6f\137\142\151\x6c\x6c\x69\156\x67\x5f\x74\141\x67\163", array($this, "\141\166\141\151\154\x61\142\154\x65\137\x62\x69\x6c\154\x69\x6e\x67\x5f\164\x61\147\163"), 1, 1);
        add_filter("\155\157\x5f\163\150\151\x70\160\x69\x6e\x67\137\164\x61\x67\x73", array($this, "\141\166\141\151\x6c\x61\x62\154\x65\137\163\150\x69\160\x70\151\x6e\147\137\164\141\x67\x73"), 1, 1);
        add_filter("\141\x76\141\151\154\x61\142\154\x65\137\160\x72\145\155\137\164\x61\x67\163", array($this, "\x61\x76\x61\x69\x6c\x61\142\154\145\x5f\x70\162\x65\155\x69\165\155\137\x74\x61\147\x73"), 1, 2);
    }
    public function available_billing_tags($hx)
    {
        $HV = $this->prem_billing_tags;
        $Pi = '';
        $VZ = count($HV);
        $MD = 0;
        Ow:
        if (!($MD < $VZ)) {
            goto E1;
        }
        $Pi .= "\x7b";
        $Pi .= $HV[$MD];
        $Pi .= "\175\54";
        Xf:
        $MD++;
        goto Ow;
        E1:
        $hx .= $Pi;
        return $hx;
    }
    public function available_shipping_tags($hx)
    {
        $vU = $this->prem_shipping_tags;
        $Lc = '';
        $oq = count($vU);
        $MD = 0;
        gJ:
        if (!($MD < $oq)) {
            goto uH;
        }
        $Lc .= "\x7b";
        $Lc .= $vU[$MD];
        $Lc .= "\175";
        if (!($MD !== $oq - 1)) {
            goto qf;
        }
        $Lc .= "\54";
        qf:
        he:
        $MD++;
        goto gJ;
        uH:
        $hx .= $Lc;
        return $hx;
    }
    public function available_premium_tags($hx, $W6)
    {
        switch ($W6) {
            case "\x77\x63\137\x70\162\x65\155\x69\x75\155\x5f\164\141\147\x73":
                $hx .= "\x2c\173\160\x61\171\x6d\x65\x6e\164\55\x6d\145\x74\x68\157\x64\175\54\173\x74\x6f\x74\141\154\55\x41\x6d\x6f\x75\x6e\x74\175\x2c\x7b\x74\x72\x61\156\x73\141\x63\x74\x69\x6f\x6e\55\111\104\x7d\54\173\157\162\144\x65\162\55\153\x65\171\x7d";
                return $hx;
            case "\167\x63\x5f\156\x65\167\x5f\143\x75\x73\164\157\155\x65\162\137\156\157\164\x69\146":
                $hx .= "\x2c\x7b\x75\x73\x65\162\x2d\x65\155\141\x69\154\x7d\x2c\x7b\162\145\x67\x69\x73\x74\162\141\x74\x69\157\156\55\x64\x61\x74\x65\175";
                return $hx;
        }
        CN:
        Ld:
    }
    public function available_tags_new_customer($Yp, $rp)
    {
        $F_ = $rp["\143\165\163\x74\x6f\x6d\145\162\137\151\x64"];
        $Wb = get_userdata($F_)->user_email;
        $Pq = get_userdata($F_)->user_registered;
        $VG = substr($Pq, 0, 10);
        $cc = array("\165\x73\x65\x72\x2d\145\155\141\151\154" => $Wb, "\162\x65\147\151\163\164\162\141\164\x69\x6f\x6e\x2d\x64\141\164\x65" => $VG);
        $Yp = array_merge($Yp, $cc);
        return $Yp;
    }
    public function premium_tags($Yp, $rp)
    {
        $Cp = $rp["\157\x72\x64\x65\162\104\x65\164\141\151\154\163"];
        $Uy = $Cp->get_payment_method_title();
        $Fs = $Cp->get_total();
        $SI = $Cp->get_transaction_id();
        $b_ = $Cp->get_order_key();
        $te = $Cp->get_status();
        $HV = $this->billing_tags($rp);
        $HV = json_decode(wp_json_encode($HV), true);
        $vU = $this->shipping_tags($rp);
        $vU = json_decode(wp_json_encode($vU), true);
        $cc = array("\x6f\162\x64\145\162\55\163\164\x61\164\165\163" => $te, "\x70\x61\x79\155\x65\x6e\x74\x2d\x6d\145\x74\150\157\x64" => $Uy, "\x74\157\164\141\x6c\55\x41\x6d\157\165\x6e\164" => $Fs, "\x74\162\x61\x6e\163\141\143\164\x69\x6f\156\x2d\x49\x44" => $SI, "\x6f\x72\x64\x65\x72\55\153\145\171" => $b_);
        $cc = array_merge($cc, $HV);
        $cc = array_merge($cc, $vU);
        $Yp = array_merge($Yp, $cc);
        return $Yp;
    }
    public function available_tags_admin_order_status($Yp, $rp)
    {
        $Cp = $rp["\x6f\x72\144\x65\162\x44\x65\164\141\151\154\x73"];
        $Fs = $Cp->get_total();
        $b_ = $Cp->get_order_key();
        $Uy = $Cp->get_payment_method_title();
        $SI = $Cp->get_transaction_id();
        $HV = $this->billing_tags($rp);
        $HV = json_decode(wp_json_encode($HV), true);
        $vU = $this->shipping_tags($rp);
        $vU = json_decode(wp_json_encode($vU), true);
        $cc = array("\164\157\164\x61\154\x2d\x41\155\157\x75\156\x74" => $Fs, "\157\162\144\145\162\55\x6b\145\171" => $b_, "\x70\x61\x79\x6d\145\156\164\x2d\x6d\x6f\144\145" => $Uy, "\164\x72\x61\156\x73\x61\143\x74\x69\x6f\x6e\55\x49\104" => $SI);
        $cc = array_merge($cc, $HV);
        $cc = array_merge($cc, $vU);
        $Yp = array_merge($Yp, $cc);
        return $Yp;
    }
    public function billing_tags($rp)
    {
        $HV = array();
        $Cp = $rp["\157\x72\x64\x65\x72\x44\x65\164\x61\151\x6c\163"];
        $Cl = $Cp->get_billing_first_name();
        $BV = $Cp->get_billing_last_name();
        $dp = $Cp->get_billing_phone();
        $BY = $Cp->get_billing_email();
        $r_ = $Cp->get_billing_address_1();
        $ne = $Cp->get_billing_city();
        $y9 = $Cp->get_billing_state();
        $F1 = $Cp->get_billing_postcode();
        $zC = $Cp->get_billing_country();
        $HV = array(WcPremiumTags::BILLING_FIRST_NAME => $Cl, WcPremiumTags::BILLING_PHONE => $dp, WcPremiumTags::BILLING_EMAIL => $BY, WcPremiumTags::BILLING_ADDRESS => $r_, WcPremiumTags::BILLING_CITY => $ne, WcPremiumTags::BILLING_STATE => $y9, WcPremiumTags::BILLING_POSTCODE => $F1, WcPremiumTags::BILLING_COUNTRY => $zC);
        $HV = json_decode(wp_json_encode($HV));
        return $HV;
    }
    public function shipping_tags($rp)
    {
        $vU = array();
        $Cp = $rp["\x6f\x72\x64\145\162\104\145\x74\x61\151\154\x73"];
        $qb = $Cp->get_shipping_first_name();
        $La = $Cp->get_shipping_last_name();
        $Oe = $Cp->get_shipping_phone();
        $w0 = $Cp->get_shipping_address_1();
        $RS = $Cp->get_shipping_city();
        $mp = $Cp->get_shipping_state();
        $Bw = $Cp->get_shipping_postcode();
        $s7 = $Cp->get_shipping_country();
        $vU = array(WcPremiumTags::SHIPPING_FIRST_NAME => $qb, WcPremiumTags::SHIPPING_PHONE => $Oe, WcPremiumTags::SHIPPING_ADDRESS => $w0, WcPremiumTags::SHIPPING_CITY => $RS, WcPremiumTags::SHIPPING_STATE => $mp, WcPremiumTags::SHIPPING_POSTCODE => $Bw, WcPremiumTags::SHIPPING_COUNTRY => $s7);
        $vU = json_decode(wp_json_encode($vU));
        return $vU;
    }
}
Nh:
