import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    public static boolean []sito;
    public static void main(String[] args) throws IOException {
        z1();
        z2();
        z3();
    }
    public static void z1() throws IOException {
        sito();

        Scanner scanf = new Scanner(new File("przyklad.txt"));

        FileWriter fw = new FileWriter("wyniki4.txt",true);
        String line;
        String []line2;

        int min,max;
        int liczba;
        while(scanf.hasNextLine()){
            line = scanf.nextLine();

           line2= line.split(" ");
           liczba = Integer.parseInt(line2[0]);
           if(liczba%2==0){
               min = 2;
               max = liczba - 2;
               tak:for (int i = 2;i<=liczba/2;i++){
                   for (int j = liczba-2;j>=liczba/2;j--){
                       if (sito[i]&&sito[j]&&i+j==liczba){
                           fw.append(String.valueOf(liczba)+" "+String.valueOf(i)+"+"+String.valueOf(j)+"\n");
                           break tak;
                       }
                   }
               }
           }
        }

        fw.close();

    }

    public static void z2() throws IOException {
        sito();

        Scanner scanf = new Scanner(new File("przyklad.txt"));

        FileWriter fw = new FileWriter("wyniki4.txt",true);
        String line;
        String []line2;

        int min,max;
        int liczba;
        while(scanf.hasNextLine()) {
            line = scanf.nextLine();
            line2 = line.split(" ");
            int w=0,t=0;
            String napis = line2[1];
            char cw=' ' , ct = napis.charAt(0);

            for (int i = 0;i<napis.length();i++){

                if (napis.charAt(i) != ct) {
                    if(w<t){
                        w=t;
                        cw=ct;
                        t=1;
                        ct = napis.charAt(i);
                    }
                }else {
                    t++;
                }


            }
            for (int i = 0;i<w;i++){
                fw.append(cw);
            }
            fw.append(" "+String.valueOf(w)+"\n");


        }

        fw.close();

    }



    public static void z3() throws IOException {
        sito();

        Scanner scanf = new Scanner(new File("przyklad.txt"));

        FileWriter fw = new FileWriter("wyniki4.txt",true);
        String line;
        String []line2;

        List <String>l = new ArrayList<String>();
        while(scanf.hasNextLine()) {
            line = scanf.nextLine();
            line2 = line.split(" ");

            if(Integer.parseInt(line2[0])== line2[1].length()) {
                l.add(line);
            }
        }
        int min = 0;
        for (int i=0;i<l.size();i++){
            line = (String) l.get(i);
            line2 = line.split(" ");

            if (Integer.parseInt(line2[0])<Integer.parseInt(( ((String) l.get(min)).split(" "))[0]) || (Integer.parseInt(line2[0])==Integer.parseInt(( ((String) l.get(min)).split(" "))[0]) && 0>line2[1].compareTo(( ((String) l.get(min)).split(" "))[1]))){
                min = i;
            }
        }


        fw.append(l.get(min));

        fw.close();

    }




    public static void sito(){
        sito = new boolean[100];
        for(int i=0;i<sito.length;i++){
            sito[i]=true;
        }
        sito[0]=false;
        sito[1]=false;

        for (int i=2;i<sito.length;i++){
            if(sito[i]){
                for (int j = 2;j*i<sito.length;j++){
                    sito[j*i]=false;
                }
            }
        }
    }






}
