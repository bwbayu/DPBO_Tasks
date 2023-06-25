/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

import java.sql.SQLException;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author Byebay
 */
// class table untuk menyimpan data dari database dan menampilkannya di menu ketika menjalankan game
public class Table extends DB{
    private String tableName; // nama tabel

    public Table() throws Exception, SQLException{
        // konstruktor
        super();
        this.tableName = "tscore";
    }
    // method untuk mengambil semua data
    public void getData(){
        try{
            String query = "SELECT * FROM " + this.tableName;
            createQuery(query);
        }catch(Exception e){
            System.err.println(e.toString());
        }
    }
    // method untuk mengambil data dari user tertentu
    public void getDataUser(String username){
        try{
            String query = "SELECT * FROM " + this.tableName + " WHERE username='" + username + "'";
            createQuery(query);
        }catch(Exception e){
            System.err.println(e.toString());
        }
    }
    // method untuk memasukkan data ke database
    public void insertData(String username, int score, int standing){
        // cek usernamenya sudah ada atau belum
        // jika username sudah ada maka akan dilakukan update terhadap score dan standingnya
        // jika username belum ada maka akan menambahkan data baru ke database
        boolean update = false;
        try {
            Table temp = new Table();
            temp.getDataUser(username);
            if(temp.getResult().next()) update = true;
            else update = false;
        } catch (Exception e) {
            System.err.println(e.toString());
        }
        if(!update){
            try {
                String query = "INSERT INTO " + this.tableName + " VALUES(null, '" + username + "', " + Integer.toString(score) + ", " + Integer.toString(standing) + ")";
                createUpdate(query);
            } catch (Exception e) {
                System.err.println(e.toString());
            }
        }else{
            try {
                String query = "UPDATE " + this.tableName + " SET score=" + score + ", standing=" + standing + " WHERE username='" + username + "'";
                createUpdate(query);
            } catch (Exception e) {
                System.err.println(e.toString());
            }
        }
    }
    // method untuk menampilkan data dari database ke tabel di menu
    public DefaultTableModel setTable() {
        DefaultTableModel dataTable = null;
        try {
            // Creating header for the table
            Object[] column = {"Username", "Score", "Standing"};
            dataTable = new DefaultTableModel(null, column);

            // Query data to be displayed in the table
            String query = "SELECT * FROM " + this.tableName + " ORDER BY score DESC";
            this.createQuery(query);

            // Retrieve data row by row
            while (this.getResult().next()) {
                Object[] row = new Object[3];
                // Retrieve values per column and check for null
                row[0] = this.getResult().getString(2) != null ? this.getResult().getString(2) : "";
                row[1] = this.getResult().getString(3) != null ? this.getResult().getString(3) : "";
                row[2] = this.getResult().getString(4) != null ? this.getResult().getString(4) : "";
                dataTable.addRow(row);
            }
        } catch (Exception e) {
            System.err.println(e.getMessage());
        }
        // Return the retrieved data
        return dataTable;
    }

}
