package Classes;
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;
import Interfaces.IBalance;
public class Balance extends Information implements IBalance
{
	final int perbalance = 5500;
	int totalbalance;
	int credit;
	
	public Balance()
	{}
	
public void numofcredits()           //method overriding
{
	System.out.println("How many credits have you taken?");
	try{
		File myCourse = new File("F:\\JAVA Programming\\JAVA CoDES\\Project final\\filestwo.txt");
		Scanner myRead = new Scanner(myCourse);
		while(myRead.hasNextInt()){
			int data = myRead.nextInt();
			System.out.println(data);
		}
		myRead.close();
	}catch(FileNotFoundException e){
		System.out.println("Error");
		e.printStackTrace();
	}
}
public void addbalance()
{
	System.out.println("total credits are");
	Scanner done = new Scanner(System.in);
	credit= done.nextInt();
	
	totalbalance = credit * perbalance;
	System.out.println("Total balance ="+totalbalance);
}
	


}