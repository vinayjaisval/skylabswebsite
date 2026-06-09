
  var base_url = window.location.origin;

    if(base_url == 'http://localhost:808' || base_url == 'http://localhost')
    {
      base_url   =  base_url+"/drivers";
    }
    else
    { 
        base_url = base_url;
    }


$(document).ready(function(){
var  city;
 getcity();
getLocation()

        var base_url =  $('#web_baseurl').val();
        var  segment     = $("#segment").val();
        var    url        =  "search-driver";


// With JQuery

//$("#ex12b").slider({ id: "slider12b", min: 18, max: 60, range: true, value: [18, 60] });
//$("#ex12c").slider({ id: "slider12c", min: 12000, max: 30000, range: true, value: [12000, 30000] });



/* Example 12 */

     /*  $("#ex12b").slider({
        id: "slider12b",
        min: 18,
        max: 60,
        range: true,
        value: [ 18, 60 ],



      });






      $("#ex12c").slider({
        id: "slider12c",
        min: 12000,
        max: 30000,
        range: true,
        value: [ 12000, 30000]
      }); */

   // alert(url+ " " +segment)
   /*  if(url == segment)
    {
         var value  = document.getElementById("ex12b").defaultValue;
        console.log(value)
        str  = value.split(",");

        $("#agerang1").html(str[0]);
        $("#agerang2").html(str[1]);

       
    }


        $("#ex12b").on("change",function (){

         var value =  x = document.getElementById("ex12b").defaultValue;
        
          str  = value.split(",");

          $("#agerang1").html(str[0]);
          $("#agerang2").html(str[1]);
      })

        $("#ex12c").on("change",function (){

         var value =  x = document.getElementById("ex12c").defaultValue;
       //   console.log(value)
          str  = value.split(",");

          $("#sal1").html(str[0]);
          $("#sal2").html(str[1]);
      })
 */
      //  var uri    =  $('#segment').val();

        // url = base_url+"Meradriver_WebApp/users_detail/"
        //   console.log(url)
        /*if(url)
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

            url:base_url+"Meradriver_WebApp/get_states_by_country_id",

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

            url:base_url+"Meradriver_WebApp/get_cities_by_state_id",

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



    })




            // get cities by  change  state  id
        $("#states").on('change', function(){


         var state_id  =    $('#states').val();
            var ulist="";
          // alert(state_id)

         var fdata = {state_id:state_id};

           console.log(fdata); // return;


          $.ajax({

            url:base_url+"Meradriver_WebApp/get_cities_by_state_id",

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









        $('#driverform').on('submit',function(event){
            event.preventDefault();
           var $form = $(this)
      //  alert('form  data')
      //  console.log($form)

        var first_name       =   $form.find('input[name="first_name"]').val();
        var last_name        =   $form.find('input[name="last_name"]').val();
        var username         =   $form.find('input[name="username"]').val();
        var email            =   $form.find('input[name="email"]').val();


         var fdata = {form:$form};

           console.log(fdata); // return;


          $.ajax({

            url:base_url+"Register-meradriver",

            type:"POST",

            data:fdata,

            success: function(response){
              console.log(response)
                 var obj = jQuery.parseJSON(response)

               console.log(obj);

            }

          })


        })




        /*.... search driver location .....*/
      $('#search_driver').on('submit',function(event){
          event.preventDefault();
          var $form = $(this)

         var age_range   = ""
         var sal_range   = "";
         var searchTextField  = "";

         searchTextField          =   $form.find('input[name="searchTextField"]').val();
        var job_type              =   $form.find('select[name="job_type"]').val();
        var driver_type           =   $form.find('select[name="driver_type"]').val();
        var experince             =   $form.find('select[name="experince"]').val();
        var car_type              =   $form.find('select[name="car_type"]').val();


         if(url == segment)
         {
              age_range             =   document.getElementById("ex12b").defaultValue;
              sal_range             =   document.getElementById("ex12c").defaultValue;

         }

      //alert(searchTextField);
        
      if (searchTextField != '') {


         var fdata = {searchTextField:searchTextField,job_type:job_type,driver_type:driver_type,age_range:age_range,sal_range:sal_range,car_type:car_type , experince:experince};

         console.log(fdata); // return;

         str  = searchTextField.split(",",1);

        var re = new RegExp(' ', 'g');
          replacevalue = str.toString().replace(re,"-");
        //  alert(replacevalue);
          var stringurl =  replacevalue.toLowerCase();
         // alert(stringurl);
          uri = base_url+"search-driver/"+replacevalue;
          url = base_url+ "Meradriver_WebApp/setsearchpostdata";

         $.ajax({

            url:url,

            type:"POST",

            data:fdata,

            success: function(response){ 
              console.log(response)
               //  var obj = jQuery.parseJSON(response)

               console.log(url);
            //  window.location.replace(uri);

            }

          })

      }
     
        })




    }  );

    function searchDriverByLoaction() {

       var base_url =  $('#web_baseurl').val();
     /*  var abc = $("#searchTextField").val();

          str  = abc.split(",",1);

        var re = new RegExp(' ', 'g');
        replacevalue = str.toString().replace(re,"-");
        var stringurl =  replacevalue.toLowerCase();
        replacevalueUrl = base_url+"search-driver/"+replacevalue;


         window.history.pushState( {} , '', replacevalueUrl );*/



        var form = $("#search_driver111");
        var url = form.attr('action');

        //delete g_b;
        var age_range =   document.getElementById("ex12b").defaultValue;
        var sal_range =   document.getElementById("ex12c").defaultValue;

        var postData = $('#search_driver111').serializeArray();


         postData.push({name: 'age_range', value: age_range});
         postData.push({name: 'sal_range', value: sal_range});
       // console.log(postData);
       $.ajax({
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
               beforeSend: function() {
                  $("#site-loader").show();
              },

               success: function(data)
               {
                   //$("#ajaxDataByLocation").html(" ");

                 //   $("#site-loader").delay(1000).fadeOut("slow");
                 setTimeout(function(){ $("#site-loader").hide(); }, 1000);




                   $("#ajaxDataByLocation").html(data);

                   $('#example').DataTable( {
                     "destroy": true,
                    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
                } );
                 //  alert(data); // show response from the php script.
               }
             });

      }


    function searchDriverByLoactiontext(argument) {
       var base_url =  $('#web_baseurl').val();

        var form = $("#search_text");
        var url = form.attr('action');

        //delete g_b;


        var postData = $('#search_text').serializeArray();

       // console.log(postData);
       $.ajax({
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
               beforeSend: function() {
                  $("#site-loader").show();
              },

               success: function(data)
               {
                   //$("#ajaxDataByLocation").html(" ");


                   setTimeout(function(){ $("#site-loader").hide(); }, 1000);




                   $("#ajaxDataByLocation").html(data);

                   $('#example').DataTable( {
                     "destroy": true,
                    "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
                } );
                 //  alert(data); // show response from the php script.
               }
             });


      }





