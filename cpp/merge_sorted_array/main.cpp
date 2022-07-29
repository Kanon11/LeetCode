#include <bits/stdc++.h>

using namespace std;
class Solution
{
public:
    void merge(vector<int>& nums1, int m, vector<int>& nums2, int n)
    {
        vector<int>ans;
        int i,j,a,b;
        i=j=0;
        while(i<=m-1||j<=n-1)
            {
                if(i<=m-1&&j<=n-1)
                    {
                        a=nums1[i];
                        b=nums2[j];
                        if(a<b)
                            {
                                ans.push_back(a);
                                i++;
                            }
                        else
                            {
                                ans.push_back(b);
                                j++;
                            }
                    }
                else if(i<=m-1&&j>n-1)
                    {
                        ans.push_back(nums1[i++]);
                    }
                else
                    {
                        ans.push_back(nums2[j++]);
                    }

            }
            for(i=0;i<nums1.size();i++){
                nums1[i]=ans[i];
            }


    }
};
int main()
{
int a[]={1,2,3,0,0,0};
int b[]={2,5,6};
vector<int>nums1,nums2,nums3;
nums1.assign(a,a+6);
nums2.assign(b,b+3);
Solution obj;
obj.merge(nums1,3,nums2,3);
printf("%d",nums1[5]) ;
}
