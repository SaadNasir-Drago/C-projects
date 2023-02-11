package Classes;
import java.util.Scanner;
public class GPA {



    double gradePoint;
    int credit;
    String grade;
	int totalCredit=0;
	double totalPoints=0;
	double gpa;

	 
	
	
	public void gpaCount(){

	Scanner input=new Scanner(System.in);
	 for(int i=0;i<=5;i++){
		System.out.println("Enter your Grade ");
		Scanner input1 =new Scanner(System.in);
		grade =input1.nextLine();
		
		if(grade=="A+"){
			gradePoint=4;
		}
		else if(grade.equals("A")){
			gradePoint=3.75;
		}
		else if(grade.equals("B+")){
			gradePoint=3.50;
		}
		else if(grade.equals("B")){
			gradePoint=3.25;
		}
		else if(grade.equals("C+")){
			gradePoint=3.00;
		}
		else if(grade.equals("C")){
			gradePoint=2.75;
		}
		else if(grade.equals("D+")){
			gradePoint=2.50;
		}
		else if(grade.equals("D")){
			gradePoint=2.25;
		}
		else if(grade.equals("F")){
			gradePoint=0.00;
		}
		System.out.println("Enter your credit ");
		credit=input.nextInt();
		totalCredit=totalCredit+credit;
		totalPoints=totalPoints+(gradePoint*credit);
		System.out.println("total credits "+totalCredit);
		System.out.println("total points "+totalPoints);
		gpa=(double)totalPoints/totalCredit;
		System.out.println("GPA "+gpa);
	 }
	}
	
}

