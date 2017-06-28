
import java.io.BufferedWriter;
import java.io.*;
import java.io.FileWriter;
import java.io.IOException;

public class WriteToFileExample1 {
    Console c = system.console();
    private static final String FILENAME = "/var/www/html/event.txt";
    
    public static void main(String[] args) {
        try (BufferedWriter bw = new BufferedWriter(new FileWriter(FILENAME))) {
            
            String content = c.readline("enter: ");
            
            bw.write(content);
            
            // no need to close it.
            //bw.close();
            
            System.out.println("Done");
            
        } catch (IOException e) {
            
            e.printStackTrace();
            
        }
        
    }
    
}
