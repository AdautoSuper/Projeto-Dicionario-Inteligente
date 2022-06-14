Leitor.java
@@ -0,0 +1,54 @@
import java.util.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;
import java.lang.*;
import java.awt.event.KeyEvent;  
import javax.swing.ImageIcon;  
import javax.swing.JFrame;  
import javax.swing.JLabel;  

public class Leitor
{  
  static String path="Ingles_Portugues.txt";

  static File arquivo = new File(path);
  static BufferedReader reader;

  //criando o dicionario HashMap(String,String)
  static HashMap <String,String> dic= new HashMap<String,String> ();


  static String ok="";

   public static void main(String[] args){

        try {
           reader= new BufferedReader(new FileReader(arquivo));
           String text;

           while((text=reader.readLine()) != null) {
           String aux[]=text.split(" * ");  

           //alimenta o HashMap com as palvras ingles e portugues
           for(int i = 0; i< aux.length; i++) 
           {
             if(i>=2){ok +=" "+aux[i];}
            }
           dic.put(aux[0],ok);
           ok="";
        }

        String x = JOptionPane.showInputDialog("Digite uma palavra");

        JOptionPane.showMessageDialog(null, dic.get(x));
         reader.close();
       }catch(IOException i) {
           System.out.println("Erro ao ler arquivo:"+path);
        }
       }

    } 

