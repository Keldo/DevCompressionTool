#include <iostream>
#include <sstream>
#include <string>

int main()
{
	using std::string;
	using std::cin;
	using std::cout;
	string projectname;

	printf("\n");
	printf("**** Created for Developers.****\n");
	printf("Coded by DevWorks OSI dot Com.\n");
	printf("Freedom in Open Source.\n");
	printf("********************************\n");

	std::cout << "Enter your project folders name: ";
	std::cin >> projectname;

	// Create the tarball from using cin for file title
	printf("Compressing your folders \n");
	printf(("Creating the " + projectname + " tarball\n").c_str());
	system(("mkdir publish\\" + projectname).c_str());
	//system(("cd project"));
	system(("bin\\tar -cvf publish\\" + projectname + "\\" + projectname + ".tar project\\" + projectname).c_str());
	system(("bin\\7z a -tzip publish\\" + projectname + "\\" + projectname + ".zip project\\" + projectname).c_str());
	system(("bin\\gzip publish\\" + projectname + "\\" + projectname + ".tar").c_str());
	system(("bin\\tar -cvf publish\\" + projectname + "\\" + projectname + ".tar project\\" + projectname).c_str());
    system(("bin\\bzip2 -zq --fast publish\\" + projectname + "\\" + projectname + ".tar ").c_str());

	printf("Hashing \n");
	system(("mkdir publish\\" + projectname + "\\hash").c_str());
	// get the sha sum
	printf("SHA 1 \n");
	system(("bin\\sha1sum publish\\" + projectname + "\\" + projectname + ".tar.gz > publish\\" + projectname + "\\hash\\gz-sha1.log").c_str());
	system(("bin\\sha1sum publish\\" + projectname + "\\" + projectname + ".zip > publish\\" + projectname + "\\hash\\zip-sha1.log").c_str());
    system(("bin\\sha1sum publish\\" + projectname + "\\" + projectname + ".tar.bz2 > publish\\" + projectname + "\\hash\\bz2-sha1.log").c_str());
	printf("SHA 256 \n");
	system(("..\\bin\\sha256sum publish\\" + projectname + "\\" + projectname + ".tar.gz > publish\\" + projectname + "\\hash\\gz-sha256.log").c_str());
	system(("bin\\sha256sum publish\\" + projectname + "\\" + projectname + ".zip > publish\\" + projectname + "\\hash\\zip-sha256.log").c_str());
	system(("bin\\sha256sum publish\\" + projectname + "\\" + projectname + ".tar.bz2 > publish\\" + projectname + "\\hash\\bz2-sha256.log").c_str());

	// get the md5 sum
	printf("MD5 SUM \n");
	system(("bin\\md5sums publish\\" + projectname + "\\" + projectname + ".tar.gz > publish\\" + projectname + "\\hash\\gz-md5.log").c_str());
    system(("bin\\md5sums publish\\" + projectname + "\\" + projectname + ".tar.bz2 > publish\\" + projectname + "\\hash\\bz2-md5.log").c_str());
	system(("bin\\md5sums publish\\" + projectname + "\\" + projectname + ".zip > publish\\" + projectname + "\\hash\\zip-md5.log").c_str());

	printf("All Done....");
	system("pause");

	return 0;
}
