#include<iostream>
using namespace std;
main()
{
	int matriksA[10][10], b,k,i,j;
	cout<<"Input Jumlah Baris =";cin>>b;
	cout<<"Input Jumlah Kolom =";cin>>k;
	for(i=0;i<b;i++)
	{
		for(j=0;j<k;j++)
		{
			cout<<"Input Nilai baris ke - "<<i+1<<"kolom ke - "<<j+1<<"=";cin>>matriksA[i][j];
		}
		cout<<endl;
	}
	cout<<"Tampilan Matriks ="<<endl;
	for(i=0;i<b;i++)
	{
		for(j=0;j<k;j++)
		{
			cout<<matriksA[i][j]<<"";
		}
		cout<<endl;
	}
}
