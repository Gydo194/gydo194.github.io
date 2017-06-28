import java.io.IOException;
import java.io.Console;
import java.nio.file.Files;
import java.nio.file.Paths;

public class xss {
	public static void main(String[] args) throws IOException {
		Console std = System.console();
		while(true) {
		String command = std.readLine("XSS > ");
		Files.write(Paths.get("/var/www/html/event.txt"), command.getBytes());
		System.out.println("Executing...");
		}
	}
}