function searchDriverBycurrentLoaction(arg = '') {

 console.log(city);
     var base_url =  $('#web_baseurl').val();
     var abc = "";
     if(arg == '')
     {
       
       
         abc =  city ;  // $("#loadlocation").val();

     }
     else
     {
       abc = arg.trim();
     }



        trimabc   = abc.trim();
        str  = trimabc.split(",",1);
        console.log(str[0])
        var re = new RegExp(' ', 'g');
        replacevalue = str.toString().replace(re,"-");
        var stringurl =  replacevalue.toLowerCase();
        replacevalueUrl = base_url+"search-driver/"+replacevalue;
          console.log(replacevalueUrl)

        var searchTextField       =   trimabc;
        var job_type              =   "FULL-TIME";
        var driver_type           =   "commercial";

         var fdata = {searchTextField:searchTextField,job_type:job_type,driver_type:driver_type,type:'currentlocation'};

         $.ajax({
            url:replacevalueUrl,
            type:"POST",
            data:fdata,
            success: function(response){
              console.log(city)
               //  var obj = jQuery.parseJSON(response)

               console.log(replacevalueUrl);
              window.location.replace(replacevalueUrl);

            }

          })


}




  function getcity() {
       var base_url =  $('#web_baseurl').val();

        replacevalueUrl = base_url+"Meradriver_WebApp/getcity";
       //alert(replacevalueUrl);
        $.ajax({

            url:replacevalueUrl,

            type:"get",

            success: function(response){
                
              city   = response;
               //  var obj = jQuery.parseJSON(response)

               //console.log(replacevalueUrl);




            }

          })


  }



  function getLocation() {
    if (navigator.geolocation) {

      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
     console.log("Geolocation is not supported by this browser.");
    }
  }
  function showPosition(position) {

     var lat = position.coords.latitude;
     var lng = position.coords.longitude;
  /*   var lat = '28.536614';
     var lng = '77.275620';*/
     console.log(position)
     codeLatLng(lat, lng);
  }


  function codeLatLng(lat, lng) {
   //var latlng = new google.maps.LatLng(lat, lng);

   // alert(lat+" "+lng)
    var address = "";
    var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
    // alert(latlng)
     var geocoder = new google.maps.Geocoder;
       geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
          //console.log(results)
          if(results[0])
          {
            var  add    = results[0].formatted_address ;
            var  value = add.split(",");

            count   =  value.length;
            country = value[count-1];
            state   = value[count-2];
            city    =  value[count-3];
           // alert("address = " + city + " state" +state+ " country " + country );

          //  address  = city +", " +state+", "+ country;
            address = add;
            $("#loadlocation").val(address);

           /* var searchtext  =  $("#searchTextField").val()
            if(searchtext == "" || searchtext == undefine)
            $("#searchTextField").val(address)*/



          } else {
              alert("No results found");
          }
      } else {
          alert("Geocoder failed due to: " + status);
      }
    });
}


