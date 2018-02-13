package com.example.felipesantos.watchmycar;

/**
 * Created by Felipe santos on 12/02/2018.
 */

class Motorista {

    private String nome;
    private String modeloCarro;
    private String horaSaida;
    private String horaChegada;
    private String origem;
    private String destino;

    Motorista(String nome, String modeloCarro, String horaSaida, String horaChegada, String origem, String destino){
        this.nome = nome;
        this.modeloCarro = modeloCarro;
        this.horaSaida = horaSaida;
        this.horaChegada = horaChegada;
        this.origem = origem;
        this.destino = destino;

    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getModeloCarro() {
        return modeloCarro;
    }

    public void setModeloCarro(String modeloCarro) {
        this.modeloCarro = modeloCarro;
    }

    public String getHoraSaida() {
        return horaSaida;
    }

    public void setHoraSaida(String horaSaida) {
        this.horaSaida = horaSaida;
    }

    public String getHoraChegada() {
        return horaChegada;
    }

    public void setHoraChegada(String horaChegada) {
        this.horaChegada = horaChegada;
    }

    public String getOrigem() {
        return origem;
    }

    public void setOrigem(String origem) {
        this.origem = origem;
    }

    public String getDestino() {
        return destino;
    }

    public void setDestino(String destino) {
        this.destino = destino;
    }
}
