package com.example.chamil.schedule_tracker;

import android.content.Intent;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;


public class MainActivity extends ActionBarActivity {

    Button btnSchedule, btnCustomer,btnExit;     // reference to buttons

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnSchedule =(Button)findViewById(R.id.btnSche);         //create the reference to the buttons in XML file
        btnCustomer =(Button)findViewById(R.id.btnCust);
        btnExit=(Button)findViewById(R.id.btnExit);

        btnSchedule.setOnClickListener(new View.OnClickListener() {     //activity of schedule button
            @Override
            public void onClick(View v) {           // on click activity
                Intent schedule = new Intent(MainActivity.this, Schedule_list.class);      //create schedule object to invoke Schedule_list class
                startActivity(schedule);                // start activity
            }
        });

        btnCustomer.setOnClickListener(new View.OnClickListener() {     //activity of customer button
            @Override
            public void onClick(View v) {           // on click activity
                Intent customer_list = new Intent(MainActivity.this, Customer_list.class); //create schedule object to invoke Customer_list class
                startActivity(customer_list);           //start activity
            }
        });

        btnExit.setOnClickListener(new View.OnClickListener() {     //activity of Exit button
            @Override
            public void onClick(View v) {           // on click activity
                finish();       // finish the application
            }
        });










    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
