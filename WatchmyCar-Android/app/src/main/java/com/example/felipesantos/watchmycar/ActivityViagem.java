package com.example.felipesantos.watchmycar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class ActivityViagem extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_viagem);

        Intent i = getIntent();

        if(i != null){
            String nome = i.getStringExtra("nome");
            String mcarro = i.getStringExtra("carro");
            String origem = i.getStringExtra("origem");
            String destino = i.getStringExtra("destino");
            String saida = i.getStringExtra("saida");
            String chegada = i.getStringExtra("chegada");

            TextView textonome = (TextView) findViewById(R.id.textmotorista);
            TextView textocarro = (TextView) findViewById(R.id.textVeiculo);
            TextView textoorigem = (TextView) findViewById(R.id.textorigemv);
            TextView textodestino = (TextView) findViewById(R.id.textdestinov);
            TextView textosaida = (TextView) findViewById(R.id.textSaida);
            TextView textochegada = (TextView) findViewById(R.id.textChegada);

            textonome.setText(nome);
            textocarro.setText(mcarro);
            textoorigem.setText(origem);
            textodestino.setText(destino);
            textosaida.setText(saida);
            textochegada.setText(chegada);


        }
    }
}
