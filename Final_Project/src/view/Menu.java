
package view;

import java.util.logging.Level;
import java.util.logging.Logger;
import model.Table;
import javax.sound.sampled.Clip;
import javax.swing.JOptionPane;
// mengakses package viewmodel
import viewModel.Game;


/**
 *
 * @author Byebay
 */
// class menu untuk menjalankan view dari menu
public class Menu extends javax.swing.JFrame {
    // properti
    public Game game; // objek game
    private Table tscore; // data tabel
    public Clip audio; // backsound
    private String username; // username
    
    public Menu() {
        // konstruktor
        initComponents(); // load component
        setTitle("Adventure of Alien");
        this.username = ""; // inisialisasi username
        try {
            // membuat tabel baru
            this.tscore = new Table();
            // diisi dgn data dari database
            Table.setModel(tscore.setTable());
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        btnPlay = new javax.swing.JButton();
        lblMenuTitle = new javax.swing.JLabel();
        btnQuit = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        Table = new javax.swing.JTable();
        lblNewUsername = new javax.swing.JLabel();
        FormUsername = new javax.swing.JTextField();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("The Survive Hop | Menu");
        setBackground(new java.awt.Color(51, 153, 255));
        setName("Main Menu"); // NOI18N
        setResizable(false);
        setSize(new java.awt.Dimension(800, 600));

        jPanel1.setBackground(new java.awt.Color(102, 102, 102));

        btnPlay.setBackground(new java.awt.Color(51, 255, 102));
        btnPlay.setFont(new java.awt.Font("Ubuntu", 1, 14)); // NOI18N
        btnPlay.setForeground(new java.awt.Color(255, 255, 255));
        btnPlay.setText("Play");
        btnPlay.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPlayActionPerformed(evt);
            }
        });

        lblMenuTitle.setFont(new java.awt.Font("Bunny Funny", 1, 36)); // NOI18N
        lblMenuTitle.setForeground(java.awt.Color.white);
        lblMenuTitle.setText("Advanture of Alien");
        lblMenuTitle.setVerticalAlignment(javax.swing.SwingConstants.BOTTOM);
        lblMenuTitle.setAlignmentY(0.0F);
        lblMenuTitle.setIconTextGap(0);

        btnQuit.setBackground(new java.awt.Color(255, 102, 102));
        btnQuit.setFont(new java.awt.Font("Ubuntu", 1, 14)); // NOI18N
        btnQuit.setForeground(new java.awt.Color(255, 255, 255));
        btnQuit.setText("Quit");
        btnQuit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnQuitActionPerformed(evt);
            }
        });

        Table.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null},
                {null, null, null},
                {null, null, null},
                {null, null, null}
            },
            new String [] {
                "Title 1", "Title 2", "Title 3"
            }
        ));
        Table.setName(""); // NOI18N
        Table.setPreferredSize(new java.awt.Dimension(225, 200));
        Table.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                TableMouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(Table);

        lblNewUsername.setFont(new java.awt.Font("Ubuntu", 0, 12)); // NOI18N
        lblNewUsername.setForeground(new java.awt.Color(255, 255, 255));
        lblNewUsername.setText("Username");

        FormUsername.setBackground(new java.awt.Color(255, 255, 255));
        FormUsername.setHorizontalAlignment(javax.swing.JTextField.CENTER);
        FormUsername.setToolTipText("Username...");
        FormUsername.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(33, 33, 33)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                            .addGroup(javax.swing.GroupLayout.Alignment.LEADING, jPanel1Layout.createSequentialGroup()
                                .addGap(12, 12, 12)
                                .addComponent(lblNewUsername)
                                .addGap(18, 18, 18)
                                .addComponent(FormUsername))
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addComponent(btnPlay, javax.swing.GroupLayout.PREFERRED_SIZE, 114, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(18, 18, 18)
                                .addComponent(btnQuit, javax.swing.GroupLayout.PREFERRED_SIZE, 114, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(47, 47, 47))
                            .addComponent(jScrollPane1, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.PREFERRED_SIZE, 345, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(55, 55, 55)
                        .addComponent(lblMenuTitle)))
                .addContainerGap(52, Short.MAX_VALUE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addGap(53, 53, 53)
                .addComponent(lblMenuTitle)
                .addGap(43, 43, 43)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(FormUsername, javax.swing.GroupLayout.PREFERRED_SIZE, 32, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblNewUsername))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 154, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnPlay, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btnQuit, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(40, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void btnQuitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnQuitActionPerformed
        // ketika menekan tombol quit di menu
        this.dispose();
        System.exit(0);
    }//GEN-LAST:event_btnQuitActionPerformed

    private void btnPlayActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPlayActionPerformed
        // ketika menekan tombol play di menu 
        if(this.username.length() == 0 && FormUsername.getText().length() != 0) {
            // jika nilai username masih kosong
            // dan text field TFUsername ada isinya
            this.username = FormUsername.getText();
        }
        if(FormUsername.getText().length() == 0 && this.username.length() == 0) {
            // jika text field kosong
            // dan nilai username masih kosong (tidak klik dari tabel)
            JOptionPane.showMessageDialog(this, "Username tidak boleh kosong!\nPilih user atau masukkan username baru.");
        } else {
            
            // buat game baru
            game = new Game();
            game.setUsername(this.username); // set username
            // cek apakah username sudah ada di database
            Table temp = null;
            try {
                temp = new Table();
            } catch (Exception ex) {
                Logger.getLogger(Menu.class.getName()).log(Level.SEVERE, null, ex);
            }
            temp.getDataUser(this.username);
            int c = 0, tadapt = 0, tfall = 0;
            try {
                while(temp.getResult().next()){
                    // jika username sudah ada di database,
                    // ambil nilai adapt dan fall nya
                    tadapt = Integer.parseInt(temp.getResult().getString(3));
                    tfall = Integer.parseInt(temp.getResult().getString(4));
                    c++;
                }
            } catch (Exception ex) {
                Logger.getLogger(Menu.class.getName()).log(Level.SEVERE, null, ex);
            }
            // set score adapt dan fall di awal game
            System.out.println("score: " + tadapt);
            System.out.println("standing: " + tfall);
            game.setScore(tadapt, tfall);
            
            // game dimulai
            game.setRunning(true);
            this.setVisible(false); // menu window dibuat invisible
            this.dispose(); // menu window di clear
        }
    }//GEN-LAST:event_btnPlayActionPerformed

    private void TableMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_TableMouseClicked
        // TODO add your handling code here:
        // jika salah satu record dalam tabel di klik
        int row = Table.getSelectedRow();
        // set username dengan username pada tabel yg di klik
        this.username = Table.getModel().getValueAt(row, 0).toString();
    }//GEN-LAST:event_TableMouseClicked

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(() -> {
            new Menu().setVisible(true);
        });
    }
    
   

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JTextField FormUsername;
    private javax.swing.JTable Table;
    private javax.swing.JButton btnPlay;
    private javax.swing.JButton btnQuit;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JLabel lblMenuTitle;
    private javax.swing.JLabel lblNewUsername;
    // End of variables declaration//GEN-END:variables
}
