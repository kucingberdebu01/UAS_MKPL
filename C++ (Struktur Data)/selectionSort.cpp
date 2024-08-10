#include<cstdlib>
#include<iostream>
#include<conio.h>
using namespace std;
int main()
{
	int data[20];
	int tmp,jumlah;
	cout<<"\tSELECTION SORT\n\n";
	cout<<"Masukan Jumlah Data =";cin>>jumlah;
	for(int i=0;i<jumlah;i++)
	{
		cout<<"Masukan Data Indek -"<<i<<" =";cin>>data[i];
	}
	cout<<"Data yang akan di sebelum urutkan \t:";
	for(int i=0;i<jumlah;i++)
		cout<<data[i]<<"";
	cout<<endl;
	for (int i=0;i<jumlah-1;i++)
	{
		for(int j=i+1;j <jumlah;j++)
		{
			if (data[i]>data[j])
			{
				tmp=data[i];
				data[i]=data[j];
				data[j]=tmp;
			}
		}
		}	
	cout<<"\nData yang telah di urutkan \t";
		for(int i=0;i<jumlah;i++)
			cout<<data[i]<<"";
		cout<<endl;
		return 0;	
}
