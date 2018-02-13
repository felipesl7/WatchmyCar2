package com.example.felipesantos.watchmycar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;

public class ActivityVisualizarViagens extends AppCompatActivity {

    private ArrayList<Motorista> adicionarMotoristas() {
        ArrayList<Motorista> motoristas= new  ArrayList<Motorista>();
        Motorista id1 = new Motorista("Genivaldo","Uno de Firma","10:20","11:40","Rua A","Rua B");
        motoristas.add(id1);
        Motorista id2 = new Motorista("Breno","BB Móvel","09:10","10:00","Rua S","Rua T");
        motoristas.add(id2);
        return motoristas;


    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_visualizar_viagens);

        //Linkando o ListView
        ListView lista =  findViewById(R.id.list_viagens);

        final  ArrayList<Motorista> motoristas = adicionarMotoristas();

        ArrayAdapter adapter = new MotoristaAdapter(this,motoristas);

        lista.setAdapter(adapter);

        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Intent i = new Intent(ActivityVisualizarViagens.this,ActivityViagem.class);

                i.putExtra("nome",motoristas.get(position).getNome());
                //i.putExtra("carro",motoristas.get(position).getModeloCarro());
                i.putExtra("origem",motoristas.get(position).getOrigem());
                i.putExtra("destino",motoristas.get(position).getDestino());
                //i.putExtra("saida",motoristas.get(position).getHoraSaida());
                //i.putExtra("chegada",motoristas.get(position).getHoraChegada());
                startActivity(i);
            }
        });



    }


}
