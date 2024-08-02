<?php


if (defined("\x41\x42\123\120\x41\124\x48")) {
    goto Nt;
}
exit;
Nt:
use OTP\Addons\PasswordReset\Handler\UMPasswordResetAddOnHandler;
$gp = UMPasswordResetAddOnHandler::instance();
$W7 = $gp->moAddOnV();
$U5 = !$W7 ? "\144\151\x73\141\x62\x6c\x65\x64" : '';
$es = wp_get_current_user();
$d6 = UMPR_DIR . "\143\x6f\156\164\x72\157\x6c\x6c\145\x72\163\57";
$IM = add_query_arg(array("\x70\x61\x67\x65" => "\x61\144\144\157\x6e"), remove_query_arg("\141\144\x64\157\x6e", isset($_SERVER["\122\x45\121\125\105\x53\x54\137\x55\122\x49"]) ? esc_url_raw(wp_unslash($_SERVER["\x52\x45\121\125\x45\x53\124\137\125\x52\111"])) : null));
if (!isset($_GET["\141\x64\144\157\156"])) {
    goto Lj;
}
switch ($_GET["\x61\144\144\157\156"]) {
    case "\165\155\160\162\137\x6e\x6f\x74\151\146":
        include $d6 . "\x75\155\160\141\x73\x73\167\157\162\x64\162\x65\163\x65\164\x2e\160\x68\x70";
        goto TZ;
}
aJ:
TZ:
Lj:
