#include <bits/stdc++.h>
using namespace std;
class Solution
{
public:
    vector<int> runningSum(vector<int>& nums)
    {
        int sum,i,j;
        for( i=1; i<nums.size(); i++)
        {
            nums[i]=nums[i]+nums[i-1];
        }
        return nums;
    }
};


int main()
{
    vector<int>nums;

    nums.push_back(3);
    nums.push_back(1);
    nums.push_back(2);
    nums.push_back(10);
    nums.push_back(1);

    Solution obj;
    obj.runningSum(nums);
    for(int i=0; i<5; i++)
    {
        cout<<nums[i]<<endl;
    }
    return 0;
}
