<?php


namespace OTP\Objects;

use OTP\Helper\MoConstants;
use OTP\Helper\MoMessages;
use OTP\Helper\MoUtility;
if (defined("\101\102\x53\120\x41\x54\x48")) {
    goto lwi;
}
exit;
lwi:
if (class_exists("\x54\145\155\x70\154\141\x74\145")) {
    goto F5O;
}
abstract class Template extends BaseActionHandler implements MoITemplate
{
    protected $key;
    protected $template_editor_id;
    protected $nonce;
    protected $preview = false;
    protected $jquery_url;
    protected $img;
    public $pane_content;
    public $message_div;
    protected $success_message_div;
    public static $template_editor = array("\167\x70\141\165\x74\157\160" => false, "\155\x65\x64\151\141\x5f\x62\165\x74\x74\157\x6e\x73" => false, "\164\145\170\164\141\x72\145\141\137\162\x6f\167\x73" => 20, "\164\x61\x62\x69\x6e\x64\145\x78" => '', "\164\141\142\x66\x6f\x63\x75\163\137\x65\154\145\x6d\145\x6e\x74\163" => "\x3a\x70\x72\x65\x76\x2c\x3a\x6e\x65\170\164", "\x65\x64\151\x74\x6f\x72\x5f\x63\x73\163" => '', "\145\144\x69\x74\157\162\x5f\143\154\x61\x73\163" => '', "\x74\x65\145\156\x79" => false, "\144\x66\167" => false, "\164\151\156\x79\155\x63\x65" => false, "\x71\x75\151\143\x6b\164\x61\147\x73" => true);
    protected $required_tags = array("\x7b\x7b\112\x51\125\x45\x52\x59\175\175", "\x7b\x7b\x47\117\137\x42\101\103\x4b\x5f\x41\103\x54\x49\x4f\116\137\103\x41\114\114\x7d\175", "\x7b\173\106\x4f\122\x4d\137\111\104\175\x7d", "\x7b\173\122\105\x51\x55\x49\122\105\104\x5f\106\111\x45\x4c\x44\x53\175\x7d", "\173\x7b\122\105\121\125\x49\x52\105\104\137\x46\117\x52\115\123\x5f\x53\x43\x52\x49\x50\x54\x53\x7d\x7d");
    protected function __construct()
    {
        parent::__construct();
        $this->jquery_url = '';
        $this->img = "\x3c\x64\151\x76\x20\163\164\x79\x6c\145\x3d\x27\144\x69\163\x70\x6c\x61\x79\x3a\164\141\142\154\x65\x3b\164\x65\170\164\x2d\x61\x6c\151\147\156\72\143\145\x6e\x74\x65\x72\x3b\47\x3e" . "\x3c\x69\155\147\x20\163\162\143\x3d\x27\173\x7b\114\x4f\x41\x44\105\x52\x5f\x43\x53\x56\175\175\47\76" . "\74\57\144\x69\166\76";
        $this->pane_content = "\x3c\144\x69\x76\x20\163\164\x79\x6c\145\x3d\47\164\x65\x78\164\x2d\141\x6c\151\147\x6e\72\143\145\156\164\145\x72\73\x77\x69\144\164\150\72\40\61\x30\x30\45\73\x68\145\x69\147\150\x74\72\40\64\65\60\160\x78\x3b\x64\x69\163\160\154\141\x79\72\x20\142\x6c\x6f\143\x6b\73" . "\x6d\x61\x72\x67\151\156\55\x74\157\160\x3a\40\x34\x30\45\x3b\x76\x65\x72\x74\x69\x63\x61\x6c\55\x61\x6c\151\x67\156\x3a\x20\155\151\144\144\x6c\x65\73\x27\x3e" . "\x7b\173\103\x4f\x4e\124\x45\x4e\124\175\175" . "\x3c\x2f\144\x69\166\76";
        $this->message_div = "\x3c\x64\x69\166\x20\x73\x74\x79\x6c\145\75\47\146\x6f\156\x74\55\x73\x74\171\x6c\145\72\40\x69\164\x61\x6c\151\x63\73\146\157\156\x74\55\x77\x65\151\147\150\164\72\40\66\60\60\x3b\x63\157\x6c\157\162\72\x20\43\x32\x33\62\x38\x32\144\73" . "\x66\157\156\164\55\x66\x61\x6d\x69\154\171\x3a\123\x65\x67\157\145\40\125\111\x2c\110\x65\x6c\x76\145\164\151\143\x61\x20\x4e\145\x75\145\54\x73\x61\156\x73\x2d\163\x65\x72\151\146\73" . "\143\157\154\157\162\72\43\x39\x34\x32\x38\x32\x38\x3b\x27\76" . "\173\x7b\115\x45\123\x53\x41\x47\x45\175\175" . "\x3c\x2f\144\151\x76\76";
        $this->success_message_div = "\74\x64\x69\x76\x20\163\x74\x79\x6c\145\x3d\47\146\x6f\x6e\x74\x2d\163\x74\171\x6c\145\72\x20\x69\x74\141\x6c\151\143\73\146\x6f\x6e\164\55\167\145\151\147\150\164\x3a\40\x36\60\60\73\143\157\154\x6f\162\72\40\43\x32\63\x32\x38\62\144\73" . "\x66\157\156\x74\55\x66\141\x6d\151\154\x79\72\123\145\x67\x6f\x65\x20\125\111\54\110\145\x6c\166\x65\164\x69\143\x61\x20\116\145\165\145\54\163\x61\x6e\163\55\163\145\162\x69\146\x3b\x63\x6f\154\157\x72\x3a\x23\x31\x33\70\141\63\x64\x3b\x27\76" . "\x7b\x7b\115\105\123\123\x41\x47\105\175\x7d" . "\x3c\x2f\144\x69\x76\x3e";
        $this->img = str_replace("\173\173\x4c\x4f\101\x44\105\x52\x5f\103\123\x56\x7d\175", MOV_LOADER_URL, $this->img);
        $this->nonce = "\155\x6f\x5f\x70\x6f\x70\165\160\137\157\160\x74\151\157\x6e\x73";
        add_filter("\155\x6f\x5f\x74\145\155\x70\x6c\x61\164\145\x5f\x64\x65\x66\141\165\154\x74\x73", array($this, "\147\145\164\137\144\145\146\x61\165\154\x74\x73"), 1, 1);
        add_filter("\155\x6f\x5f\x74\145\x6d\160\154\141\x74\145\137\x62\x75\x69\x6c\x64", array($this, "\142\165\x69\154\x64"), 1, 5);
        add_action("\x61\144\155\x69\156\x5f\160\157\x73\164\x5f\155\x6f\x5f\160\162\145\x76\151\145\x77\137\x70\x6f\x70\165\x70", array($this, "\163\x68\157\x77\x5f\160\162\x65\x76\x69\x65\x77"));
        add_action("\x61\x64\x6d\151\x6e\137\x70\157\163\164\x5f\x6d\157\x5f\160\x6f\160\165\160\137\163\x61\166\x65", array($this, "\163\x61\x76\145\137\160\x6f\x70\x75\160"));
    }
    public function show_preview()
    {
        if (!(array_key_exists("\x70\157\x70\165\x70\164\171\x70\x65", $_POST) && $_POST["\160\157\160\x75\x70\164\x79\x70\145"] !== $this->get_template_key())) {
            goto V77;
        }
        return;
        V77:
        if (!(!current_user_can("\155\141\x6e\x61\x67\x65\137\x6f\160\x74\x69\x6f\x6e\163") || !check_admin_referer($this->nonce))) {
            goto Hjv;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        Hjv:
        $GX = MoUtility::mo_sanitize_array($_POST);
        $WZ = "\x3c\x69\76" . mo_("\120\x6f\160\x55\160\40\x4d\145\x73\163\x61\x67\x65\x20\x73\x68\157\x77\163\x20\x75\x70\x20\x68\145\x72\145\x2e") . "\x3c\57\151\x3e";
        $I2 = VerificationType::TEST;
        if (isset($_POST[$this->get_template_editor_id()])) {
            goto hrv;
        }
        return;
        hrv:
        $zh = wp_kses(wp_unslash($_POST[$this->get_template_editor_id()]), MoUtility::mo_allow_html_array());
        $this->validateRequiredFields($zh);
        $Df = false;
        $this->preview = true;
        wp_send_json(MoUtility::create_json($this->parse($zh, $WZ, $I2, $Df), MoConstants::SUCCESS_JSON_TYPE));
    }
    public function save_popup()
    {
        if (!(!current_user_can("\155\x61\x6e\141\147\145\x5f\157\160\164\x69\157\x6e\x73") || !check_admin_referer($this->nonce))) {
            goto t7N;
        }
        wp_die(esc_attr(MoMessages::showMessage(MoMessages::INVALID_OP)));
        return;
        t7N:
        $GX = MoUtility::mo_sanitize_array($_POST);
        if ($this->isTemplateType($GX)) {
            goto rfG;
        }
        return;
        rfG:
        if (isset($_POST[$this->get_template_editor_id()])) {
            goto FEA;
        }
        return;
        FEA:
        $zh = wp_kses(wp_unslash($_POST[$this->get_template_editor_id()]), MoUtility::mo_allow_html_array());
        $this->validateRequiredFields($zh);
        $oi = maybe_unserialize(get_mo_option("\x63\x75\x73\164\157\x6d\137\160\x6f\x70\x75\x70\163"));
        $oi[$this->get_template_key()] = $zh;
        update_mo_option("\x63\x75\x73\164\x6f\x6d\137\x70\157\160\165\160\x73", $oi);
        wp_send_json(MoUtility::create_json($this->showSuccessMessage(MoMessages::showMessage(MoMessages::TEMPLATE_SAVED)), MoConstants::SUCCESS_JSON_TYPE));
    }
    public function build($zh, $w1, $WZ, $I2, $Df)
    {
        if (!(strcasecmp($w1, $this->get_template_key()) !== 0)) {
            goto gBj;
        }
        return $zh;
        gBj:
        $oi = maybe_unserialize(get_mo_option("\143\165\163\164\157\x6d\x5f\x70\x6f\x70\165\160\163"));
        $zh = $oi[$this->get_template_key()];
        return $this->parse($zh, $WZ, $I2, $Df);
    }
    protected function validateRequiredFields($zh)
    {
        foreach ($this->required_tags as $S4) {
            if (!(strpos($zh, $S4) === false)) {
                goto yj0;
            }
            $WZ = str_replace("\173\173\x4d\x45\123\x53\101\x47\x45\x7d\x7d", MoMessages::showMessage(MoMessages::REQUIRED_TAGS, array("\124\x41\107" => $S4)), $this->message_div);
            wp_send_json(MoUtility::create_json(str_replace("\173\173\103\117\116\x54\x45\116\124\175\x7d", $WZ, $this->pane_content), MoConstants::ERROR_JSON_TYPE));
            yj0:
            Npj:
        }
        isj:
        if (!MoUtility::check_for_script_tags($zh)) {
            goto YoL;
        }
        $WZ = str_replace("\173\x7b\115\x45\123\123\x41\107\105\175\x7d", MoMessages::showMessage(MoMessages::INVALID_SCRIPTS), $this->message_div);
        wp_send_json(MoUtility::create_json(str_replace("\x7b\x7b\x43\x4f\116\x54\x45\x4e\x54\175\175", $WZ, $this->pane_content), MoConstants::ERROR_JSON_TYPE));
        YoL:
    }
    protected function showSuccessMessage($WZ)
    {
        $WZ = str_replace("\173\173\x4d\x45\123\x53\101\x47\x45\175\x7d", $WZ, $this->success_message_div);
        return str_replace("\x7b\x7b\103\x4f\116\124\105\116\x54\x7d\175", $WZ, $this->pane_content);
    }
    protected function showMessage($WZ)
    {
        $WZ = str_replace("\x7b\x7b\115\105\123\123\x41\107\x45\x7d\175", $WZ, $this->message_div);
        return str_replace("\173\173\103\x4f\116\x54\x45\116\x54\x7d\175", $WZ, $this->pane_content);
    }
    protected function isTemplateType($GX)
    {
        return array_key_exists("\160\x6f\160\165\x70\164\x79\160\145", $GX) && strcasecmp($GX["\x70\157\160\165\160\x74\x79\x70\x65"], $this->get_template_key()) === 0;
    }
    public function get_template_key()
    {
        return $this->key;
    }
    public function get_template_editor_id()
    {
        return $this->template_editor_id;
    }
}
F5O:
