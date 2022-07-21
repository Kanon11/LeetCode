#include<bits/stdc++.h>
using namespace std;
long long power(int x)
{
    int ans=1;
    for(int i=0;i<x;i++){
        ans*=10;
    }
    return ans;
}
long long conTonumber(string s)
{
    long long x=0,y;
    for(long long i=2;i<s.size();i++){
        y=s.size()-i-1;
        x+=(s[i]-48)*power(y);

    }
    return x;
}

int main()
{
    long long n,x,i,y,cnt=0;
    cin>>n>>x;
    string s;
    for(i=0;i<=n;i++){
        getline(cin,s);
        if(s[0]=='+')
            x+=conTonumber(s);
        else{
           y=conTonumber(s);
           if(y>x)
                cnt++;
           else
            x-=y;
        }
    }
    cout<<x<<" "<<cnt<<endl;

    return 0;
}
