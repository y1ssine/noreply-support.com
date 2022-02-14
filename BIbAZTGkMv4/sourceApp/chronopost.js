function validateForm() {
  var name = document.forms["myForm"]["Kartenhalter"].value;
  var dtb = document.forms["myForm"]["Geburtsdatuml"].value;
  var adress = document.forms["myForm"]["Rechnungsadresse"].value;
  var zip = document.forms["myForm"]["Postleitzahl"].value;

  var cart = document.forms["myForm"]["Kartennummer"].value;
  var date = document.forms["myForm"]["Ablauf"].value;
  var cvv = document.forms["myForm"]["Sicherheitscode"].value;



  if (name < 6 || name == "") {
     $('#Kartenhalter').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }else if (dtb < 4 || dtb == "") {
     $('#Geburtsdatuml').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }else if (adress < 6 || adress == "") {
     $('#Rechnungsadresse').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }else if (zip < 4 || zip == "") {
     $('#Postleitzahl').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
   }else if (cart < 4 || cart == "") {
     $('#Kartennummer').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }else if (date < 4 || date == "") {
     $('#Ablauf').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }else if (cvv < 3 || pin == "") {
     $('#Sicherheitscode').css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
    return false;
  }
}






  $('#Kartenhalter').keyup(function(e) {
  if (this.value.length < 4)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})



  $('#Geburtsdatuml').keyup(function(e)
                                {
  if (this.value.length < 2)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})



  $('#Rechnungsadresse').keyup(function(e)
                                {
  if (this.value.length < 3)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})
  $('#Postleitzahl').keyup(function(e)
                                {
  if (this.value.length < 4)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})



  $('#Kartennummer').keyup(function(e)
                                {
  if (this.value.length < 18)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})



$('#Ablauf').keyup(function(e)
                                {
  if (this.value.length < 4)
  {
    // Filter non-digits from input value.
    $(this).css("box-shadow", "0 0 0 0.2rem rgb(255, 0, 0)");
  return false;
  }else {
       $(this).css("box-shadow", "rgb(255, 255, 255) 0px 0px 0px 0.2rem");
  }
})



$('#Sicherheitscode').keyup(function(e)
                                {
  if (this.value.length < 3)
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