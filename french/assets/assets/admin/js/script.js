   

  $(document).ready(function(){

     pathname   = location.pathname;
      origin    =  location.origin;

      Url   = origin;
     //alert(Url)
        //datatables
   
      var radioButtons = $("input[type='radio'][name='paid']");
      var radioStates = {};
      $.each(radioButtons, function(index, rd) {
          radioStates[rd.value] = $(rd).is(':checked');
      });

      radioButtons.click(function() {
          
          var val = $(this).val();  
          $(this).attr('checked', (radioStates[val] = !radioStates[val]));    
          
          $.each(radioButtons, function(index, rd) {
              if(rd.value !== val) {
                  radioStates[rd.value] = false; 
              }
          });
      });

  
  


  //  $('input[type="file"]').imageuploadify();      

      $("#div_toggle").hide();

      $("#hidearange").hide();

      var base_url    =  $('#MASTER_DASHBOARD').val();
        console.log(base_url)

        var uri    =  $('#segment').val();

         url = base_url+"/edit_user/"+uri
           console.log(url)
       /* if(url)
        {
             getstate_bycountry(base_url)          
        }*/

        // get state by  change  country id
         $("#country").on('change', function(){
         var country=$('#country').val();

         //  alert(country)

         var fdata = {country_id:country}; 

       console.log(fdata); // return;
     

          $.ajax({

            url:base_url+"/get_states_by_country_id",

            type:"POST",

            data:fdata,

            success: function(response){
            //  alert(response)

                           var obj = jQuery.parseJSON(response)

         //   console.log(obj);

            var ulist="";

            for (var i = 0; i < obj.length; i++) {  

              //  console.log(obj[i].name + "" + obj[i].id);

                ulist+="<option value='"+ obj[i].id +"'>"+ obj[i].name +"</option>";

              } // end for loop

              

            // update state list
            console.log(ulist);

            $("#states").html(ulist);

            
  /*
              var state_id  =    $('#states').val();
             

               var stateData = {state_id:state_id}; 
                console.log(stateData)

        
               $.ajax({

              url:base_url+"/get_cities_by_state_id",

              type:"POST",

              data:stateData,

              success: function(response2){

             //   alert(response2)

                   var obj2 = jQuery.parseJSON(response2)

            //  console.log(obj2);

              var citilist = "";

              for (var j = 0; j < obj2.length; j++) {  

                //  console.log(obj[i].name + "" + obj[i].id);

                  citilist+="<option value='"+ obj2[j].id +"'>"+ obj2[j].name +"</option>";

                } // end for loop

                

              // update state list
              console.log(citilist);

              $("#city").html(citilist);


              }

            })

*/


            }

          })

      })




            // get cities by  change  state  id
        $("#states").on('change', function(){

         
         var state_id  =    $('#states').val();
            var ulist=""; 
          // alert(state_id)

         var fdata = {state_id:state_id}; 

           console.log(fdata); // return;
     

          $.ajax({

            url:base_url+"/get_cities_by_state_id",

            type:"POST",

            data:fdata,

            success: function(response){
             // alert(response)
                 var obj = jQuery.parseJSON(response)

         //   console.log(obj);

          

            for (var i = 0; i < obj.length; i++) {  

              //  console.log(obj[i].name + "" + obj[i].id);

                ulist+="<option value='"+ obj[i].id +"'>"+ obj[i].name +"</option>";

              } // end for loop

              

            // update state list
            console.log(ulist);

            $("#city").html(ulist);
            }

          })

      })

   

})




/* $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });*/

  // Restrict presentation length
  // $('#presentation').restrictLength( $('#pres-max-length') );

  


   //  ======select all checkboxes=======

