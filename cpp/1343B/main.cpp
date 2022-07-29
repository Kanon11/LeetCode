#include <bits/stdc++.h>
using namespace std;

int main()
{
    int t,n,i,j,m;
    cin>>t;
    while(t--)
        {
            cin>>n;
            m=n/2;
            if(m%2!=0)
                {
                    cout<<"NO"<<endl;
                }
            else
                {
                    cout<<"YES"<<endl;
                    int sum1=0,sum2=0;
                    for(i=1; i<=m; i++)
                        {
                            cout<<i*2<<" ";
                            sum1+=(i*2);
                        }
                    for(i=1; i<m; i++)
                        {
                            cout<<(i*2)-1<<" ";
                            sum2+=((i*2)-1);
                        }
                    cout<<sum1-sum2<<endl;

                }
        }
}
