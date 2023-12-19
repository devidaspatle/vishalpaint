 $(function () {
        $.validator.addMethod("mobile", function (value, element) {
            var lastseven = value.substr(value.length - 7);
            var last_digit = value.slice(0, 2);
            var cr_str = Array(6).join(last_digit);
            var result = false;

            if (/^[6789]\d{9}$/i.test(value)) {
                 result = true;
            }
            if (value === '9876543210') {
                 result = false;
            }
            if (/^(\d)\1+$/.test(lastseven)) {
                 result = false;
            }
            if (value === cr_str) {
                 result = false;
            }
            return result;
        }, "Enter Valid Mobile number");

        $.validator.addMethod("loan_tenure", function (value, element) {
            if (value === '12' || value === '24' || value === '36' || value === '48' || value === '60') {
                 result = true;
            } else {
                 result = false;
            }
            return result;
        }, "Loan Tennure Can be 12,24,36,48,60 months");
        $.validator.addMethod("ifsc_match", function (value, element) {
            return this.optional(element) || /^[A-Za-z]{4}\d{7}$/.test(value);
        }, "Enter Valid IFSC Code");

        $.validator.addMethod("greaterThan",
            function (value, element, param) {
                var $otherElement = $(param);
                return parseInt(value, 10) >= parseInt($otherElement.val(), 10);
            });
        $.validator.addMethod("existingEMI",
            function (value, element) {
                var cur_rate = $("#cur_rate").val() / 1200;
                var exstng_amt = $("#exstng_loan_amt").val();
                var calculation = 1.1 * cur_rate * exstng_amt;
                if (parseInt(value, 10) < parseInt(calculation, 10)) {
                    return false;
                } else if (parseInt(value, 10) >= parseInt(exstng_amt, 10)) {
                    return false;
                } else {
                    return true;
                }
            });
        jQuery.validator.addMethod("validDate", function (value, element) {
            var Reg_Expression = /^\d{4}\-\d{1,2}\-\d{1,2}$/;
            if (Reg_Expression.test(value)) {
                var result = true;
                var dob = new Date(value);
                var today = new Date();
                var sum = today.getFullYear() - dob.getFullYear();
                if ((dob.getFullYear() + 21 <= today.getFullYear()) && (dob.getFullYear() + 65 >= today.getFullYear())) // calculate selected date is greater 18 or not
                {
                     result = true;
                }
                else {
                     result = false;
                }
            }
            return result;
        }, "Min 21years & max 65 yrs");

        jQuery.validator.addMethod("validYear", function (value, element) {
            var result = true;
            var dob = new Date(value);
            var today = new Date();
            var sum = today.getFullYear() - dob.getFullYear();
            if ((dob.getFullYear() <= today.getFullYear()) && (dob.getFullYear() + 29 >= today.getFullYear())) // calculate selected date is greater 18 or not
            {
                 result = true;
            }
            else {
                 result = false;
            }
            return result;
        }, "Enter Year");

        $.validator.addMethod("pan", function (value, element) {
            return this.optional(element) || /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/.test(value);
        }, "Invalid Pan Number");
        $.validator.addMethod("adhar", function(value, element)
    {
        return this.optional(element) || /^[0-9]{4}[0-9]{4}[0-9]{4}$/.test(value);
    }, "Invalid Aadhar Number");


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
                    name: {
                        required: true,
                        minlength: 1,
                    },
                     mobile: {
                        required: true,
                        mobile: true,
                        minlength: 10,
                        maxlength: 10,
                    }, city: {
                        required: true,
                    },
                    exstng_bank_drop: {
                        required: {
                            depends: function (element) {
                                return $("#exstng_bank_drop").not(".hidden");
                            }
                        }
                    },
                    exstng_bank_txt: {
                        required: {
                            depends: function (element) {
                                return $("#exstng_bank_drop").val() == 'other';
                            }
                        },
                    },
					exstng_car_txt: {
                        required: {
                            depends: function (element) {
                                return $("#car_name").val() == 'other';
                            }
                        },
                    },
					exstng_carmodel_txt: {
                        required: {
                            depends: function (element) {
                                return $("#car_model").val() == 'other' || $("#car_name").val() == 'other';
                            }
                        },
                    },
                    net_incm: {
                        required: {
                            depends: function (element) {
                                return $("#net_incm").not(".hidden");
                            }
                        },
                        min: "10000"
                    },employer_type:{
                        required: {
                            depends: function (element) {
                                return $("#employer_type").not(".hidden");
                            }
                        },
                    },
                    cur_emi: {
                        required: {
                            depends: function (element) {
                                return $("#cur_emi").not(".hidden");
                            }
                        },
                       
                        existingEMI: true,
                                            },
                    loan_type: {
                        required: {
                            depends: function (element) {
                                return $("#loan_type").val() == '';
                            }
                        }
                    },
                    occup_id: {
                        required: true
                    }, 
                    type_of_car: {
                        required: true,
                    },
                    weight_gold: {
                        required: {
                            depends: function (element) {
                                return $("#weight_gold").not(".hidden");
                            }
                        },
                        min: 1,
                    },

                    car_type_strp: {
                        required: {
                            depends: function (element) {
                                return $("#car_type_strp").not(".hidden");
                            }
                        },
                    },
                    exstng_loan_amt: {
                        required: {
                            depends: function (element) {
                                return $("#exstng_loan_amt").not(".hidden");
                            }
                        },
                                                min: 100000,                    },
                    cur_rate: {
                        required: {
                            depends: function (element) {
                                return $("#cur_rate").not(".hidden");
                            }
                        },
                        min: 8.50,
                        max: 25,
                    },
                    anl_turnover: {
                        required: {
                            depends: function (element) {
                                return $("#anl_turnover").not(".hidden");
                            }
                        },
                    },profession:{
                        required: true,
                    },
                    dob: {
                        required: {
                            depends: function (element) {
                                return $("#dob").not(".hidden");
                            }
                        },
                        validDate: true,
                    },
                    profit_amt: {
                        required: {
                            depends: function (element) {
                                return $("#profit_amt").not(".hidden");
                            }
                        }
                    },gar: {
                        required: {
                            depends: function (element) {
                                return $("#gar").not(".hidden");
                            }
                        }
                    },
					  car_plan: {
                         required: {
                            depends: function (element) {
                                return $("#car_plan").not(".hidden");
                            }
                        }
                    },
                    car_name: {
                         required: {
                            depends: function (element) {
                                return $("#car_name").not(".hidden");
                            }
                        }
                    },
                    car_model: {
                        required: {
                            depends: function (element) {
                                return $("#car_model").not(".hidden");
                            }
                        }
                    },
                     comp_name:{
                        required: {
                            depends: function (element) {
                                return $("#comp_name").not(".hidden");
                            }
                        },
                    },
                    loan_nature: {
                        required: true,
                    },
                    
                    loan_amount: {
                        required: true,
                        min:10000,

                    },
					salary_paid_by: {
                        required: {
                            depends: function (element) {
                                return $("#salary_paid_by").val() == '';
                            }
                        }
                    },
                    slry_acc_with: {
                        required: {
                            depends: function (element) {
                                return $("#salary_paid_by").val() == '1';
                            }
                        }
                    },
                    oth_bank: {
                        required: {
                            depends: function (element) {
                                return $("#slry_acc_with").val() == 'other';
                            }
                        },
                    },
					sub_employer: {
                        required: true,
                    },
                    comp_name_sub: {
                       required: true,
                    },
                    terms: {
                        required: true
                    },
                },
                // Specify the validation error messages
                messages: {
                    name: {
                        required: "Enter Your Name",
                        minlength: "Enter Your Name",
                    },mobile: {
                        required: "Enter Valid Mobile",
                        mobile: "Enter Valid Mobile",
                        minlength: "Enter Valid Mobile",
                        maxlength: "Enter Valid Mobile",
                    }, city: {
                        required: "Enter City or Pincode",
                    },
                    exstng_bank_drop: {
                        required: "Existing Loan From",
                    },
                    loan_type: {
                        required: "Select Type of Loan",
                    },
                    occup_id: {
                        required: "Select Your Occupation",
                    },

                    loan_amount: {
                        required: "Enter Amount of Loan Required",
                        min: "Enter Amount of Loan Required",
                    },
                    net_incm: {
                        required: "Your Net Monthly Income",
                        min: " Enter min Rs. 10,000"
                    },type_of_car: {
                        required: "Select Car Type",
                    },
                    car_type_strp: {
                        required: "Select Car Manufacturer",
                    },
                    loan_nature: {
                        required: "Fresh Loan or Loan Transfer",
                    },weight_gold: {
                        required: "Enter Gold Weight in Grams",
                        min: "Enter Gold Weight in Grams",
                    },
                     anl_turnover: {
                        required: "Select Annual Turnover",
                    },
                    exist_business: {
                        required: " Select business existing",
                    },

                    itr_avail: {
                        required: "Select No. of Years ITR Available",
                    },
                    dob: {
                        required: "Enter dob",
                    },gar: {
                        required: "Enter Total Annual Income",
                        min:"Enter Total Annual Income",
                    },
                    profit_amt: {
                        required: "Enter Annual Profit Amount",
                        min:"Enter Annual Profit Amount",
                    },profession: {
                        required: "Select Profession",
                    },
                    employer_type:{
                        required: "Choose Your Employer type"
                    },
                     comp_name:{
                        required: "Company You Work For"
                    },
                    exstng_bank_txt: {
                        required: "Existing Loan From",
                    },
					exstng_car_txt: {
                        required: "Enter Car Name",
                    },
					exstng_carmodel_txt: {
                        required: "Enter Car Model Name",
                    },
                     exstng_loan_amt: {
                        required: "Enter Existing Loan Amount",
                        min: " Enter Existing Loan Amount",
                    },
                    cur_rate: {
                        required: "Enter Current RoI",
                        min: "Enter Current RoI",
                        max: "Enter Current RoI",
                    },
                    cur_emi: {
                        required: "Enter Correct EMI Amount You Pay",
         
                        existingEMI: "Enter Correct EMI Amount You Pay",
                    },
					 car_plan: {
                        required: "Select Booking Status",
                    },
                   car_name: {
                      required: "Select Car Name",   
                    },
					slry_acc_with: {
                        required: "Select Salary Account Bank",
                    },
                    oth_bank: {
                        required: "Enter Salary Account Bank",
                    },
                    salary_paid_by: {
                        required: "Select Payment Transfer Mode",
                    },
					sub_employer:{
                        required: "Select Your Employment Type",
                    },
                    comp_name_sub: {
                        required: "Enter Company Name",
                    },
                    car_model: {
                        required: "Select Car Model",
                    }, terms: "Please accept",

                },
                submitHandler: function (form) {
                    return false;
                }
            });
        });
         $("select[name='exstng_bank_drop']").on("change", function () {
            $(this).valid();
            var bank_id = this.value;
            if (bank_id == 'other') {
                $('#ext_oth_bnk_id').removeClass("hidden");
                $('#drop_extng_bnk').addClass("hidden");
            } else {
                $('#drop_extng_bnk').removeClass("hidden");
                $('#ext_oth_bnk_id').addClass("hidden");
            }
        });
         $("select[name='car_model']").on("change", function () {
            $(this).valid();
            var car_model = this.value;
            if (car_model == 'other') {
                $('#ext_oth_car_model').removeClass("hidden");
                $('#extng_car_model').addClass("hidden");
            } else {
                $('#extng_car_model').removeClass("hidden");
                $('#ext_oth_car_model').addClass("hidden");
            }
        });
         $("select[name='car_name']").on("change", function () {
            $(this).valid();
            var car_id = this.value;
            if (car_id == 'other') {
                $('#ext_oth_car_id,#ext_oth_car_model').removeClass("hidden");
                $('#extng_car,#extng_car_model').addClass("hidden");
            } else {
                $('#extng_car,#extng_car_model').removeClass("hidden");
                $('#ext_oth_car_id,#ext_oth_car_model').addClass("hidden");
            }
        });
        $("input[type=radio][name='gold_loan_elig']").on("change", function () {
            if ($(this).val() == '2') {
                $("#elig_loan_amt").removeClass("hidden");
                $("#elig_weight").addClass("hidden");
                $("#weight_gold").removeClass('required');
                $("#loan_amount").addClass('required');
            } else {
                $("#elig_weight").removeClass("hidden");
                $("#elig_loan_amt").addClass("hidden");
                $("#loan_amount").removeClass('required');
                $("#weight_gold").addClass('required');
            }
        });
        $("input[name='submit']").on('click', function () {
                if ($("#mlc_form").valid()) { 
                    var loan_ty = $('#loan_type').val();
                   var net_incm_fetch = $('#net_incm').val();
                   var loan_amt_fetch = $('#loan_amount').val();
                   var occup = $('input[name=occup_id]:checked').val();
                   if((loan_amt_fetch != '' && loan_amt_fetch != '0') && ((occup == 1 && loan_ty == 51 && ((loan_amt_fetch < 1000000 && net_incm_fetch > 25000) || (loan_amt_fetch > 1000000 && net_incm_fetch < 25000)))
                   || (occup == 1 && loan_ty == 56 && ((loan_amt_fetch < 50000 && net_incm_fetch > 25000) || (loan_amt_fetch > 50000 && net_incm_fetch < 25000))))){
                       if(net_incm_fetch < 25000){ 
                        var print_issue = Intl.NumberFormat().format(parseInt(net_incm_fetch));
                        var confirm_msg = "Monthly Salary";
                   } else if(loan_amt_fetch < 1000000){ 
				   if(loan_amt_fetch < 100000){
					    var print_issue = (parseInt(loan_amt_fetch)/1000) + ' Thousand';
				   } else {
                       var print_issue = (parseInt(loan_amt_fetch)/100000).toFixed(2) + ' Lakh';
				   }
                       var confirm_msg = "Loan Amount";
                   } 
                       $(".modalnew").css("display", "block");
                       $("#confirm_msg").html("").append(confirm_msg);
                       $("#re_con").html("").append('<span style="font-weight:bold;color:#f6650b;">Rs. '+print_issue+' </span>');
				} else { 
				if(welcm_form == '1'){
								welcom_form_submit();
				} else {
						form_submit();  }
                } }
                else {
                    if (screen.width < '767') {
                        $('html, body').animate({
                            scrollTop: ($('.error').offset().top - 200)
                        }, 1000);
                    } else {
                        $('html, body').animate({
                            scrollTop: ($('.error').offset().top - 150)
                        }, 1000);
                    }
                }
            
        });
    });
   $( "#city" ).keyup(function() {
       var val =$("#city").val();
       var count = (val.match(/\d/g) || []).length;
      if(count > 2){
          $("#city").attr('maxlength','6');
      }else{
          $("#city").removeAttr('maxlength');
      }
});
    $('#otp-form').on('keydown', 'input', function (e) {
        if (e.keyCode == 13) {
            $("input[name='verify']").click();
            e.preventDefault();
        } 
    });
 

    $("select[name='salary_paid_by']").on("change", function () {
            $(this).valid();
        });
            $("select[name='salary_paid_by']").on("change", function(){
            $(this).valid();
            salary_paid();
        });
        function salary_paid(){
            if($("select[name='salary_paid_by']").val() == '1'){
            $('.slry_acc_with').removeClass("hidden");
            }else{
            $('.slry_acc_with').addClass("hidden");
            }
        }
        salary_paid();
        $("select[name='slry_acc_with']").on("change", function () {
            $(this).valid();
            if ($(this).val() == 'other') {
                $("#other_bank_input").removeClass("hidden");
            } else {
                $("#other_bank_input").addClass("hidden");
            }
        });

 
  function opn_close_det(){ 
          var car_type = $("input[name=type_of_car]:checked").val();
        if(car_type == '1'){
            $(".car_mk").removeClass("hidden");
            $(".car_ag").addClass("hidden");
        } else if(car_type == '2'){
            $(".car_mk,#ext_oth_car_id,#ext_oth_car_model").addClass("hidden");
        }
    }
	
	  function opn_close_det_new(){ 
          var car_type = $("input[name=type_of_car]:checked").val();
        if(car_type == '1'){
            $(".car_mk").removeClass("hidden");
            $(".car_ag").addClass("hidden");
		$("#extng_car_model").addClass("hidden");
		 $("#ext_oth_car_model").removeClass("hidden");
        } else if(car_type == '2'){
            $(".car_mk,#ext_oth_car_id,#ext_oth_car_model").addClass("hidden");
        }
    }
	
function loan_strip(){
        var loan = $("#loan_type option:selected").val();
        var occup =  $('input[name=occup_id]:checked').val();
        $(".loan").addClass("active");
        $(".active").addClass("hidden");
        $(".loan_"+loan).removeClass("active").removeClass("hidden");
         var nature = $('input[name=loan_nature]:checked').val();
          if(nature == '2'){
              if(loan != 56){
              $(".bt_show").removeClass("hidden");}
              $(".bt_hide").addClass("hidden");
              if(loan == 56 && occup == 1){
                  $("#employer_type_occup,.gar_class_hide").removeClass("hidden");
                  $("#profession_occup,.itr_class_hide,.gar_class_show,#annual_turnover_occup").addClass("hidden");
              }else if(loan == 56 && occup == 2){
                   $("#profession_occup,.gar_class_show").removeClass("hidden");
                   $("#employer_type_occup,.gar_class_hide,#annual_turnover_occup,.itr_class_hide").addClass("hidden");
              }else if(loan == 56 && occup == 3){
                   $("#annual_turnover_occup,.itr_class_hide").removeClass("hidden");
                   $("#employer_type_occup,.gar_class_hide,#annual_turnover_occup,.gar_class_show").addClass("hidden");
              }else if(loan == 51 && occup == 1){
                  $("#mnthly_incm ").removeClass("hidden");
              }else{
                  $("#employer_type_occup,#profession_occup,.gar_class_show,.gar_class_hide,.itr_class_hide,#annual_turnover_occup").addClass("hidden");
              }
          }else{
              $(".bt_hide").removeClass("hidden");
              $(".bt_show").addClass("hidden");
              $("#ext_oth_bnk_id").addClass('hidden');
          }
        
      
       if(nature != 2){
            if(occup == 1){
                 if(loan == '56'){
                 $("#employer_type_occup,.gar_class_hide").removeClass("hidden");}
                 $("#annual_turnover_occup,#profession_occup,.itr_class_hide,.gar_class_show").addClass("hidden");
            }else if(occup == 2){
                if(loan != '60'){
                $("#profession_occup,.gar_class_show").removeClass("hidden");
                }
                $("#employer_type_occup,#annual_turnover_occup,.itr_class_hide,.gar_class_hide").addClass("hidden");
                if(loan == 60){
                     $(".gar_class_show").addClass("hidden");
                }
            }else if(occup == 3){
                if(loan == 57){
                    $("#annual_turnover_occup").removeClass("hidden");
                }
                 $(".itr_class_hide").removeClass("hidden");
                 $("#profession_occup,.gar_class_hide,.gar_class_show,#employer_type_occup").addClass("hidden");
            }
       }
         if($("#employer_type_occup").hasClass("hidden")){
            $(".company_name").addClass("hidden");
        }else{
             $("#employer_type").val("");
        }
        loan_type_chnge();
       
    }
     $("input[name='mobile']").on("focus", function () {
           loan_strip();
        });
		if(welcm_form == '1'){
		if($("#loan_type option:selected").val() == '61'){
		opn_close_det_new(); }
	}
    $(document).on('change', '#employer_type', function (e) {
        var emp_type = $("#employer_type").val();
        if(emp_type != '56473' && emp_type != '1'){
        $.ajax({
            data: "emp_type="+emp_type,
            type: "POST",
            url: head_url+"getfile/form/sub_emp_type.php",
            success:function(data){
                $("#sub_employer").val("");
            $("#pay_mode_fetch,#oth_emp,.company_name").addClass("hidden");
                $("#sub_emp_val").html(data);   
            }
        })
        } else if(emp_type == '1'){ 
              $("#sub_employer,#salary_paid_by").val("");
            $(".company_name").removeClass("hidden");
            $("#pay_mode_fetch,#oth_emp,#sub_employer_type,#other_bank_input,.slry_acc_with").addClass("hidden");
        }else if($("#employer_type").val() == '56473'){  
		$("#sub_employer").val("");
            $("#oth_emp,#sub_employer_type,.company_name").addClass("hidden");
             $("#pay_mode_fetch").removeClass("hidden");
        }  else if($("#employer_type").val() == '56470'){
              $("#sub_employer,#salary_paid_by").val("");
             $("#oth_emp,#pay_mode_fetch,#sub_employer_type,#other_bank_input,.slry_acc_with").addClass("hidden");
            } else {
            $("#sub_employer,#salary_paid_by").val("");
            $("#pay_mode_fetch,#oth_emp,#sub_employer_type,#other_bank_input,.slry_acc_with,.company_name").addClass("hidden");
        }
    });
    
    $(document).on('change', '#sub_employer_type', function (e) {
        if($("#sub_employer").val() == '4'){
            $("#oth_emp").removeClass("hidden");
        } else if($("#sub_employer").val() == '1'){
           $("#employer_type").val("56470"); 
             $("#oth_emp").addClass("hidden");
        } else {
            $("#oth_emp").addClass("hidden");
        }
    });
	
     function loan_type_chnge(){
		 if($("#loan_type").val() == '56'){
		     $(".occupation1").removeClass("hidden");
			  $(".professional_radio,.main_occup").addClass("hidden");
			   $("#occup_id1").attr("checked",true);
                   $("#occup_id2,#occup_id3,#self_occup").attr("checked",false);
			}else if($("#loan_type").val() == '57' || $("#loan_type").val() == '63'){
				$(".occupation3,.professional_radio").removeClass("hidden");
				$(".occupation1,.main_occup").addClass("hidden");
				if($("#loan_type").val() == '57'){
					$('#occup_id3,#self_occup').attr("checked", true);
					   $("#occup_id1").attr("checked",false);
				}else{
					$('#occup_id2,#self_occup').attr("checked", true);
					   $("#occup_id1").attr("checked",false);
				}
			}else{
			    if($("input[name='self_occup']:checked").val() == 1){
			         $(".professional_radio").removeClass("hidden");
					 $("#occup_id2").attr("checked", true);
			    }else{
			         $(".professional_radio").addClass("hidden");
					 $('#occup_id1').attr("checked", true);
					  $('#occup_id2,#occup_id3').attr("checked", false);
			    }
			    $(".occupation3,.occupation1,.occupation2,.main_occup").removeClass("hidden");
				
			}
		if(($("#loan_type").val() == '51' || $("#loan_type").val() == '54'  || $("#loan_type").val() == '56'  || $("#loan_type").val() == '52') && e_form != 2){
			$(".nature_loan").removeClass("hidden");
			$(".gar_class_show,.itr_class_hide").addClass("hidden");
		}else if($("#loan_type").val() == '60'){
			$(".gar_class_hide,.gar_class_show,.itr_class_hide").addClass("hidden");
		}else{
			if( $("#loan_type").val() != '57' ){
			$(".itr_class_hide,.nature_loan").addClass("hidden");}else{
				$(".itr_class_hide,.nature_loan").removeClass("hidden");
				$(".gar_class_hide").addClass("hidden");
			}
			if(($("#loan_type").val() == '51' || $("#loan_type").val() == '54' || $("#loan_type").val() == '52') && e_form == 2){
				if($("#loan_type").val() == '51'){
				   $("#mnthly_incm ").removeClass("hidden"); 
				}else{
				  $(".gar_class_hide,.itr_class_hide").addClass("hidden");
					}
			}
		}
	}
    loan_type_chnge();
    function get_car_model(get_val) {
        $.ajax({
            type: "POST",
            cache: "false",
            data: "car_id=" + get_val,
            url: head_url+"getfile/form/car-model.php",
            success: function (data) {
                $("#car_model").html(data);
            }
        });
    }
var a = 0; var b = 0;
    $(document).on('click', '#verify', function (e) {
        clearTimeout(timer_otp);

        var value = $("#code_ver").val();
        $("#error_message_div").html("");
if(a < 2){
        if (value.length != '4' || value.length == '0') {
            $("#error_message_div").html("<span class='alert-error'>Enter Correct Verification Code</span>");
            $(".otp_error").removeClass("hidden");
        } else {
            $("#error_message_div").text("");
            $.ajax({

                type: "POST",
                cache: false,
                beforeSend: function () {
                    $("#verify").attr('value', 'Please wait...');
					$("#verify").prop('disabled', true);
                },

                data: "no=" + value + "&uid=" + get_var_id,
                url: head_url+"getfile/form/validate-otp.php",
                success: function (data) {
                    if (data == 1) {
						a = a + 1;
                        $(".otp_error").removeClass("hidden");
                        $("#error_message_div").html("<span class='alert-error'>Enter Correct Verification Code</span>");
						$("#verify").prop('disabled', false);
                        $("#verify").attr('value', 'Verify');
                    } else if (data == 2) {
                        if (form_type != 3) {
                            window.location = goto;
                        }  }
                }
            });
        }
} else if(b < 1 ){
	a = 0;	b = b + 1;
$("#verify").prop('disabled', true);	
$(".modalotp").css("display", "block");
} else {
location.reload();	
}
    });

function welcom_form_submit(){
	 $(".modalnew").css("display", "none");
      var data_string = $("#mlc_form").serializeArray();
                        data_string.push({name: 'e_form', value: e_form});
                        $.ajax({
                            type: "POST",
                            dataType: "text",
                            data: data_string,
                            cache: false,
                            beforeSend: function () {
                                $("#submit").attr('value', 'Processing...');
								$("#submit").prop('disabled', true);
								
                            },                         
                            url: head_url+"getfile/form/welcome-submit-strip.php",
                            success: function (data) {
                                var data = $.parseJSON(data);
                                 get_var_id = data.get_id;
                                goto = data.goto;
                                form_type = data.form_type;
								 window.location = goto;
                            }
                        });
}

 function form_submit(){
     $(".modalnew").css("display", "none");
      var data_string = $("#mlc_form").serializeArray();
                        data_string.push({name: 'e_form', value: e_form});
                        $.ajax({
                            type: "POST",
                            dataType: "text",
                            data: data_string,
                            cache: false,
                            beforeSend: function () {
                                $("#submit").attr('value', 'Processing...');
								$("#submit").prop('disabled', true);
								
                            },
                             
                            url: head_url+"getfile/form/submit-strip.php",
                            success: function (data) {
                                //google analytics code
                                var net_income= parseInt($("#net_incm").val());
                                dataLayer.push({
                                  'event':'form_submit',
                                  'net_income_limit': net_income
                                });
                                //google analytics code end
								
								/* Conversion Tracking Start */
                                var google_conversion_id = 971790476;
                                var google_conversion_language = "en";
                                var google_conversion_format = "3";
                                var google_conversion_color = "ffffff";
                                var google_conversion_label = "fzP3CJf-ynUQjLGxzwM";
                                var google_remarketing_only = false;

                                $.getScript('//www.googleadservices.com/pagead/conversion.js');

                                var image = new Image(1, 1);
                                image.src = "//www.googleadservices.com/pagead/conversion/971790476/?label=fzP3CJf-ynUQjLGxzwM&amp;guid=ON&amp;script=0";
                                /* Conversion Tracking End */
								
								/* Facebook Code */
								
								fbq('track','Lead'); 
								/* end */
								
                                var data = $.parseJSON(data);
                                 get_var_id = data.get_id;
                                goto = data.goto;
                                form_type = data.form_type;
                                $(".otp-form").removeClass("hidden");
                                $(".main-form").addClass("hidden");
                                 $("#otp-pro-no").text($("#mobile").val());
                                  $(".otp_error").addClass("hidden");
                                $("#code_ver").focus();
                                if (screen.width < '767') {
                                    $('html, body').animate({
                                        scrollTop: $("#otp-form").offset().top - 180
                                    }, 1000);
                                } else {
                                    $('html, body').animate({
                                        scrollTop: $("#otp-form").offset().top - 160
                                    }, 1000);
                                }
                                timer_otp = setTimeout(function () {
                                    $.ajax({
                                        type: "POST",
                                        data: "no=" + $("#mobile").val()+"&uid="+get_var_id,
                                        cache: false,
                                        url: head_url+"getfile/form/resend.php",
                                        success: function (data) {
                                            clearTimeout(timer_otp);
                                        }
                                    });
                                }, 30000);
                            }
                        });
 }   
 function closeModal() {
     var net_fetch = $('#net_incm').val();
     var loan_fetch = $('#loan_amount').val();
      if(loan_fetch < 1000000){
      document.getElementById("loan_amount").focus();
  } else if(net_fetch < 25000){
      document.getElementById("net_incm").focus();
  }
  document.getElementById('mydiv').style.display = "none";
}
 function closeModalotp() {
	   var mob = $('#ver_num').val();
	   var lastseven = mob.substr(mob.length - 7);
	var last_digit = mob.slice(0,2);
    var cr_str =  Array(6).join(last_digit);
	
	   if(/^[789]\d{9}$/i.test(mob)){
		if((mob === '9876543210') || (/^(\d)\1+$/.test(lastseven)) || (mob === cr_str)){
		var result = false;
		$("#otp_pop_mob").removeClass("hidden");
	    }else{
		$("#otp_pop_mob").addClass("hidden");
		var result = true;
	}
	}else{
		var result = false;
		$("#otp_pop_mob").removeClass("hidden");
	}

	if(result == true){
	    $.ajax({ 
            type: "POST",
            data: "mobile=" + $('#ver_num').val() + "&uid="+get_var_id + "&e_form="+e_form,
            cache: false,
            url: head_url+"getfile/form/recheck-num.php",
            success: function (data) { 
			var data_chng = $.parseJSON(data);
			document.getElementById('number_veri').style.display = "none"; 
			$("#code_ver").val("");
			 $("#otp-pro-no").text($("#ver_num").val());
			$("#verify").prop('disabled', false);
            get_var_id = data_chng.get_id;
            goto = data_chng.goto;
                }
            });
   }   }
   if(welcm_form == '1'){
   function sub_welcm_form(id){
	  var btn_id = id;
	  if(btn_id == 'continue'){
		  welcom_form_submit();
	  } else if(btn_id == 'updt'){
		  $('#apply-now-form').removeClass("hidden");
		  $('#form_det').addClass("hidden");
	  }
  }
 
    function chng_info(id){ 
	  if(id == 'pl_det'){
		  $("#pl_detail").removeClass("hidden");
		  $("#query_detail").addClass("hidden");
		  $("#pl_det").addClass("selecte_click_button");
		  $("#ql_det").removeClass("selecte_click_button");
	  } else if(id == 'ql_det'){
		   $("#pl_detail").addClass("hidden");
		  $("#query_detail").removeClass("hidden");
		  $("#pl_det").removeClass("selecte_click_button");
		  $("#ql_det").addClass("selecte_click_button");
	  }
  }
   }
     function change_radio_occup(val){
      if(val == 'Salaried'){
		   $("#occup_id2,#occup_id3,#self_occup").attr("checked",false);
          $(".professional_radio").addClass("hidden");
          $("#occup_id1").trigger("click");
      }else{
          $("#occup_id1").attr("checked",false);
           $(".professional_radio").removeClass("hidden");
			$("#occup_id2").trigger("click");
      }
  }
    function change_gen_radio_occup(value){
  if(value == 'Salaried'){
		   $("#occup_id2,#occup_id3,#self_occup").attr("checked",false);
          $(".professional_radio").addClass("hidden");
          $("#occup_id1").trigger("click");
      }else{
          $("#occup_id1").attr("checked",false);
           $(".professional_radio").removeClass("hidden");
			$("#occup_id2").trigger("click");
      }
    
}