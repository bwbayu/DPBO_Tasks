/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package viewModel;

import viewModel.Controller;
import view.Display;
import java.awt.Canvas;
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Image;
import java.awt.Toolkit;
import java.awt.image.BufferStrategy;
import java.util.ArrayList;
import java.util.Random;
import javax.sound.sampled.Clip;
import javax.swing.JOptionPane;
import model.GameObject;
import model.Player;
import model.Rintangan;
import model.Table;
import view.Menu;


/**
 *
 * @author Byebay
 */
// class game bertanggung jawab untuk mengatur logika permainan, tampilan, dan mengontrol alur permainan
public class Game extends Canvas implements Runnable {

    /**
     *
     * Attribute declaration.
     */

    // Atribut yang menentukan lebar dan tinggi tampilan permainan.
    public static final int width = 640;
    public static final int height = 480;
    
    private Display display; // Objek Display yang digunakan untuk menampilkan permainan.
    private boolean running; // Atribut yang menentukan apakah permainan sedang berjalan atau tidak.
    private Handler handler; // Objek Handler yang digunakan untuk mengelola entitas dalam permainan.
    private Thread thread; // Thread yang digunakan untuk menjalankan permainan secara paralel.


    private boolean startCounting = false;
    private int counter = 0;
    private int stateCounter = 0;
    private int direction = 0;
    private int finalScore = 0; // menampung score
    private int standingScore = 0; // menampung standing
    private boolean collision = false; // menampung data terjadi collision atau tidak
    private Player player; // deklarasi objek player
    private String username; // deklarasi username
    private Table tscore; // deklarasi objek table
    private Clip musik; // deklarasi backsound music

    // Default constructor.
    public Game() {
        try {
            // Initialize display.
            display = new Display(width, height, "Advanture of Alien");
            display.open(this);

            // Initialize game handler.
            handler = new Handler();
            
            // Initialize table
            tscore = new Table();
            
            // Initialize sound
            Sound temp = new Sound();
            musik = temp.playSound(this.musik, "musik_game_dpbo.wav", -20.0f);

            // Initialize controller (keyboard input).
            this.setFocusable(true);
            this.requestFocus();
            this.addKeyListener(new Controller(this, handler));

            // Initialize all object.
            running = true;
            Random random = new Random();
            if (running) {
                int minWidth = 50;
                int maxWidth = 400;
                int randomWidth = random.nextInt(maxWidth - minWidth + 1) + minWidth;
                // create player
                this.player = new Player(randomWidth, 0, 30, 30);
                handler.setPlayer(this.player);
            }
        } catch (Exception e) {
            System.err.println("Failed to instance data.");
        }
    }

    /**
     *
     * Getter and Setter.
     */
    /* Game running status. */
    public boolean isRunning() {
        return running;
    }

    public void setRunning(boolean running) {
        player.setScore(finalScore);
        player.setStanding(standingScore);
        this.running = running;
    }

    /* Game score. */
    public int getScore() {
        return finalScore;
    }

    public void setScore(int score, int standing) {
        this.finalScore = score;
        this.standingScore = standing;
    }
    
    public int getStanding() {
        return standingScore;
    }
    
    public Player getPlayer(){
        return this.player;
    }
    
    public void setUsername(String username){
        this.username = username;
    }

    /**
     *
     * Public methods.
     */
    // Clamp, so player won't get offset the display bound.
    public static int clamp(int var, int min, int max) {
        if (var >= max) {
            return var = max;
        } else if (var <= min) {
            return var = min;
        }

        return var;
    }
    
    // method save score untuk menyimpan data score dari player
    public void saveScore(){
        try {
            tscore.insertData(username, finalScore, standingScore);
        } catch (Exception e) {
            System.err.println(e.getMessage());
        }
        
        JOptionPane.showMessageDialog(null, "Username : " + this.username + "\nScore : " + this.finalScore + "\nStanding : " + this.standingScore, "GAME OVER", JOptionPane.INFORMATION_MESSAGE);
    }

    // Close display.
    public void close() {
        Sound temp = new Sound();
        temp.stopSound(this.musik);
        // ketika game di close, maka score dan standing akan diambil dari objek player untuk di save ke database
        finalScore = player.getScore();
        standingScore = player.getStanding();
        saveScore();
        display.close();
        new Menu().setVisible(true);
    }

    /**
     *
     * Game controller.
     */
    // Start threading.
    public synchronized void start() {
        thread = new Thread(this);
        thread.start();
        running = true;

    }

    // Stop threading.
    public synchronized void stop() {
        try {
            thread.join();
            running = false;
        } catch (InterruptedException e) {
            System.out.println("Thread error : " + e.getMessage());
        }
    }

    // Initialize game when it run for the first time.
    public void render() {
        // Use buffer strategy.
        BufferStrategy bs = this.getBufferStrategy();
        if (bs == null) {
            this.createBufferStrategy(SOMEBITS);
            return;
        }

        // Initialize graphics.
        Graphics g = bs.getDrawGraphics();
        Image bg = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/assets/game.jpg"));
        g.drawImage(bg, 0, 0, null);

        if (running == true) {
            // Render handler.
            handler.render(g);

            // Render score.
            Font oldFont = g.getFont();
            Font newFont = oldFont.deriveFont(oldFont.getSize() * 1.5f);
            g.setFont(newFont);

            g.setColor(Color.red);
            g.drawString("Final Score : " + Integer.toString(finalScore), 450, 50);
            g.drawString("Standing Score : " + Integer.toString(standingScore), 450, 30);

        }

        // Loop the process so it seems like "FPS".
        g.dispose();
        bs.show();
    }

    // Main loop proccess.
    private long lastSpawnTime;
    public void loop() {
        Player player = handler.getPlayer();
        ArrayList<Rintangan> listRintangan = handler.getRintangan();
        Random random = new Random();

        handler.loop();
        // Inside the loop() method
        if (running) {
            counter++;
            if (startCounting) {
                stateCounter++;
            }

            if (stateCounter >= 40) {
                stateCounter = 0;
                startCounting = false;
            }

            if (counter >= 50) {
                direction = (direction == 0) ? 1 : 0;
                counter = 0;
            }
            long currentTime = System.currentTimeMillis();
            if (currentTime - lastSpawnTime >= 1500) { // adjust the delay (in milliseconds) as needed
                handler.setRintangan();
                lastSpawnTime = currentTime;
            }
            // memanggil method untuk mengupdate rintangan, dimana rintangan akan muncul dari bawah ke atas
            handler.updateRintangan();
            // memanggil method untuk mengecek collision antara player dengan rintangan
            collision = player.update(listRintangan);
            // fetch data score dan standing dari player
            finalScore = player.getScore();
            standingScore = player.getStanding();
            // jika collision tidak terjadi, maka player akan terus jatuh
            if (!collision) {
                player.setVelY((float) (0.1 + (float) player.getVelY()));
            }

        }

    }

    /**
     *
     * Override interface.
     */
    @Override
    public void run() {
        double fps = 60.0;
        double ns = (1000000000 / fps);
        double delta = 0;

        // Timer attributes.
        long time = System.nanoTime();
        long now = 0;
        long timer = System.currentTimeMillis();

        int frames = 0;
        while (running) {
            now = System.nanoTime();
            delta += ((now - time) / ns);
            time = now;

            while (delta > 1) {
                loop();
                delta--;
            }

            if (running) {
                render();
                frames++;
            }

            if ((System.currentTimeMillis() - timer) > 1000) {
                timer += 1000;
                frames = 0;
            }
        }
        stop();
    }
}
