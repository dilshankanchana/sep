package com.example.chamil.schedule_tracker;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;


public class Customer_list extends ActionBarActivity {

    private DbHelper dbHelper;
    private final Context myContext;
    private SQLiteDatabase db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_customer_list);

        //SQLiteDatabase db = openOrCreateDatabase("ScheduleDB",MODE_PRIVATE,null);
        //db.execSQL("CREATE TABLE IF NOT EXISTS customer(firstName VARCHAR, lastName VARCHAR,email VARCHAR,contactNo VARCHAR, address VARCHAR);");
       // db.execSQL("INSERT INTO customer VALUES('Mahinda','Rajapaksha','mahinda@gmail.com','0716123456','No,23,Madamulana,Hambanthotha');");
       // db.close();

        Customer_list entry = new Customer_list(Customer_list.this);
        entry.open();
        dbHelper.create(db);
        entry.close();

    }



    public Customer_list(Context c){
        myContext = c;
    }
    public Customer_list open(){
        dbHelper = new DbHelper(myContext);
        db = dbHelper.getWritableDatabase();
        return this;
    }
    public void close(){
        dbHelper.close();
    }



}
