var progress_bar = 5.9;

jQuery(document).ready(function () {
    
    // click on next button
    jQuery(".form-wizard-next-btn").click(function () {
        var parentFieldset = jQuery(this).parents(".wizard-fieldset");
        var currentActiveStep = jQuery(this)
            .parents(".form-wizard")
            .find(".form-wizard-steps .active");
        var next = jQuery(this);
        // var nextWizardStep = true;
        parentFieldset.find(".wizard-required").each(function () {
            var thisValue = jQuery(this).val();

            if (thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            } else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        // if ($("#fieldset_one").find(":input").valid()) {
        //     nextWizardStep = true;
        // } else {
        //     nextWizardStep = false;
        // }
        if (nextWizardStep) {
            next.parents(".wizard-fieldset").removeClass("show", "400");
            currentActiveStep
                .removeClass("active")
                .addClass("activated")
                .next()
                .addClass("active", "400");
            next.parents(".wizard-fieldset")
                .next(".wizard-fieldset")
                .addClass("show", "400");
            parentFieldset.hide();

            next.parents(".wizard-fieldset").next(".wizard-fieldset").show();

            progress_bar = progress_bar + 5.9;
            let text = next
                .parents(".wizard-fieldset")
                .next(".wizard-fieldset")
                .find("h5")
                .text();
            console.log($(text).hasClass("show"));
            $(".progress-bar")
                .css("width", progress_bar + "%")
                .text(text);
            jQuery(document)
                .find(".wizard-fieldset")
                .each(function () {
                    if ($(this).hasClass("show")) {
                        var formAtrr = jQuery(this).attr("data-tab-content");

                        // jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        // 	if(jQuery(this).attr('data-attr') == formAtrr){
                        // 		jQuery(this).addClass('active');
                        // 		var innerWidth = jQuery(this).innerWidth();
                        // 		var position = jQuery(this).position();
                        // 		jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        // 	}else{
                        // 		jQuery(this).removeClass('active');
                        // 	}
                        // });
                    }
                });
        }
    });
    //click on previous button
    jQuery(".form-wizard-previous-btn").click(function () {
        var counter = parseInt(jQuery(".wizard-counter").text());
        var prev = jQuery(this);
        var currentActiveStep = jQuery(this)
            .parents(".form-wizard")
            .find(".form-wizard-steps .active");
        prev.parents(".wizard-fieldset").removeClass("show", "400");
        prev.parents(".wizard-fieldset")
            .prev(".wizard-fieldset")
            .addClass("show", "400");

        prev.parents(".wizard-fieldset").hide();
        prev.parents(".wizard-fieldset").prev(".wizard-fieldset").show();

        currentActiveStep
            .removeClass("active")
            .prev()
            .removeClass("activated")
            .addClass("active", "400");
        jQuery(document)
            .find(".wizard-fieldset")
            .each(function () {
                if (jQuery(this).hasClass("show")) {
                    var formAtrr = jQuery(this).attr("data-tab-content");
                    jQuery(document)
                        .find(".form-wizard-steps .form-wizard-step-item")
                        .each(function () {
                            if (jQuery(this).attr("data-attr") == formAtrr) {
                                jQuery(this).addClass("active");
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document)
                                    .find(".form-wizard-step-move")
                                    .css({
                                        left: position.left,
                                        width: innerWidth,
                                    });
                            } else {
                                jQuery(this).removeClass("active");
                            }
                        });
                }
            });
    });
    // //click on form submit button
    jQuery(document).on(
        "click",
        ".form-wizard .form-wizard-submit",
        function () {
            var parentFieldset = jQuery(this).parents(".wizard-fieldset");
            var currentActiveStep = jQuery(this)
                .parents(".form-wizard")
                .find(".form-wizard-steps .active");
            parentFieldset.find(".wizard-required").each(function () {
                var thisValue = jQuery(this).val();
                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        }
    );

    $('.form-control').on('blur focus', function() {
        
        var tmpThis = jQuery(this).val();
            if (tmpThis == "") {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings(".wizard-form-error").slideDown("3000");
            } else if (tmpThis != "") {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings(".wizard-form-error").slideUp("3000");
            }
      }).trigger('blur');
    // focus on input field check empty or not
    jQuery(".form-control")
        .on("focus", function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == "") {
                jQuery(this).parent().addClass("focus-input");
            } else if (tmpThis != "") {
                jQuery(this).parent().addClass("focus-input");
            }
        })
        .on("blur", function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == "") {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings(".wizard-form-error").slideDown("3000");
            } else if (tmpThis != "") {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings(".wizard-form-error").slideUp("3000");
            }
        });
});



