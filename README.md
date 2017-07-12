# DevCompressionTool
Developers Compression Tool

Written in C++

<a href="https://ci.appveyor.com/project/Keldo/DevCompressionTool" target="_blank">
<img src="https://ci.appveyor.com/api/projects/status/kujhsqfb4hpbllnw?svg=true">
</a>

<img src="http://isitmaintained.com/badge/resolution/Keldo/DevCompressionTool.svg">
<img src="http://isitmaintained.com/badge/open/Keldo/DevCompressionTool.svg">

Incorporates 7Zip, Tar, GZIP Bzip2, md5sums, sha1sums, sha256sums

This project will create a Windows Zip file, a Linux tar.gz and bzip2 compressed files using the name of the folder that
you submit after launching DCT.

It will place your project compressed files in the project directory and the md5 sha1 and sha256 hashes in
the hash folder.

This tool is great for people who author programs, tools, platforms and wish to distribute them from a website, specifically cross-platform.

Download using Git
git clone https://github.com/Keldo/DevCompressionTool.git

Build either Debug or Release

# Using DCT
 Copy your project to the project folder
 
 Run DCT.exe
 
 Look for your .zip, .tar.gz and tar.bz2 compressed files in the publish folder
 
Your md5sum, sha1sum and sha256sum will be in the publish/projectname/hash folder

# Issues
Please post any issues to our GitHub Issue Tracker

# IRC
This project's IRC Channel is on the Rizon Network, point your IRC client to irc.rizon.net and /join #DevWorks
