jQuery(document).ready(function () {
    $mo = jQuery;
    var img = "<div style='display:table;text-align:center;'><img decoding='async' src=" + mocf7.imgURL + "></div>";
    $mo("[id ^= miniorange_otp_token_submit]").each(function (n) {
        $mo(this).on("click", function () {
            var form = $mo(this).closest("form"),
                user = form.find("input[name=" + mocf7.field + "]").val(),
                otp  = form.find("input[name=phone_verify]"),
                msgBox = form.find("#mo_message");
                msgBox.empty(),
                msgBox.append(img),
                msgBox.show(),
                $mo.ajax({
                    url: mocf7.siteURL,
                    type: "POST",
                    data: { user_phone: user, user_email: user, action: mocf7.gaction, security: mocf7.nonce },
                    crossDomain: !0,
                    dataType: "json",
                    success: function (e) {
                        "success" == e.result ? (msgBox.empty(), msgBox.append(e.message), msgBox.css("border-top", "3px solid green"), otp.focus()) : (msgBox.empty(), msgBox.append(e.message), msgBox.css("border-top", "3px solid red"));
                    },
                    error: function (e, form, user) {},
                });
        });
    });
});
