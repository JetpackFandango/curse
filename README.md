# Twilio Cursed Video

Perform `composer install`

Replace all instances of Your-URL with your url

Add your sid and twilio auth token to curse.php

gen.html helps generate links but it's really more of a glorified hexidecimal converter.

## How it works

gen.html converts the provided phone number into a hexidecimal format and formats a proper link with the GET var attached. This is the link you send.

index.html is the page the victim sees.

After completing the video an ajax call is sent from index.html to curse.php with the hexidecimal version of the phone number attached.

curse.php takes the number and converts it to base 10 and calls that number.
