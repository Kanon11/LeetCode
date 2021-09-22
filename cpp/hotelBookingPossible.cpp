#include <bits/stdc++.h>
using namespace std;
int compare(const void *a, const void *b)
{
    int int_a = *((int *)a);
    int int_b = *((int *)b);

    if (int_a == int_b)
        return 0;
    else if (int_a < int_b)
        return -1;
    else
        return 1;
}
int hotel(int *arrive, int n1, int *depart, int n2, int K)
{
    int i, j, count;
    i = j = count = 0;
    qsort(arrive, n1, sizeof(int), compare);
    qsort(depart, n2, sizeof(int), compare);

    while (i < n1 && j < n2)
    {
        if (arrive[i] < depart[j])
        {
            count++;
            if (count > K)
            {
                return 0;
            }
            i++;
        }
        else
        {
            count--;
            j++;
        }
    }
    return 1;
}
int main()
{
    int a[] = {1, 3, 4};
    int b[] = {12, 8, 6};
    int output = hotel(a, 3, b, 3, 2);
    printf("%d", output);
}