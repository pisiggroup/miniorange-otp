jQuery(document).ready(function () {
    $mo = jQuery;
    let formDetails = moeasyreg.forms;
    let otpType = moeasyreg.otpType;
    if ($mo("div.erf-reg-form-container").length <= 0) {
        return;
    }
     $mo("form.erf-form").each(function () {
         let form = $mo(this);
         let formID = form.attr("data-erf-form-id");
         if (formID in formDetails) {
            let img = '<div style="display:table;text-align:center;"><div class= "moloader"></div></div>';
            let messagebox = '<div style="margin-top:2%"><div   id="mo_message' + formID + '" style="width:100%; display: none; font-size: 16px; padding: 10px 20px;border-radius: 10px; margin-top: 16px;"></div></div>';
            let button =
                '<div style="margin-top: 2%;"><div class=""><button type="button" style="width:100%;" class="btn btn-default miniorange_button" id="mo_otp_token_submit' +
                formID +
                '" title="Please Enter your phone details to enable this.">' +
                moeasyreg.buttontext +
                "</button></div></div>";
              
              if ($mo(".miniorange_button").length == 0){
             $mo(button + messagebox).insertAfter($mo("." + moeasyreg.fieldID));
              }
             $mo("#mo_otp_token_submit" + formID).on("click", function () {
                var a = $mo("." + moeasyreg.fieldID).val();
                $mo("#mo_message" + formID).empty(),
                    $mo("#mo_message" + formID).append(img),
                    $mo("#mo_message" + formID).show(),
                    $mo.ajax({
                        url: moeasyreg.siteURL,
                        type: "POST",
                        data: { action: moeasyreg.generateURL, security: moeasyreg.nonce, user_phone: a, user_email: a },
                        crossDomain: !0,
                        dataType: "json",
                        success: function (b) {
                            if (b.result === "success") {
                                $mo("#mo_message" + formID).empty(), $mo("#mo_message" + formID).append(b.message), $mo("#mo_message" + formID).css({"background-color":"#dbfff7","color":"#008f6e"}), $mo('input[name="' + formID + '"]').focus();
                            } else {
                                $mo("#mo_message" + formID).empty(), $mo("#mo_message" + formID).append(b.message), $mo("#mo_message" + formID).css({"background-color":"#ffefef","color":"#ff5b5b"}), $mo('input[name="' + formID + '"]').focus();
                            }
                        },
                        error: function (c, b, d) {},
                    });
             });

             // setTimeout(function(){

                $mo(".erf-form-nav button[type='submit']").click(function(e){
                    e.preventDefault();

                   var a = $mo("." + moeasyreg.fieldID).val();
                   var b = $mo(".verify_otp").val();

                        $mo.ajax({
                        url: moeasyreg.siteURL,
                        type: "POST",
                        data: {
                        action: moeasyreg.vaction, security: moeasyreg.nonce, user_phone: a, user_email: a,otp_token:b, otpType:otpType},
                        crossDomain: !0,
                        dataType: "json",
                        success: function (b) {
                            if (b.result === "success1") 
                            {  
                                 $mo(".erf-external-form-elements .erf-errors").hide();  
                                 $mo(".erf-form-nav button[type='button']").submit(); 
                            } 
                            else 
                        {
                            $mo(".erf-errors-head").empty();
                            $mo(".erf-errors-head").append(b.message);  
                            $mo(".erf-external-form-elements .erf-errors").show();                          
                         }

                        },
                        error: function (c, b, d) {},
                    });
                 })
         }
     });
});
