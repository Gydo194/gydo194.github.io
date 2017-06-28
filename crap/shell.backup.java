import java.io.Console;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.*;

public class shell {
private static final String FILE = "/var/www/html/event.txt";
    public static void main(String[] args){
        Console std = System.console();
        if (std == null) {
            System.err.println("No console.");
            System.exit(1);
        }
        try(BufferedWriter writer = new BufferedWriter(new FileWriter(FILE)))
        {
        writer.write("Derp");
        
        while(true) {
        String cmd = std.readLine("XSS > ");
            writer.write(cmd);
            System.out.println("executing");
	    System.out.println("cmd == " + cmd);
        }
        }
        catch(IOException e) {
            e.printStackTrace();
	    System.exit(1);
        }
    }
}
