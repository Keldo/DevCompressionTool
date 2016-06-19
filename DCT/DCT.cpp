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
    	printf("Coded by TweDev dot Com.\n");
    	printf("Freedom in Open Source.\n");
    	printf("********************************\n");

	std::cout << "Enter your project folders name: ";
	std::cin >> projectname;

	// Create the tarball from using cin for file title
	printf("Compressing your folders");
	system(("bin\\tar -cvf project\\" + projectname + ".tar" + projectname).c_str());
	system(("bin\\7z a -tzip project\\" + projectname + ".zip" + projectname).c_str());
	system(("bin\\gzip project\\" + projectname + ".tar").c_str());
        system(("bin\\tar -cvf project\\" + projectname + ".tar" + projectname).c_str());
        system(("bzip2 -zq --fast project\\" + projectname + ".tar ").c_str());

	// get the sha sum
	system(("bin\\sha1sum project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-sha1.log").c_str());
	system(("bin\\sha1sum project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-sha1.log").c_str());
        system(("bin\\sha1sum project\\" + projectname + ".bz2 > hash\\" + projectname + "\\bz2-sha1.log").c_str());
	system(("bin\\sha256sum project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-sha256.log").c_str());
	system(("bin\\sha256sum project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-sha256.log").c_str());
	system(("bin\\sha256sum project\\" + projectname + ".bz2 > hash\\" + projectname + "\\bz2-sha256.log").c_str());

	// get the md5 sum
	system(("bin\\md5sums project\\" + projectname + ".tar.gz > hash\\" + projectname + "\\gz-md5.log").c_str());
        system(("bin\\md5sums project\\" + projectname + ".bz2 > hash\\" + projectname + "\\bz2-md5.log").c_str());
	system(("bin\\md5sums project\\" + projectname + ".zip > hash\\" + projectname + "\\zip-md5.log").c_str());

	printf("All Done....");
	system("pause");

	return 0;
}
