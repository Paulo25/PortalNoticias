<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use Illuminate\Support\Facades\Cache;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //criar um dado dentro do bd Redis
        //Cache::put('site', 'jorgesantana.net.br', 10);
        //chave, valor, tempo em segundos para expirar o dado em memória
        //recuperar um dado dentro do bd Redis
        //$site = Cache::get('site');
        //echo $site;

        // Verifica se há dados armazenados em cache para as dez primeiras notícias
        // Se houver dados em cache, recupera-os
        // Se não houver dados em cache, busca as dez primeiras notícias no banco de dados
        // Armazena as dez primeiras notícias em cache por 15 segundos
        // Retorna a visualização 'noticia', passando as notícias recuperadas ou buscadas
        /*if(Cache::has('dez_primeiras_noticias')){
            $noticias = Cache::get('dez_primeiras_noticias');
        }else{
            $noticias = Noticia::orderByDesc('created_at')->limit(10)->get();
            Cache::put('dez_primeiras_noticias', $noticias, 15); 
        }*/

        $noticias = [];

       // Usa o método remember do Cache para armazenar em cache ou recuperar os dados das dez primeiras notícias
        $noticias = Cache::remember('dez_primeiras_noticias', 15, function(){
            // Se os dados não estiverem em cache, esta função anônima será executada para buscar as notícias no banco de dados
            return Noticia::OrderByDesc('created_at')->limit(10)->get();
        });

        return view('noticia', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoticiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNoticiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoticiaRequest  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoticiaRequest $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