function getlatlong(address) {
      var geocoder = new google.maps.Geocoder();
     var address = address;
    var IDs = new Object();
    var obj;
    geocoder.geocode( { 'address': address}, function(results, status) {

    if (status == google.maps.GeocoderStatus.OK) {
       var latitude = results[0].geometry.location.lat();
       var longitude = results[0].geometry.location.lng();

        initMap(latitude,longitude)
        console.log(latitude);
      postData  = {"longitude":longitude,"latitude":latitude}
          /* if (typeof(Storage) !== "undefined") {
            // Store
            localStorage.setItem("longitude", longitude);
            localStorage.setItem("latitude", latitude);
           console.log( postData)
        } */
      }
    });

}

function bookdriver(DriverId) {
          // debugger ;
      
         
          var base_url =  $('#web_baseurl').val();
           var button = document.getElementById(DriverId);
            button.disabled = true;
            var LoginUser = "";
         // alert(DriverId)

                $.ajax({
                    type: "POST",
                    url: base_url+"Meradriver_WebApp/BookDriver",
                    data: {"DriverId": DriverId},
                   // dataType: "json",
                   // contentType: "application/json; charset=utf-8",
                     beforeSend: function() {
                      $('#cover-spin').show(0)
                      button.innerText = 'Processing';
                     
                    },
              
                    success: function (response) {

                      button.innerText = 'Book Now';
                      button.disabled = false;
                       setTimeout(function(){ $('#cover-spin').hide(0) }, 500);

                       var json  = jQuery.parseJSON(response);
                      console.log(json);
                      if(json.status == '401')
                      {
                              var replacevalueUrl  = json.message
                                console.log(replacevalueUrl);
                                window.location.replace(replacevalueUrl);
                      }

                       if(json.status == '400')
                      {
                              var replacevalueUrl  = json.url
                              $('#myModal').modal('show');
                              $("#model_heading").html("Mera Driver");
                              $("#model_body").html(json.message);

                                console.log(replacevalueUrl);
                                setTimeout(function(){   window.location.replace(replacevalueUrl); }, 3000);
                               // window.location.replace(replacevalueUrl);
                      }

                      else
                      {
                           $('#myModal').modal('show');
                           $("#model_heading").html("Mera Driver");
                            $("#model_body").html(json.message)
                           //alert(json.message)
                      }
                    }
                });

        }



function driver_job_apply(post_id) {
          // debugger ;
          var base_url =  $('#web_baseurl').val();
            var LoginUser = "";
         // alert(post_id)

                $.ajax({
                    type: "POST",
                    url: base_url+"Meradriver_WebApp/driver_job_apply",
                    data: {"post_id": post_id},
                   // dataType: "json",
                   // contentType: "application/json; charset=utf-8",
                    success: function (response) {

                       var json  = jQuery.parseJSON(response);

                        console.log(json);



                        if(json.status == '401')
                        {
                              var replacevalueUrl  = json.message
                                console.log(replacevalueUrl);
                                window.location.replace(replacevalueUrl);
                        }
                        else
                        {
                           $('#myModal').modal('show');
                           $("#model_heading").html("Mera Driver");
                            $("#model_body").html(json.message)
                         //  alert(json.message)
                        }
                    }
                });

        }

    function view_in_map(address = '') {

       getlatlong(address);

        lng =   localStorage.getItem("longitude");
        lat   = localStorage.getItem("latitude")





        $('#mapModal').modal('show');

        $("#modelmap_heading").html("Mera Driver");
       // $("#model_body").html("<div id='map'>"+""+"</div>");



    }

     function initMap(lat,lng) {

      var geocoder = new google.maps.Geocoder();
        var myLatlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatlng
        });

        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Click to zoom'
        });


        infoWindow = new google.maps.InfoWindow({
                content: "<div class='place'>click on market to get full address</div>"
            });

         infoWindow.open(map, marker)


        map.addListener('center_changed', function(event) {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
            map.panTo(marker.getPosition());
          }, 3000);





           geocoder.geocode({
              'latLng': myLatlng
            }, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {

                var  add    = results[0].formatted_address ;
                 var  value = add.split(",");

                  count   =  value.length;
                  country = value[count-1];
                  state   = value[count-2];
                  city    =  value[count-3];
                  localarea = value[count-4];
                  address = localarea + ", " + city + ", " + state + ", "+country;

              infoWindow.setContent(
                "<div class='place'>" + address
                + "<br /> <small>"
                + "Latitude: " + marker.getPosition().lat() + "<br>"
                + "Longitude: " + marker.getPosition().lng() + "</small></div>"
                );
                infoWindow.open(map, marker);
                  //alert(results[0].formatted_address);
                }
              }
            });


        });

        marker.addListener('click', function() {
          map.setZoom(8);
          map.setCenter(marker.getPosition());
        });



      }





