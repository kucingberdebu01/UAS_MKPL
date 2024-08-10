#include<iostream>
using namespace std;
struct mahasiswa
{
	char npm[9];
	string nama;
	string alamat;
	double ipk;
};
mahasiswa mhs[5];
main()
{
	int i=0;
	for(i-0;i<2;i++)
	{
		cout<<"Memasukan Data Indek ke-"<<i<<endl;
		cout<<"Masukan NPM=";cin.getline(mhs[i].npm,9);
		cout<<"Masukan Nama=";getline(cin,mhs[i].nama);
		cout<<"Masukan Alamat=";getline(cin,mhs[i].alamat);
		cout<<"Masukan IPK=";cin>>mhs[i].ipk;
		cin.ignore();
	}
	for(i=0;i<2;i++)
	{
		cout<<"\n\nMenampilkan Data Indek Ke- "<<i<<endl;
		cout<<"Npm\t\t="<<mhs[i].npm<<endl;
		cout<<"Nama\t\t="<<mhs[i].nama<<endl;
		cout<<"Alamat\t="<<mhs[i].alamat<<endl;
		cout<<"Ipk\t\t="<<mhs[i].ipk<<endl;
	}
}

