 /*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */
package model;

import java.awt.Graphics;

/**
 *
 * @author Byebay
 */
public interface GameInterface //interface untuk game
{
    // memiliki 2 method, yaitu render dan loop
    public void render(Graphics object);  // Render object.
    public void loop();    // Loop / refresh object.
}
