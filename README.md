# somescripts
Some shell scripts and tools for every day.

This repository contains several tools I have put together to simplify my
everyday Linux experience. They are intended as a starting point for you, 
their quality, security, stability may vary.

# Wmd
Wmd is a R Markdown variant. When installing all the files (or the Debian /
Ubuntu package), you can write an Wmd file everywhere you are on your computer
and invoke the wmd command to compile it to HTML. Additionally to
R markdown provided by knitr, it provides a syntax for Twitter tweet links as
well as a shortcut for embedded figures with caption. But, mainly, it allows
you to use R markdown with caching and with auto-detection of changed files from
command line with a single command `wmd`.

# makepdfreader
makepdfreader is a single shell script that takes all existing pdf files in the
current directory and binds them into a single pdf file. Additionally, it
creates new page numbers and a table of contents with the upper part of
the first page. Hence, if you bind scientific papers, you will see the headers
of the files including title and authors in the table of contents. 

# Amazon Push

Amazon Cloud Drive is a nice service for storing files in the cloud. Here, I 
provide some scripts for pushing and pulling directories to and from Amazon
including strong GPG encryption for the actual file contents. Note that
directory listings are pushed *unencrypted*. I use them for searching specific
files.
