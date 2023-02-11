import java.util.Scanner;
import Classes.*;
import Interfaces.*;
public class Main
{
public static void main(String[]args)
{
 String Username;
 String Password;
 
		System.out.println("          	Please sign up to use functionality          ");
	  System.out.println("--------------------------------------------------------------");
      System.out.println("        Enter your Id        ");

        Scanner input3 =new Scanner (System.in);
         Username =input3.nextLine();

        System.out.println("     Enter your Password    ");

        Scanner input4 =new Scanner (System.in);
         Password =input4.nextLine();

    

    Scanner input1 = new Scanner(System.in);
	
	System.out.println("            Please Log in :          ");
	System.out.println("---------------------------------------");
    System.out.println("      Enter ID  :    ");
    String username1 = input1.next();

    Scanner input2 = new Scanner(System.in);
    System.out.println("     Enter Password :     ");
    String password2 = input2.next();

    if (username1.equals(Username) && password2.equals(Password)) {

        System.out.println("Loged in SUCCESSFULLY !!!");
		System.out.println("         Choose any one  from the following         ");
		System.out.println("------------------------------------------------------");  
		System.out.println("1) Marks distribution (According to Semester) ");
		System.out.println("2)Registration ");
		System.out.println("3)Grade Calculation(Gpa and CGPA) ");
		System.out.println("4)Balance");
		System.out.println("-------------------------------------------------------");  
		Scanner r1 = new Scanner(System.in);
		int Select =r1.nextInt();
		
	
		
		switch(Select){
			
			case 1:
			Result re = new Result();
			re.resultshow();
		
		
			case 2:
			System.out.println("        Now Register Courses       ");
			String n;
		Scanner s=new Scanner(System.in);
		System.out.println("Enter your name");
		n=s.nextLine();
		System.out.println("....Welcome....");
	
		AddDrop a1 = new AddDrop();
		a1.printall();
		a1.display();
		System.out.println("                          ");
		System.out.println("1)Adding Dropping");
			
			Scanner ad1 = new Scanner(System.in);
			int choose = ad1.nextInt();
				
				switch(choose){
					
					case 1:
				//	AddDrop a1 = new AddDrop();
					a1.selectedcourses();
					a1.adding();
					a1.added();
					a1.dropping();
					a1.dropped();
				}
			System.out.println("---------Calculate Gradee(GPA or CGPA)--------");	
			case 3:
			System.out.println("              ");
			System.out.println("1)CGPA");
			System.out.println("2)GPA");
			Scanner z1 = new Scanner(System.in);
			int takeone = z1.nextInt();
			
			switch(takeone){
				
				case 1:
				CGPA ss1 = new CGPA();
				ss1. showall();
				
				case 2:
				System.out.println("      Now Calculate GPA      ");
				System.out.println("    Input All Grade with capital letters     ");
			GPA g=new GPA();
			g.gpaCount();
			
			case 4:
			System.out.println("     Calculate balance of selected cources   ");
			Balance b1 = new Balance();
			b1.numofcredits();
			b1.addbalance();
			

			}

		}
	
    }

    else if (username1.equals(Username)) {
        System.out.println("Invalid Password!");
    } else if (password2.equals(Password)) {
        System.out.println("Invalid Username!");
    }
     else 
        System.out.println("Invalid Username & Password!");

    
    }
}