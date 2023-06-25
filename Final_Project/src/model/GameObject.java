/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

import java.awt.Graphics;
import java.awt.Rectangle;

/**
 *
 * @author Byebay
 */
// class gameobjek yang merepresentasikan objek dari game, seperti player / rintangan
// class ini juga merupakan implements dari class gameinterface
public class GameObject implements GameInterface 
{
    // deklarasi atribut
    protected int x, y;          // Position.
    protected int width, height; // Dimension.
    protected float velX, velY;    // Velocity.
    protected Rectangle rectangle; // rectangle untuk collision
    
    /**
     * Constructor.
     */
    
    // Default constructor.
    public GameObject()
    {
        this.x = 0;
        this.y = 0;
        this.rectangle = new Rectangle();
    }
    
    // Constructor with object coordinate.
    public GameObject(int x, int y)
    {
        this.x = x;
        this.y = y;
        this.rectangle = new Rectangle();
    }
    
    // Constructor with object coordinate and shape.
    public GameObject(int x, int y, int width, int height)
    {
        this.x = x; this.y = y;
        this.width = width; this.height = height;
        this.rectangle = new Rectangle(x, y, width, height);
    }
    
    /**
     * Getter and Setter.
     */

    /* Object X position. */
    
    public int getX()
    {
        return x;
    }

    public void setX(int x)
    {
        this.x = x;
    }

    /* Object Y position. */
    
    public int getY()
    {
        return y;
    }
    
    public void setY(int y)
    {
        this.y = y;
    }
    
    /* Object width. */
    
    public int getWidth()
    {
        return width;
    }

    public void setWidth(int width)
    {
        this.width = width;
    }
    
    /* Object height. */
    
    public int getHeight()
    {
        return height;
    }

    public void setHeight(int height)
    {
        this.height = height;
    }
    
    /* Object X velocity. */
    
    public float getVelX()
    {
        return velX;
    }

    public void setVelX(float velX)
    {
        this.velX = velX;
    }

    /* Object Y velocity. */
    
    public float getVelY()
    {
        return velY;
    }

    public void setVelY(float velY)
    {
        this.velY = velY;
    }
    
    // membuat rectangle dari objek
    public Rectangle getBoundingBox() {
        return this.rectangle;
    }
    
    public void setBoundingBox(){
        this.rectangle.x = this.x;
        this.rectangle.y = this.y;
    }
    
    /**
     * Override interface (unused, only to avoid error).
     */
    
    @Override
    public void render(Graphics object)
    {
        
    }
    
    @Override
    public void loop()
    {
        
    }
}
