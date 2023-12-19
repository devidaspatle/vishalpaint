 $(function () {
      $('form').each(function () {
            $(this).validate({
                errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.error_contain') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         },
                focusInvalid: false,
                // Specify the validation rules
                rules: {
                    loan_amount: {
                        required: true,
                        minlength: 5,
                    },
                    cur_rate_emi: {
                        required: true,
                    },
                    loan_tenure: {
                        required: true,
                        maxlength: 3,
                    },
                },
                // Specify the validation error messages
                messages: {
                   cur_rate_emi: {
                        required: "<?php echo $field_name[current_ROI_per_annum][2]; ?>",
                        min: "<?php echo $field_name[current_ROI_per_annum][2]; ?>",
                        max: "<?php echo $field_name[current_ROI_per_annum][2]; ?>",
                    },
                    loan_tenure: {
                        required: "Enter Loan Tenure",
                        min: "Enter Valid Tenure",
                    },
                    terms: "Please accept",
                    loan_amount: {
                        required: " Enter Valid Amount",
                        minlength: " Enter Valid Amount ",
                    },
                },
                submitHandler: function (form) {
                    return false;
                }
            });
        });
        $("input[name='submit']").on('click', function () {
               if (this.id == "sadd") {
                if ($("#mlc_emi").valid()) {
                    $("#sadd").attr('value', 'Processing...');

                    setTimeout(function () {
                        var a = document.mlc_emi.loan_amount.value;
                        var b = document.mlc_emi.cur_rate_emi.value;
                        var c = document.mlc_emi.loan_tenure.value;
                        if(loan_type_id_page == 56){
                        var n = c;   
                       } else {
                           var n = c * 12;
                       }                      var r = b / (12 * 100);
                        var p = (a * r * Math.pow((1 + r), n)) / (Math.pow((1 + r), n) - 1);
                        var print = Math.round(p);
                        var r1 = print.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        $("#r1").html(r1);
                       $('#output-emi-rate').html(r1);
                       var total_interest = (p * n) - a;
                       var prin_cf = "0";
                       var html_find ='';
                       var prin_bf = '';
                      for(var month=1; month <= n; month++){
                          if(prin_cf == 0){
                               prin_bf = a;
                          }else{
                               prin_bf = prin_cf;
                         }
  
              var int_pay = (b * prin_bf/1200);
            var int_payable = Math.round(b * prin_bf/1200);
           
             
            var princi_repaid = (p - int_pay);
            var principal_repaid = Math.round(princi_repaid);
            

            prin_cf = (prin_bf - princi_repaid);
            var prin_cf_round = Math.round(prin_cf);
          
             html_find += "<tr><td class='width18'>" + month + "</td><td class='width30'>" + Intl.NumberFormat().format(Math.round(prin_bf)) + "</td><td class='width25'>" + Intl.NumberFormat().format(int_payable) + "</td><td class='width30'>" + Intl.NumberFormat().format(principal_repaid) + "</td></tr>";
      
         }
             $("#emi_month_list").html(html_find);
					   for (var i = 0; i < n; i++) {
                            var z = a * r * 1;
                            var q = Math.round(z * 100) / 100;
                            var t = p - z;
                            var w = Math.round(t * 100) / 100;
                            var e = a - t;
                            var l = Math.round(e * 100) / 100;
                            a = e;
                        }
                        $("#calc_emi_strip").text("").append("<span> Your EMI Will Be :</span> Rs.<span class='output-rate'>" + r1 + "</span>");
                        $("#get_emi_strip_sec").text("").append("<a href='"+head_url+"lp/lp-home-loan.php'> Apply Home Loan @ 8.30% Online Now </a>");
                        $(".main-form").addClass("hidden");
                        $("#result").removeClass("hidden");
                        $("#emi_table_modal").css("display","block");
                        $("#gemi_elig_link").removeClass("hidden");
                        $("input[name='recal']").on('click', function () {
                            $(".main-form").removeClass("hidden");
                            $("#result").addClass("hidden");
                            $("#emi_table_modal").css("display","none");
                            $("#gemi_elig_link").addClass("hidden");
                        });
                        $("#sadd").attr('value', 'ReCalculate');
                    }, 1500);
                }
               }
        });
 });