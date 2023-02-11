package Classes;
import java.util.Scanner;

public class Result{
	
 	   	int count=0;
	 	double TotalM;
	 	double a0=0.0;
	 	double Biggest =0.0;
    public Result(){
		
	}
	public void resultshow()
	
 	 { 
 	   	
	 	System.out.println("How many terms do you have in a semester?");

	 	Scanner a = new Scanner(System.in);

	 	int term=a.nextInt();


	 	double[] array = new double[term];
	 	//double array =new double[term];

	 	for(int i=0; i<term; i++){
	 		count++;

          Scanner a1 = new Scanner(System.in);




System.out.println(" Marks distribution for : " +(i+1)+  " Term ");


System.out.println(" Enter Assignment marks out of 10 ");

int A=a1.nextInt();

System.out.println(" Enter Attendance and performance marks out of 10 ");

int P=a1.nextInt();

System.out.println(" Enter term final marks  out of 40 ");

int Tf=a1.nextInt();


	

		System.out.println("Calculating marks for Quizes");

		System.out.println("Choose one : 1) Count Best two, 2) Count best one ?");

	 	int Option =a1.nextInt();

	 	if(Option==1){

	 
	 	Scanner in = new Scanner(System.in);
        System.out.print("Input the first Quiz  number: ");
        double x = in.nextDouble();
        System.out.print("Input the Second Quiz number: ");
        double y = in.nextDouble();
        System.out.print("Input the third Quiz number: ");
        double z = in.nextDouble();

        double  smallest = 0.0;

        double total =x+y+z;
        

  if (x < y && x < z && y<z && y<z && z<y  ){
    smallest=x;
}
 else if (y < x && y < z && z< y && x<z && z<x ){
    smallest=y;
}
  else 
    smallest=z;

 a0= total- smallest;

System.out.println("Total Marks of quiz is :"+ a0);

TotalM=Tf+A+P+a0;


if(TotalM!=0){

	for(int j=0;j<term;j++){

	array[j]=TotalM;

	int counter=0;
	counter++;

	for(int k=0;k<j;k++){

	System.out.println("Total Marks of "+(i+1) +"No. term is "+array[k]);

	

}

if(counter==term){
		TotalM=0;
	}
}

	 	}
		
		}

else{
	Scanner in2 = new Scanner(System.in);
        System.out.print("Input the first Quiz  number: ");
        double x2 = in2.nextDouble();
        System.out.print("Input the Second Quiz number: ");
        double y2 = in2.nextDouble();
        System.out.print("Input the third Quiz number: ");
        double z2 = in2.nextDouble();
		
  if (x2 >= y2 && x2 >= z2){
    Biggest =x2;}

 else if (y2 >= x2 && y2 >= z2){
    Biggest=y2;
}
 else 
    Biggest=z2;

System.out.println("Total marks for quiz :"+Biggest*2);

TotalM=Tf+A+P+(Biggest*2);

System.out.println("Total Marks :"+TotalM);

if(TotalM!=0){

	for(int j=0;j<term;j++){

	array[j]=TotalM; 

	int counter=0;
	counter++;

	for(int k=0;k<j;k++){

	System.out.println("Total Marks of "+(i+1) +"No. term is "+array[k]);

	

}

if(counter==term){
		TotalM=0;
	}
}

}













				
			}

		}
	}
	}

	





	 