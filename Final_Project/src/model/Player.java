/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

import viewModel.Game;
import java.awt.Color;
import java.awt.Graphics;
import java.awt.Rectangle;
import java.util.ArrayList;

/**
 *
 * @author Byebay
 */
// class Player merupakan child dari gameObjek, yang merepresentasikan objek player
public class Player extends GameObject
{
    // private atribut
    private int score = 0; //menampung skor dari player
    private int standing = 0; //menampung standing dari player
    /**
     * Constructor.
     */
    
    // Default constructor.
    public Player()
    {
        super(0, 0, 30, 30);
    }
    
    // Constructor with player position.
    public Player(int x, int y, int width, int height)
    {
        super(x, y, width, height);
    }
    
    // SETTER GETTER
    public int getScore(){
        return this.score;
    }
    
    public int getStanding(){
        return this.standing;
    }
    
    public void setScore(int score){
        this.score = score;
    }
    
    public void setStanding(int standing){
        this.standing = standing;
    }
    
    // Collision player dengan rintangan agar tidak tembus
    Rintangan previousCollision = null; // menampung rintangan sebelumnya untuk kepentingan skor dan standing player
    // method untuk memeriksa collision yang terjadi antara player dengan rintangan (dalam bentuk list karena rintangannya bisa banyak)
    public boolean update(ArrayList<Rintangan> listRintangan){
        boolean collided = false; // inisialisasi tanda collision dengan false
        // iterasi untuk setiap item dalam list
        for (Rintangan ob : listRintangan) {
            // jika batas bawah player collision dengan rintangan
            // maka standing akan bertambah dan skor akan bertambah sesuai dengan skor dari rintangan tersebut
            if (getBoundBottom().intersects(ob.getBoundingBox())) {
                y = ob.getBoundingBox().y - height; // Set player position above the obstacle
                collided = true;
                if (previousCollision != ob) {
                    score += ob.getScore();
                    standing += 1;
                    System.out.println("poin " + score);                    
                    System.out.println("standing " + standing);
                    previousCollision = ob; // Update the previously collided obstacle
                }
            }

            // jika batas kanan player collision dengan rintangan
            if (getBoundRight().intersects(ob.getBoundingBox())) {
                x = ob.getBoundingBox().x - width - 1;
                collided = true;
            }
            // jika batas kiri player collision dengan rintangan
            if (getBoundLeft().intersects(ob.getBoundingBox())) {
                x = ob.getBoundingBox().x + ob.getBoundingBox().width + 1;
                collided = true;
            }
            // jika batas atas player collision dengan rintangan
            if (getBoundTop().intersects(ob.getBoundingBox())) {
                y = ob.getBoundingBox().y + ob.getBoundingBox().height; // Set player position below the obstacle
                collided = true;
            }
        }
        setBoundingBox();
        return collided;
    }
    
    public Rectangle getBoundBottom(){
        // membuat batas bawah
        return new Rectangle((int) (x+(width/2)-(width/4)), (int) (y+(height/2)), width/2, height/2);
    }
    
    public Rectangle getBoundTop(){
        // membuat batas atas
        return new Rectangle((int) (x+(width/2)-(width/4)), (int) (y), width/2, height/2);
    }
    
    public Rectangle getBoundRight(){
        // membuat batas kanan
        return new Rectangle((int) x+width-5, (int)y + 5, 5, height-10);
    }
    
    public Rectangle getBoundLeft(){
        // membuat batas kiri
        return new Rectangle((int) x, (int)y + 5, 5, height-10);
    }
    
    /**
     * Override interface.
     */
    
    @Override
    // me-render objek dari player
    public void render(Graphics object)
    {
        // Set player shape as an alien
        object.setColor(Color.decode("#00FF00")); // Set color to green
        object.fillOval(x, y, width, height); // Render the alien's body

        // Render the alien's eyes
        object.setColor(Color.BLACK); // Set color to black for the eyes
        object.fillOval(x + width / 5, y + height / 4, width / 4, height / 2); // Left eye
        object.fillOval(x + width / 2, y + height / 4, width / 4, height / 2); // Right eye

        // Calculate antenna position and size
        int antennaWidth = width / 6;
        int antennaHeight = height / 4;
        int antennaGap = width / 8;

        // Render the alien's antennas
        object.setColor(Color.decode("#00FF00")); // Set color to green

        // Left antenna
        int leftAntennaX = x + width / 3;
        int leftAntennaY = y - antennaHeight;
        object.fillRect(leftAntennaX, leftAntennaY, antennaWidth, antennaHeight);

        // Right antenna
        int rightAntennaX = x + width / 2 + antennaGap;
        int rightAntennaY = y - antennaHeight;
        object.fillRect(rightAntennaX, rightAntennaY, antennaWidth, antennaHeight);
        
    }
    
    @Override
    // looping dari objek player, dimana player dapat bergerak ke kanan, kiri, atas, bawah.
    // player juga tidak bisa melebihi windows
    public void loop()
    {
        // Initialize velocity, so object can move.
        this.x += this.velX;
        this.y += this.velY;
        
        // Initialize player bound, so it won't get offset the display.
        x = Game.clamp(x, 0, (Game.width - 50));
        y = Game.clamp(y, 0, (Game.height - 70));
    }
}
