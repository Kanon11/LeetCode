#include <bits/stdc++.h>
using namespace std;

int main()
{
    int i,j,k,sereja,dima,sf,df,n,l,h;
    cin>>n;
    int a[n];
    for(i=0; i<n; i++)
    {
        cin>>a[i];
    }

    sereja=dima=0;
    sf=1;
    df=0;
    l=0;
    h=n-1;
    while (l<=h)
    {
        if (sf==1)
        {
            if (a[l]>a[h])
            {
                sereja += a[l];
                l++;
            }
            else
            {
                sereja += a[h];
                h--;
            }
            sf = 0;
            df = 1;
        }
        else
        {
            if (a[l] > a[h])
            {
                dima += a[l];
                l++;
            }
            else
            {
                dima += a[h];
                h--;
            }
            sf = 1;
            df = 0;
        }
    }
    cout<<sereja<<" "<<dima<<endl;
}
