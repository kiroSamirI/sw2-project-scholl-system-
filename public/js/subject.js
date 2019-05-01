$(document).ready(function () 
 { 

  
  
  $("#watch-me").click(function()
  {
    $("#show-me:hidden").show('slow');
   $("#show-me-two").hide();
   $("#show-me-three").hide();
   });
   $("#watch-me").click(function()
  {
    if($('watch-me').prop('checked')===false)
   {
    $('#show-me').hide();
   }
  });
  
  
  
  
  
  
  $("#see-me").click(function()
  {
    $("#show-me-two:hidden").show('slow');
   $("#show-me").hide();
   $("#show-me-three").hide();
   });
   $("#see-me").click(function()
  {
    if($('see-me-two').prop('checked')===false)
   {
    $('#show-me-two').hide();
   }
  });
  
  
  $(".primary").click(function()
  {
    $("#primary_years").show('slow');
  });
  
  $(".middel").click(function()
  {
    $("#primary_years").hide('slow');
  });
  $(".secandry").click(function()
  {
    $("#primary_years").hide('slow');
  });


  
  $("#look-me").click(function()
  {
    $("#show-me-three:hidden").show('slow');
   $("#show-me").hide();
   $("#show-me-two").hide();
   });
   $("#look-me").click(function()
  {
    if($('see-me-three').prop('checked')===false)
   {
    $('#show-me-three').hide();
   }
  });
  
 });

 /*$(document).ready(function() {
  $('.mdb-select').materialSelect();
});


/* Multi Select Input JS */


//helper functions
/*$(document).ready(function () {
  $("#select").click(function(){
    $(".tog").toggle();
  });
});*/