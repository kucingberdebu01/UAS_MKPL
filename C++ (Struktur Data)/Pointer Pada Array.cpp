#include <iostream>
using namespace std;
int main()
{
	int nilai[]={41, 23, 50, 8, 12, 10, 15};
	int *Ptr_nilai;int i;
	Ptr_nilai = nilai;
	cout<<"Nilai Ptr_nilai = "<<Ptr_nilai<<endl;
	cout<<"Alamat array nilai = "<<Ptr_nilai<<endl;
	cout<<"Nilai yang Ada Pada Alamat "<<Ptr_nilai<<"Adalah = "<<Ptr_nilai <<endl;
	cout<<"\nElemen array indeks pertama : "<<nilai[0];
	cout<<"\nElement array ( dengan Array) :";
	for(i=0;i<7;i++)
	cout<<nilai[i]<<"";
	cout<<"\nElement array (dengan Pointer) :";
	for(i=0;i<7;i++)
	cout<<*(nilai+i)<<"";
}
