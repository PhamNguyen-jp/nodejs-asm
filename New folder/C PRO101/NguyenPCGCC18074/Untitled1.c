#include<stdio.h>
#include<stdlib.h>
#include<string.h>
//For loop is used to repeatedly compare points and find the min or max value required.
float max_array(float max_array[],int n)
{
    int i;
    float max;
    max = max_array[0];
    for(i = 1 ; i < n ; i++)
        if(max < max_array[i])
        max = max_array[i];
    return max;
}
float min_array(float min_array[],int n)
{
    int i;
    float min;
    min = min_array[0];
    for(i = 1 ; i < n ; i++)
        if(min > min_array[i])
        min = min_array[i];
    return min;
}

void main()
{
    int n, i, choice, ID[30];
    float max, min, Grade[30];
    void output(int ID[], float Grade[], int n);
      printf("Number of student is:");
      scanf("%d", &n);
    if(n<0)
{
do
    {
    printf("Enter positive number");
    scanf("%d",&n);
    }
    while(n<0);

}
    if(n>0)
    input(ID,Grade,n);
    do
//Menu
    {
        printf("\n\n_____MENU_____");
        printf("\n\n 1.Print Student ID and Grade: ");
        printf("\n\n 2.Finding Max grade: ");
        printf("\n\n 3.Finding Min grade: ");
        printf("\n\n 4.Exit");
        printf("\n\nPlease choose:");
        scanf("%d", &choice);

    switch(choice)
    {

    case 1:
        {
           printf("ALL student:");
           output(ID,Grade,n);

        }
        break;

    case 2:
        {
            printf("\nChoose Finding Max Grade");
            max = max_array(Grade, n);
            printf("\nThe number maximum is: %f", max);
        }
        break;

    case 3:
        {
            printf("\nChoose Finding Min Grade");
            min = min_array(Grade, n);
            printf("\nThe number minimum is: %f", min);
        }
        break;

    case 4:
        {
            exit (0);
        break;
    default:
        printf("\nYou need to enter the option less than 5.");
        break;
        }
    }
    }
    while(choice!=4);
}
input(int ID[], float Grade[],int n)
{

    int i;for(i = 0; i < n; i++)
    {
        printf("\nEnter student ID %d:", i + 1);
        scanf("%d",&ID[i]);
        printf("\nEnter student Grade %d:", i + 1);
        scanf("%f",&Grade[i]);
    }
}
void  output(int ID[], float Grade[], int n)
{
    int i;
     printf("\nChoose Student ID and Grade");
            for(i = 0; i < n; i++)
            {
                printf("\n\nStudent ID :\t%d", ID[i]);
                printf("\n\nStudent Grade :\t%.1f", Grade[i]);
            }
}

