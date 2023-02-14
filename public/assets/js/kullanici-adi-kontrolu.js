$(document).ready(function(){

  $("#kulad").keyup(function() {
    clearInput($(this).attr('id'));
  });


  $("#kulad").focusout(function() {
    clearInput($(this).attr('id'));
  });

});

function clearInput(id) 
{

 var charMap = {Ç:'c',Ö:'o',Ş:'s',İ:'i',I:'i',Ü:'u',Ğ:'g',ç:'c',ö:'o',ş:'s',ı:'i',ü:'u',ğ:'g'};

 var str = $("#" + id).val();

 str_array = str.split('');

 for(var i=0, len = str_array.length; i < len; i++) 
 {
  str_array[i] = charMap[ str_array[i] ] || str_array[i];
}

str = str_array.join('');

var clearStr = str.replace(" ","-").replace("--","-").replace(/[^a-z0-9-.çöşüğı]/gi,"").toLowerCase();

$("#" + id).val(clearStr);
}