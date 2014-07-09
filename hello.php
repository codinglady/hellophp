
<?php

//print ("Hello World!");


echo( "This is a test");

print ("<p>");

//phpinfo();

$PHP_SELF = "http://localhost:8888/hello.php" ;

print ("$PHP_SELF");

print ("<p>");

print ( "I am the CHICKEN MAN" );

print ("<p>");

//Arrays

$dog1 = "Phoebe";

 

$dog2 = "Ruby";



$squirrel1 = "Rotty";


$critters = array ( "Phoebe", "Ruby", "Rotty" );


print "$critters[0]";

$critters[] = "Opie";

print ("<p>");

print "$critters[3]";

print ("<p>");

print "$critters[1]";

print ("<p>");

//  Web forms

/*<html>

 <head>

 <title>My Form</title>

 </head>

 <body>

 <form action="bad_words.php" method=post>

 My name is:

 <br> <input type="text" name="YourName">

 My favorite dirty word is:

 <br /><input type="text" name="FavoriteWord">

 <input type="submit" name="submit" value="That's Right!">

 </form>

 </body>

 </html> */

/*

<html>

<head>

<title>Perv!</title>

</head>

<?php

// Capture the values posted to this php program from the text fields

// which were named 'YourName' and 'FavoriteWord' respectively

$YourName = $_REQUEST['YourName'] ;

$FavoriteWord = $_REQUEST['FavoriteWord'] ;

?>

<body bgcolor="#FFFFFF" text="#000000">

<p>

Hi <?php print $YourName; ?>

<p>

You like the word <b> <?php print $FavoriteWord; ?>!?!</b>

<p>You oughta be ashamed of yourself!

</body>

</html>

*/


//Associative Arrays
//one way

$PhoebeDog = array (

 

          name=>"Phoebe",

 

          description=>"fat dog",

 

          color=>"grey and white",

 

          age=>7


              );
              
//another way
              


print "$PhoebeDog[color]";
print ("<p>");
              
              
 $PhoebeDog[name] = "Phoebe";

 

$PhoebeDog[description] = "fat dog";

 

$PhoebeDog[color] = "grey and white";

 

$PhoebeDog[age] = 7;

print "$PhoebeDog[age]";


?>
