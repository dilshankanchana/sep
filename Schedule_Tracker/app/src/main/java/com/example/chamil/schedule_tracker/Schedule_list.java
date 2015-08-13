package com.example.chamil.schedule_tracker;

import android.app.Activity;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.widget.Button;
import android.widget.TabHost;

/**
 * Created by Chamil on 7/29/2015.
 */

public class Schedule_list extends ActionBarActivity {

    TabHost tabHost;                        //reference to TabHost
    Button btnSche, btnCust, btnExit;       //reference to button

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.schedulelist);

        TabHost th  =(TabHost)findViewById(R.id.tabHost3);   // creating the tab host
        th.setup();     // setting up it
        TabHost.TabSpec specs = th.newTabSpec("tag1"); // creating tab spec
        specs.setContent(R.id.tab1);    // setting tab 1
        specs.setIndicator("Day Schedules");    //tab1 name
        th.addTab(specs);       //include tab1

        specs = th.newTabSpec("tag2"); // creating tab spec
        specs.setContent(R.id.tab2);    // setting tab 2
        specs.setIndicator("Future Schedules");    //tab1 name
        th.addTab(specs);       //include tab2
    }
}