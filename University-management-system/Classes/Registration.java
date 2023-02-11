package Classes;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;
public class Registration
{
	String depertment;
	int creditno = 0;
	int dcredit;
	int serial;
	int subno;
    Scanner inp=new Scanner(System.in);
public Registration()
{}
	public void printall(){
	System.out.println("         ...CSE depertment...      ");
	System.out.println("Enter the number of credits you want to take");
	dcredit=inp.nextInt();
	if(dcredit<5){System.out.println("Less than 5 credit");}
	else{
	System.out.println("      Enter how many courses you want to take     ");
    subno=inp.nextInt();
    System.out.println("1.Object Oriented Programming  Credit 3");
    System.out.println("2.English Writting  Credit 3");
    System.out.println("3.Physics   Credit 3");
    System.out.println("4.Computer design  Credit 3");
    System.out.println("5.Bangladesh Studies  Credit 1");
    System.out.println("6.Finance & Marketing  Credit 1");
    System.out.println("7.Math  credit 3");
    System.out.println("8.Electric cercuit  credit 1");

}
	}
public void display()
{
	if(dcredit<5){System.out.println("Less than 5 credit");}
    else{
	
	for(int i=1;i<=subno;i++){
	System.out.println("--------Enter serial no--------");
    serial=inp.nextInt();
    if(serial==1){creditno=creditno+3;}
    if(serial==2){creditno=creditno+3;}
    if(serial==3){creditno=creditno+3;}
    if(serial==4){creditno=creditno+3;}
    if(serial==5){creditno=creditno+1;}
    if(serial==6){creditno=creditno+1;}
    if(serial==7){creditno=creditno+3;}
    if(serial==8){creditno=creditno+1;}
    System.out.println("         Total credit="+creditno      );
	}
	 
	try{
			Scanner s5 = new Scanner(System.in);
			System.out.println("Enter the name of the courses you have taken:");
			String name = s5.nextLine();
			FileWriter s6 = new FileWriter("F:\\JAVA Programming\\JAVA CoDES\\Project final\\files.txt");
			s6.write(name);
			
			System.out.println("  ");
		
		s6.close();
		}
		catch(IOException e){
			System.out.println("Error occured");
			e.printStackTrace();
		}
		
		try{
			Scanner s7 = new Scanner(System.in);
			System.out.println("          Enter the number of credits  you have taken:     ");
			int num = s7.nextInt();
			FileWriter s8 = new FileWriter("F:\\JAVA Programming\\JAVA CoDES\\Project final\\filestwo.txt");
			s8.write(num);
			
			System.out.println("   ");
		
		s8.close();
		}
		catch(IOException e){
			System.out.println("Error occured");
			e.printStackTrace();
		}
	
	if(creditno<5){System.out.println("Less than 5 credit");}
}  
}
}
