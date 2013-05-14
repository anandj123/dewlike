#include <stdio.h>

int main(int argc, char* argv[])
{
   char * input;
   printf("Will this be seen?\t");
   scanf("%s",input);
printf("Or will this be seen first?\n");
   printf("Lets use fflush() now.");
   fflush(stdout);
   printf("\n");
   return 0;
}
