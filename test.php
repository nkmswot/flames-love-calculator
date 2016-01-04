<?php

fwrite(STDOUT, "Please enter your name"); 

// Read the input
$name = fgets(STDIN);

fwrite(STDOUT, "Hello $name");

// Exit correctly
//exit(0);
?>