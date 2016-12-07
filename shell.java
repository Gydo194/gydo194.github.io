import java.io.Console;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.*;

public class shell {
private static final String FILE = "/Users/gydokosten/Desktop/event.txt";
    public static void main(String[] args){
        Console std = System.console();
        if (std == null) {
            System.err.println("No console.");
            System.exit(1);
        }
        try(BufferedWriter writer = new BufferedWriter(new FileWriter(FILE)))
        {
            
        
        while(true) {
        String cmd = std.readLine("XSS > ");
            writer.write(cmd);
            System.out.println("");
            System.out.print("executing");
            System.out.print(".");
            System.out.print(".");
            System.out.print(".");
           
            
        }
        }
        catch(IOException e) {
            e.printStackTrace();
        }
    }
}
