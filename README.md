# Magento Admin Password Strength Enforcer

Your admin panel is home to *tons* of sensitive information—not something you want to expose to attackers easily. Unfortunately, if you have a lot of admin users and they're picking insecure passwords, you're opening yourself up to another vector of attack.

Magento's default rules for admin password strength are good, but they could be better. This extension is straightforward and small—it allows you to increase the required length of new admin passwords.

It is compact and does not modify any core code logic. It is upgrade safe and you should be able to install it on top of other extensions without worry.

## Setup

* Navigate to `System > Configuration > Admin Password Strength` in the Magento admin area
* Set your desired admin password length
* Done!

## Features

* After setup, all new admin passwords created will need to be the length you've set or larger
* Defaults to a password length of >= 10 characters
