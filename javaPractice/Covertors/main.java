package Covertors;

import java.util.Scanner;

public class main {
    public static void main(String[] args) {
        try (Scanner input = new Scanner(System.in)) {
            // Prompt the user to enter an integer
            System.out.println("Enter an integer: ");
            int number = input.nextInt();
            outputPrint.setNumber(number);

            outputPrint.output();

            // Convert the integer to its binary representation using the binaryLogic class
            String binary = convertionLogics.convertIntToBinary(number);

            // Print the binary representation
            System.out.println("Binary representation: " + binary);

            // Convert the integer to its Roman numeral representation
            String romanNumeral = convertionLogics.convertIntToRoman(number);

            int celcious = convertionLogics.convertToCelcius(number);

            // Print the Roman numeral representation
            System.out.println("Roman numeral representation: " + romanNumeral);

            // prints Celcius Result
            System.out.println("Celcious convertion of: " + number + " F to C " + celcious);

            System.out.println("The pound to killogram is: " + convertionLogics.convertToKG(number) + " KG");
        }

    }

}
