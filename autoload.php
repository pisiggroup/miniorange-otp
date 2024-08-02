<?php


use OTP\Helper\FormList;
use OTP\Helper\FormSessionData;
use OTP\Helper\MoUtility;
use OTP\Objects\FormHandler;
use OTP\Objects\IFormHandler;
use OTP\SplClassLoader;
if (defined("\x41\x42\123\120\x41\x54\110")) {
    goto sS;
}
exit;
sS:
define("\x4d\117\126\x5f\x44\111\x52", plugin_dir_path(__FILE__));
define("\x4d\x4f\x56\137\125\x52\114", plugin_dir_url(__FILE__));
$XH = json_decode(initialize_package_json());
define("\115\x4f\126\137\126\x45\122\x53\111\x4f\x4e", $XH->version);
define("\x4d\x4f\x56\x5f\x54\x59\x50\105", $XH->type);
define("\x4d\117\x56\137\110\x4f\123\x54", $XH->hostname);
define("\115\x4f\126\137\x44\x45\106\101\125\114\x54\x5f\x43\125\x53\124\117\x4d\105\122\x4b\105\131", $XH->dcustomerkey);
define("\115\117\126\137\104\105\x46\101\x55\114\124\137\101\120\x49\x4b\105\x59", $XH->dapikey);
define("\115\117\126\x5f\x53\123\x4c\x5f\126\105\122\x49\106\131", $XH->sslverify);
define("\115\117\126\137\x43\x53\123\137\x55\x52\114", MOV_URL . "\151\x6e\x63\x6c\165\x64\145\x73\57\x63\163\163\x2f\x6d\157\137\x63\x75\163\x74\x6f\x6d\x65\x72\x5f\x76\141\x6c\x69\x64\141\164\151\x6f\x6e\x5f\x73\164\171\154\x65\56\x6d\151\x6e\x2e\x63\163\x73\77\166\145\x72\x73\151\157\156\x3d" . MOV_VERSION);
define("\x4d\117\126\137\x46\x4f\122\x4d\x5f\103\x53\x53", MOV_URL . "\x69\x6e\143\x6c\x75\x64\145\x73\x2f\x63\x73\x73\x2f\155\x6f\x5f\146\x6f\x72\x6d\163\137\143\x73\x73\x2e\x6d\x69\156\x2e\x63\163\163\x3f\166\145\x72\x73\151\x6f\156\75" . MOV_VERSION);
define("\115\117\137\x49\116\124\124\x45\114\111\116\x50\x55\124\137\103\123\123", MOV_URL . "\x69\x6e\x63\x6c\165\x64\x65\163\57\x63\163\x73\x2f\151\x6e\164\154\124\145\154\x49\156\x70\x75\164\x2e\155\x69\x6e\56\143\x73\x73\x3f\166\x65\162\163\151\x6f\156\x3d" . MOV_VERSION);
define("\x4d\x4f\126\137\x4a\123\137\x55\x52\x4c", MOV_URL . "\x69\x6e\x63\154\x75\144\145\x73\x2f\152\x73\57\x73\x65\x74\164\x69\156\147\x73\56\x6d\x69\156\x2e\152\163\x3f\166\145\x72\163\151\157\156\75" . MOV_VERSION);
define("\x56\x41\114\111\x44\x41\124\x49\x4f\116\x5f\x4a\x53\137\x55\x52\114", MOV_URL . "\151\x6e\x63\x6c\x75\x64\145\x73\57\x6a\163\x2f\146\x6f\162\155\126\141\x6c\x69\x64\141\164\151\x6f\156\56\155\x69\x6e\x2e\152\x73\77\x76\145\x72\x73\x69\157\x6e\x3d" . MOV_VERSION);
define("\x4d\x4f\x5f\111\x4e\x54\124\x45\114\111\116\120\125\124\137\112\x53", MOV_URL . "\x69\x6e\x63\154\165\x64\x65\x73\x2f\x6a\163\57\x69\x6e\x74\154\124\x65\154\x49\156\160\165\164\x2e\155\151\x6e\56\x6a\x73\x3f\166\x65\x72\163\x69\x6f\x6e\x3d" . MOV_VERSION);
define("\115\x4f\137\x44\122\x4f\120\x44\x4f\127\x4e\x5f\x4a\123", MOV_URL . "\x69\156\x63\154\165\x64\145\x73\x2f\x6a\x73\57\x64\x72\x6f\x70\x64\157\167\x6e\56\155\151\156\56\x6a\x73\77\166\145\x72\163\x69\157\x6e\x3d" . MOV_VERSION);
define("\x4d\117\126\x5f\114\x4f\x41\x44\x45\122\x5f\x55\122\114", MOV_URL . "\x69\x6e\x63\x6c\165\x64\x65\x73\x2f\x69\x6d\x61\147\x65\x73\57\x6c\x6f\x61\144\x65\162\56\147\x69\146");
define("\x4d\117\126\137\x44\117\x4e\x41\124\105", MOV_URL . "\151\x6e\143\x6c\165\x64\x65\x73\57\151\155\141\147\145\163\57\x64\157\156\x61\164\145\x2e\x70\156\147");
define("\115\x4f\x56\137\x50\101\x59\x50\x41\x4c", MOV_URL . "\x69\156\x63\154\165\x64\145\x73\57\151\155\x61\x67\145\x73\57\x70\x61\171\x70\141\x6c\56\x70\156\x67");
define("\115\117\x56\137\106\111\x52\x45\x42\x41\123\105", MOV_URL . "\x69\x6e\143\154\165\x64\145\x73\x2f\x69\x6d\x61\147\145\163\57\x66\151\162\x65\142\141\163\145\x2e\160\156\x67");
define("\x4d\x4f\x56\x5f\116\105\x54\x42\x41\116\113", MOV_URL . "\x69\156\x63\154\x75\144\x65\x73\57\x69\x6d\141\x67\145\163\57\x6e\x65\x74\142\x61\x6e\x6b\151\x6e\x67\56\x70\x6e\x67");
define("\115\x4f\x56\137\103\101\122\104", MOV_URL . "\x69\x6e\143\x6c\x75\144\145\x73\57\x69\x6d\x61\x67\x65\163\57\143\x61\x72\x64\56\x70\x6e\x67");
define("\115\117\126\137\114\117\x47\x4f\137\125\x52\114", MOV_URL . "\x69\x6e\x63\154\165\x64\x65\163\57\x69\x6d\x61\147\145\x73\x2f\x6c\x6f\147\157\x2e\160\x6e\x67");
define("\x4d\117\x56\x5f\111\103\117\x4e", MOV_URL . "\x69\156\x63\154\x75\x64\x65\x73\57\x69\155\x61\x67\145\x73\57\155\151\156\x69\157\x72\x61\156\x67\x65\137\x69\x63\157\x6e\56\160\x6e\x67");
define("\115\117\x56\x5f\x49\103\x4f\116\137\107\111\x46", MOV_URL . "\151\156\x63\154\x75\x64\x65\163\57\151\155\x61\147\x65\163\x2f\x6d\157\137\151\143\157\x6e\56\147\151\146");
define("\x4d\x4f\x5f\103\125\x53\124\117\x4d\x5f\x46\117\x52\x4d", MOV_URL . "\151\x6e\x63\154\x75\144\x65\x73\x2f\152\x73\x2f\143\165\x73\164\157\x6d\x46\x6f\162\x6d\x2e\x6a\163\77\166\145\162\163\x69\157\156\x3d" . MOV_VERSION);
define("\115\117\126\137\x41\104\104\117\116\x5f\x44\x49\x52", MOV_DIR . "\x61\144\144\157\156\163\x2f");
define("\x4d\x4f\126\137\125\x53\x45\x5f\120\117\x4c\x59\x4c\101\x4e\107", true);
define("\115\x4f\x5f\x54\x45\123\124\x5f\x4d\117\104\105", $XH->testmode);
define("\x4d\117\137\x46\101\111\114\x5f\115\117\x44\105", $XH->failmode);
define("\115\x4f\126\137\x53\105\x53\123\111\117\116\x5f\x54\x59\120\x45", $XH->session);
define("\x4d\117\x56\137\x4d\101\x49\x4c\x5f\x4c\117\107\117", MOV_URL . "\151\x6e\143\154\165\144\145\163\x2f\151\x6d\141\147\x65\x73\x2f\x6d\x6f\x5f\x73\x75\x70\160\157\x72\164\x5f\151\x63\x6f\156\x2e\x70\x6e\x67");
define("\115\117\x56\x5f\117\106\x46\x45\x52\123\x5f\x4c\117\x47\117", MOV_URL . "\151\x6e\143\x6c\165\x64\x65\x73\x2f\151\155\x61\147\x65\163\57\x6d\x6f\137\163\x61\154\x65\137\151\143\x6f\x6e\56\160\x6e\147");
define("\115\x4f\x56\137\x46\105\101\x54\125\122\x45\123\137\x47\122\101\120\110\111\x43", MOV_URL . "\151\156\143\154\x75\x64\145\163\57\x69\155\141\x67\145\163\57\x6d\157\x5f\x66\x65\x61\x74\165\x72\145\x73\137\x67\x72\141\x70\150\151\143\x2e\160\156\x67");
define("\x4d\x4f\x56\x5f\124\131\x50\105\x5f\x50\114\101\116", $XH->typeplan);
define("\115\117\x56\x5f\114\111\103\105\116\123\105\x5f\x4e\101\115\105", $XH->licensename);
define("\x4d\117\x56\137\x4d\x41\x49\116\137\103\123\123", MOV_URL . "\x69\x6e\x63\x6c\165\144\x65\163\57\143\163\x73\57\155\x6f\x2d\155\x61\x69\x6e\x2e\x6d\x69\x6e\56\x63\163\x73");
require "\x63\154\141\163\x73\x2d\163\160\154\143\x6c\x61\x73\x73\154\157\141\144\x65\162\x2e\x70\150\x70";
$tM = new SplClassLoader("\117\124\x50", realpath(__DIR__ . DIRECTORY_SEPARATOR . "\x2e\56"));
$tM->register();
require_once "\166\151\145\x77\x73\x2f\143\x6f\155\x6d\x6f\156\55\x65\154\145\x6d\x65\x6e\x74\x73\x2e\x70\150\160";
initialize_forms();
function initialize_forms()
{
    $IC = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(MOV_DIR . "\x68\141\156\144\x6c\x65\162\x2f\146\x6f\x72\155\x73", RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::LEAVES_ONLY);
    foreach ($IC as $pb) {
        $mu = $pb->getFilename();
        $mu = str_replace("\x63\154\141\163\x73\x2d", '', $mu);
        $w5 = "\117\x54\x50\134\110\141\x6e\144\154\145\162\134\106\157\162\x6d\x73\134" . str_replace("\x2e\x70\x68\x70", '', $mu);
        $xy = FormList::instance();
        $sU = $w5::instance();
        $xy->add($sU->get_form_key(), $sU);
        uE:
    }
    i_:
}
function admin_post_url()
{
    return admin_url("\x61\x64\155\151\x6e\55\x70\157\163\x74\x2e\160\150\160");
}
function wp_ajax_url()
{
    return admin_url("\141\144\155\151\x6e\x2d\141\x6a\141\170\x2e\x70\150\160");
}
function mo_($f2)
{
    $f2 = preg_replace("\57\134\x73\53\57\123", "\x20", $f2);
    return is_scalar($f2) ? MoUtility::is_polylang_installed() && MOV_USE_POLYLANG ? pll__($f2) : __($f2, "\155\x69\156\151\x6f\x72\x61\x6e\147\x65\55\x6f\x74\160\55\x76\145\162\151\x66\x69\143\141\164\x69\157\x6e") : $f2;
}
function mo_esc_string($f2, $R7)
{
    if ("\141\x74\x74\x72" === $R7) {
        goto hF;
    }
    if ("\165\162\x6c" === $R7) {
        goto UB;
    }
    goto tp;
    hF:
    return esc_attr($f2);
    goto tp;
    UB:
    return esc_url($f2);
    tp:
    return esc_attr($f2);
}
function get_mo_option($f2, $tG = null)
{
    $f2 = (null === $tG ? "\155\157\137\143\x75\x73\164\157\155\145\x72\x5f\166\141\154\x69\x64\141\164\151\157\x6e\137" : $tG) . $f2;
    return apply_filters("\x67\145\164\x5f\x6d\x6f\x5f\157\x70\x74\151\x6f\156", get_site_option($f2));
}
function update_mo_option($f2, $bh, $tG = null)
{
    $f2 = (null === $tG ? "\x6d\x6f\137\143\165\163\164\157\155\x65\x72\x5f\166\x61\154\x69\144\x61\164\151\x6f\156\137" : $tG) . $f2;
    update_site_option($f2, apply_filters("\165\x70\x64\141\164\145\x5f\x6d\157\137\x6f\x70\x74\151\157\x6e", $bh, $f2));
}
function delete_mo_option($f2, $tG = null)
{
    $f2 = (null === $tG ? "\x6d\157\137\x63\x75\163\164\x6f\155\x65\x72\x5f\166\x61\x6c\151\x64\x61\x74\x69\x6f\156\137" : $tG) . $f2;
    delete_site_option($f2);
}
function get_mo_class($ng)
{
    $qw = get_class($ng);
    return substr($qw, strrpos($qw, "\134") + 1);
}
function initialize_package_json()
{
    $hm = wp_json_encode(array("\x6e\x61\x6d\145" => "\155\151\x6e\151\x6f\162\x61\156\x67\145\55\157\164\x70\x2d\166\145\162\151\x66\x69\x63\x61\x74\151\x6f\156\x2d\157\x6e\x70\162\x65\155", "\x76\x65\162\x73\x69\x6f\156" => "\61\x34\x2e\x30\56\x30", "\x74\x79\160\145" => "\x43\x75\x73\x74\157\x6d\x47\141\x74\145\x77\x61\x79\x57\151\x74\150\101\144\x64\x6f\156\x73", "\164\x65\x73\164\155\x6f\x64\x65" => false, "\146\x61\x69\x6c\155\157\144\x65" => false, "\150\157\x73\164\x6e\x61\x6d\145" => "\150\164\164\160\163\72\x2f\57\x6c\157\147\151\x6e\x2e\170\x65\143\165\162\x69\x66\x79\56\x63\x6f\155", "\144\x63\165\x73\164\157\155\145\x72\153\145\x79" => "\x31\x36\65\65\65", "\144\141\x70\x69\153\x65\171" => "\146\106\x64\62\130\x63\166\124\107\x44\145\155\x5a\x76\x62\x77\61\142\143\x55\145\x73\116\x4a\x57\105\x71\x4b\142\142\125\x71", "\163\x73\x6c\166\x65\x72\x69\146\x79" => false, "\x73\145\163\163\x69\x6f\x6e" => "\124\122\101\x4e\123\x49\x45\116\124", "\x74\x79\160\x65\x70\154\141\156" => "\167\x70\x5f\145\155\141\151\x6c\137\166\145\x72\x69\x66\x69\x63\141\x74\151\157\156\137\151\x6e\164\x72\x61\x6e\x65\x74\137\x62\x61\163\x69\x63\137\160\154\141\156", "\154\x69\x63\x65\x6e\x73\x65\x6e\141\155\x65" => "\127\120\x5f\x4f\124\120\x5f\126\105\122\x49\106\x49\103\x41\x54\111\x4f\x4e\x5f\x49\x4e\x54\x52\101\x4e\105\x54\x5f\120\114\125\x47\111\116"));
    return $hm;
}
