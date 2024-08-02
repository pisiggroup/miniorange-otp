<?php


use OTP\Handler\Forms\EasyRegForm;
$gp = EasyRegForm::instance();
$vN = (bool) $gp->is_form_enabled() ? "\x63\x68\145\143\153\x65\144" : '';
$Pw = "\143\150\145\143\x6b\x65\x64" === $vN ? '' : "\x68\x69\144\x64\145\156";
$Yy = $gp->get_otp_type_enabled();
$rv = $gp->get_form_details();
$Hf = admin_url() . "\x61\144\155\151\156\56\160\150\160\x3f\x70\141\147\x65\75\145\x72\x66\x6f\x72\155\163\55\157\166\x65\x72\166\151\145\167";
$EJ = $gp->get_button_text();
$Vl = $gp->get_phone_html_tag();
$lA = $gp->get_email_html_tag();
$p1 = $gp->get_form_name();
get_plugin_form_link($gp->get_form_documents());
require_once MOV_DIR . "\x76\x69\145\x77\163\57\x66\157\x72\x6d\163\57\145\141\x73\171\x72\145\147\146\157\x72\155\x2e\160\x68\x70";
