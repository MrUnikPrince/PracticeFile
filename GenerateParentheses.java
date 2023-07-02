public class GenerateParentheses {

    public static void generate(int n) {
        generateHelper(n, n, "");
    }

    private static void generateHelper(int open, int close, String str) {
        if (open == 0 && close == 0) {
            System.out.println(str);
            return;
        }

        if (open > 0) {
            generateHelper(open - 1, close, str + "(");
        }

        if (close > open) {
            generateHelper(open, close - 1, str + ")");
        }
    }

    public static void main(String[] args) {
        generate(2); // Generate all combinations of 3 balanced parentheses
    }
}
