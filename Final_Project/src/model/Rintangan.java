/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;
import viewModel.Game;
import java.awt.Color;
import java.awt.Graphics;
/**
 *
 * @author Byebay
 */
// class rintangan yang merupakan child dari gameobjek, merepresentasikan objek rintangan dalam game
public class Rintangan extends GameObject{
    // private atribut
    private int score; //menampung skor untuk rintangan tersebut
    /**
     * Constructor.
     */
    
    // Default constructor.
    public Rintangan()
    {
        super(0, 0);
    }
    
    // Constructor with player position.
    public Rintangan(int x, int y, int width, int height)
    {
        super(x, y, width, height);
        // skor diatur berdasarkan width dari rintangan tersebut
        // semakin panjang widthnya maka semakin kecil skornya
        // semakin pendek widthnya maka semakin besar skornya
        if (width < 100) {
            this.score = 50;
        } else if (width >= 100 && width < 200) {
            this.score = 40;
        }else if (width >= 200 && width < 300) {
            this.score = 30;
        }else if (width >= 300 && width < 400) {
            this.score = 20;
        } else {
            this.score = 10;
        }
    }
    
    // SETTER GETTER
    public void setScore(int value){
        this.score = value;
    }
    
    public int getScore(){
        return this.score;
    }
    
    // method untuk mengupdate letak rintangan
    // karena rintangan bergerak dari bawah ke atas, maka y nya di minus terus
    public void updateRintanganPosition(){
        y -= 1;
    }
    // method untuk mengupdate posisi rintangan
    public void updatePosRintangan(){
        // update rintangan dari bawah ke atas
        updateRintanganPosition();
        // update collision
        setBoundingBox();
    }
    
    /**
     * Override interface.
     */
    
    @Override
    // method untuk me-render objek dari rintangan
    public void render(Graphics object)
    {
        // Set player shape.
        object.setColor(Color.decode("#FFFFDD"));
        object.fillRect(this.x, this.y, this.width, this.height);
        // Draw the score on the right side of the Rintangan
        object.setColor(Color.WHITE);
        object.drawString(String.valueOf(score), x + width + 5, y + (height / 2));
        
    }
    
    @Override
    // method untuk loop objek dari rintangan, karena rintangan secara otomatis bergerak dari bawah ke atas
    // maka method ini kosong
    public void loop()
    {
    }
}
