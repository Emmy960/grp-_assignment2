<?php
echo("<p>What we want to see below is a 'Fatal Error'.</p>\n");

// Do not fix the mistake in the code below - the goal is to 
// trigger an error to verify that we see errors in the browser.

function failure_is_expected(){
    echo "<p> this function now exist and runs succesfully</p>\n";
}
failure_is_expected();
    

?>