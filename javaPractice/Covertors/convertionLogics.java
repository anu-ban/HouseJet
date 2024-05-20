package Covertors;

public class convertionLogics {

    public static String convertIntToBinary(int number) {
        String binary = "";
        while (number > 0) {
            binary = (number % 2) + binary;
            number /= 2;
        }
        return binary;
    }

    public static String convertIntToRoman(int number) {
        String[] romanNumerals = { "-V", "M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I" };
        int[] values = { 5000, 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 };

        StringBuilder romanNumber = new StringBuilder();
        int index = 0;

        while (number > 0) {
            while (number >= values[index]) {
                romanNumber.append(romanNumerals[index]);
                number -= values[index];
            }
            index++;
        }

        return romanNumber.toString();
    }

    public static int convertToCelcius(int number) {
        int celsius = (number - 32) * 5 / 9;
        return celsius;
    }

    public static double convertToKG(int pounds) {
        // 1 pound is equal to 0.453592 kilograms
        double kilograms = pounds * 0.453592;
        return kilograms;
    }
}