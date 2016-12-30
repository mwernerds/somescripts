Wmd is a R-Markdown flavor with two tweaks (implemented in tweet.php and using 
sed inside the Makefile:

It allows for specifying an R figure using a single f followed by the figure
title. Additionally, you can format tweets inside your text. Therefore, you 
should modify tweet.php to suit your needs (via information and tags are
hardcoded...). 

When installed (using dpkg or your favourite package manager), you can run
wmd in any directory you like to generate HTML from Wmd files including caching
and some options (look at the Makefile in /usr/share/Wmd) I use for my
web pages.

Hope this helps (as a starting point). Especially 
wmd -s might be helpful, which spawns a shell with a 
Makefile in place. You can then just do `make myfile.md` to
generate plain Markdown (with R expanded) or `make myfile.html` to create HTML...
