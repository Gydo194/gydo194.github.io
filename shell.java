import java.io.Console;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.*;
import java.nio.file.Files;
import java.nio.file.Paths;

public class shell {
private static final String FILE = "/root/Desktop/event";
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
            System.out.println("executing");
	    System.out.println("cmd == " + cmd);
	    Files.write(Paths.get("/var/ww/html/event.txt", cmd));
        }
        }
        catch(IOException e) {
            e.printStackTrace();
	    System.exit(1);
        }
    }
}