function toggle(source) {
	
  checkboxes = document.getElementsByName('ids[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
   
  console.log(source)
}

function CheckUncheckHeader() {
   //Determine the reference CheckBox in Header row.
    var chkAll = document.getElementById("md_checkbox");

    //By default set to Checked.
    chkAll.checked = true;

    //Fetch all rows of the Table.
    var rows = document.getElementById("loaddataTable").rows;

    //Execute loop on all rows excluding the Header row.
    for (var i = 1; i < rows.length; i++) {
        if (!rows[i].getElementsByTagName("INPUT")[0].checked) {
            chkAll.checked = false;
            break;
        }
    }
}



function menuName_toggle(source) {
  
  checkboxes = document.getElementsByName('menuName[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {

    checkboxes[i].checked = source.checked;

     
  }

  console.log(checkboxes)
}


function CheckUncheckmenuName() {
   //Determine the reference CheckBox in Header row.
    var chkAll = document.getElementById("md_checkbox");

    //By default set to Checked.
    chkAll.checked = true;

    //Fetch all rows of the Table.
   // var rows = document.getElementById("ajaxData");
   checkboxes = document.getElementsByName('menuName[]');

    for(var i=0, n=checkboxes.length;i<n;i++) {

      console.log(checkboxes[i].checked)
      if(!checkboxes[i].checked)
      {
          chkAll.checked = false;
           break;
      }



     
  }
 
}



function  getstate_bycountry(base_url)
{
     
         
      var country=$('#country').val();

         //  alert(country)

         var fdata = {country_id:country}; 

       console.log(fdata); // return;
     

          $.ajax({

            url:base_url+"/get_states_by_country_id",

            type:"POST",

            data:fdata,

            success: function(response){
            //  alert(response)

                           var obj = jQuery.parseJSON(response)

         //   console.log(obj);

            var ulist="";

            for (var i = 0; i < obj.length; i++) {  

              //  console.log(obj[i].name + "" + obj[i].id);

                ulist+="<option value='"+ obj[i].id +"'>"+ obj[i].name +"</option>";

              } // end for loop

              

            // update state list
            console.log(ulist);

            $("#states").html(ulist);

            var state_id  =    $('#states').val();
           

             var stateData = {state_id:state_id}; 
              console.log(stateData)

      
             $.ajax({

            url:base_url+"/get_cities_by_state_id",

            type:"POST",

            data:stateData,

            success: function(response2){

           //   alert(response2)

                 var obj2 = jQuery.parseJSON(response2)

          //  console.log(obj2);

            var citilist = "";

            for (var j = 0; j < obj2.length; j++) {  

              //  console.log(obj[i].name + "" + obj[i].id);

                citilist+="<option value='"+ obj2[j].id +"'>"+ obj2[j].name +"</option>";

              } // end for loop

              

            // update state list
            console.log(citilist);

            $("#city").html(citilist);


            }

          })




            }

          })



}


function RadioGroup1_toggle(c)
{
  console.log(c)
   if (c.value == 'week')
   {
      document.getElementById('hideme').style.display='block';
   }

   else
   {
       document.getElementById('hideme').style.display='none';
   }

}


function toggledata(checkbox)
{

      if(checkbox.checked == true){

          $("#div_toggle").show().val('')
          $(".togglevalue").val('')
          
         // $("#vehicle_type_id").hide().val('').removeClass('required');
      }
      else
      {
            $("#div_toggle").hide().val('')
            $(".togglevalue").val('')
              
      }
   
}


function togglerange(checkbox)
{

      if(checkbox.checked == true){

          $("#hidearange").show()
          $("#destination").val('');
          $("#destinationdiv").hide();

        
         // $("#vehicle_type_id").hide().val('').removeClass('required');
      }
      else
      {
            $("#hidearange").hide()
             $("#destinationdiv").show();

           
      }
   
}



  function filterdata() {

        var form = $("#filterdata");
        var url = form.attr('action');

        var postData = $('#filterdata').serializeArray();
       
        console.log(postData);
       $.ajax({ 
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
                beforeSend: function() {
                  $(".page-loader-wrapper").fadeIn();
                //   setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
              },

               success: function(data)
               {


                var selected = $('#selected').find(":selected").val();
                
                $("#modul_id").val(selected);

                   var a = $("input[name='menuName[]']");
                  
                 

                  setTimeout(function(){ $(".page-loader-wrapper").fadeOut(); }, 50);
                  $("#ajaxData").html(data); 
                  $('.js-basic-example').DataTable( {
                     "destroy": true,
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
                } );
                 //  alert(data); // show response from the php script.
               }
             });
           
      }





   function actiondata(id) {

        var form = $("#actiondata");
        var url = form.attr('action');
            var verifytype = id;
       //  alert(verifytype );
        var postData = $('#actiondata').serializeArray();
       
     
       
        postData.push({name: 'verifytype', value: verifytype});

       console.log(postData)
      $.ajax({ 
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
              //   beforeSend: function() {
              //     $(".page-loader-wrapper").fadeIn();
              
              // },

               success: function(data)
               {
                 // setTimeout(function(){ $(".page-loader-wrapper").fadeOut(); }, 50);
                 // $("#ajaxData").html(data); 
                 console.log(data);
                  var obj = jQuery.parseJSON(data) 
                  if(obj.status == "200")
                  {
                     alert(obj.message); // show response from the php script.
                     window.location.replace(obj.url); 
                  }
                  else
                  {
                       alert(obj.message); // show response from the php script.
                  }
                
               }
             });
           
      }


   function actiondata_id_proof(id) {

        var form = $("#actiondata_id_proof");
        var url = form.attr('action');
            var verifytype = id;
     
        var postData = $('#actiondata_id_proof').serializeArray();
       
     
       
        postData.push({name: 'verifytype', value: verifytype});

       console.log(postData)
      $.ajax({ 
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
              //   beforeSend: function() {
              //     $(".page-loader-wrapper").fadeIn();
              
              // },

               success: function(data)
               {
                 // setTimeout(function(){ $(".page-loader-wrapper").fadeOut(); }, 50);
                 // $("#ajaxData").html(data); 
                 console.log(data);
                  var obj = jQuery.parseJSON(data) 
                  if(obj.status == "200")
                  {
                     alert(obj.message); // show response from the php script.
                     window.location.replace(obj.url); 
                  }
                  else
                  {
                       alert(obj.message); // show response from the php script.
                  }
                
               }
             });
           
      }



   function actiondata_add_proof(id) {

        var form = $("#actiondata_add_proof");
        var url = form.attr('action');
            var verifytype = id;
       
        var postData = $('#actiondata_add_proof').serializeArray();
       
     
       
        postData.push({name: 'verifytype', value: verifytype});

       console.log(postData)
      $.ajax({ 
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
              //   beforeSend: function() {
              //     $(".page-loader-wrapper").fadeIn();
              
              // },

               success: function(data)
               {
                 // setTimeout(function(){ $(".page-loader-wrapper").fadeOut(); }, 50);
                 // $("#ajaxData").html(data); 
                 console.log(data);
                  var obj = jQuery.parseJSON(data) 
                  if(obj.status == "200")
                  {
                     alert(obj.message); // show response from the php script.
                     window.location.replace(obj.url); 
                  }
                  else
                  {
                       alert(obj.message); // show response from the php script.
                  }
                
               }
             });
           
      }






function showModalData(id,url = '',type = '') {
          // debugger ;
        var form = $("#actiondata");
        if(url  == '')
        {
               url = form.attr('action');
        }

         var postData = $('#actiondata').serializeArray();
       
        var spliturl = url.split("/");
        var pathname  = spliturl[spliturl.length-2];
      // console.log(spliturl[spliturl.length-2])
      
                 
     //  alert(url + ", id =" + id+ " type" + type);
      $.ajax({
                type: "POST",
                url: url,
                data: {"id": id,'type':type},
               // dataType: "json",
               // contentType: "application/json; charset=utf-8",
			    beforeSend: function() {
                  $("#cover-spin").fadeIn();
                },
                success: function (response) {
                  setTimeout(function () { $('#cover-spin').fadeOut(); }, 100);
                  console.log(response);
                  $('#defaultModal').modal('show');
                  if(pathname ==='closedquery')
                  $("#defaultModalLabel").html("Closed Enquery");
                 else
                   $("#defaultModalLabel").html("show Detail");
                  $("#modal-body").html(response)
                 
                }
            });
       
        }




function inputModalData(id,url = '' ,type = '') {
          debugger ;
          if(type == 'jobmeeting')
          {
             if(url)
              {
                 $("#job_mettingform").attr('action', url);

              }
              
              $('#job_meeting').modal('show');
              $("#inputModalLabel").html("Mera Driver");
              $("#job_id").val(id)
          }
          else
          {
             if(url)
              {
                 $("#myform").attr('action', url);

              }

              $('#inputModal').modal('show');
              $("#inputModalLabel").html("Mera Driver");
              $("#list_id").val(id)
          }
          
           
      
       
       
       alert(", id =" + id);  

  }



  function ModalData(id) {
          // debugger ;
        var form = $("form[name='actiondata']");
        var url = form.attr('action');
        var button = document.getElementById('submit');
        
        var postData = $("form[name='actiondata']").serializeArray();
       
                 
     // alert(url + ", id = " + id);
    //  console.log(postData);

     $.ajax({
                type: "POST",
                url: url,
                data:  postData,
               // dataType: "json",
               // contentType: "application/json; charset=utf-8",
                beforeSend: function() {

                 
                    button.innerText = 'Processing';
                    button.disabled = true;
                  $(".page-loader-wrapper").fadeIn();
              
                },
                success: function (response) {
                       
                setTimeout(function(){ $(".page-loader-wrapper").fadeOut();  button.innerText = 'Submit';
                    button.disabled = false; }, 500);
                  
                  console.log(response);
                  obj  =  JSON.parse(response)
                
                   console.log(obj.status);
                  

                  if(obj.status == 200)
                  {
                     alert(obj.message); // show response from the php script.
                   
                     setTimeout(function () { location.reload(); }, 500);
                   
                  }
                  else
                  {
                       alert(obj.message); // show response from the php script.
                  }
                 
                }

            });
       
        }




function getcheckbox(url='') {
   
   if(url == '')
   {
      var form = $("#actiondata");
      url  = form.attr('action');
   }
  
    var checkedIds  = [];

     checkedIds = $("input[name='ids[]']:checked").map(function() {
      return this.id;
    }).toArray();

  
  
    
   if(url !== undefined && checkedIds.length > 0)
   {

    
     $.ajax({
            type: "POST",
            url: url,
            data: {"ids": checkedIds},
           // dataType: "json",
           // contentType: "application/json; charset=utf-8",
            success: function (response) {
              
              console.log(response);
              $('#defaultModal').modal('show');
              $("#defaultModalLabel").html("show Detail");
              $("#modal-body").html(response)
             
            }
      });
   }
       

}

function getuser(data,url) {
     console.log(data.value)

      $.ajax({
            type: "POST",
            url: url,
            data: {"roleid": data.value},
           // dataType: "json",
           // contentType: "application/json; charset=utf-8",
            success: function (response) {
              
              console.log(response);
              
               $("#userdiv").show()
               $("#userid").html(response)
             
            }
      });
}


  
function getpackage(url = '') {
      
      pack_id  =   $('#package option:selected').val();
      
      $.ajax({
            type: "POST",
            url: url,
            data: {"pack_id": pack_id},
           // dataType: "json",
           // contentType: "application/json; charset=utf-8",
            success: function (response) {
              
              console.log(response);
              $("#pakcage_detail").show().html(response)
             
              // $("#userid").html(response)
             
            }
      });
}



