
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.io.Console;

public class StringToFile {
    public static void main(String[] args) throws IOException {
        Console std = System.console();
	String msg = std.readLine("enter: ");
        Files.write(Paths.get("./duke.txt"), msg.getBytes());
    }
}
