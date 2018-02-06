package com.example.felipesantos.watchmycar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.ButtonBarLayout;
import android.view.View;
import android.widget.Button;

public class ActivityAcompanhamento extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_acompanhamento);

        Button btnInicViagem = findViewById(R.id.btnInicViagem);
        Button btnCadVeiculo = findViewById(R.id.btnCadVeiculo);
        Button btnVisuViagens = findViewById(R.id.btnVisuViagens);

        Intent i = getIntent();
        Bundle receptorInfo = i.getExtras();

        btnInicViagem.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

            }
        });
    }
}
