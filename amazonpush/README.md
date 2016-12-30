# Amazon Cloud Drive Push and Pull

This directory contains three scripts that can be used to push and pull
directories to Amazon Cloud Drive either with or without encryption. Be sure
to read and edit the scripts to suit your needs. rclone is being used for
transmission with a single file.

* apush: Push a directory to Amazon
* epush: tar and encrypt a directory, additionally create a list of files (unencrypted) and push it to amazon
* epull: pull and decrypt a directory pushed by epush

Note that epush and epull encrypt data, not filenames or directory names. Therefore, some information is 
intentionally leaking. However, the file contents is protected with the key
specified in epush and epull scripts. Modify them and put them into /usr/local/bin.


