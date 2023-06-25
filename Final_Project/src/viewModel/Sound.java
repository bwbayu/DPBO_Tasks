package viewModel;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
import java.io.File;
import java.io.IOException;
import javax.sound.sampled.AudioInputStream;
import javax.sound.sampled.AudioSystem;
import javax.sound.sampled.Clip;
import javax.sound.sampled.FloatControl;
import javax.sound.sampled.LineUnavailableException;
import javax.sound.sampled.UnsupportedAudioFileException;
/**
 *
 * @author Byebay
 */
// method untuk sound
public class Sound {
    public Clip playSound(Clip clip, String filename, float volume) {
        try {
            // Get audio input
            AudioInputStream audioIn = AudioSystem.getAudioInputStream(new File("src/assets/" + filename).getAbsoluteFile());
            // Get a sound clip resource
            clip = AudioSystem.getClip();
            // Open audio clip and load samples from the audio input stream
            clip.open(audioIn);

            // Adjust the gain control to lower the volume
            FloatControl gainControl = (FloatControl) clip.getControl(FloatControl.Type.MASTER_GAIN);
            gainControl.setValue(volume);

            clip.start(); // Start playing the audio
            clip.loop(Clip.LOOP_CONTINUOUSLY); // Loop the audio
        } catch (UnsupportedAudioFileException | IOException | LineUnavailableException e) {
            e.printStackTrace();
        }
        return clip;
    }

    // Method to stop the sound
    public void stopSound(Clip clip) {
        clip.stop();
    }
}
