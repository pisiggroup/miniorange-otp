<?php


namespace OTP\Handler;

if (defined("\x41\102\123\120\101\x54\110")) {
    goto vN;
}
exit;
vN:
use OTP\Helper\CountryList;
use OTP\Helper\GatewayFunctions;
use OTP\Helper\MoConstants;
use OTP\Helper\MocURLCall;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
use OTP\Objects\BaseActionHandler;
use OTP\Objects\TabDetails;
use OTP\Objects\Tabs;
use OTP\Traits\Instance;
if (class_exists("\x4d\157\x41\143\x74\151\x6f\x6e\x48\x61\156\x64\154\145\x72\x48\x61\156\144\x6c\145\x72")) {
    goto xZ;
}
class MoActionHandlerHandler extends BaseActionHandler
{
    use Instance;
    protected function __construct()
    {
        parent::__construct();
        $this->nonce = "\x6d\x6f\x5f\x61\144\x6d\x69\156\137\141\143\x74\151\157\156\x73";
        add_action("\x61\x64\x6d\151\156\137\151\x6e\x69\164", array($this, "\x6d\x6f\137\x68\141\156\144\x6c\145\x5f\141\x64\155\x69\156\137\x61\x63\x74\x69\157\156\x73"), 1);
        add_action("\x61\144\x6d\x69\156\137\151\156\151\164", array($this, "\x6d\157\123\143\x68\145\x64\165\154\x65\124\162\141\x6e\163\x61\143\x74\x69\x6f\x6e\x53\x79\x6e\143"), 1);
        add_action("\x61\144\155\151\156\x5f\151\x6e\151\x74", array($this, "\x63\x68\x65\143\x6b\x49\146\120\x6f\x70\x75\160\x54\x65\155\x70\x6c\x61\x74\145\101\x72\x65\x53\145\x74"), 1);
        add_filter("\144\x61\x73\150\x62\x6f\x61\x72\x64\137\x67\154\141\156\x63\x65\x5f\151\x74\x65\155\163", array($this, "\x6f\164\x70\137\x74\x72\x61\x6e\163\141\143\164\x69\157\x6e\163\x5f\147\x6c\x61\x6e\143\x65\x5f\x63\157\165\x6e\x74\145\162"), 10, 1);
        add_action("\x61\144\x6d\x69\156\137\x70\x6f\163\164\137\155\x69\x6e\151\x6f\162\141\156\x67\145\137\147\145\164\137\x66\157\x72\x6d\x5f\144\x65\x74\x61\x69\154\x73", array($this, "\x73\x68\157\x77\106\x6f\162\155\x48\124\115\114\x44\x61\x74\141"));
        add_action("\141\x64\155\x69\x6e\137\160\x6f\x73\x74\x5f\155\151\x6e\151\x6f\x72\x61\156\147\145\137\147\145\164\x5f\x67\141\x74\145\167\x61\171\137\143\x6f\x6e\x66\x69\147", array($this, "\163\150\157\167\107\141\164\x65\x77\141\171\x43\x6f\x6e\x66\x69\147"));
        add_action("\141\x64\155\x69\x6e\137\156\157\x74\151\x63\x65\163", array($this, "\x73\x68\x6f\167\116\x6f\x74\x69\x63\145"));
        add_action("\x77\x70\137\x61\152\141\170\137\x6d\157\x5f\144\151\163\155\151\x73\163\137\156\157\164\x69\x63\x65", array($this, "\x64\x69\163\155\x69\x73\163\137\x6e\157\x74\151\143\x65"));
        add_action("\167\160\137\x61\x6a\141\170\137\155\157\x5f\x64\x69\x73\155\151\163\x73\137\x73\155\163\137\x6e\x6f\164\151\143\x65", array($this, "\x64\x69\x73\155\x69\163\x73\x5f\163\x6d\163\x5f\156\x6f\164\x69\x63\x65"));
        add_action("\167\160\137\x61\152\141\170\x5f\155\157\x5f\x6d\x6f\x64\x61\154\137\x61\143\164\x69\x6f\156", array($this, "\155\x6f\x5f\x74\x72\141\x6e\163\x61\143\164\x69\157\156\x5f\x6d\x6f\144\x61\x6c\x5f\141\143\164\151\x6f\x6e"));
    }
    public function showNotice()
    {
        $mH = admin_url() . "\x61\144\155\x69\156\x2e\x70\x68\x70\x3f\x70\x61\x67\x65\x3d\x6d\157\157\x74\x70\160\x72\151\x63\151\156\x67";
        $R_ = admin_url() . "\x61\x64\x6d\x69\x6e\56\160\x68\x70\x3f\x70\141\147\145\x3d\x61\x64\x64\x6f\156";
        $sf = isset($_SERVER["\x51\x55\x45\122\131\x5f\x53\124\x52\x49\116\107"]) ? sanitize_text_field(wp_unslash($_SERVER["\121\125\105\x52\x59\137\x53\124\122\x49\116\x47"])) : '';
        $ZB = admin_url() . "\141\144\x6d\x69\x6e\x2e\160\x68\x70\x3f" . $sf;
        $Jl = get_mo_option("\155\x6f\x5f\x68\x69\144\x65\137\156\x6f\x74\x69\143\x65");
        if (!("\155\x6f\x5f\150\x69\144\x65\137\x6e\157\164\151\143\x65" !== $Jl)) {
            goto wt;
        }
        if (!(!strcmp(MOV_TYPE, "\105\156\164\x65\162\160\162\151\163\x65\107\x61\x74\145\167\141\x79\127\151\164\x68\101\144\144\x6f\156\163") !== 0 && $ZB !== $mH)) {
            goto XR;
        }
        echo "\x3c\x64\x69\x76\x20\x63\154\141\x73\x73\x3d\42\155\157\x5f\156\x6f\164\x69\x63\x65\x20\165\160\144\141\x74\x65\144\x20\x6e\x6f\164\151\x63\145\40\x69\163\55\x64\x69\x73\x6d\x69\x73\x73\x69\x62\154\x65\x22\40\x73\x74\171\154\x65\75\42\160\x61\144\x64\x69\156\147\x2d\142\x6f\164\x74\x6f\x6d\x3a\40\x37\x70\170\73\x62\x61\x63\153\x67\x72\x6f\165\156\x64\x2d\143\157\x6c\x6f\162\72\43\x65\x30\145\x65\145\x65\71\x39\73\x22\76\xd\xa\40\x20\40\40\x20\x20\x20\40\74\x70\x20\163\164\171\x6c\x65\x20\x3d\x22\x66\x6f\x6e\164\x2d\x73\151\x7a\145\72\x31\x34\160\x78\x3b\42\76\x3c\151\x6d\x67\x20\163\162\143\75\x22" . esc_url(MOV_FEATURES_GRAPHIC) . "\42\40\143\154\x61\x73\x73\x3d\42\163\150\157\167\137\155\x6f\137\x69\x63\x6f\x6e\137\146\157\x72\155\x22\x20\163\164\171\154\x65\75\x22\167\151\144\164\150\x3a\40\x33\x25\73\155\141\162\147\151\x6e\x2d\x62\x6f\164\x74\x6f\x6d\x3a\x20\x2d\x31\45\x3b\x22\x3e\46\145\x6e\x73\160\x3b\x3c\x62\x3e\x57\145\x20\x73\165\x70\160\157\162\x74\40\117\x54\x50\x20\x56\145\x72\151\146\x69\x63\141\x74\x69\157\x6e\40\x6f\x6e\x20\x34\60\x2b\x20\146\157\x72\155\163\x2c\x20\x50\141\163\163\167\157\162\x64\x4c\x65\x73\x73\x20\114\157\x67\151\156\54\40\x57\157\x6f\x43\x6f\155\x6d\145\x72\143\x65\x20\123\x4d\x53\x20\x4e\157\164\151\146\151\x63\141\x74\151\157\x6e\x73\x20\x66\157\162\x20\x41\144\x6d\151\x6e\163\x2c\40\126\x65\156\144\x6f\x72\163\x20\x26\x20\103\x75\163\164\x6f\155\x65\x72\163\54\x20\120\x61\163\163\167\x6f\162\144\x20\122\145\163\x65\164\40\x76\151\141\x20\x4f\124\x50\40\x61\156\144\x20\155\141\x6e\x79\40\x6d\157\x72\145\x2e\x3c\142\162\x3e\x3c\142\x72\76\x41\x57\x53\x20\123\x4e\123\54\x20\x54\167\x69\x6c\x69\x6f\40\x47\141\x74\145\x77\x61\x79\40\46\x20\x6d\x6f\162\x65\x20\147\141\164\x65\167\x61\171\x73\x20\163\165\x70\x70\x6f\162\164\145\x64\x21\x20\127\141\156\164\40\164\x6f\x20\x6b\x6e\x6f\167\40\155\157\162\145\77\x20\103\x68\145\x63\153\x20\x69\164\x20\x6f\x75\x74\40\x68\145\162\145\40\x3a\40\74\141\x20\x68\162\x65\x66\75" . esc_url($mH) . "\x3e\120\154\x61\x6e\40\x44\145\164\141\151\154\x73\74\x2f\141\76\56\x3c\57\x62\76\x3c\x2f\160\x3e\xd\12\x20\x20\x20\x20\40\40\40\x20\40\74\57\144\151\166\76";
        XR:
        wt:
    }
    public function dismiss_notice()
    {
        update_mo_option("\155\x6f\x5f\150\151\x64\145\x5f\156\x6f\x74\x69\143\145", "\x6d\157\x5f\x68\x69\144\x65\137\156\157\164\x69\x63\145");
    }
    public function dismiss_sms_notice()
    {
        update_mo_option("\x6d\x6f\x5f\150\x69\x64\145\x5f\163\155\163\x5f\x6e\x6f\x74\151\x63\145", "\x6d\157\x5f\150\151\x64\145\x5f\x73\x6d\x73\137\156\157\164\x69\x63\145");
    }
    public function mo_handle_admin_actions()
    {
        if (isset($_POST["\x6f\160\x74\151\157\x6e"])) {
            goto ey;
        }
        return;
        ey:
        switch ($_POST["\x6f\160\x74\151\157\x6e"]) {
            case "\x6d\x6f\x5f\143\x75\x73\164\157\155\145\x72\137\x76\141\x6c\151\144\141\x74\151\x6f\156\137\x73\x65\164\164\x69\x6e\147\163":
                if (!(!current_user_can("\155\141\156\141\x67\145\137\157\x70\x74\151\x6f\156\x73") || !check_admin_referer($this->nonce))) {
                    goto PJ;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                PJ:
                $this->mo_save_settings(MoUtility::mo_sanitize_array($_POST), MoUtility::mo_sanitize_array($_GET));
                goto dy;
            case "\155\157\x5f\143\x75\x73\164\157\x6d\x65\x72\x5f\166\141\154\151\144\x61\x74\x69\157\156\137\x6d\145\x73\163\141\147\x65\x73":
                if (!(!current_user_can("\155\141\156\141\147\145\x5f\157\x70\x74\x69\x6f\x6e\163") || !check_admin_referer($this->nonce))) {
                    goto cM;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                cM:
                $this->mo_handle_custom_messages_form_submit(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\x6d\x6f\x5f\x76\x61\154\x69\x64\141\x74\x69\157\156\x5f\143\x6f\x6e\164\141\x63\164\137\x75\163\x5f\161\x75\x65\162\x79\x5f\157\x70\x74\x69\157\x6e":
                if (!(!current_user_can("\155\141\156\x61\147\x65\x5f\157\160\x74\x69\x6f\156\x73") || !check_admin_referer($this->nonce))) {
                    goto c1;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                c1:
                $this->mo_validation_support_query(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\x6d\x6f\137\x6f\x74\160\x5f\x65\170\164\162\x61\x5f\163\145\x74\x74\x69\x6e\x67\x73":
                if (!(!current_user_can("\155\x61\156\x61\x67\145\137\157\x70\164\151\x6f\156\163") || !check_admin_referer($this->nonce))) {
                    goto Jq;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                Jq:
                $this->mo_save_extra_settings(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\x6d\157\x5f\157\x74\x70\x5f\146\x65\145\144\x62\141\143\153\x5f\157\160\x74\x69\x6f\x6e":
                if (!(!current_user_can("\x6d\x61\x6e\141\147\x65\x5f\x6f\160\164\x69\157\x6e\163") || !check_admin_referer($this->nonce))) {
                    goto FE;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                FE:
                $this->mo_validation_feedback_query(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\x63\150\145\143\x6b\137\155\157\137\x6c\x6e":
                if (!(!current_user_can("\155\x61\156\x61\x67\x65\x5f\x6f\160\x74\x69\x6f\x6e\163") || !check_admin_referer($this->nonce))) {
                    goto Hp;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                Hp:
                $this->mo_check_l();
                goto dy;
            case "\155\157\137\143\150\x65\143\153\x5f\164\x72\141\x6e\163\x61\x63\164\x69\x6f\156\163":
                if (!(!current_user_can("\155\x61\x6e\141\147\145\x5f\157\160\164\151\x6f\156\163") || !check_admin_referer("\155\157\x5f\x63\x68\145\143\x6b\137\164\x72\x61\x6e\163\141\143\164\151\157\x6e\163\x5f\146\157\162\155", "\137\x6e\157\x6e\x63\145"))) {
                    goto jx;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                jx:
                $this->mo_check_transactions();
                goto dy;
            case "\155\x6f\137\143\x75\x73\164\157\x6d\145\162\x5f\x76\141\154\x69\144\x61\164\151\x6f\x6e\137\163\155\x73\x5f\x63\x6f\x6e\146\x69\x67\x75\x72\x61\164\x69\157\x6e":
                if (!(!current_user_can("\x6d\141\x6e\x61\147\145\137\157\x70\164\151\157\156\x73") || !check_admin_referer($this->nonce))) {
                    goto hP;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                hP:
                $this->mo_configure_sms_template(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\x6d\x6f\137\x63\165\163\164\x6f\x6d\145\162\x5f\x76\x61\x6c\x69\x64\x61\x74\151\157\x6e\x5f\x65\x6d\x61\151\154\x5f\143\157\156\146\151\x67\165\x72\141\164\x69\x6f\156":
                if (!(!current_user_can("\x6d\x61\156\141\x67\x65\x5f\157\160\x74\x69\x6f\x6e\163") || !check_admin_referer($this->nonce))) {
                    goto y8;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                y8:
                $this->mo_configure_email_template(MoUtility::mo_sanitize_array($_POST));
                goto dy;
            case "\155\x6f\137\143\165\x73\x74\x6f\155\x65\x72\137\143\165\163\x74\157\155\151\x7a\x61\x74\x69\x6f\x6e\137\146\157\x72\x6d":
                if (!(!current_user_can("\x6d\x61\156\x61\x67\x65\137\157\160\164\151\157\x6e\x73") || !check_admin_referer($this->nonce))) {
                    goto Xs;
                }
                wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
                Xs:
                $this->mo_configure_custom_form(MoUtility::mo_sanitize_array($_POST));
                goto dy;
        }
        J_:
        dy:
    }
    private function mo_configure_custom_form($post)
    {
        $this->is_valid_request();
        update_mo_option("\143\x66\137\163\x75\x62\155\151\x74\137\151\x64", MoUtility::sanitize_check("\x63\x66\x5f\x73\x75\x62\x6d\x69\164\137\151\144", $post), "\x6d\157\x5f\157\164\x70\x5f");
        update_mo_option("\143\146\137\146\x69\x65\x6c\x64\137\151\144", MoUtility::sanitize_check("\143\x66\137\146\151\x65\x6c\x64\137\x69\144", $post), "\x6d\157\137\157\164\160\137");
        update_mo_option("\143\x66\137\x65\x6e\x61\142\x6c\145\137\x74\171\160\x65", MoUtility::sanitize_check("\143\x66\137\x65\156\141\142\154\x65\137\164\x79\x70\145", $post), "\x6d\x6f\137\x6f\x74\x70\x5f");
        update_mo_option("\143\146\x5f\142\x75\x74\x74\157\156\x5f\x74\145\x78\x74", MoUtility::sanitize_check("\x63\x66\137\x62\165\x74\164\157\156\137\x74\145\170\x74", $post), "\x6d\x6f\137\x6f\x74\160\137");
    }
    public function mo_handle_custom_messages_form_submit($post)
    {
        update_mo_option("\163\165\x63\143\x65\163\163\137\x65\x6d\141\x69\154\137\155\145\x73\163\141\x67\145", stripslashes(MoUtility::sanitize_check("\x6f\164\x70\x5f\163\x75\143\143\x65\x73\163\137\x65\155\x61\x69\x6c", $post)), "\155\x6f\137\x6f\x74\160\x5f");
        update_mo_option("\163\x75\143\x63\145\163\x73\137\x70\x68\157\156\x65\137\155\145\x73\163\141\x67\x65", stripslashes(MoUtility::sanitize_check("\x6f\x74\x70\137\163\x75\x63\x63\145\163\x73\137\160\x68\157\x6e\x65", $post)), "\155\157\x5f\157\x74\160\x5f");
        update_mo_option("\145\162\162\157\x72\x5f\160\150\x6f\x6e\x65\x5f\x6d\145\163\x73\x61\147\145", stripslashes(MoUtility::sanitize_check("\x6f\x74\x70\137\x65\162\x72\157\162\137\x70\x68\157\156\x65", $post)), "\x6d\157\x5f\x6f\164\x70\x5f");
        update_mo_option("\145\162\x72\x6f\x72\x5f\145\155\141\151\154\137\155\x65\x73\x73\x61\x67\145", stripslashes(MoUtility::sanitize_check("\157\164\160\137\145\162\x72\157\x72\137\145\x6d\141\151\x6c", $post)), "\155\x6f\x5f\157\164\160\x5f");
        update_mo_option("\x69\156\x76\141\x6c\151\x64\137\x70\x68\157\x6e\145\137\x6d\145\163\163\141\x67\145", stripslashes(MoUtility::sanitize_check("\157\164\160\137\151\x6e\x76\141\x6c\151\x64\137\x70\x68\x6f\156\x65", $post)), "\x6d\157\x5f\x6f\164\160\137");
        update_mo_option("\151\x6e\166\x61\x6c\151\x64\137\x65\155\x61\151\154\137\x6d\x65\163\163\141\x67\145", stripslashes(MoUtility::sanitize_check("\157\x74\160\x5f\x69\156\166\x61\x6c\151\x64\x5f\145\155\x61\151\154", $post)), "\x6d\x6f\x5f\157\x74\x70\x5f");
        update_mo_option("\x69\x6e\x76\x61\154\151\144\x5f\155\x65\x73\x73\x61\147\145", stripslashes(MoUtility::sanitize_check("\151\156\166\x61\x6c\x69\144\x5f\157\x74\x70", $post)), "\155\x6f\x5f\x6f\x74\x70\x5f");
        update_mo_option("\x62\154\x6f\x63\x6b\x65\144\137\145\155\141\151\154\x5f\155\x65\x73\163\x61\x67\145", stripslashes(MoUtility::sanitize_check("\x6f\164\x70\137\x62\x6c\157\x63\x6b\145\x64\x5f\x65\155\x61\151\154", $post)), "\x6d\x6f\x5f\x6f\x74\160\x5f");
        update_mo_option("\142\154\157\143\x6b\145\144\137\x70\150\x6f\156\145\x5f\155\x65\x73\x73\141\147\145", stripslashes(MoUtility::sanitize_check("\x6f\x74\x70\x5f\x62\x6c\157\x63\153\x65\144\137\160\x68\x6f\156\x65", $post)), "\x6d\157\137\157\x74\160\137");
        do_action("\x6d\x6f\137\x72\x65\x67\x69\x73\x74\x72\141\x74\151\x6f\156\137\x73\x68\x6f\167\137\155\145\x73\x73\141\x67\x65", MoMessages::showMessage(MoMessages::MSG_TEMPLATE_SAVED), "\123\x55\103\103\x45\x53\x53");
    }
    private function mo_save_settings($w3, $Jz)
    {
        $W1 = TabDetails::instance();
        $fw = $W1->tab_details[Tabs::FORMS];
        if (!(MoUtility::sanitize_check("\x70\x61\x67\x65", $Jz) !== $fw->menu_slug && sanitize_text_field($w3["\145\x72\162\x6f\162\137\155\145\163\163\x61\x67\x65"]))) {
            goto an;
        }
        do_action("\155\157\137\x72\x65\x67\x69\163\164\162\x61\x74\x69\157\156\137\x73\x68\x6f\167\x5f\155\x65\163\163\x61\147\x65", MoMessages::showMessage(sanitize_text_field($w3["\x65\162\162\x6f\162\x5f\x6d\145\x73\163\x61\147\145"])), "\x45\122\x52\x4f\122");
        an:
    }
    private function mo_save_extra_settings($bD)
    {
        delete_site_option("\144\x65\x66\x61\165\154\164\x5f\x63\x6f\165\156\x74\162\171\x5f\x63\x6f\x64\x65");
        $Lr = isset($bD["\x64\x65\146\x61\165\154\164\137\x63\x6f\x75\156\x74\x72\171\137\x63\157\144\x65"]) ? sanitize_text_field($bD["\x64\x65\146\x61\165\154\164\x5f\143\x6f\165\156\164\162\171\137\x63\x6f\x64\x65"]) : '';
        update_mo_option("\x64\145\x66\141\165\154\x74\x5f\143\157\x75\x6e\x74\162\x79", maybe_serialize(CountryList::$countries[$Lr]));
        update_mo_option("\142\154\157\x63\x6b\145\144\137\x64\x6f\x6d\x61\151\x6e\x73", MoUtility::sanitize_check("\x6d\x6f\x5f\x6f\164\160\137\x62\x6c\x6f\143\153\145\x64\137\x65\x6d\141\x69\154\137\144\x6f\155\x61\x69\156\163", $bD));
        update_mo_option("\142\154\x6f\x63\153\145\144\137\160\150\x6f\156\145\x5f\156\x75\155\x62\145\x72\163", MoUtility::sanitize_check("\155\x6f\x5f\x6f\164\160\x5f\x62\154\x6f\143\153\x65\x64\x5f\160\x68\x6f\156\x65\x5f\156\x75\155\142\145\x72\163", $bD));
        update_mo_option("\163\150\157\x77\137\x72\145\155\141\151\156\151\x6e\147\137\x74\x72\x61\x6e\x73", MoUtility::sanitize_check("\155\x6f\137\x73\x68\x6f\167\137\x72\x65\x6d\141\x69\156\151\156\147\137\164\162\141\156\163", $bD));
        update_mo_option("\x73\150\x6f\167\137\x64\x72\x6f\x70\144\x6f\167\x6e\137\x6f\156\137\146\157\162\155", MoUtility::sanitize_check("\163\150\157\167\137\x64\162\157\x70\144\157\167\156\137\157\x6e\x5f\x66\157\162\155", $bD));
        update_mo_option("\x6f\164\x70\x5f\x6c\145\x6e\x67\x74\x68", MoUtility::sanitize_check("\155\x6f\x5f\x6f\164\x70\137\x6c\145\x6e\147\x74\150", $bD));
        update_mo_option("\x6f\164\x70\x5f\x76\141\154\x69\x64\x69\x74\171", MoUtility::sanitize_check("\x6d\x6f\x5f\157\x74\160\x5f\166\141\x6c\x69\x64\x69\x74\171", $bD));
        update_mo_option("\147\x65\156\x65\162\x61\x74\145\137\141\x6c\160\150\141\156\x75\x6d\145\162\x69\x63\137\x6f\164\x70", MoUtility::sanitize_check("\x6d\157\137\x67\145\156\x65\162\x61\x74\x65\137\141\x6c\x70\x68\x61\x6e\x75\x6d\x65\x72\151\x63\x5f\157\x74\x70", $bD));
        update_mo_option("\147\154\x6f\142\141\154\x6c\x79\137\142\x61\156\x6e\x65\144\137\x70\150\x6f\156\145", MoUtility::sanitize_check("\x6d\x6f\x5f\x67\154\x6f\142\x61\x6c\x6c\x79\x5f\142\141\156\156\x65\x64\x5f\160\150\x6f\x6e\145", $bD));
        update_mo_option("\x6d\x61\x73\x74\x65\x72\157\164\x70\137\x76\141\x6c\151\x64\151\x74\x79", MoUtility::sanitize_check("\155\x6f\x5f\x6d\x61\x73\x74\145\x72\157\x74\160\137\x76\x61\x6c\151\144\151\164\x79", $bD));
        update_mo_option("\x6d\x61\x73\x74\145\162\157\164\x70\137\141\x64\x6d\x69\x6e", MoUtility::sanitize_check("\x6d\x6f\137\155\x61\163\164\145\162\157\164\160\x5f\x61\144\155\x69\156", $bD));
        update_mo_option("\x6d\x61\163\x74\x65\162\157\x74\x70\x5f\165\163\x65\162", MoUtility::sanitize_check("\155\x6f\x5f\155\x61\x73\x74\145\162\x6f\x74\x70\137\x75\163\x65\162", $bD));
        update_mo_option("\155\x61\x73\164\145\x72\157\x74\160\x5f\141\144\x6d\x69\x6e\x73", MoUtility::sanitize_check("\x6d\x6f\x5f\x6d\x61\163\x74\145\x72\157\x74\160\137\141\x64\x6d\x69\x6e\163", $bD));
        update_mo_option("\x6d\141\x73\x74\145\162\x6f\164\x70\137\163\x70\x65\x63\151\x66\151\143\x5f\165\163\x65\x72", MoUtility::sanitize_check("\x6d\x6f\x5f\x6d\141\163\164\145\162\157\x74\x70\x5f\163\x70\x65\143\151\146\x69\143\137\165\x73\x65\162", $bD));
        update_mo_option("\x6d\x61\163\x74\145\x72\157\164\160\x5f\163\160\145\x63\x69\x66\x69\143\137\165\x73\145\162\137\144\x65\164\x61\151\x6c\x73", MoUtility::sanitize_check("\155\x61\x73\x74\145\x72\x6f\164\160\137\163\x70\145\143\x69\x66\x69\143\x5f\x75\163\145\162\x5f\144\x65\164\141\x69\x6c\x73", $bD));
        do_action("\x6d\157\137\162\x65\x67\x69\x73\x74\162\x61\164\x69\x6f\156\137\163\150\x6f\167\x5f\x6d\145\x73\x73\x61\147\x65", MoMessages::showMessage(MoMessages::EXTRA_SETTINGS_SAVED), "\123\x55\x43\103\x45\x53\x53");
    }
    private function mo_validation_support_query($w3)
    {
        $ZG = MoUtility::sanitize_check("\161\x75\x65\x72\x79\x5f\x65\155\141\151\154", $w3);
        $nz = MoUtility::sanitize_check("\161\x75\145\162\x79", $w3);
        $M9 = MoUtility::sanitize_check("\x71\165\145\162\x79\x5f\160\150\x6f\156\x65", $w3);
        if (!(!$ZG || !$nz)) {
            goto IQ;
        }
        do_action("\x6d\157\x5f\162\145\147\x69\163\164\162\x61\164\151\x6f\x6e\x5f\163\x68\x6f\167\x5f\x6d\145\163\163\x61\x67\145", MoMessages::showMessage(MoMessages::SUPPORT_FORM_VALUES), "\105\x52\x52\117\x52");
        return;
        IQ:
        $RB = MocURLCall::submit_contact_us($ZG, $M9, $nz);
        if (!(json_last_error() === JSON_ERROR_NONE && $RB)) {
            goto te;
        }
        do_action("\155\157\137\162\x65\147\151\x73\x74\162\x61\x74\151\157\x6e\x5f\x73\150\x6f\167\x5f\x6d\145\x73\x73\x61\x67\x65", MoMessages::showMessage(MoMessages::SUPPORT_FORM_SENT), "\x53\x55\x43\103\105\123\x53");
        return;
        te:
        do_action("\x6d\157\137\162\x65\147\151\163\164\162\x61\x74\151\x6f\x6e\x5f\x73\x68\157\x77\137\x6d\145\163\163\141\x67\x65", MoMessages::showMessage(MoMessages::SUPPORT_FORM_ERROR), "\x45\x52\122\117\122");
    }
    public function otp_transactions_glance_counter()
    {
        if (!(!MoUtility::micr() || !MoUtility::is_mg())) {
            goto JT;
        }
        return;
        JT:
        $ZG = get_mo_option("\145\x6d\141\151\154\137\164\162\141\156\163\141\143\164\x69\x6f\156\x73\137\x72\x65\155\x61\x69\156\151\156\x67");
        $M9 = get_mo_option("\x70\x68\157\156\x65\x5f\164\x72\141\156\x73\x61\143\x74\151\157\156\x73\x5f\162\x65\155\x61\151\x6e\151\x6e\147");
        echo "\74\154\151\40\x63\x6c\x61\163\x73\75\47\x6d\157\55\164\162\x61\156\x73\x2d\x63\x6f\x75\156\x74\47\76\x3c\x61\40\x68\x72\x65\x66\x3d\x27" . esc_url(admin_url()) . "\x61\144\x6d\x69\x6e\x2e\160\x68\x70\77\x70\141\147\x65\x3d\155\x6f\163\x65\164\x74\x69\x6e\x67\163\x27\x3e" . wp_kses(MoMessages::showMessage(MoMessages::TRANS_LEFT_MSG, array("\145\x6d\141\151\x6c" => $ZG, "\x70\x68\157\156\145" => $M9)), array("\142" => array(), "\x69" => array())) . "\x3c\57\x61\76\74\57\154\151\x3e";
    }
    public function mo_transaction_modal_action()
    {
        if (!(!current_user_can("\155\141\156\x61\147\145\137\157\160\x74\151\157\156\163") || !check_ajax_referer($this->nonce, "\x73\x65\x63\x75\x72\151\164\171"))) {
            goto pq;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        pq:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $oW = get_mo_option("\x6d\x6f\x5f\164\162\141\x6e\163\141\143\x74\x69\x6f\156\137\x6e\157\164\151\x63\x65");
        $JH = $GX["\163\150\157\167\x6e\137\162\145\x6d\141\x69\156\151\156\147"];
        if (!(false !== $JH)) {
            goto Ux;
        }
        unset($oW[$JH]);
        Ux:
        update_mo_option("\x6d\x6f\x5f\164\x72\141\x6e\x73\141\143\164\x69\157\156\137\156\x6f\164\151\x63\x65", $oW);
        wp_send_json(MoUtility::create_json($JH, MoConstants::SUCCESS_JSON_TYPE));
    }
    public function checkIfPopupTemplateAreSet()
    {
        $oi = maybe_unserialize(get_mo_option("\x63\x75\163\164\x6f\155\137\160\x6f\160\165\x70\x73"));
        if (!empty($oi)) {
            goto bM;
        }
        $zD = apply_filters("\x6d\x6f\137\164\x65\x6d\160\x6c\x61\164\x65\137\x64\x65\x66\x61\165\154\164\x73", array());
        update_mo_option("\x63\165\163\164\157\x6d\x5f\160\157\x70\x75\160\x73", maybe_serialize($zD));
        bM:
    }
    public function showFormHTMLData()
    {
        if (!(!current_user_can("\155\141\156\x61\147\x65\137\x6f\x70\x74\x69\x6f\x6e\163") || !check_admin_referer($this->nonce))) {
            goto UA;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        UA:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $p1 = sanitize_text_field($GX["\x66\x6f\162\x6d\137\x6e\x61\x6d\145"]);
        $d6 = MOV_DIR . "\x63\x6f\156\164\162\157\x6c\154\x65\x72\163\x2f";
        $U5 = !MoUtility::micr() ? "\144\151\x73\141\142\154\x65\144" : '';
        $sh = admin_url() . "\145\x64\x69\x74\x2e\x70\150\160\77\x70\x6f\x73\164\137\x74\x79\x70\145\75\x70\x61\x67\145";
        ob_start();
        include $d6 . "\146\x6f\162\x6d\x73\x2f" . $p1 . "\x2e\160\x68\x70";
        $f2 = ob_get_clean();
        wp_send_json(MoUtility::create_json($f2, MoConstants::SUCCESS_JSON_TYPE));
    }
    public function showGatewayConfig()
    {
        if (!(!current_user_can("\155\x61\156\141\x67\x65\x5f\x6f\160\164\x69\157\156\x73") || !check_admin_referer($this->nonce))) {
            goto Mw;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        Mw:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $ie = sanitize_text_field(wp_unslash($GX["\x67\141\164\145\167\x61\171\137\x74\171\160\145"]));
        $dh = "\117\124\120\134\110\x65\154\x70\x65\162\134\x47\x61\164\145\167\141\x79\x5c" . $ie;
        $U5 = !MoUtility::micr() ? "\144\x69\163\141\142\154\145\x64" : '';
        $x5 = get_mo_option("\x63\165\163\164\157\x6d\137\x73\x6d\163\x5f\147\x61\164\x65\x77\x61\x79") ? get_mo_option("\x63\x75\163\164\157\x6d\x5f\x73\155\x73\137\x67\141\x74\x65\167\x61\x79") : '';
        $sB = $dh::instance()->get_gateway_config_view($U5, $x5);
        wp_send_json(MoUtility::create_json($sB, MoConstants::SUCCESS_JSON_TYPE));
    }
    public function moScheduleTransactionSync()
    {
        if (!(!wp_next_scheduled("\150\x6f\165\162\154\x79\x5f\163\x79\x6e\x63") && MoUtility::micr())) {
            goto pd;
        }
        wp_schedule_event(time(), "\x64\x61\x69\x6c\x79", "\x68\157\165\x72\x6c\171\137\163\171\x6e\143");
        pd:
    }
    public function mo_feedback_reasons()
    {
        $wY = array("\156\x6f\164\137\x74\x68\145\137\146\x65\164\165\162\145\x5f\x69\137\x77\x61\x6e\x74\x65\x64" => "\x46\x65\x61\164\x75\162\145\x73\40\111\x20\167\x61\156\164\x65\x64\x20\x61\162\145\40\155\x69\163\x73\151\156\x67", "\157\x74\160\x5f\156\157\x74\x5f\x72\145\143\145\151\x76\145\144" => "\x4f\x54\x50\x2f\x53\x4d\x53\x20\40\151\x73\40\156\157\x74\x20\x72\x65\143\x65\x69\166\x69\156\147", "\165\156\141\142\154\x65\137\164\157\x5f\x73\145\164\165\x70\x5f\x70\154\165\x67\151\x6e" => "\x55\156\141\x62\154\145\x20\x74\157\x20\x73\x65\164\165\160\x20\160\154\165\147\x69\x6e\x2c\x20\x4c\141\x63\153\40\157\146\40\x64\157\x63\x75\155\145\x6e\x74\141\x74\151\157\156", "\x74\x65\x6d\x70\157\x72\141\x72\x79\x5f\144\x65\x61\143\164\x69\166\141\x74\151\x6f\x6e" => "\x54\x65\x6d\160\157\162\141\162\151\x6c\171\x20\x64\x65\141\x63\164\x69\x76\141\164\x69\157\156\40\x74\x6f\40\144\x65\142\165\x67\40\141\156\x20\151\x73\163\165\145", "\143\x6f\x73\164\137\x69\x73\x5f\164\x6f\157\x5f\150\x69\x67\x68" => "\103\x6f\163\164\x20\151\163\x20\x74\x6f\157\x20\150\151\x67\x68", "\x75\160\147\162\x61\x64\x65\144\137\x74\x6f\x5f\160\162\145\155\137\x70\154\x61\156" => "\125\x70\x67\x72\141\144\145\x64\40\164\157\40\164\150\145\x20\160\162\x65\x6d\151\165\x6d\x20\160\x6c\165\x67\x69\x6e");
        return $wY;
    }
    private function get_feedback_html()
    {
        $zh = "\74\150\164\x6d\154\x3e\x3c\x68\x65\141\x64\76\x3c\x74\151\x74\x6c\x65\76\x3c\x2f\164\x69\x74\154\x65\x3e\74\x2f\150\145\141\144\x3e\74\142\157\x64\171\x3e\x20\74\x64\x69\166\x3e\40\106\x69\162\x73\x74\40\x4e\141\x6d\145\x20\x3a\173\173\x46\x49\122\x53\x54\137\x4e\101\x4d\x45\x7d\175\x3c\142\162\57\x3e\x3c\142\162\x2f\76\40\114\141\163\x74\x20\116\141\155\145\x20\72\x7b\173\x4c\101\x53\x54\x5f\x4e\x41\x4d\x45\175\x7d\74\x62\x72\x2f\x3e\74\142\x72\57\x3e\x20\123\x65\162\x76\x65\x72\x20\x4e\x61\155\x65\40\x3a\x7b\x7b\123\105\x52\126\x45\x52\175\x7d\x3c\x62\x72\x2f\76\x3c\142\x72\57\76\40\x45\x6d\141\x69\154\40\72\173\x7b\x45\115\x41\x49\x4c\x7d\175\74\x62\162\x2f\x3e\74\142\x72\57\76\120\x6c\165\147\151\156\40\x54\171\160\x65\x20\x3a\40\173\173\120\114\125\x47\111\x4e\137\x54\x59\120\105\x7d\x7d\74\142\x72\57\76\x3c\142\x72\x2f\76\40\173\x7b\x54\x59\x50\x45\175\x7d\72\x20\133\x7b\173\x50\x4c\x55\107\x49\116\x7d\175\x20\x2d\x20\173\173\126\x45\x52\123\x49\117\x4e\175\175\135\40\72\x20\74\x62\x72\x2f\76\x3c\142\x72\x2f\x3e\74\x73\164\162\157\x6e\147\x3e\x3c\145\x6d\x3e\x46\145\x65\144\142\141\143\153\40\72\x20\x3c\57\145\155\x3e\x3c\57\163\x74\162\157\x6e\147\x3e\x7b\173\106\105\105\x44\x42\x41\103\x4b\175\x7d\x3c\x2f\x64\151\x76\x3e\x3c\57\142\x6f\144\171\76\x3c\57\150\x74\x6d\154\x3e";
        return $zh;
    }
    private function mo_validation_feedback_query($bD)
    {
        $wo = sanitize_text_field($bD["\x6d\x69\x6e\x69\x6f\x72\141\x6e\x67\145\137\146\145\145\144\x62\141\143\153\137\x73\165\x62\x6d\x69\x74"]);
        if (!("\123\x6b\x69\160\x20\x26\x20\104\x65\x61\x63\x74\x69\x76\141\x74\x65" === $wo)) {
            goto nM;
        }
        deactivate_plugins(array(MOV_PLUGIN_NAME));
        delete_mo_option("\x6d\157\137\150\151\x64\145\x5f\x6e\157\x74\x69\143\145");
        return;
        nM:
        $I_ = strcasecmp(sanitize_text_field($bD["\x70\154\165\147\151\156\x5f\144\145\x61\x63\164\151\x76\x61\164\145\144"]), "\x74\x72\165\x65") === 0;
        $R7 = !$I_ ? mo_("\133\40\x50\x6c\165\x67\x69\156\x20\x46\x65\x65\x64\x62\141\x63\153\x20\135\40\x3a\x20") : mo_("\x5b\x20\120\154\x75\147\x69\156\x20\x44\x65\x61\143\164\x69\x76\141\164\x65\x64\x20\x5d");
        $S6 = array();
        $wY = $this->mo_feedback_reasons();
        if (!isset($bD["\155\x69\156\x69\157\x72\141\156\x67\x65\137\x66\x65\145\144\x62\x61\143\153\x5f\x73\x75\x62\x6d\151\x74"])) {
            goto rJ;
        }
        if (empty($bD["\162\x65\x61\x73\x6f\x6e"])) {
            goto jP;
        }
        foreach (MoUtility::mo_sanitize_array($bD["\162\x65\141\163\x6f\x6e"]) as $bh) {
            $S6[] = $wY[$bh];
            l0:
        }
        tX:
        jP:
        rJ:
        $xj = implode("\40\x2c\x20", $S6) . "\40\x2c\x20" . sanitize_text_field($bD["\161\x75\145\162\x79\137\146\145\145\x64\142\141\143\x6b"]);
        $dl = $this->get_feedback_html();
        $current_user = wp_get_current_user();
        $wk = MoUtility::micv() ? "\x50\162\145\155\151\165\155" : "\x46\162\x65\x65";
        $ZG = get_mo_option("\x61\144\155\151\x6e\x5f\x65\155\141\x69\x6c");
        $hq = get_mo_option("\160\154\165\147\151\x6e\137\x61\x63\x74\151\166\141\x74\151\157\x6e\137\x64\141\164\x65");
        $i6 = round((strtotime(gmdate("\x59\55\x6d\x2d\144\40\150\72\151\72\163\x61")) - strtotime($hq)) / (60 * 60 * 24));
        $iB = "\74\x62\162\x3e\74\142\x72\x3e\104\x61\171\163\x20\x73\151\156\143\145\x20\101\x63\164\x69\x76\x61\164\145\144\72\x20" . $i6;
        $zy = isset($_SERVER["\123\105\122\x56\105\122\x5f\x4e\101\x4d\105"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\x45\122\x56\x45\x52\137\116\x41\x4d\105"])) : '';
        $dl = str_replace("\173\x7b\x46\111\122\123\x54\x5f\x4e\x41\115\x45\175\x7d", $current_user->first_name, $dl);
        $dl = str_replace("\x7b\173\114\x41\123\x54\137\116\x41\115\105\x7d\175", $current_user->last_name, $dl);
        $dl = str_replace("\173\173\120\114\x55\x47\111\x4e\137\124\x59\x50\105\175\x7d", MOV_TYPE . "\72" . $wk . $iB, $dl);
        $dl = str_replace("\x7b\173\x53\x45\122\126\105\122\175\175", $zy, $dl);
        $dl = str_replace("\x7b\173\x45\115\x41\x49\114\x7d\175", $ZG, $dl);
        $dl = str_replace("\173\173\120\x4c\125\x47\x49\x4e\x7d\x7d", MoConstants::AREA_OF_INTEREST, $dl);
        $dl = str_replace("\173\173\126\105\x52\123\x49\x4f\x4e\x7d\x7d", MOV_VERSION, $dl);
        $dl = str_replace("\173\x7b\x54\131\120\105\175\x7d", $R7, $dl);
        $dl = str_replace("\x7b\173\106\105\x45\104\x42\101\103\113\x7d\x7d", $xj, $dl);
        $LU = MoUtility::send_email_notif($ZG, "\x58\145\143\165\x72\151\x66\171", MoConstants::FEEDBACK_EMAIL, "\127\157\x72\x64\120\x72\145\163\x73\40\117\x54\120\x20\126\x65\162\x69\146\x69\143\x61\164\x69\x6f\156\40\120\x6c\165\147\x69\156\40\106\145\145\x64\142\141\x63\153", $dl);
        if ($LU) {
            goto ON;
        }
        do_action("\155\x6f\137\x72\145\x67\151\x73\x74\x72\141\x74\151\x6f\x6e\137\x73\x68\157\x77\137\155\145\163\x73\141\x67\x65", MoMessages::showMessage(MoMessages::FEEDBACK_ERROR), "\105\x52\x52\x4f\122");
        goto Ok;
        ON:
        do_action("\155\x6f\x5f\x72\x65\x67\x69\x73\164\162\141\x74\x69\x6f\156\x5f\x73\x68\x6f\x77\137\155\145\x73\x73\x61\147\x65", MoMessages::showMessage(MoMessages::FEEDBACK_SENT), "\123\125\103\x43\x45\123\123");
        Ok:
        if (!$I_) {
            goto ZS;
        }
        deactivate_plugins(array(MOV_PLUGIN_NAME));
        ZS:
        delete_mo_option("\155\157\137\x68\x69\144\145\x5f\156\x6f\164\151\x63\145");
    }
    public function mo_check_transactions()
    {
        MoUtility::handle_mo_check_ln(false, get_mo_option("\x61\144\155\151\156\137\x63\x75\163\164\x6f\155\x65\162\x5f\x6b\145\171"), get_mo_option("\141\144\x6d\x69\x6e\137\141\160\151\137\153\x65\x79"));
    }
    private function mo_check_l()
    {
        MoUtility::handle_mo_check_ln(true, get_mo_option("\141\144\x6d\151\x6e\137\x63\x75\x73\x74\157\x6d\145\162\x5f\153\145\171"), get_mo_option("\141\x64\x6d\x69\x6e\x5f\141\x70\151\x5f\153\x65\171"));
    }
    private function mo_configure_sms_template($bD)
    {
        if (isset($bD["\x6d\x6f\x5f\143\x75\x73\x74\x6f\x6d\x65\x72\x5f\166\141\154\151\x64\141\x74\x69\x6f\156\x5f\143\165\x73\164\x6f\155\137\x73\155\x73\x5f\147\x61\164\145\167\x61\x79"]) && empty(sanitize_text_field($bD["\155\x6f\137\x63\x75\x73\164\x6f\155\145\x72\x5f\166\141\154\x69\x64\x61\x74\x69\157\x6e\137\143\165\163\x74\x6f\155\137\163\155\163\137\x67\x61\x74\x65\167\141\171"]))) {
            goto dn;
        }
        do_action("\155\x6f\x5f\162\x65\147\151\x73\x74\162\141\164\151\x6f\x6e\x5f\x73\x68\x6f\x77\137\155\145\163\x73\x61\x67\145", MoMessages::showMessage(MoMessages::SMS_TEMPLATE_SAVED), "\123\x55\103\103\105\123\x53");
        goto FA;
        dn:
        do_action("\155\157\x5f\x72\x65\x67\151\x73\164\162\141\164\x69\x6f\156\x5f\163\150\157\167\137\155\x65\x73\163\141\147\145", MoMessages::showMessage(MoMessages::SMS_TEMPLATE_ERROR), "\105\122\122\117\x52");
        FA:
        $k7 = GatewayFunctions::instance();
        $k7->mo_configure_sms_template($bD);
    }
    private function mo_configure_email_template($bD)
    {
        $k7 = GatewayFunctions::instance();
        $k7->mo_configure_email_template($bD);
    }
}
xZ:
