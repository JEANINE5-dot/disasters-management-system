<footer class="page-footer font-small blue-grey mt-5 lighten-5" id="footer">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
    <a class="dark-grey-text" href="#"> Hermogene</a>
  </div>
  <!-- Copyright -->

</footer>
<script src="admin/js/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="admin/js/bootstrapValidator.js"></script>
<script src="admin/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css"> 

<script src="js/fontawesome.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#date").datepicker({
        dateFormat:"yy-mm-dd",
        showAnim: 'drop',
        minDate:"-4y",
        maxDate:"+1y"
      });

    });
  </script>
<script type="text/javascript">
  $(document).ready(function(){
       $('#add').click(function(){
        $('#econ').toggleClass('fa fa-eye-slash');
        var input = $("#password");
        if (input.attr("type")==="password") {
          input.attr("type","text");
        }
        else{
          $('#econ').toggleClass('fa fa-eye');
          input.attr("type","password");
        }
       });
     });
</script>
  <script>
$(document).ready(function(e){
    function displayChat(){

    $.ajax({
        url:'display_msg.php',
        type:'POST',
        success:function(data){
            $("#chatDisplay").html(data);
        }
    });

    }

    setInterval(function(){displayChat();},1000);
   $('#sendMessageBtn').click(function(e){
     var ad_id=$("#user_name").val();
      var re_name=$("#re_name").val();
       $("#myChatForm")[0].reset();

       $.ajax({
           url:'send_msg.php',
           type:'POST',
           data:{
               ad_id:ad_id,
               re_name:re_name
           }
       });
   });
});
</script>

 <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#aji").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
    </script>
<script>
$(function(){
   

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

 
  
  
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                        stringLength: {
                         min: 3,
                        max: 10,
                        message:'Please enter at least 3 characters and no more than 10'
                    },
                    regexp: {
                        regexp: /^[A-Za-z]+$/,
                        message: 'please put only alphabetic letters'
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             sector_name: {
                validators: {
                      
                    regexp: {
                        regexp: /^[A-Za-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a sector name name'
                    }
                }
            },
               fullname: {
                validators: {
                     stringLength: {
                         min: 3,
                         max:30,
                        message:'Please enter at least 3 characters and no more than 16'
                    },
                      
                    regexp: {
                        regexp: /^[A-Z a-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a fullname name'
                    }
                }
            },
               parent2: {
                validators: {
                     stringLength: {
                         min: 3,
                         max:30,
                        message:'Please enter at least 3 characters and no more than 16'
                    },
                      
                    regexp: {
                        regexp: /^[A-Z a-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a fullname name'
                    }
                }
            },
             faname: {
                validators: {
                     stringLength: {
                         min: 3,
                         max:30,
                        message:'Please enter at least 3 characters and no more than 16'
                    },
                      
                    regexp: {
                        regexp: /^[A-Z a-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a father name'
                    }
                }
            },
             maname: {
                validators: {
                     stringLength: {
                         min: 3,
                         max:30,
                        message:'Please enter at least 3 characters and no more than 16'
                    },
                      
                    regexp: {
                        regexp: /^[A-Z a-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a mother name'
                    }
                }
            },
             bname: {
                validators: {
                     stringLength: {
                         min: 3,
                         max:30,
                        message:'Please enter at least 3 characters and no more than 16'
                    },
                      
                    regexp: {
                        regexp: /^[A-Z a-z]+$/,
                        message: 'please put only alphabetic lettfers'
                    },
                        notEmpty: {
                        message: 'Please supply a baby name'
                    }
                }
            },
              bcode: {
                validators: { 
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'please put only numerical characters'
                    },
                        notEmpty: {
                        message: 'Please supply a baby code'
                    }
                }
            },
           national_id: {
                validators: {
                     stringLength: {
                         min: 16,
                         max:16,
                        message:'Please enter exactly 16 digits'
                    },
                      
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'please put only numerical characters'
                    },
                        notEmpty: {
                        message: 'Please supply a national_id'
                    }
                }
            },
              fees: {
                validators: {
                     stringLength: {
                         min: 4,
                         max:4,
                        message:'Please enter exactly 4 digits'
                    },
                      
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'please put only numerical characters'
                    },
                        notEmpty: {
                        message: 'Please supply Fees'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    
                    stringLength: {
                        min: 10,
                        max: 10,
                        message:'Please enter at least 10 characters and no more than 10'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'please put only integers'
                    }
                }
            },
            address: {
                validators: {
                    //  stringLength: {
                    //     max: 8,
                    // },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
    comment: {
                validators: {
                      stringLength: {
                        min: 5,
                        max: 200,
                        message:'Please enter at least 5 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                    }
                 }, 
   email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
        // job_opportunity: {
        //         validators: {
        //             notEmpty: {
        //                 message: 'Please supply your link address'
        //             },
        //             https: {
        //                 message: 'Please supply a valid email address'
        //             }
        //         }
        //     },
          
  passworda: {
            validators: {
                identical: {
                    field: 'passwordb',
                    message: 'Confirm your password below - type same password please'
                }
            }
        },
        passwordb: {
            validators: {
                identical: {
                    field: 'passworda',
                    message: 'The password and its confirm are not the same'
                }
            }
         },
      
            
            }
        })
    
  
        // .on('success.form.bv', function(e) {
        //     $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
        //         $('#reg_form').data('bootstrapValidator').resetForm();
 
        //     // Prevent form submission
        //     e.preventDefault();
 
        //     // Get the form instance
        //     var $form = $(e.target);
 
        //     // Get the BootstrapValidator instance
        //     var bv = $form.data('bootstrapValidator');
 
        //     // Use Ajax to submit form data
        //     $.post($form.attr('action'), $form.serialize(), function(result) {
        //         console.log(result);
        //     }, 'json');
        // });
});
 
 
    
            
</script>
</body>

</html>