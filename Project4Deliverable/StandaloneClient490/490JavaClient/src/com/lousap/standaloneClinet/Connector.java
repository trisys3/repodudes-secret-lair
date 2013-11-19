package com.lousap.standaloneClinet;

import java.sql.SQLException;
import java.lang.ClassNotFoundException;
import java.sql.Connection;
import java.sql.Statement;
import java.sql.DriverManager;



public class Connector {
	
	String user = "rdc9_proj";
	String password = "XmyrQRw9T";
	
	Connection connection = null;
	Statement statement = null;
	
	
	
	public  void SendQuery(String sqlString)
	{
		try{
			 System.out.println(sqlString);
			 statement = connection.createStatement();
			 statement.execute(sqlString);
			 System.out.println("Query Succesful");
			 System.out.println(sqlString);
		}
		catch(SQLException error){
			System.out.println("Error: " + error.getMessage());
		}
	}
	
	public void MakeConnection(String sql)
	{
		try
		{
			//System.out.println("Connection to Driver...");
			Class.forName("com.mysql.jdbc.Driver");
			//System.out.println("Connection Successful");
			System.out.println("Connecting to database...");
			connection = DriverManager.getConnection("jdbc:mysql://sql2.njit.edu:3306/rdc9_proj", user , password);
			System.out.println("Connection Successful");
			
			SendQuery(sql);
			
			//statement = connection.createStatement();
			//statement.execute(sqlStatement);
			
			
		}
		catch(ClassNotFoundException error)
		{
			System.out.println("Error: " + error.getMessage());
		}
		catch(SQLException error)
		{
			System.out.println("Error: " + error.getMessage());
		}
		finally
		{
			if(connection != null)
				try{
					connection.close();
				}
				catch(SQLException ignore){}
		}
	
	}

}
