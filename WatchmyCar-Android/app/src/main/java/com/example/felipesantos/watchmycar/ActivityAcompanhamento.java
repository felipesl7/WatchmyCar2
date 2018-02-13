package com.example.felipesantos.watchmycar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.ButtonBarLayout;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class ActivityAcompanhamento extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_acompanhamento);

        String login;

        Button btnInicViagem = findViewById(R.id.btnInicViagem);
        Button btnCadVeiculo = findViewById(R.id.btnCadVeiculo);
        Button btnVisuViagens = findViewById(R.id.btnVisuViagens);

        // Recebendo as informações da intent anterior.
        Intent i = getIntent();
        Bundle receptorInfo = i.getExtras();



        login = receptorInfo.getString("login");

        Toast.makeText(getBaseContext(),"Bem vindo "+login,Toast.LENGTH_LONG).show();

        // Criando as funcionalidades dos botoes para ir as resepctivas activities.
        btnInicViagem.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(ActivityAcompanhamento.this, ActivityIniciarViagem.class);
                startActivity(i);
                overridePendingTransition(android.R.anim.fade_in,android.R.anim.fade_out);
            }
        });

        btnCadVeiculo.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(ActivityAcompanhamento.this, ActivityCadastrarVeiculo.class);
                startActivity(i);
                overridePendingTransition(android.R.anim.fade_in,android.R.anim.fade_out);
            }
        });

        btnVisuViagens.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(ActivityAcompanhamento.this, ActivityVisualizarViagens.class);
                startActivity(i);
                overridePendingTransition(android.R.anim.fade_in,android.R.anim.fade_out);
            }
        });
    }
}
