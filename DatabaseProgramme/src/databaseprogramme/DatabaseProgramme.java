
package databaseprogramme;

import java.sql.Statement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class DatabaseProgramme {

    public static void main(String[] args) {
        try {
            Connection conn = DriverManager.getConnection("jdbc:sqlite:testdatabase.db");
            Statement statement = conn.createStatement();
            
            statement.close();
            conn.close();
        } catch (SQLException e) {
            System.out.println("An error occured " + e);
        }
    }
    
}
