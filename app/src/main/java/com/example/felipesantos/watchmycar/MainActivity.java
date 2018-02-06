package com.example.felipesantos.watchmycar;

import android.app.Activity;
import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends Activity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        FloatingActionButton btnLogar = findViewById(R.id.btnLogar);

        btnLogar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                EditText login = findViewById(R.id.edtTxtLogin);
                EditText senha = findViewById(R.id.edtTxtPass);

                Bundle pacoteInfo = new Bundle();
                pacoteInfo.putString("login", login.getText().toString());
                pacoteInfo.putString("senha", senha.getText().toString());
                Intent i = new Intent(MainActivity.this, ActivityAcompanhamento.class);
                i.putExtras(pacoteInfo);
                startActivity(i);
            }
        });
    }
}
