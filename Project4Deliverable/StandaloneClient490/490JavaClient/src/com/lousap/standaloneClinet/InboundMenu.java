package com.lousap.standaloneClinet;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;

public class InboundMenu extends JFrame implements ActionListener{
	
	JPanel panel;
	JLabel l0,l1, l2,l3,l4,l5;
	JTextField t1,t2,t3,t4,t5;
	

	
	ResultSet rs;
	
	String queryType;
	String table = "Flight";
	
	
	
	String sqlString;

	
	GridBagLayout g1;
	GridBagConstraints gbc;
	
	Connector connect = new Connector();
	
	JButton b1;
	
	public InboundMenu(String menuType)
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
		t5 = new JTextField(10);
		
		
		l1 = new JLabel("Tail Number");
		l2 = new JLabel("Arrival Time (hr:min:sec)");
		l3 = new JLabel("Aircrew Name");
		l4 = new JLabel("Aircraft Type");
		l5 = new JLabel("Previous Airport");
		
		b1= new JButton("Submit");
		b1.addActionListener(this);
		

		
		if(menuType ==  "I_Insert")
		{
			
			l1 = new JLabel("Tail Number");
			l2 = new JLabel("Arrival Time (hr:min:sec)");
			l3 = new JLabel("Aircrew Name");
			l4 = new JLabel("Aircraft Type");
			l5 = new JLabel("Previous Airport");
			
			
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
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=1;
		        gbc.gridy=18;
		        g1.setConstraints(l5, gbc);
		        panel.add(l5);
		        
		        gbc.anchor=GridBagConstraints.NORTHWEST;
		        gbc.gridx=4;
		        gbc.gridy=18;
		        g1.setConstraints(t5, gbc);
		        panel.add(t5);


			
		}
		
		if (menuType == "I_Delete")
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
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=18;
	        g1.setConstraints(l5, gbc);
	        panel.add(l5);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=18;
	        g1.setConstraints(t5, gbc);
	        panel.add(t5);
		}
		
		if(menuType ==  "I_Update")
		{
			
			l0 = new JLabel("Update fields for Tail Number and Craft Type");
			
			
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
	        gbc.gridy=14;
	        g1.setConstraints(l2, gbc);
	        panel.add(l2);
	        
	       gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=11;
	        g1.setConstraints(l3, gbc);
	        panel.add(l3);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=8;
	        g1.setConstraints(l4, gbc);
	        panel.add(l4);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=14;
	        g1.setConstraints(t2, gbc);
	        panel.add(t2);
	        
	       gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=11;
	        g1.setConstraints(t3, gbc);
	        panel.add(t3);
	        
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=8;
	        g1.setConstraints(t4, gbc);
	        panel.add(t4);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=1;
	        gbc.gridy=18;
	        g1.setConstraints(l5, gbc);
	        panel.add(l5);
	        
	        gbc.anchor=GridBagConstraints.NORTHWEST;
	        gbc.gridx=4;
	        gbc.gridy=18;
	        g1.setConstraints(t5, gbc);
	        panel.add(t5);
			
			
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
				String tailNum = (t1.getText());
				String arrivalTime = (t2.getText());
				String crewName = (t3.getText());
				String craftType = (t4.getText());
				String prevAirport = (t5.getText());
		
				
				if(queryType ==  "I_Delete")
				{
					sqlString = "DELETE FROM " + table + " WHERE tailNum = " + tailNum + " AND prevAirport = " +  "\'" + prevAirport + "\'" ;
				}
				
				if(queryType == "I_Insert")
				{
					sqlString = "INSERT INTO  " + table + " (tailNum, arrivalTime, arrivalName,  prevAirport, arrivalType) VALUES" +
							" ( " + tailNum + "," + "\'" + arrivalTime + "\'" +  ","
						+ "\'"  + crewName +  "\'" + "," +  "\'"  + prevAirport +  "\'" + "," + "\'" + craftType + "\'" +  ")";
				}
				if(queryType == "I_Update")
				{
					sqlString = "UPDATE "  + table + " SET arrivalTime = " + "\'" + arrivalTime + "\'" + ", arrivalName = " + "\'" +  crewName + "\'" +  ", prevAirport = "
							+ "\'" + prevAirport + "\'" +
							" WHERE tailNum = " + tailNum + " AND arrivalType = "
							+ "\'" + craftType + "\'" ;
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
