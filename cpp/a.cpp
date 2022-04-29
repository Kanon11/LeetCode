#include <bits/stdc++.h>
using namespace std;
int maximumGap(const int *A, int n1)
{//kc
    int aa[n1][2];
    for (int i = 0; i < n1; i++)
    {
        aa[i][0] = A[i];
        aa[i][1] = i;
    }
    sort(aa);
    int md = -4444444;
    for (int i = 1; i < n1; i++)
    {
        int temp = aa[i - 1][0] - aa[i - 1][0];
        if (md < temp)
        {
            md = temp;
        }
    }
    return md;
}
int main()
{
    int a[4] = {5, 4, 3, 2};
    int f = maximumGap(a, 4);
    cout << f << endl;

    return 0;
}