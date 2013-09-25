#Invite Referral System

An easy to implement script to create a referral system.

##SQL Setup
###"referrals" table
id INT(11) PRI AUTO_INCREMENT

sendinguserid INT(11)

newuserid INT(11)

###"users" table
id INT(11) PRI AUTO_INCREMENT

email VARCHAR(100)

##Files
* save.php: Records user information and generates a referrral link
* form.php: Allows user to enter email address, records referral number if applicable
* config.php: Sets database information and base URL for the website
* status.php: Allows user to check the number of referrals associated with their account

##Licence
The MIT License (MIT)

Copyright (c) 2013 Phil Fishbein

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.