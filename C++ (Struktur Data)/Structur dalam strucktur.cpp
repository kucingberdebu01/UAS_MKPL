#include<iostream>
using namespace std;
struct tinggal
{
	string jalan;
	string kota;
	char pos[8];
};
struct tgl_lahir
{
	int tgl;
	int bln;
	int thn;
};
struct mahasiswa
{
	char npm[9];
	string nama;
	double ipk;
	tinggal alt;
	tgl_lahir lahir;
};

mahasiswa mhs;
main()
{
	cout<<"Memasukan Data Mahasiswa"<<endl;
	cout<<"Memasukan NPM =";cin.getline(mhs.npm,9);
	cout<<"Masukan Nama =";getline(cin,mhs.nama);
	cout<<"Masukan IPK =";cin>>mhs.ipk;
	cout<<"Tanggal Lahir \n";
	cout<<"tanggal =";cin>>mhs.lahir.tgl;
	cout<<"Bulan =";cin>>mhs.lahir.bln;
	cout<<"Tahun =";cin>>mhs.lahir.thn;
	cout<<"Alamat \n";
	cout<<"Jalan =";cin.ignore();getline(cin,mhs.alt.jalan);
	cout<<"Kota =";getline(cin,mhs.alt.kota);
	cout<<"Kode POS =";cin>>mhs.alt.pos;
	
	cout<<"\n\nMenampilkan Data"<<endl;
	cout<<"NPM\t\t="<<mhs.npm<<endl;
	cout<<"Nama\t\t="<<mhs.nama<<endl;
	cout<<"Ipk\t\t="<<mhs.ipk<<endl;
	cout<<"Tanggal Lahir="<<mhs.lahir.tgl<<"-"<<mhs.lahir.bln<<"-"<<mhs.lahir.thn<<endl;
	cout<<"Jalan\t\t="<<mhs.alt.jalan<<endl;
	cout<<"Kota\t\t="<<mhs.alt.kota<<endl;
	cout<<"Kode Pos\t="<<mhs.alt.pos<<endl;
}
