function chngeval() {
        var val_depo = $("#peri").val();
        var id = $('select').attr('id');
        var val_se = $('#' + id).val();
        if (val_se == 12) {
            $("#peri").attr({"max": 122,});
            if (val_depo > 120) {
                var finl_val = Math.round(val_depo / 30);
            } else {
                var finl_val = val_depo;
            }
        } else if (val_se == 1) {
            $("#peri").attr({"max": 10,});
            if (val_depo > 10) {
                if (val_depo >= 365) {
                    var finl_val = Math.round(val_depo / 365);
                } else {
                    var finl_val = Math.round(val_depo / 12);
                }
            } else {
                var finl_val = val_depo;
            }
        }
        else {
            $("#peri").attr({"max": 3650,});
            var finl_val = val_depo;
        }
        $("#peri").val(finl_val);
    }

    //PPF Calculator Start
    $(function () {
        $('#toggler').on('change', function () {
            if ($("select[name=toggler] option:selected").val() == '1') {
                $('#fixed_amt').show(500);
                $("#variable_amt").hide();
                $("#strp_emi").removeClass("hidden");
            } else {
                $('#fixed_amt').hide(500);
                $("#variable_amt").show();
                $("#strp_emi").addClass("hidden");
            }

        });
    });


    //FD, RD, PPF Calculator Start
    $(function () {
        $('form').each(function () {
            $(this).validate({
                errorElement: 'span',
                // Specify the validation rules
                rules: {
                    NumberText: {
                        required: true,
                        min: 500, max: 200000,

                    },
                    prin: {
                        required: true,

                    },
                    intr: {
                        required: true,

                    },
                    peri: {
                        required: true,

                    },
                },

                messages: {
                    NumberText: {
                        required: "Enter Yearly Contribution",
                        min: "Enter in Between 500 to 200000",
                        max: "Enter in Between 500 to 200000",
                    },
                    prin: {
                        required: "Enter Principal Amount",
                        min: "Enter Valid Principal Amount",
                    },
                    intr: {
                        required: "Enter the rate of interest percentage",

                    },
                    peri: {
                        required: "Enter the number of periods",
                        min: "Enter Valid Number of periods",
                    },
                },
                submitHandler: function (form) {
                    return false;
                }
            });
        });

        $("input[name='submit']").on('click', function () {
            if (this.id == "rd_sub") {  
                if ($("#rd_calcnew").valid()) {
                    setTimeout(function () {
                        var monthlyInstallment = $('#prin').val();
                        var rateOfInterest = $('#intr').val();
                        var numberOfMonths = $('#peri').val();
                        var tenure = $('#sepe').val();
                        //alert(tenure);
                        if (tenure == 12) {
                            var numberOfMonthsnew = numberOfMonths;
                        }
                        else {
                            var numberOfMonthsnew = numberOfMonths * 12;
                        }
                  	var a = 1 + rateOfInterest/400;
				 var b =  (Math.pow ( a, 1/3)-1 )*100;
				var compound = 0;
                var sum = 0;
				for(var i=1; i<= numberOfMonthsnew; i++) {
					var percent = ((compound + parseInt(monthlyInstallment,10))* b)/100;
					 compound = parseInt(Math.round(compound,2),10) + parseInt(monthlyInstallment,10) + percent;;
				} 
                   var rd_money = Math.round(compound,2);
                  var new_rd_money = Intl.NumberFormat().format(rd_money);
                $("#muva").html(new_rd_money);
var datanew = rd_money - (monthlyInstallment * numberOfMonthsnew);
                                var rd_money_cmpnd = Intl.NumberFormat().format(datanew);
                                $("#inam").html(rd_money_cmpnd);
                                $(".main-form").addClass("hidden");
                                $("#result").removeClass("hidden");
                                $("input[name='recal']").on('click', function () {
                                    $(".main-form").removeClass("hidden");
                                    $("#result").addClass("hidden");
                                    $("#fd_field_hide").addClass("hidden");
                                    $("#strp_emi").removeClass("hidden");
                                });
                  
                  
                        $("#rd_sub").attr('value', 'Processing');
                    }, 800);
                    $("input[name='recal']").on('click', function () {
                        $(".main-form").removeClass("hidden");
                        $("#result").addClass("hidden");
                    });
                }
            } else if (this.id == "ppf_calc_sub") {
                if ($("#ppf-calc").valid()) {
                    var data_string = $("#ppf-calc").serializeArray();
                    $.ajax({
                        type: "POST",
                        data: data_string,
                        cache: false,
                        beforeSend: function () {
                            $("#ppf_calc_sub").attr('value', 'Processing...');
                        },
                        url: head_url+"getfile/form/get-ppf-calc-val.php",
                        success: function (data) {
                            $("#succe").html(data);
                            $("#ppf_calc_sub").attr('value', 'Calculate');
                            $("#ppf-form").addClass('hidden');
                            $("#re-calc-ppf").removeClass("hidden");
                            $("#succe").removeClass("hidden");
                            $("#strp_emi").addClass("hidden");

                        }
                    });
                }
            } else {
                if ($("#fd_calc").valid()) {
                    setTimeout(function () {
                        var prin = $('#prin').val();
                        var intr = $('#intr').val();
                        var peri = $('#peri').val();
                        var sepe = $('#sepe').val();
                        var cifr = $('#cifr').val();

                        if (peri <= 90 && sepe == 365) {
                            cifr = 0;
                        }

                        if (cifr == 0)  //  Simple interest
                        {
                            var maturity_val = prin * (1 + ((intr * peri) / (sepe * 100)));
                        }
                        else    //  Compound interest
                        {
                            var val1 = 1 + intr / (100 * cifr);
                            var val2 = (peri * cifr / sepe);
                            var val3 = Math.pow(val1, val2);
                            var maturity_val = (prin * val3);
                        }
                        var maturity_value = Math.round(maturity_val, 2);
                        var diff = maturity_value - prin;
                        var new_num = Intl.NumberFormat().format(maturity_value);
                        var new_diff = Intl.NumberFormat().format(diff);
                        $("#get_emi_strip_sec").text("").append("<a href='https://www.myloancare.in/fixed-deposit/fd-interest-rates/idfc-bank'> Check Highest FD Rates </a>");
                        $("#muva").html(new_num);
                        $("#inam").html(new_diff);
                        $(".main-form").addClass("hidden");
                        $("#result").removeClass("hidden");

                        $("input[name='recal']").on('click', function () {
                            $(".main-form").removeClass("hidden");
                            $("#result").addClass("hidden");
                            $("#fd_field_hide").addClass("hidden");
                            $("#strp_emi").removeClass("hidden");
                        });
                        $("#calculate").attr('value', 'Calculate');
                    }, 1500);

                }
            }
        });
        $("input[name='intr']").on("focus", function () {
            $("#fd_field_hide").removeClass("hidden");
            $("#strp_emi").addClass("hidden");
        });
        $("input[name='reset']").on("click", function () {
            $("#result").hide();
        });
        $("input[name='re-ppf_calc_sub']").on('click', function () {
            $("#re-calc-ppf").addClass("hidden");
            $("#ppf-form").removeClass("hidden");
            $("#succe").addClass("hidden");
            $("#strp_emi").removeClass("hidden");
        });
    });