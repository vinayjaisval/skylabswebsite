  $(document).ready(function(){

    base_url  =  location.origin;
    if(base_url  == 'http://localhost:808' || base_url == 'http://localhost')
    {
        base_url  =    base_url+'/drivers';
    }

   /* if(base_url+"/Customer_Profile_Edit")
    {
       load_profile();
    }*/
   

    

        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info')
        
         .on('click', function(){
                      var elmForm = $("#myForm");
                     if(!validstep4())
                      {
                         return false;
                      }
                   
                     /* if(elmForm){
                          elmForm.validator('validate');
                          var elmErr = elmForm.find('.has-error');
                          if(elmErr && elmErr.length > 0){
                              alert('Oops we still have error in the form');
                              return false;
                          }else{
                              alert('Great! we are ready to submit form');
                              elmForm.submit();
                              return false;
                          }
                      }*/
              });

            var btnCancel = $('<button></button>').text('Cancel')
                 .addClass('btn btn-danger')
                 .on('click', function(){
                        $('#smartwizard').smartWizard("reset");
                        $('#myForm').find("input, textarea").val("");
                    });



            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'default',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });


            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                //var elmForm = $("#form-step-" + stepNumber);\
              // var val= wizard_validate();

             /* $(".target").each(function(){
                var images = $(this).find(".scrolling img");
                var width = images.width();
                var imgLength = images.length;
                $(this).find(".scrolling").width( width * imgLength * 1.2 );
            });
            */
              
              if (!validStep1()) {
                 return false;
              }

              if(!validStep2())
              {
                 return false;
              }

               if (!validStep3()) {
                 return false;
              }

             
             

           /* if(!validStep1()){
                  return false;
               }*/

                //var valid=wizard_validate();
                //alert(valid)
                     /* if(!valid)
                      {
                        return false;
                      }*/
               
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
               /* if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }*/

                //return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){
                    $('.btn-finish').removeClass('disabled');
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });

        });




  function load_profile(step = '') {
    
    alert(base_url);
     if(step != ""){
        step  = step;
     }
     else
     {
       step  = "step-1";
     }
   
   
      $.ajax({
          
          url:base_url+"/Meradriver_WebApp/Ajax_load_EditProfile",
          type:"POST",
          success: function(response){
            console.log(response)
            $("#"+step).html(response)
          }
      })
  }


function  validStep1() {  
  
  var form = $("#form-step-0");

  if(!form.valid())
  {
    return false;
  }

  load_profile('step-2')

  return true;
 
}

function  validStep2() {  
  
 var form = $("#form-step-1");
 if(!form.valid())
  {
    return false;
  }

  load_profile('step-3')
  return true;
 
}

function  validStep3() {  
  

  var form = $("#form-step-2");
  if(!form.valid())
  {
    return false;
  }

  load_profile('step-4')
  return true;
 
}


function validstep4() {

 var form = $("#form-step-3");
 if(!form.valid())
  {
    return false;
  }

  return true;
}


 $("#form-step-0").validate({
        rules: {
           uname: {
               
                minlength: 4
            },
            email: {
                required: true,
                email: true
            }
        }
    });



  $("#form-step-1").validate({
        rules: {
           name: {
               
                minlength: 4
            },

            lastname: {
            
                minlength: 4
            },
        }
    });


   $("#form-step-2").validate({
        rules: {
           address: {
               
                minlength: 10
            },
          }
    });


 $("#form-step-3").validate({
        rules: {
           terms: {
               
            required: true,
            },
          }
  });





/*  function finished() {
      alert('finidhes');
 }*/