package com.example.felipesantos.watchmycar;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by Felipe santos on 12/02/2018.
 */

class MotoristaAdapter extends ArrayAdapter<Motorista> {
    private final Context context;
    private final ArrayList<Motorista> infos;
    public MotoristaAdapter(Context context, ArrayList<Motorista> infos) {
        super(context, R.layout.camposlista, infos);
        this.context = context;
        this.infos = infos;
    }
    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        View rowView = inflater.inflate(R.layout.camposlista, parent, false);
        TextView nome = rowView.findViewById(R.id.textnome);
        TextView origem = rowView.findViewById(R.id.textorigem);
        TextView destino = rowView.findViewById(R.id.textdestino);


        nome.setText(infos.get(position).getNome());
        origem.setText(infos.get(position).getOrigem());
        destino.setText(infos.get(position).getDestino());
        return rowView;
    }
}
