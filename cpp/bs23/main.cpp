
#include<iostream>
using namespace std;


int psuedoBinary(int n)
{
    int c=0;

    while (n > 0)
        {
            int temp = n, m = 0, p = 1;

            while (temp)
                {
                    int rem = temp % 10;
                    temp = temp / 10;

                    if (rem != 0)
                        m += p;

                    p *= 10;
                }
            c++;
            n = n - m;
        }
    return c;
}

string max_bin( string s){

    cin >> s;
    int c = s.find('0');
    if (c == -1)
        cout << s.substr(1) << endl;
    else
        cout << s.substr(0, c) << s.substr(c + 1) << endl;

}
int main()
{
    int n,ans,t;
    cin>>t;
    while(t--)
        {
            cin>>n;
            ans=psuedoBinary(n);
            cout<<ans<<endl;

        }
    return 0;

}

