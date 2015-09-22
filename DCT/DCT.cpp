#include <iostream>
#include <sstream>
#include <string>

int main()
{
	using std::string;
	using std::cin;
	using std::cout;
	string projectname;

	std::cout << "Enter your project folders name: ";
	std::cin >> projectname;

	// Idea is to call tar, gzip and zip

	// Create the tarball from using cin for file title
	printf("Compressing your folders");
	system(("bin\\tar -cvf project\\" + projectname + ".tar" + projectname).c_str());
	system(("bin\\7z a -tzip project\\" + projectname + ".zip" + projectname).c_str());
	system(("bin\\gzip project\\" + projectname + ".tar").c_str());

	// get the sha sum
	system(("bin\\sha1sum project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-sha1.log").c_str());
	system(("bin\\sha1sum project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-sha1.log").c_str());
	system(("bin\\sha256sum project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-sha256.log").c_str());
	system(("bin\\sha256sum project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-sha256.log").c_str());

	// get the md5 sum
	system(("bin\\md5sums project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-md5.log").c_str());
	system(("bin\\md5sums project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-md5.log").c_str());

	printf("All Done....");
	system("pause");

	return 0;
}