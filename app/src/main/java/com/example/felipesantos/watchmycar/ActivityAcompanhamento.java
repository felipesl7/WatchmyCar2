package com.example.felipesantos.watchmycar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class ActivityAcompanhamento extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_acompanhamento);

        Intent i = getIntent();
        Bundle receptorInfo = i.getExtras();
    }
}
