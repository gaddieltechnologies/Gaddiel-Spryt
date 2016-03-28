<html>   
<head>   
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>   
<script type="text/javascript">   
$(document).ready(function() {   
$('#types').change(function(){   
if($('#types').val() === 'Other')   
   {   
   $('#other').show();    
   }   
else 
   {   
   $('#other').hide();      
   }   
});   
});   
</script>   
</head>   
 
<body>   


<?php

$variable = 1000;
echo <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
END;
?>

   
<select id="types" name="types" >   
 <option value="Type 1">Type 1</option>   
 <option value="Type 2">Type 2</option>   
 <option value="Type 3">Type 3</option>   
 <option value="Other">Other</option>   
</select>   
   
<input type="text" id="other" name="other" style="display: none;"/>
      
</body>  