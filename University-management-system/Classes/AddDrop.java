package Classes;
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;
import Interfaces.IAddDrop; 
public class AddDrop extends Registration implements IAddDrop 
{
	int takecredit;
	int takesub;
	int serial;
	 Scanner jp=new Scanner(System.in);
public AddDrop()
{

}

public void selectedcourses()
{
	try{
		File myCourse = new File("F:\\JAVA Programming\\JAVA CoDES\\Project final\\files.txt");
		Scanner myRead = new Scanner(myCourse);
		while(myRead.hasNextLine()){
			String data = myRead.nextLine();
			System.out.println(data);
		}
		myRead.close();
	}catch(FileNotFoundException e){
		System.out.println("Error");
		e.printStackTrace();
	}
}
public void adding()
{
	//super.display();
	
	System.out.println("Total credits you have taken:"+creditno);
	System.out.println("Enter the number of credit  you want to add");
	takecredit=jp.nextInt();
	
	System.out.println("Enter the number of courses you want to add");
    takesub=jp.nextInt();
    System.out.println("1.Object Oriented Programming  Credit 3");
    System.out.println("2.English Writting  Credit 3");
    System.out.println("3.Physics   Credit 3");
    System.out.println("4.Computer design  Credit 3");
    System.out.println("5.Bangladesh Studies  Credit 1");
    System.out.println("6.Finance & Marketing  Credit 1");
    System.out.println("7.Math  credit 3");
    System.out.println("8.Electric cercuit  credit 1");
}
public void added()
{
	for(int i=1;i<=takesub;i++){
		System.out.println("     now adding  ");
	System.out.println("Enter serial no");
    serial=jp.nextInt();
    if(serial==1){creditno=creditno+3;}
    if(serial==2){creditno=creditno+3;}
    if(serial==3){creditno=creditno+3;}
    if(serial==4){creditno=creditno+3;}
    if(serial==5){creditno=creditno+1;}
    if(serial==6){creditno=creditno+1;}
    if(serial==7){creditno=creditno+3;}
    if(serial==8){creditno=creditno+1;}
    System.out.println("Total credit="+creditno);
	}
}
public void dropping()
{
	//super.display();
	
	System.out.println("Total credits you have taken:"+creditno);
	System.out.println("Enter the number of credit  you want to Drop");
	takecredit=jp.nextInt();
	
	System.out.println("Enter the number of courses you want to drop");
    takesub=jp.nextInt();
    System.out.println("1.Object Oriented Programming  Credit 3");
    System.out.println("2.English Writting  Credit 3");
    System.out.println("3.Physics   Credit 3");
    System.out.println("4.Computer design  Credit 3");
    System.out.println("5.Bangladesh Studies  Credit 1");
    System.out.println("6.Finance & Marketing  Credit 1");
    System.out.println("7.Math  credit 3");
    System.out.println("8.Electric cercuit  credit 1");
}

public void dropped()
{
	for(int i=1;i<=takesub;i++){
		System.out.println("     now dropping  ");
	System.out.println("Enter serial no");
    serial=jp.nextInt();
    if(serial==1){creditno=creditno-3;}
    if(serial==2){creditno=creditno-3;}
    if(serial==3){creditno=creditno-3;}
    if(serial==4){creditno=creditno-3;}
    if(serial==5){creditno=creditno-1;}
    if(serial==6){creditno=creditno-1;}
    if(serial==7){creditno=creditno-3;}
    if(serial==8){creditno=creditno-1;}
    System.out.println("Total credit="+creditno);
	}
	
}
}