

 var $ = $.noConflict();

  // Wait for the DOM to be ready
$(function() {

   var date_input=$('input[id="datetimepicker1"]'); //our date input has the name "date"
   
    date_input.datepicker({
      format: 'dd/mm/yyyy',
      todayHighlight: true,
      autoclose: true,
    })

       var base_url =  $('#web_baseurl').val(); 

       
 $(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
     $(this).val($(this).val().replace(/[^\d].+/, ""));
      if ((event.which < 48 || event.which > 57)) {
          event.preventDefault();
      }
  });


    //   alert(base_url)
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='driver_login']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: "required",
    
      password: {
        required: true,
      
      }
    },
    // Specify validation error messages
    messages: {
      username: "Mobile No is required",
     
      password: {
        required: "Please provide a password",
     
      },
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



  $("form[name='custoner_login']").validate({
  // Specify validation rules
  rules: {
    // The key name on the left side is the name attribute
    // of an input field. Validation rules are defined
    // on the right side
    username: "required",
  
    password: {
      required: true,
    
    }
  },
  // Specify validation error messages
  messages: {
    username: "Mobile No. is required",
   
    password: {
      required: "Please provide a password",
   
    },
   
  },


  // Make sure the form is submitted to the destination defined
  // in the "action" attribute of the form when valid
  submitHandler: function(form) {
    form.submit();
  }
});

     
     /*  user registration form  */

    $("form[name='driver_register']").validate({
   
    rules: {
   
      first_name: {
        required:true,
         minlength: 3
       } ,

      last_name: {
         required:true,
         minlength: 3,

       } ,

      driver_type: {
        required:true,
       
       } ,
      /*username: 
      {
        required:true,
        minlength: 3,
        remote: {
        url:  base_url+"Meradriver_WebApp/checkemail_byajax",
        type: "post",
        data: {
          username: function() {
             
            return $( "#username" ).val();
            }
          },

        


        }

      },*/

      mobileno:{
         required :true,
         digits: true,
		 maxlength:10,
		 minlength:10,
		  
          
         remote: {
        url: base_url+"Meradriver_WebApp/check_driver_byajax",
        type: "post",
        data: {
          mobileno: function() {
            
            return $( "#input_phone" ).val();
            }
          }
        }
      } ,

      email: {
        //required: true,
        email: true,
        remote: {
        url: base_url+"Meradriver_WebApp/check_driver_byajax",
        type: "post",
        data: {
          email: function() {
            
            return $( "#input_email" ).val();
            }
          }
        }
      },

      password: {
        required: true,
        minlength: 4
      },


         password_confirmation: {

          equalTo: "#password"
        }

    },

  
    messages: {
     
      first_name:  {
        required : "First Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },

       last_name:  {
        required : "Last Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },
      
       username: {
        required : "Username  is required",
        minlength : "Username must  be at least 3 characters long",
        remote: "Username  already in use. Please use other Username."
      },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 4 characters long"
        },

       password_confirmation: {
           equalTo: "confirmation passord not same"
        },

      email: {
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },


    submitHandler: function(form) {
      form.submit();
    }
  });




     $("form[name='customer_register']").validate({
   
    rules: {
   
      first_name: {
        required:true,
         minlength: 3
       } ,

      last_name: {
         required:true,
         minlength: 3,

       } ,

     /* username: 
      {
        required:true,
        minlength: 3,
        remote: {
        url:  base_url+"Meradriver_WebApp/check_customer_byajax",
        type: "post",
        data: {
          username: function() {
             
            return $( "#c_username" ).val();
            }
          },

        


        }

      },*/

      mobileno:{
         required :true,
         digits: true,
		 maxlength:10,
		 minlength:10,
          
         remote: {
        url: base_url+"Meradriver_WebApp/check_customer_byajax",
        type: "post",
        data: {
          mobileno: function() {
            
            return $( "#input_Cphone" ).val();
            }
          }
        }
      } ,

      email: {
        required: true,
        email: true,
        remote: {
        url: base_url+"Meradriver_WebApp/check_customer_byajax",
        type: "post",
        data: {
          email: function() {
            
            return $( "#input_Cemail" ).val();
            }
          }
        }
      },

      password: {
        required: true,
        minlength: 4
      },


         password_confirmation: {

          equalTo: "#password"
        }

    },

  
    messages: {
     
      first_name:  {
        required : "First Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },

       last_name:  {
        required : "Last Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },
      
       username: {
        required : "Username  is required",
        minlength : "Username must  be at least 3 characters long",
        remote: "Username  already in use. Please use other Username."
      },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 4 characters long"
        },

       password_confirmation: {
           equalTo: "confirmation passord not same"
        },

      email: {
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },


    submitHandler: function(form) {
      form.submit();
    }
  });



 $("form[name='otpForm']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
     
    
      otp: {
        required: true,
        remote: {
        url: base_url+"Meradriver_WebApp/checkotp",
        type: "post",
        data: {
          otp: function() {
            
            return $( "#otp" ).val();
            },
          }
        }

      },
    },
    // Specify validation error messages
    messages: {
      otp: {
          remote: "OTP Does not matched",
        }
   
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



  $("form[name='edit_user']").validate({
   
    groups: {
            names: "adhar_num dl_num voter_num ,aadharcard,voter_id,dl",
          },

    rules: {
   
      firstname: {
        required:true,
         minlength: 3
       } ,

      lastname: {
         required:true,
         minlength: 3,

       } ,

   

      mobileno:{
         required :true,
          digits: true,
		  maxlength:10,
		  minlength:10,
          
        remote: {
        url: base_url+"Meradriver_WebApp/check_customer_byajax",
        type: "post",
        data: {
          mobileno: function() {
            
            return $( "#input_mobileno" ).val();
            },

            custid: function() {
            
            return $( "#input_custid" ).val();
            }
          }
        }
      } ,

      email: {
        required: true,
        email: true,
        remote: {
        url: base_url+"Meradriver_WebApp/check_customer_byajax",
        type: "post",
        data: {
          email: function() {
            
            return $( "#input_email" ).val();
            },
           custid: function() {
            
            return $( "#input_custid" ).val();
            }
          }
        }
      },

      address: {
        required: true,
      
      },

      language: {
        required: true,
      
      },

       age: {
        required: true,
      
      },

       gendar: {
        required: true,
      
      },

    /*  adhar_num: {
          required: '#dl_num:blank,#voter_num:blank',
            digits: true,
     },
     dl_num: {
          required: '#adhar_num:blank,#voter_num:blank'
            digits: true,
     },

    voter_num: {
          required: '#dl_num:blank,#adhar_num:blank'
            digits: true,
     },*/

     adhar_num: {
        require_from_group: [1, ".kyc-group"],
      },
   
    dl_num: {
        require_from_group: [1, ".kyc-group"]
    },

    voter_id: {
        require_from_group: [1, ".kyc-group"]
      },



    aadharcard: {
        require_from_group: [1, ".kyc-file-group"],
        accept:"image/*,pdf"

      },
   
    dl: {
        require_from_group: [1, ".kyc-file-group"],
          accept:"image/*,pdf"
    },

    voter_id: {
        require_from_group: [1, ".kyc-file-group"],
        accept:"image/*,pdf"
    },


       

    },

  
    messages: {
     
      firstname:  {
        required : "First Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },

       lastname:  {
        required : "Last Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },
      aadharcard: {
           accept: "Only images and pdf file is allowed"
       },
      
      dl: {
          accept: "Only images and pdf file is allowed"
       },

      voter_id: {
          accept: "Only images and pdf file is allowed"
       },
      
      //  username: {
      //   required : "Username  is required",
      //   minlength : "Username must  be at least 3 characters long",
      //   remote: "Username  already in use. Please use other Username."
      // },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


     
      language: {
        required: "Language is required",
        },

        age: {
        required: "Date of Birth is required",
        },

        address: {
        required: "Address is required",
        },

       
      email: {
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },


    submitHandler: function(form) {
       //  form.submit();
		 if($( "form[name='edit_user']" ).valid())
	     {

			 form.submit();			 
		 }
    } 
	
	
	
	 
	
  });


  $("form#edit_driver_form").validate({
   
    /* groups: {
            names: "adhar_num dl_num voter_num ,aadharcard,voter_id,dl",
          },*/
    rules: {
   
      firstname: {
        required:true,
         minlength: 3
       } ,

      lastname: {
         required:true,
         minlength: 3,

       } ,

      totalexperience: {
         required:true,
         minlength: 1,
         maxlength: 2,
         digits:true

       } ,

   

      mobileno:{
         required :true,
          digits: true,
		  maxlength:10,
		  minlength:10,
          
         remote: {
        url: base_url+"Meradriver_WebApp/check_driver_byajax",
        type: "post",
        data: {
          mobileno: function() {
            
            return $( "#input_mobileno" ).val();
            },

            drId: function() {
            
            return $( "#input_drid" ).val();
            }
          }
        }
      } ,

      email: {
        required: true,
        email: true,
        remote: {
        url: base_url+"Meradriver_WebApp/check_driver_byajax",
        type: "post",
        data: {
          email: function() {
            
            return $( "#input_email" ).val();
            },
          
           drId: function() {
            
            return $( "#input_drid" ).val();
            }
          }
        }
      },

      address: {
        required: true,
      
      },

      language: {
        required: true,
      
      },

       dob: {
        required: true,
      
      },

       gendar: {
        required: true,
      
      },
    },

  
    messages: {
     
      firstname:  {
        required : "First Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },

       lastname:  {
        required : "Last Name  is required",
        minlength : "Last Name must  be at least 3 characters long"
      },
      
      //  username: {
      //   required : "Username  is required",
      //   minlength : "Username must  be at least 3 characters long",
      //   remote: "Username  already in use. Please use other Username."
      // },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


     
      language: {
        required: "Language is required",
        },

        dob: {
        required: "Date of Birth is required",
        },

        address: {
        required: "Address is required",
        },

       
      email: {
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },


    submitHandler: function(form) {

         form.submit();
      

     // form.submit();
     /*   var button = document.getElementById('submitbtn');
        button.disabled = true;
         var aadharcards = $("#aadharcard").prop("files")[0]; 
         var police_doc = $("#police_doc").prop("files")[0];
         var dl = $("#dl").prop("files")[0];   
         var form_data = new FormData(this);
          form_data.append("aadharcards", aadharcards);
          form_data.append("dl", dl);
          form_data.append("police_doc", police_doc);
          console.log(form_data);
          $.ajax({
              url: "http://localhost:808/drivers/Customer_Profile_Edit",
              dataType: 'script',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,                         
              type: 'post',
               beforeSend: function() {
                  $('#cover-spin').show(0)
                  button.innerText = 'Processing';
              },

              success: function(){
                  alert("works"); 
                  button.innerText = 'Submit';
                  button.disabled = false;
              }
          });*/
    }
  });


$("form[name='upload_files']").validate({
    // Specify validation rules
    rules: {
     
    "aadharcards[]": {
        required: true,
        accept:"image/*,pdf"

      },
   
   "dl[]": {
        required: true,
          accept:"image/*,pdf"
    },

    "police_doc[]": {
        required: true,
          accept:"image/*,pdf"
    },
  
  
    uidno: {
        required: true,
        digits:true,
      },
   
    drivinglicencno: {
        required: true,
    },
    
     dlissuedate: {
        required: true,
    },
     dlexpiredate: {
        required: true,
    },

    },

 


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });




  $("form[name='search_driver']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      searchTextField: "required",
   //   driver_type: "required",
    
    /*
     job_type: {
        required: true,
      
      },*/
    },
    // Specify validation error messages
    messages: {
      searchTextField: "Location is required",
     // driver_type: "Driver Type is required",

     
      /*job_type: {
        required: "Category is required",
     
      },*/
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
       submitHandler: function(form) {
        //  form.submit();
       
        }
  });


 $("form[name='postjob']").validate({
    // Specify validation rules
    rules: {
     
      customertype: "required",
      experiancerequired: "required",
      driverrequired: "required",
      jobusage: "required",
      location: "required",
      serviceperiod: "required",
    

    },
    // Specify validation error messages
    messages: {

      customertype: "customer type is required",
     
      experiancerequired: {
        required: "Experience is required",
      },
     
      driverrequired: "No. Of Drivers is required",
     
      jobusage: {
        required: "Job Usage is required",
      },

       location: "Location is required",
     
      serviceperiod: {
        required: "Membership is required",
      },

    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });



  $("form[name='book_enquery']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      enq_type: "required",
    
      customertype: {
        required: true,
      
      },

      firstname: {
        required: true,
      
      },

       lastname: {
        required: true,
      
      },
	  
	   remarks: {
        required: true,
      
      },

      gender: {
        required: true,
      
      },

      contactno: {
        required: true,
        digits :true,
        maxlength:10,
      
      },

       duty_hr: {
        required: true,
        digits :true,
       
      
      },

       expectedsal: {
        required: true,
        digits :true,
       
      
      },
      
      interviewDate: {
        required: true,
      
      },
       interviewTime: {
        required: true,
      
      },
      transmissiontype: {
        required: true,
      
      },
      email: {
        required: {
           depends:function(){
            $(this).val($.trim($(this).val()));
            return true;
          }
        },
        email:true,
      
      },

       address: {
        required: true,
      
      },
	  
	  expectedsal: {
        required: true,
      
      },
	  licensetype: {
        required: true,
      
      },
	  
	  
	  drivingexperience: {
        required: true,
      
      },

     

    },
    // Specify validation error messages
    messages: {
      enq_type: "Enquery Type is required",
     
      customertype: {
        required: "Customer type is required",
         digits:"only digit allowed",
     
      },

        firstname: {
        required: "First Name is required",
     
      },

       lastname: {
        required: "Last Name is required",
     
      },

        gender: {
        required: "Gender is required",
     
      },


      contactno: {
        required: "Contact No is required",
     
      },

        email: {
        required: "email is required",
        email:    "Please enter a valid email address",
     
      },

       address: {
        required: "Address is required",
     
      },
	   expectedsal: {
        required: "Salary  is required",
     
      },
	  
	   drivingexperience: {
        required: "Experience is required",
     
      },
	  
	   licensetype: {
        required: "Licence Type is required",
     
      },

        remarks: {
        required: "Remarks is required",
        minlength : "Remarks must  be at least 10 characters long"

     
      },
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



   $("form[name='book_enquery_hourly']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      enq_type: "required",
    
      customertype: {
        required: true,
      
      },

      firstname: {
        required: true,
      
      },

       lastname: {
        required: true,
      
      },
	  
	   remarks: {
        required: true,
      
      },

      gender: {
        required: true,
      
      },

      contactno: {
        required: true,
        digits :true,
        maxlength:10,
      
      },

       duty_hr: {
        required: true,
        digits :true,
        
      
      },

       expectedsal: {
        required: true,
        digits :true,
       
      
      
      },
      
      interviewDate: {
        required: true,
      
      },
       interviewTime: {
        required: true,
      
      },
	   transmissiontype: {
        required: true,
      
      },

      email: {
        required: {
           depends:function(){
            $(this).val($.trim($(this).val()));
            return true;
          }
        },
        email:true,
      
      },

       address: {
        required: true,
      
      },

      dp_location: {
        required: true,
      
      },

     

    },
    // Specify validation error messages
    messages: {
      enq_type: "Enquery Type is required",
     
      customertype: {
        required: "Customer type is required",
         digits:"only digit allowed",
     
      },

        firstname: {
        required: "First Name is required",
     
      },

       lastname: {
        required: "Last Name is required",
     
      },

        gender: {
        required: "Gender is required",
     
      },


      contactno: {
        required: "Contact No is required",
     
      },

        email: {
        required: "email is required",
        email:    "Please enter a valid email address",
     
      },

       address: {
        required: "Pickup location is required",
     
      },

       dp_location: {

        required: "Drop location is required",
     
      },

        remarks: {
        required: "Remarks is required",
        minlength : "Remarks must  be at least 10 characters long"

     
      },
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });




   $("form[name='checkout_form']").validate({
    // Specify validation rules
    rules: {
    
      pack_month: "required",
      aknlgment: "required",
     },
    
    messages: {
      pack_month: "month  is required",
    
   },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
       submitHandler: function(form) {
          form.submit();
        }
  });



 $("form[name='contact_us']").validate({
    // Specify validation rules
    rules: {
     
      name: "required",
      email: {required :true,email:true},
      phone: {required:true,digits:true},
      address: "required",
      textarea_message: "required",
    
    

    },
    // Specify validation error messages
    messages: {

      name: "Name  is required",
     
      email: {
        required: "Email is required",
      },
     
      phone: {required: "Phone No. is required", digits:  "only digits allowed", },
     
      address: {
        required: "Address is required",
      },

       textarea_message: "Message is required",
     
     
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });




  // alias required to cRequired with new message
 //$.validator.addMethod("require_from_group", $.validator.methods.required,
 //  "Customer name required");
 // alias minlength, too
 //$.validator.addMethod("cMinlength", $.validator.methods.minlength,
   // leverage parameter replacement for minlength, {0} gets replaced with 2
 //  $.validator.format("kyc number must have at least {0} characters"));
 // combine them both, including the parameter for minlength
 //$.validator.addClassRules("kyc-group", { cRequired: true,});

 $.validator.addMethod('kyc-group', function (value, element) {
                    var module = $(element).parents('form');
                    return module.find('.kyc-group:filled').length;
                }, 'Please fill out Aadhar / Driving Licence / Voter Id Number .');


 $.validator.addMethod('kyc-file-group', function (value, element) {
                    var module = $(element).parents('form');
                    return module.find('.kyc-file-group:filled').length;
                }, 'Please upload Aadhar / Driving Licence / Voter Id  file .');



});


 $("form[name='feedback_form']").validate({
    // Specify validation rules
    rules: {
     
      experience: "required",
      comments: "required",
     },

      messages: {

      
    },

    // Specify validation error messages
   

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });



function  valid(formid) {  
  
  var form = $("#"+formid);

  if(!form.valid())
  {
    return false;
  }


  return true;
 
}














