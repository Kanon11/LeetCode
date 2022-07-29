#include <bits/stdc++.h>
using namespace std;

typedef struct ListNode Node;

struct ListNode
{
    int val;
    Node *next;
};

Node *create_node(int item,Node *next)
{
    Node *newly_creaded_node=(Node *)malloc(sizeof(Node));

    if(newly_creaded_node==NULL)
        {
            printf("error in node creation\n");
            exit(1);
        }

    newly_creaded_node->val=item;
    newly_creaded_node->next=next;

    return newly_creaded_node;

}

Node *prepend(int item,Node *head)
{
    Node *new_head=create_node(item,NULL);
    new_head->next=head;
    return new_head;
}
Node *append(int item,Node *head)
{
    Node *new_node=create_node(item,NULL);
    Node *current=head;
    while(current->next!=NULL)
        {
            current=current->next;
        }
    current->next=new_node;
    return head;

}
void print_node(Node *head)
{
    while(head!=NULL)
        {
            printf("%d ",head->val);
            head=head->next;
        }
}
Node *reverseList(Node *head)
{
    Node *current=head;
    Node *previous=NULL;
    Node *next=NULL;
    while(current!=NULL)
        {
            next=current->next;
            current->next=previous;
            previous=current;
            current=next;
        }
    return previous;
}
Node *middleNode(Node *head)
{
    Node* slow=head;
    Node *fast=head;
    while(fast!=NULL&&fast->next!=NULL)
        {
            slow=slow->next;
            fast=fast->next->next;
        }

    return slow;

}
Node * addTwoNumbers (Node *l1, Node *l2)
{
    int c,sum,item,a,b,x;
    c=sum=item=x=0;
    Node *head=create_node(-1,NULL);
    while(l1!=NULL || l2!=NULL)
        {

            a=(l1!=NULL)?l1->val:0;
            b=(l2!=NULL)?l2->val:0;
            sum=(a+b+c);
            c=sum/10;
            x=sum%10;
            head=append(x,head);
            if(l1!=NULL)
                {
                    l1=l1->next;
                }
            if(l2!=NULL)
                {
                    l2=l2->next;
                }



        }
    if(c>0)
        {
            head=append(c,head);
        }
    return head->next;

}
class Solution
{
public:
    int search(vector<int>& nums, int target)
    {

        int l=0;
        int h=nums.size()-1;
        int mid=(l+h)/2;
        while(l<h)
            {
                mid=(l+h)/2;
                if(nums[mid]==target)
                    {
                        return mid;
                    }
                else if(nums[mid]>target)
                    {
                        h=mid-1;
                    }
                else
                    {
                        l=mid+1;
                    }
            }
        return -1;

    }

public:
    vector<int> searchRange(vector<int>& nums, int target)
    {

        int l,h,mid,x,y,s;
        l=0;
        vector<int>r= {-1,-1};
        h=s=nums.size()-1;
        while(l<=h)
            {
                mid=l+(h-l)/2;
                if(nums[mid]==target)
                    {
                        x=y=mid;
                        while(1)
                            {
                                if(x-1>=0&&nums[x-1]==target)
                                    {
                                        x--;
                                    }
                                else
                                    {
                                        break;
                                    }
                            }
                        while(1)
                            {
                                if(y+1<=s&&nums[y+1]==target)
                                    {
                                        y++;
                                    }
                                else
                                    {
                                        break;
                                    }
                            }
                        r[0]=x;
                        r[1]=y;
                        return r;
                    }
                else if(nums[mid]>target)
                    {
                        h=mid-1;
                    }
                else
                    {
                        l=mid+1;
                    }
            }
        return r;

    }
};
int main()
{
    vector<int>nums;
    vector<int>ans;
    int a[]= {0,1,3,5,9,9,9};
    nums.assign(a,a+7);
    Solution obj;
    ans=obj.searchRange(nums,9);
    printf("%d",ans[1]);
//    Node *h1=create_node(9,NULL);
//    h1=prepend(9,h1);
//    h1=append(9,h1);
//    h1=append(9,h1);
//    h1=append(9,h1);
//    h1=append(9,h1);
//    h1=append(9,h1);
//    Node *h2=create_node(9,NULL);
//    h2=prepend(9,h2);
//    h2=append(9,h2);
//    h2=append(9,h2);
//    Node *ans=addTwoNumbers(h1,h2);
//    print_node(ans);
    return 0;
}
