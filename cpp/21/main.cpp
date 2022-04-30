#include <bits/stdc++.h>
using namespace std;
typedef struct node Node;
struct node
{
    int data;
    Node *next;
};
int count(Node *head)
{
    int count = 0;
    Node *current_node = head;
    while (current_node != NULL)
    {
        count++;
        current_node = current_node->next;
    }
    return count;
}
Node *search(int item, Node *head)
{
    Node *current_node = head;
    while (current_node != NULL)
    {
        if (item == current_node->data)
        {
            return current_node;
        }
        current_node = current_node->next;
    }
}
Node *create_new_Node(int item, Node *next)
{
    Node *new_created_node = (Node *)(malloc(sizeof(Node)));
    if (new_created_node == NULL)
    {
        printf("Error! can't create a node");
        exit(1);
    }
    new_created_node->data = item;
    new_created_node->next = next;
    return new_created_node;
}
Node *prepend(int item, Node *head)
{
    Node *newhead;
    newhead = create_new_Node(item, head);
    return newhead;
}

Node *append(int item, Node *head)
{
    Node *tail;
    tail = create_new_Node(item, NULL);
    if (head == NULL)
    {
        return tail;
    }

    Node *current_node = head;
    while (current_node->next != NULL)
    {
        current_node = current_node->next;
    }
    current_node->next = tail;
    return head;
}
void print_linkded_list(Node *head)
{
    Node *current_node;
    current_node = head;
    while (current_node != NULL)
    {
        printf("%d ", current_node->data);
        current_node = current_node->next;
    }
    printf("\n");
}
//Node * mergeTwoLists(Node *list1,Node *list2){
//    Node *new_head=create_new_Node(-500,NULL);
//    while(list1!=NULL || list2!=NULL){
//        if(list1->data<=list2->data){
//
//        }
//    }
//}
int main()
{
    Node *n, *head, *n2,*list1,*list2;
    list1=create_new_Node(1,NULL);
    list1=append(2,list1);
    list1=append(4,list1);
//    print_linkded_list(list1);

    list2=create_new_Node(1,NULL);
    list2=append(3,list2);
    list2=append(4,list2);
//    n =mergeTwoLists(list1,list2);
//    print_linkded_list(list2);
//    head = create_new_Node(10, NULL);
//    head = append(30, head);
//    head = prepend(20, head);
//    head = append(40, head);
//    head = prepend(-10, head);
//    print_linkded_list(head);
//    printf("\n%d", count(head));
//    n2 = search(-10, head);
//    printf("%d", n2->data);
    // printf("Hello world: %d", n2->next->data);
    return 0;
}
