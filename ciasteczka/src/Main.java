import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Przepis p = new Przepis(1.5,1,2.75,48);
        Scanner scan = new Scanner(System.in);
        System.out.println("Ile casteczek chcesz upiec");
        System.out.println(p.ileSkladnikow(scan.nextInt()));
    }
}
