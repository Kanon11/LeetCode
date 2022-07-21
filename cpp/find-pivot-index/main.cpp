#include <bits/stdc++.h>
using namespace std;
class Solution
{
public:
    int pivotIndex(vector<int>& nums)
    {
        vector<int>r_sum;
        r_sum.push_back(nums[0]);
        for(int i=1; i<nums.size(); i++)
        {
            r_sum.push_back( r_sum[i-1]+nums[i]);
        }
        int left_sum,right_sum,x;
        left_sum=right_sum=0;
        x=r_sum[r_sum.size()-1];
        for(int i=0; i<r_sum.size(); i++)
        {
            if(i>0)
            {
                left_sum=r_sum[i-1];
            }
            right_sum=x-r_sum[i];
            if(left_sum==right_sum)
            {
                return  i;
            }
        }
        return -1;
    }
};
int main()
{
    vector<int>nums;
    nums.push_back(-1);
    nums.push_back(-1);
    nums.push_back(-1);
    nums.push_back(0);
    nums.push_back(1);
    nums.push_back(1);
    Solution obj;
    int ans=obj.pivotIndex(nums);
    cout<<ans<<endl;
    return 0;
}
