import java.io.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class z2 {

    public static void main(String[] args) throws IOException {
        int j,zakres=100001,do_kad,w;
        int tablica[] = new int[zakres];
        do_kad = (int) Math.floor(Math.sqrt(zakres));

        for (int i=1; i<zakres; i++) tablica[i]=i;

        for (int i=2; i<=do_kad; i++) {
            if (tablica[i] != 0) {
                j = i+i;
                while (j<zakres) {
                    tablica[j] = 0;
                    j += i;
                }
            }
        }

        Scanner scanF = new Scanner(new File("przyklad.txt"));
        String z;
        List<Integer> t = new ArrayList<>();

        int iloscczynnikowmax=0, iloscroznychmax=0;
        int iloscczynnikow =0, iloscroznych=0;
        int liczbamax = 0,liczbarmax=0;

        while(scanF.hasNextLine()){
            z = scanF.nextLine();
            if (!z.equals("")){
                w = Integer.parseInt(z);
                iloscczynnikow = 0;
                iloscroznych = 0;
                t.clear();
                for (int i =2;i<tablica.length;i++){
                    if (tablica[i] != 0) {
                        if(w%tablica[i]==0){
                            System.out.print(w);
                            System.out.print(" ");
                            System.out.print(i);
                            System.out.println(" ");
                            iloscczynnikow++;
                            if(!t.contains(i))
                                t.add(tablica[i]);
                                w=w/tablica[i];
                                i=1;


                            if (w==1)break;

                        }
                    }
                }

                if (iloscczynnikow>iloscczynnikowmax){
                    iloscczynnikowmax=iloscczynnikow;
                    liczbamax = Integer.parseInt(z);
                }
                if (t.size()> iloscroznychmax){
                    iloscroznychmax=t.size();
                    liczbarmax = Integer.parseInt(z);
                }



            }
        }

        FileWriter pw = new FileWriter("wynik4.txt",true);

        pw.append(String.valueOf(liczbamax)+" "+String.valueOf(iloscczynnikowmax)+"\r");
        pw.append(String.valueOf(liczbarmax)+" "+String.valueOf(iloscroznychmax)+"\r");

        pw.close();

    }
}
