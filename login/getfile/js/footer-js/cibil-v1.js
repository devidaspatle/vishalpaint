$(function () {
        $('#cibil-submit').click(function () {
            var data_string = $("#cibil_form_calc").serializeArray();
            var s = $("#cibil_form_calc").serialize();

            var empty = $.grep(s.split('&'), function (field) {
                return field.split('=')[1] === '';
            }).map(function (arr) {
                return arr.split('=')[0];
            });

            if (empty.length != 8) {
                $.ajax({
                    type: "POST",
                    data: data_string,
                    cache: false,
                    beforeSend: function () {
                        $("#cibil-submit").attr('value', 'Processing...');
                    },
                    url: "cibil-form.php",
                    success: function (data) {
                        $("#cibil_form_insert").html(data);


                        window.setTimeout(function () {
                            window.panelWidth = $('.slidingTab').width();
                            $('.slidingTab .panel_container .panels .panel').each(function (index) {
                                $(this).css({
                                    'width': window.panelWidth + 'px',
                                    'left': (window.panelWidth * index)
                                });
                                $('.panels').css({
                                    'width': (window.panelWidth * (index + 1)) + 'px'
                                });
                            });

                            var trig_id = $('span.slid_tab:not(.hidden)').eq(0).attr('id');
                            $('#' + trig_id).addClass('first-child');
                            $('#' + trig_id).trigger('click');


                        }, 100);

                        $("#cibil-submit").attr('value', 'Proceed');
                        $('#cibil_form_insert').removeClass("hidden");
                        $("#cibil-calc").addClass("hidden");
                        if (screen.width < '767') {
                            $('html, body').animate({
                                scrollTop: $("#cibil_form_insert").offset().top - 110
                            }, 1000);

                        } else {
                            $('html, body').animate({scrollTop: $("#cibil_form_insert").offset().top - 160}, 1000);
                        }


                    }
                });
return false;
            } else {
                $("#cibil_error").html("All fields can't be empty!");
                return false;
            }

        });
    });