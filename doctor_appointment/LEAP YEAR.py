import java.util.Scanner;

public class LeapYear{
    public static void main(String[] args){
        int FirstYear, LastYear, i;
        
        Scanner in = new Scanner(System.in);
        
        System.out.print("Enter Last Year");
        LastYear = in.nextInt();
        
        System.out.print("FirstYear");
        FirstYear = in.nextInt(); 
        
        System.out.println("Leap Years");
        
        for (i= FirstYear; i <= LastYear; i++ ) {
            if ((0 == i % 4)&& (0 != i % 100)|| (0 == i % 400)){
                System.out.println(i);
            }
        }
    }
}