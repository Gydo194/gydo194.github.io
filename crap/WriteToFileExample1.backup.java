
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;

public class WriteToFileExample1 {
    
    private static final String FILENAME = "/var/www/html/event.txt";
    
    public static void main(String[] args) {
        
        try (BufferedWriter bw = new BufferedWriter(new FileWriter(FILENAME))) {
            
            String content = "window.location = 'http://youtube.com'";
            
            bw.write(content);
            
            // no need to close it.
            //bw.close();
            
            System.out.println("Done");
            
        } catch (IOException e) {
            
            e.printStackTrace();
            
        }
        
    }
    
}
