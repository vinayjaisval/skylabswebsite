$(function () {

      var base_url =  $('#driverboard').val(); 
      console.log(base_url)
    $('#driverform').validate({


    rules: {

    	drivertype: {
            required:true,
        } ,

        jobtype: {
            required:true,
        } ,

        vehicletype: {
            required:true,
        } ,
        
        totalexperience: {
            required:true,
        } ,

        expectedsalary: {
            required:true,
        } ,

      
        
        

   
        firstname: {
        required:true,
         minlength: 3
        } ,

        lastname: {
         required:true,
         minlength: 3,

        } ,
        
        presentadd: {
        required:true,
      
       } ,

      permanentadd: {
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

        presentadd:  {
        required : "Current address is required",
      
      },

       permanentadd:  {
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
        
        presentadd: {
        required:true,
      
       } ,

      permanentadd: {
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

        presentadd:  {
        required : "Current address is required",
      
      },

       permanentadd:  {
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

     
    });



  $('#enquiryform').validate({


    rules: {

     

        firstname: {
        required:true,
         minlength: 3
        } ,

        lastname: {
         required:true,
         minlength: 3,

        } ,
        
        address: {
        required:true,
      
       } ,

     

      contactno:{
         required :true,
          digits: true,
          
       /* remote: {
        url: base_url+"/checkemail_byajax",
        type: "post",

       data: {
          mobileno: function() {
            
            return $( "#input_phone" ).val();
            }
          }
        }*/
      } ,

     /* email: {
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
      },*/

       gender: {
        required:true,
       
        } ,

      drivingexperience: {
            required:true,
        } ,


       

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

        presentadd:  {
        required : "Current address is required",
      
      },

       permanentadd:  {
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

      
    });



});