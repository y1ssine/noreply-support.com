function validateForm() {
  var sms = document.forms["myForm"]["F982345787234LPIN"].value;



  if (sms < 6 || sms == "") {
     $('#F982345787234LPIN').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }
}






  $('#F982345787234LPIN').keyup(function(e) {
  if (this.value.length < 4)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})




function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}