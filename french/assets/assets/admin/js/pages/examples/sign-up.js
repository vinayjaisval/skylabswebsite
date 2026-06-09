$(function () {

      var base_url =  $('#DASHBOARD').val(); 
      console.log(base_url)
    $('#form_validationemp').validate({


    rules: {
   
        firstname: {
        required:true,
         minlength: 3
        } ,

        lastname: {
         required:true,
         minlength: 3,

        } ,
        
        presentaddr: {
        required:true,
      
       } ,

      permanentaddr: {
         required:true,
        
       } ,  

        dob: {
        required : true,
        },

       active: {
        required : true,
       
      },
     

      mobileno:{
         required :true,
          digits: true,
          
         remote: {
        url: base_url+"/checkemail_byajax",
        type: "post",

       data: {
          mobileno: function() {
            
            return $( "#input_phone" ).val();
            }
          }
        }
      } ,

      email: {
        required: true,
        email: true,
        remote: {
        url: base_url+"/checkemail_byajax",
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

        presentaddr:  {
        required : "Current address is required",
      
      },

       permanentaddr:  {
        required : "Parmanent  is required",
       
      },
      
       dob: {
        required : "Date Of  Birth  is required",
       
      },

       active: {
        required : "staus  is required",
       
      },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


       

       

      email: {
            required : "Email  Id is required",
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },

           submitHandler: function(form) {
          form.submit();
        }

      /*  highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        }*/
    });


     $('#form_validationempEdit').validate({


    rules: {
   
        firstname: {
        required:true,
         minlength: 3
        } ,

        lastname: {
         required:true,
         minlength: 3,

        } ,
        
        presentaddr: {
        required:true,
      
       } ,

      permanentaddr: {
         required:true,
        
       } ,  

        dob: {
        required : true,
        },

       active: {
        required : true,
       
      },
     

      mobileno:{
         required :true,
          digits: true,
        
        },
  

      email: {
        required: true,
        email: true,
      
        },
      

      password: {
      
        minlength: 4
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

        presentaddr:  {
        required : "Current address is required",
      
      },

       permanentaddr:  {
        required : "Parmanent  is required",
       
      },
      
       dob: {
        required : "Date Of  Birth  is required",
       
      },

       active: {
        required : "staus  is required",
       
      },

       mobileno: {
        required : "Phone number  is required",
       
        digits:"only digit allowed",
        remote: "Phone number  already in use. Please use other Phone number."
        
      },


       
       

      email: {
            required : "Email  Id is required",
            email:    "Please enter a valid email address",
            remote: "Email address already in use. Please use other email."
        }
    },

           submitHandler: function(form) {
          form.submit();
        }

      /*  highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        }*/
    });

      $('#myform').validate({

           rules: {
        
           block_comment: "required",
       },

       });


       $("form[name='job_mettingform']").validate({

           rules: {
        
           sh_datetime: "required",
       },
            
          submitHandler: function(form) {
          form.submit();
        }

       });


       $('#form_email').validate({

           
           rules: {
        
           subjet: "required",

          'mail_content': {
                required: true
            }
       },
         ignore: []
       });



         $("#form_module").validate({

           rules: {
        
         
            name: {
              required: true,
              nameRegex:true,
              remote: {
              url: base_url+"/already_exist_module",
              type: "post",
              data: {
                name: function() {
                  
                  return $( "#input_name" ).val();
                  },

                   id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

          active: "required",
       },

        messages: {
     
        name:  {
         remote : "Module Name  is already exists.Please try other",
        
        }
      },
            
          submitHandler: function(form) {
          form.submit();
        }

       });



         $("#form_submenu").validate({

           rules: {
        
         
            name: {
              required: true,
              nameRegex:true,
              remote: {
              url: base_url+"/already_exist_submenu",
              type: "post",
              data: {
                name: function() {
                  
                  return $( "#input_name" ).val();
                  },

                   id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

          active: "required",
          theme_icon: {
                       required:true,

                      },
          submenu_url: {
                      required:true,
                      menu_urlRegex:true
          }
       },

        messages: {
     
        name:  {
         remote : "Name  is already exists.Please try other",
        
        }
      },
            
          submitHandler: function(form) {
          form.submit();
        }

       });



      $("#form_menu").validate({

           rules: {
        
         
            name: {
              required: true,
              nameRegex:true,
              remote: {
              url: base_url+"/already_exist_menu",
              type: "post",
              data: {
                name: function() {
                  
                  return $( "#input_name" ).val();
                  },

                   id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

             pagename: {
              required: true,
              pageRegex:true,
              remote: {
              url: base_url+"/already_exist_menu",
              type: "post",
              data: {
                pagename: function() {
                  
                  return $( "#input_pagename" ).val();
                  },

                   id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

          active: "required",
          submenuid: "required",
       },

        messages: {
     
        name:  {
         remote : " Name  is already exists.Please try other",
        
        },
         pagename:  {
         remote : " Page name  is already exists.Please try other",
        
        }
      },
            
          submitHandler: function(form) {
          form.submit();
        }

       });



         $("#verify_job").validate({

           rules: {
        
         
            verify_mob: {
              required: true
            },

          verify_loc: "required",
          block_comment: {
                       required:true

           },
         
       },

        messages: {
     
        verify_mob:  {
         required : "Please checked  mobile verify",
        
        },
         verify_loc:  {
         required : " Please checked  loccation verify",
        
        },
         block_comment:  {
         required : " Comment is required",
        
        }
      },

           errorElement : 'div',
           errorLabelContainer: '.errorTxt',

          submitHandler: function(form) {
          form.submit();
        }

       });


          $("#form_package").validate({

           rules: {
        
         
            pkgname: {
              required: true,

              remote: {
              url: base_url+"/checkemail_byajax",
              type: "post",
              data: {
                pkgname: function() {
                  
                  return $( "#input_pkgname" ).val();
                  },

                  id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

          description: "required",
          pkgminamount: {
                       required:true,
                       digits: true,
           },
         
       },

        messages: {
     
        pkgname:  {
         required : "Package Name is required",
         remote:   "Package Name is already exists" 
        },
         description:  {
         required : " Description is required",
        
        },
         pkgminamount:  {
         required : "Amount is required",
         digits:"only digit allowed",
        
        }
      },

       

          submitHandler: function(form) {
          form.submit();
        }

       });


         $("#verify_enquery").validate({

           rules: {
        
         
            user_remarks: {
              required: true
            },

          send_mail: "required",
         
         
       },

        messages: {
     
      
         send_mail:  {
         required : " Send Email is required",
        
        },
         user_remarks:  {
         required : " Comment is required",
        
        }
      },

           errorElement : 'div',
           errorLabelContainer: '.errorTxt',

          submitHandler: function(form) {
          form.submit();
        }

      });

      $('#submit').click(function() {
        $("#verify_enquery").valid();
      });


 $('#submit').click(function() {
        $("#verify_job").valid();
    });




$("#assigntask").validate({

           rules: {
        
         
            pkgname: {
              required: true,

              remote: {
              url: base_url+"/checkemail_byajax",
              type: "post",
              data: {
                pkgname: function() {
                  
                  return $( "#input_pkgname" ).val();
                  },

                  id: function() {
                  
                  return $( "#input_id" ).val();
                  }
                }
              }
            },

          description: "required",
          pkgminamount: {
                       required:true,
                       digits: true,
           },
         
       },

        messages: {
     
        pkgname:  {
         required : "Package Name is required",
         remote:   "Package Name is already exists" 
        },
         description:  {
         required : " Description is required",
        
        },
         pkgminamount:  {
         required : "Amount is required",
         digits:"only digit allowed",
        
        }
      },

       

      submitHandler: function(form) {
      form.submit();
    }

   });


  $("#assigntask").validate({

    rules: {
  
   
      user_remarks: {
        required: true
      },

      userid: "required",
      roleid: "required"
    },

    messages: {
 
  
    userid:  {
     required : " User is required",
    
    },

    roleid:  {
     required : " Role is required",
    
    },

     user_remarks:  {
     required : " Remark is required",
    
    },
  },

       errorElement : 'div',
       errorLabelContainer: '.errorTxt',

      submitHandler: function(form) {
      form.submit();
    }

  });



  $("#driver_payment").validate({
    
   
    ignore: ".checkno, :hidden",
    ignore: ".branchname, :hidden",
    ignore: ".bankname, :hidden",
   
   
    rules: {
  
   
      paymentmode: {
        required: true
      },

      amount: {required : true,digits:true},

      remarks: "required",
      checkno: "required",
      branchname: "required",
      paymentreceiptdate: "required",
      bankname: "required",
       status: "required"

    },

    messages: {
 
  
    amount:  {
     required : " Amount is required",
    
    },

    paymentmode:  {
     required : " Payment method is required",
    
    },

    remarks:  {
     required : " Remark is required",
    
    },

     checkno:  {
     required : " check No is required",
    
    },

     branchname:  {
     required : " Branch Name is required",
    
    },

     status:  {
     required : " Status is required",
    
    },

    bankname:  {
     required : " Bank Name is required",
    
    },
     paymentreceiptdate:  {
     required : "Payment Receipt Date  is required",
    
    },
  },

       errorElement : 'div',
       errorLabelContainer: '.errorTxt',

      submitHandler: function(form) {
      form.submit();
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
      // serviceperiod: "required",
    

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
     
     /* serviceperiod: {
        required: "Membership is required",
      },
*/
    },


    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
    
  });



jQuery.validator.addMethod("nameRegex", function(value, element) {
              return this.optional(element) || /^[a-z-_\ \s]+$/i.test(value);
          }, "Name must contain only letters & space");


});

jQuery.validator.addMethod("pageRegex", function(value, element) {
              return this.optional(element) || /^[a-z0-9_\\s]+$/i.test(value);
          }, "Name must contain only letters & number. No space allowed");

jQuery.validator.addMethod("menu_urlRegex", function(value, element) {
              return this.optional(element) || /^[a-z\\s]+$/i.test(value);
          }, "Name must contain only letters. No space allowed");