function user_query() {

       var base_url =  $('#web_baseurl').val();

        var form = $("#contact_form");
        var url = form.attr('action');


        var postData = $('#contact_form').serializeArray();
         postData.push({name: 'status', value: 1});
        console.log(postData);
      $.ajax({
               type: "POST",
               url: url,
               data: postData, // serializes the form's elements.
               success: function(data)
               {
                   var json  = jQuery.parseJSON(data);

                 //  alert(json.message)
                  $('#myModal').modal('show');
                   $("#model_heading").html("Mera Driver");
                    $("#model_body").html(json.message)
                  $('#contact_form')[0].reset();
               }
             });

      }





  function onchangedata() {

      var base_url =  $('#web_baseurl').val();
     url  = base_url +"/Meradriver_WebApp/get_model_byvehicleId";
     vehicle_code = $('#filterdata').val();
     postData   ={"vehicle_code":vehicle_code};

     console.log(postData);

      $.ajax({

         type: "POST",
         url: url,
         data: postData, // serializes the form's elements.
         success: function(response){
             // alert(response)
          var ulist="";
            if(response != 'null')
            {
               var obj = jQuery.parseJSON(response)

             //   console.log(obj);
              for (var i = 0; i < obj.length; i++) {

                //  console.log(obj[i].name + "" + obj[i].id);

                  ulist+="<option value='"+ obj[i].rowid +"'>"+ obj[i].modeltype +"</option>";

                } // end for loop
              }




            // update state list
            console.log(ulist);

                $("#model").html(ulist);
            }

      });


  }


  function inputModalData(id,url = '') {
          // debugger ;


            $('#inputModal').modal('show');
            $("#inputModalLabel").html("Mera Driver");
            $("#list_id").val(id)

        if(url)
        {
           $("#myform").attr('action', url);

        }

     //   alert(", id =" + id);

  }



  function ModalData(id = '') {
          // debugger ;
        var form = $("#new_letter");
        var url = form.attr('action');


        var postData = $('#new_letter').serializeArray();
        console.log(postData);

      // alert(url);
      $.ajax({
                type: "POST",
                url: url,
                data: {'postData' :postData},
               // dataType: "json",
               // contentType: "application/json; charset=utf-8",
                success: function (response) {
                 $("#newspara").show();
                 var obj =  JSON.parse(response);

                  console.log(obj.status);
                 if((obj.status))
                  {
                      $("#newspara").text(obj.message);
                      setTimeout(function(){    $("#newspara").fadeOut(3000); }, 3000)
                      $('#new_letter')[0].reset();
                        console.log(obj.message);
                  }


                }
            });

        }

   
   function profile(id)
   {
 
	   
      uri = base_url+"/driver-profile";
      // url = base_url+ "driver-profile";

       $.ajax({

            url:uri,

            type:"POST",

            data:{'userid':id},

            success: function(response){
              console.log(response)
               //  var obj = jQuery.parseJSON(response)

               console.log(uri);
              window.location.replace(uri);

            }

          })

   }

  function feedback(id)
  {
    // alert(id);
      uri = base_url+"/driver-feedback";
      
      // url = base_url+ "driver-profile";
     
      
      $.ajax({
              
            type: "POST",
            url: base_url+"/Meradriver_WebApp/driver_feedback",
            data: {"userid": id},
           // dataType: "json",
           // contentType: "application/json; charset=utf-8",
            success: function (response) {
               

               console.log(response)
                $('#myModal_2').modal('show');
                $("#model_heading").html("Mera Driver");
                $("#model_body_2").html(response)
               
            }
      });
   }
        
