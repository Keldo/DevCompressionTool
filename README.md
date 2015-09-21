# DevCompressionTool
Developers Compression Tool

Written in C++

Incorporates 7Zip, Tar, GZIP md5sums, sha1sums, sha256sums

This project will create a Windows Zip file and a Linux tar.gz compressed file using the name of the folder that
you submit after launching DCT.

It will place your project compressed files in the project directory and the md5 sha1 and sha256 hashes in
the hash folder.

This tool is great for people who author programs, tools, platforms and wish to distribute them from a website.

Download using Git
git clone https://github.com/Keldo/DevCompressionTool.git

Build either Debug or Release

Create the directory structure
DCT
 ---- /project
 ---- /hash
 ---- /DCT.exe
 
 Copy your project folder to teh DCT root
 
 Run DCT.exe
 
 Look for your .zip and .tar.gz in the project folder
 
Your md5sum, sha1sum and sha256sum will be in the hash folder

# Issues
Please post any issues to our GitHub Issue Tracker
https://github.com/Keldo/DevCompressionTool/issues