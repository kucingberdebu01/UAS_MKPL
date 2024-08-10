#include <iostream>
using namespace std;

int main()
{
	int x=8;
	int *xptr1;
	int **xptr2;
	xptr1 =&x;
	xptr2 =&xptr1;
	cout<<"Nilai x ="<<x<<endl;
	cout<<"Nilai x ="<<*xptr1<<endl;
	cout<<"Nilai x ="<<*xptr2<<endl;
}

