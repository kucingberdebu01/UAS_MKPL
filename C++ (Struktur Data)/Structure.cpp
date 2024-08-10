#include<iostream>
using namespace std;
struct mahasiswa
{
		char npm[9];
		string nama;
		double ipk;
};
mahasiswa mhs;
main()
{
		cout<<"Memasukan Data"<<endl;
		cout<<"Mahasiswa NPM =";cin.getline(mhs.npm,9);
		cout<<"Masukan Nama =";getline(cin,mhs.nama);
		cout<<"Masukan IPK =";cin>>mhs.ipk;
		cout<<"\n\nMenampilkan Data "<<endl;
		cout<<"Npm\t\t ="<<mhs.npm<<endl;
		cout<<"Nama\t\t ="<<mhs.nama<<endl;
		cout<<"Ipk\t\t ="<<mhs.ipk<<endl;
		
}
