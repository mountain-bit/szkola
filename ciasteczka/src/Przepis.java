public class Przepis {
    private Składniki sk_na_porcje;
    private int porcja;
    private Składniki sk_na_c;

    public Przepis(double cukier, double maslo, double maka, int porcja) {
        this.sk_na_porcje = new Składniki();
        this.sk_na_c = new Składniki();
        this.sk_na_porcje.setCukier(cukier);
        this.sk_na_porcje.setMaslo(maslo);
        this.sk_na_porcje.setMaka(maka);
        this.porcja = porcja;
        this.setSkladnikiNaCiastko();
    }

    private void setSkladnikiNaCiastko(){
        this.sk_na_c.setMaka(this.sk_na_porcje.getMaka()/this.porcja);
        this.sk_na_c.setCukier(this.sk_na_porcje.getCukier()/this.porcja);
        this.sk_na_c.setMaslo(this.sk_na_porcje.getMaslo()/this.porcja);
    }

    public String ileSkladnikow(int ileciasteczek){
      return "Do upieczenia "+String.valueOf(ileciasteczek)+"ciastek"+ new Składniki(this.sk_na_c.getCukier()*ileciasteczek,this.sk_na_c.getMaslo()*ileciasteczek,this.sk_na_c.getMaka()*ileciasteczek).toString();
    }

}

class Składniki {
    private double cukier;
    private double maslo;
    private double maka;

    public Składniki() {
    }

    public Składniki(double cukier, double maslo, double maka) {
        this.cukier = cukier;
        this.maslo = maslo;
        this.maka = maka;
    }

    public double getCukier() {
        return cukier;
    }

    public void setCukier(double cukier) {
        this.cukier = cukier;
    }

    public double getMaslo() {
        return maslo;
    }

    @Override
    public String toString() {
        return " potrzeba:\n" +
                String.valueOf(tak(cukier))+ " szkalnka cukry\n"+
                String.valueOf(tak(maslo)) + " szkalnka masła (cokolwiek to jest)\n"+
                String.valueOf(tak(maka)) + " szkalnka mąki\n";
    }

    public void setMaslo(double maslo) {
        this.maslo = maslo;
    }

    public double getMaka() {
        return maka;
    }

    public void setMaka(double maka) {
        this.maka = maka;
    }

    private double tak(double n){
       /* double[] t = new double[]{0,0.25,0.3,0.5,0.6,0.75,1};
        double q = n%1;
        double max=0.0;
        for (double e:t) {
                  if(q==e){
                      return n;
                  }else if(Math.abs(q-e)<Math.abs(q-max)){
                      max=e;
                  }
        }*/
        return Math.round(n*100.0)/100.0;

    }
}
