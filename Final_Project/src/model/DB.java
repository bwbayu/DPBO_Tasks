/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
/**
 *
 * @author Byebay
 */
public class DB {
    // konfigurasi koneksi
    private String connAddress = "jdbc:mysql://localhost/db_tmd_dpbo?user=root&password=";
    private Statement stmt = null; // koneksi query
    private Connection conn = null; // koneksi mysql dan basis data
    private ResultSet rs = null; // hasil query
    
    // constructor DB yang melakukan koneksi ke database
    public DB() throws Exception, SQLException {
        try {
            // membuat driver mysql
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            // membuat koneksi ke mysql dan basis data
            conn = DriverManager.getConnection(connAddress);
            conn.setTransactionIsolation(conn.TRANSACTION_READ_UNCOMMITTED);
        } catch (SQLException es) {
            // error jika koneksi gagal
            throw es;
        }
    }
    
    // method createQuery 
    // mengeksekusi query tanpa mengubah isi data, method ini memiliki 1 parameter untuk query ke database
    public void createQuery(String Query) throws Exception, SQLException {
        try {
            stmt = conn.createStatement();
            // eksekusi query
            rs = stmt.executeQuery(Query);
            if(stmt.execute(Query)) {
                // ambil hasil query
                rs = stmt.getResultSet();
            }
        } catch (SQLException e) {
            // error jika query gagal di eksekusi
            throw e;
        }
    }
    
    // method createUpdate
    // mengeksekusi query yang mengubah isi data di database, method ini memiliki 1 parameter untuk query ke database
    public void createUpdate(String Query)throws Exception, SQLException {
        try {
            stmt = conn.createStatement();
            // eksekusi query
            int res = stmt.executeUpdate(Query);
        } catch (SQLException e) {
            // eksekusi jika query gagal di eksekusi
            throw e;
        }
    }
    
    // method resultset
    // untuk memberikan hasil query dari database
    public ResultSet getResult() throws Exception {
        ResultSet Temp = null;
        try {
            return rs;
        } catch (Exception e) {
            // eksepsi jika hasil tidak dapat dikembalikan
            return Temp;
        }
    }
    
    // method closeresult
    // untuk menutuo hubungan dari eksekusi query
    public void closeResult() throws Exception, SQLException {
        if(rs != null) {
            try {
                rs.close();
            }
            catch(SQLException es){
                rs = null;
                throw es;
            }
        }
        if(stmt != null) {
            try {
                stmt.close();
            } catch (SQLException es) {
                stmt = null;
                throw es;
            }
        }
    }
    
    // method closeconnection, untuk menutup koneksi ke database
    public void closeConnection() throws Exception, SQLException {
        if(conn != null) {
            try {
                conn.close();
            }
            catch(SQLException es){
                conn = null;
            }
        }
    }
}
