package com.lousap.standaloneClinet;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class GUIMenu extends JFrame implements ActionListener{

	JMenuBar mbar;
	JMenu cargo, inbound, outbound;
	JMenuItem cargo_delete, cargo_insert, cargo_update, inbound_delete,
	inbound_insert, inbound_update, outbound_delete, outbound_update, outbound_insert;
	
	
	public GUIMenu(int height, int width)
	{
		mbar = new JMenuBar();
		setJMenuBar(mbar);
		cargo = new JMenu("Cargo");
		inbound = new JMenu("Inbound Flights");
		outbound = new JMenu("Outbound Flights");
		
		cargo_delete = new JMenuItem("C_Delete");
		cargo_insert = new JMenuItem("C_Insert");
		cargo_update = new JMenuItem("C_Update");
		
		inbound_delete = new JMenuItem("I_Delete");
		inbound_insert = new JMenuItem("I_Insert");
		inbound_update = new JMenuItem("I_Update");
		
		outbound_delete = new JMenuItem("O_Delete");
		outbound_insert = new JMenuItem("O_Insert");
		outbound_update = new JMenuItem("O_Update");
		
		mbar.add(cargo);
		mbar.add(inbound);
		mbar.add(outbound);
		
		cargo.add(cargo_delete);
		cargo.add(cargo_update);
		cargo.add(cargo_insert);
		
		inbound.add(inbound_delete);
		inbound.add(inbound_update);
		inbound.add(inbound_insert);
		
		outbound.add(outbound_delete);
		outbound.add(outbound_update);
		outbound.add(outbound_insert);
		
		
		cargo_delete.addActionListener(this);
		cargo_insert.addActionListener(this);
		cargo_update.addActionListener(this);
		
		inbound_delete.addActionListener(this);
		inbound_insert.addActionListener(this);
		inbound_update.addActionListener(this);
		
		outbound_delete.addActionListener(this);
		outbound_insert.addActionListener(this);
		outbound_update.addActionListener(this);
		
		
		this.setSize(height, width);
		this.setVisible(true);
	}
	public void actionPerformed(ActionEvent event)
	{
		String str= event.getActionCommand();
		if(str.equals("C_Insert") || str.equals("C_Delete") || str.equals("C_Update"))
		{
			CargoMenu carMen = new CargoMenu(str);
			System.out.println(str);
			carMen.setSize(400, 400);
			carMen.setVisible(true);
		}
		if(str.equals("O_Insert") || str.equals("O_Delete") || str.equals("O_Update"))
		{
			OutboundMenu outMen = new OutboundMenu(str);
			System.out.println(str);
			outMen.setSize(400, 400);
			outMen.setVisible(true);
		}
		if(str.equals("I_Insert") || str.equals("I_Delete") || str.equals("I_Update"))
		{
			InboundMenu inMen = new InboundMenu(str);
			System.out.println(str);
			inMen.setSize(400, 400);
			inMen.setVisible(true);
		}
	}
	
	
}
