#include <bits/stdc++.h>
using namespace std;
typedef struct ListNode Node;
struct ListNode
{
    int val;
    Node *next;
};

Node *create_node(int item, Node *next)
{
    Node *new_node=(Node *)malloc(sizeof(Node));
    if(new_node==NULL)
        {
            printf("error in node creation\a");
            exit(1);
        }
    new_node->val=item;
    new_node->next=next;

    return new_node;
}

Node *prepend(int item, Node *head)
{

    Node *new_node=create_node(item,head);
    return new_node;

}

Node *apend(int item, Node *head)
{
    Node *new_node=create_node(item,NULL);
    if(head==NULL)
        {
            return new_node;
        }
    Node *current_node=head;
    while(current_node->next!=NULL)
        {
            current_node=current_node->next;
        }
    current_node->next=new_node;
    return head;

}

void link_list_print(Node *head)
{
    while(head!=NULL)
        {
            printf("%d ",head->val);
            head=head->next;
        }
}
Node* mergeTwoLists(Node* list1, Node* list2)
{
    if(list1==NULL && list2==NULL)
        {
            return NULL;
        }
    else if(list1==NULL && list2!=NULL)
        {
            return list2;
        }
    else if(list2==NULL && list1!=NULL)
        {
            return list1;
        }
    else
        {
            Node *new_x=create_node(-101,NULL);
            while(list1!=NULL || list2!=NULL) // 1 2 4 // 1 3 4
                {
                    int a=list1==NULL?101:list1->val;
                    int b=list2==NULL?101:list2->val;
                    if(a<=b)
                        {
                            new_x=apend(a,new_x);
                            list1=list1->next;
                        }
                    else
                        {
                            new_x=apend(b,new_x);
                            list2=list2->next;
                        }

                }

                return new_x->next;
        }
}
int main()
{
    Node *head=create_node(2,NULL);
    head=prepend(1,head);
    head=apend(4,head);
//    link_list_print(head);

    Node *head2=create_node(3,NULL);
    head2=prepend(1,head2);
    head2=apend(4,head2);
//    link_list_print(head2);
link_list_print(mergeTwoLists(head,head2));
    cout << "Hello world!" << endl;
    return 0;
}
