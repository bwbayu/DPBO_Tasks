/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package viewModel;

import java.awt.Graphics;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.Random;
import model.GameInterface;
import model.GameObject;
import model.Player;
import model.Rintangan;

/**
 *
 * @author Byebay
 */
// class handler bertanggung jawab untuk mengelola objek dalam game seperti Player dan rintangan
public class Handler implements GameInterface
{
    /**
     * Attribute declaration.
     */
    
    private ArrayList<Rintangan> rintangan; // deklarasi list of objek rintangan
    private Player player;                  // deklarasi objek playar
    private Random rand;                  // Randomizer.
    private int jumlahRintangan = 0;
    // 
    
    /**
     * Constructor.
     */
    
    // Default constructor.
    public Handler()
    {
        this.player = new Player();
        this.rintangan = new ArrayList<>();
        this.rand = new Random();
    }
    
    /**
     * Object access and manipulations.
     */
    public void setPlayer(Player player){
        this.player = player;
    }
    
    public Player getPlayer(){
        return this.player;
    }
    
    // method untuk memunculkan rintangan baru dan menambahkannya ke list
    public void setRintangan(){
        int x = 0; // Align with the left edge of the game window
        int y = Game.height;
        Rintangan newRintangan = new Rintangan(x, y, rand.nextInt(Game.width - 150) + 50, 50);
        rintangan.add(newRintangan);
    }
    
    // method untuk menghapus rintangan yang sudah melewati batas atas windows
    public void updateRintangan(){
        Iterator<Rintangan> itr = rintangan.iterator();
        while(itr.hasNext()){
            Rintangan rintangan = itr.next();
            if(rintangan.getY() > Game.height){
                itr.remove();
                jumlahRintangan--;
            }else{
                rintangan.updatePosRintangan();
            }
        }
    }
    
    // method yang mengembalikan data rintangan
    public ArrayList<Rintangan> getRintangan(){
        return this.rintangan;
    }
    // method yang mengembalikan size dari list rintangan
    public int getSizeRintangan(){
        return this.rintangan.size();
    }
    // method yang mengambil rintangan berdasarkan indexnya 
    public Rintangan getRintanganByIndex(int i)
    {
        return this.rintangan.get(i);
    }
    
    /**
     * 
     * Override interface.
     */
    
    @Override
    public void render(Graphics g)
    {
        // render player
        player.render(g);
        // render rintangan
        for(int i = 0; i < rintangan.size(); i++)
        {
            rintangan.get(i).render(g);
        }
    }
    
    @Override
    public void loop()
    {
        // loop player
        player.loop();
        // loop rintangan
        for(int i = 0; i < rintangan.size(); i++)
        {
            rintangan.get(i).loop();
        }
    }
}
