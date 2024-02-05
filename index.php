<?php 
/* 
   Place your output code inside the HTML list items for 
   each question comment.

   Non-output PHP logic & values can be placed underneath  
   the questions near the top of the file. 
   
   Do not change any of the other code in this file.
*/


/* 01: create a class named Pizza that has two
properties: size and type.

Create the class just below this problem. 
This problem has no output.
*/

  
/* 02: Add set_size and set_type methods to the Pizza class 
above. This problem has no output.
*/

/* 03: Add get_size and get_type methods to the Pizza class 
above. This problem has no output.
*/
  
/* 04: Create a $pizza object from the Pizza class. 
Create the $pizza object just below this problem. 
This problem has no output.
*/


/* 05: Set the $pizza size to "medium". 
You can do this just below this problem. 
This problem has no output.
*/

  
/* 06: Set the $pizza type to "Pepperoni". 
You can do this just below this problem. 
This problem has no output.
*/


/* 06: Call the get_size method and output the
returned value in appropriate HTML list item below. */


/* 07: Call the get_type method and output the
returned value in appropriate HTML list item below. */

  
/* 08: Add a method to the Pizza class above named serve.
The serve method should output:
"Here's your {type} pizza!"
Replace {type} with the value of the type
property.

Call the serve method and output the
returned value in appropriate HTML list item below. 
*/
  
  
/* 09: Add a private property named
slices to the Pizza class above.

Next, add a method named get_slices
to the Pizza class.
The method should return the number
of slices.

A small pizza has 6 slices.
A medium pizza has 8 slices.
A large pizza has 10 slices.

Set the value of the private slices
property when the size is set.

Call the get_slices method and
output the returned value in 
appropriate HTML list item below. 
*/
  

/* 10: Add a method named description
to the Pizza class above.
The method should return:
"My pizza is a {size} {type} and
has {slices} slices!"
Replace {slices} with the number of slices.
Replace {size} and {type} with their 
appropriate values.

Create a $myPizza object.
Set the size to "large".
Set the type to "Supreme".
Call the description method for $myPizza
and output the returned value in 
appropriate HTML list item below.
?> */


?>

<html>

<head>
    <title>INF653 Practice 04</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.css"
        integrity="sha512-Ytt2foRGKdIInPXwyS3gxRvfTv4n2wi7uB7neCLH1LjExT+PKBeQu6LNVB4QpHaJqx7m2btagBs4kqxYC1QNFg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <ul>
            <li>Got Your User ID? (You created it last week)</li>
            <li>Complete Your Assignment?</li>
            <li>If so, you are ready to click submit.</li>
        </ul>
        <button id="submitButton">Submit Your Assignment</button>
        <p>Your output should only be in the ordered list below.</p>
        <ol>
            <li id="6"><?php /* #6 output here */ ?></li>
            <li id="7"><?php /* #7 output here */ ?></li>
            <li id="8"><?php /* #8 output here */ ?></li>
            <li id="9"><?php /* #9 output here */ ?></li>
            <li id="10"><?php /* #10 output here */ ?></li>
        </ol>
    </main>

    <div id="mocha"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.min.js"
        integrity="sha512-vOMXB+Rjob/NIG88cgEK+t6Uuf0zJIzQrfKH8VFc7AW18y/rzszRXaKPNAPf1ePv2hQ3eYR8yEu4S85Np3DhLA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/4.2.0/chai.min.js"
        integrity="sha512-x3BwhuxT44pOQZanacQyDnrB2r1L1AUfjUaefYArTHR9sHEvvy3NSnnm5Z7GAl5YPc3+GEWFT0S34obDSzUvaQ=="
        crossorigin="anonymous"></script>
    <script>
    mocha.setup("bdd");
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/tests/inf653_php_practice04Test.min.js"></script>
    <script>
    mocha.run();
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_util.min.js"></script>

</body>

</html>