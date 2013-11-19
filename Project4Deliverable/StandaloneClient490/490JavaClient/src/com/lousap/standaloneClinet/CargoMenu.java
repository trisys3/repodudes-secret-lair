package com.lousap.standaloneClinet;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;

public class CargoMenu extends JFrame implements ActionListener{
	
	JPanel panel;
	JLabel l0,l1, l2,l3,l4,l5;
	JTextField t1,t2,t3,t4,t5;
	

	
	ResultSet rs;
	
	String queryType;
	String table = "Cargo";
	
	
	String modifyer = "C";
	
	String sqlString;

	
	GridBagLayout g1;
	GridBagConstraints gbc;
	
	Connector connect = new Connector();
	
	JButton b1;
	
	public CargoMenu(String menuType)
	{
		
	
		gbc = new GridBagConstraints();
		g1 = new GridBagLayout();
		panel=(JPanel)getContentPane();
		panel.setLayout(g1);
		
		queryType = menuType;
		


		t1 = new JTextField(10);
		t2 = new JTextField(10);
		t3 = new JTextField(10);
		t4= new JTextField(10);
		
		
		l1 = new JLabel("skidID");
		l2 = new JLabel("tailNum");
		l3 = new JLabel("Mission(Yes or no)");
		l4 = new JLabel("cargoLocation");
		
		b1= new JButton("Submit");
		b1.addActionListener(this);
		

		
		if(menuType ==  "C_Insert")
		{
			
				l1 = new JLabel("skidID");
				l2 = new JLabel("tailNum");
				l3 = new JLabel("Mission(Yes or no)");
				l4 = new JLabel("cargoLocation");
				
				gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=1;
		        gbc.gridy=5;
		        g1.setConstraints(l1, gbc);
		        panel.add(l1);
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=4;
		        gbc.gridy=5;
		        g1.setConstraints(t1, gbc);
		        panel.add(t1);

			   gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=1;
		        gbc.gridy=8;
		        g1.setConstraints(l2, gbc);
		        panel.add(l2);
		        
		       gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=1;
		        gbc.gridy=11;
		        g1.setConstraints(l3, gbc);
		        panel.add(l3);
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=1;
		        gbc.gridy=14;
		        g1.setConstraints(l4, gbc);
		        panel.add(l4);
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=4;
		        gbc.gridy=8;
		        g1.setConstraints(t2, gbc);
		        panel.add(t2);
		        
		       gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=4;
		        gbc.gridy=11;
		        g1.setConstraints(t3, gbc);
		        panel.add(t3);
		        
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=4;
		        gbc.gridy=14;
		        g1.setConstraints(t4, gbc);
		        panel.add(t4);

			
		}
		
		if (menuType == "C_Delete")
		{
			gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=5;
	        g1.setConstraints(l1, gbc);
	        panel.add(l1);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=5;
	        g1.setConstraints(t1, gbc);
	        panel.add(t1);
		}
		
		if(menuType ==  "C_Update")
		{
			
			l0 = new JLabel("Update field for SKID");
			
			
			gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=5;
	        g1.setConstraints(l1, gbc);
	        panel.add(l1);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=5;
	        g1.setConstraints(t1, gbc);
	        panel.add(t1);
			
			gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=0;
	        g1.setConstraints(l0, gbc);
	        panel.add(l0);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=8;
	        g1.setConstraints(l2, gbc);
	        panel.add(l2);
	        
	       gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=11;
	        g1.setConstraints(l3, gbc);
	        panel.add(l3);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=14;
	        g1.setConstraints(l4, gbc);
	        panel.add(l4);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=8;
	        g1.setConstraints(t2, gbc);
	        panel.add(t2);
	        
	       gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=11;
	        g1.setConstraints(t3, gbc);
	        panel.add(t3);
	        
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=14;
	        g1.setConstraints(t4, gbc);
	        panel.add(t4);
			
			
		}
		
	
        

        gbc.anchor=GridBagConstraints.NORTHWEST;
        gbc.gridx=4;
        gbc.gridy=23;
        g1.setConstraints(b1, gbc);
        panel.add(b1);
	}
	
	
	
	public void actionPerformed(ActionEvent event)
	{
		String str = event.getActionCommand();
		
		if(str.equals("Submit"))
		{
			try
			{
				String skid = (t1.getText());
				String tailNum = (t2.getText());
				String mission = (t3.getText());
				String destination = (t4.getText());
				
				
				
				if(queryType ==  "C_Delete")
				{
					sqlString = "DELETE FROM" + table + "WHERE skidID = " + skid;
				}
				
				if(queryType == "C_Insert")
				{
					sqlString = "INSERT INTO  " + table + "(tailNum, skidID, missionValue,  cargoLocation) VALUES ( " + tailNum + "," + skid +  ","
						+ "\'"  + mission +  "\'" + "," + "\'" + destination + "\'" +  ")";
				}
				if(queryType == "C_Update")
				{
					sqlString = "UPDATE "  + table + " SET tailNum = " + tailNum + ", missionValue = " + "\'" +  mission + "\'" +  ", cargoLocation = "
							+ "\'" + destination + "\'" +
							" WHERE skidID = " + skid;
				}
				
				
				
				
			//	String sqlString = "INSERT INTO " + table +  " (tailNum) VALUES (" + what + ")"; 

				connect.MakeConnection(sqlString);
				
				
			}
			catch(Exception ex)
			{
				JOptionPane.showMessageDialog(this, ex);
			}
		}
	}
	
}
