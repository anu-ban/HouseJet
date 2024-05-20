package Covertors;

public class outputPrint {
    static int Number;

    public static int getNumber() {
        return Number;
    }

    public static void setNumber(int number) {
        Number = number;
    }

    public static void output() {
        System.out.println("The number you entered is " + getNumber());
        String binary = convertionLogics.convertIntToBinary(getNumber());

        System.out.println("The binary representation of the integer number is: " + binary);

    }

}
