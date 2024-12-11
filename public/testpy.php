<?php
// To Run the Python program 
$command = escapeshellcmd('python3 /home/ec2-user/script/.main.py');

// Use shell_exec to execute the command and capture the output
$output = shell_exec($command);

// Display the output
echo $output;
? >
