package Classes;
import java.util.Scanner;
public class CGPA {



 public void showall(){


 	int credit;
	float gpa;
	float cgpa;
	float total=0.0f;
	float Total=0.0f;
	int TCredit=0;


		

	
		Scanner S = new Scanner(System.in);

		System.out.println("In which semester are you right now?");

		int count= S.nextInt();

		for(int i = 1; i<=count ;i++){

		System.out.println("Enter your CGPA of :"+i+ " No. Semester");

		cgpa=S.nextFloat();

		System.out.println("Enter your credit taken in :"+i+ " No. Semester");

		credit=S.nextInt();

		TCredit=TCredit+credit;

		total=total+(cgpa*credit); 

		

			Total=total/TCredit;
			System.out.println("Total CGPA of : "+i+ "Semester is :" +Total);

			if(i==count){
			if(Total==4.0){
				System.out.println("Final Grade is :A+" );
			}


			else if(Total>3.74){

				System.out.println("Final Grade is :A ");

				
			}


			else if(Total>3.49 && Total<3.75){

				System.out.println("Final Grade is :B+ ");

				
			}	

			else if(Total>3.24 && Total<3.50){

				System.out.println("Final Grade is :B ");	
			}	


			else if(Total>2.99 && Total<3.25){

				System.out.println("Final Grade is :B");

				
			}	


			else if(Total>1.99 && Total <2.99){

				System.out.println("Probation Student! ");

				
			}

			else if (Total==0) {

				System.out.println("Fail!");
				
			}

			else
				System.out.println("Under probation");

		}

		}
	}

	
	


	
	

	}


