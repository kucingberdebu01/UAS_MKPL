#include <iostream>
using namespace std;
main()
{
	int nilai[5];
	int i, jumlah=0;
	float rata;
	for(i=0;i<5;i++)
	{
		cout<<"Masukan Data ke "<<i<<" = ";cin>>nilai[i];
	}
	cout<<"Mencetak Deret Bilangan = ";
	for(i=0;i<5;i++)
	{
		cout<<nilai[i]<<" ";
	jumlah=jumlah+nilai[i];
	}
	cout<<"\nJumlah Bilangan = "<<jumlah<<endl;
}
