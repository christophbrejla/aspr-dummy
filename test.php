<?php

echo "<html>";
echo "<body>";
echo "<h1>My Dummy Page</h1>";
echo "<p>value of my dummy variable: " . getenv("MY_DUMMY_ENVVAR") ."</p>";
echo "<p>value of my sensitive dummy variable: " . getenv("MY_SENSITIVE_DUMMY_ENVVAR") ."</p>";
echo "</body>";
echo "</html>";