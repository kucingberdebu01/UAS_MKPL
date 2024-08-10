#include <iostream>
#include <conio.h>
using namespace std;

main ()
{
	int z[20];
	int j,jumlah,bilangan,index[20];
	bool ketemu;
	j=0;
	cout<<"Masukkan Jumlah Bilangan =";cin>>jumlah;
	for (int i=0;i<jumlah;i++)
	{
		cout<<"Masukkan elemen ke - ";cin>>z[i];
	}
	cout<<endl;
	cout<<"Masukkan nilai yang dicari :";cin>>bilangan;
	for (int i=0;i<jumlah;i++)
	{
		if (z[i]==bilangan)
		{
			ketemu=true;
			index[j]=i;
			j++;
		}
	}
	if (ketemu)
	{
		cout<<"Nilai yang dicari ="<<bilangan<<"ada sejumlah ="<<j<<"buah"<<endl;
		for (int i=0;i<j;i++)
		{
			cout<<"indeks ke"<<index[i]<<endl;
		}
		cout<<endl;
	}
	else
	{cout<<"Nilai tidak ditemukan dalam array"<<endl;}
	
	getch();
}
