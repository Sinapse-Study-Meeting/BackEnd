
@extends('layouts.base')
@include('vendor.bootstrap')
@section('title',"Sinapse Grupo de Estudos")
@section('metas')
<meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
<meta name="keywords" content="Sinapse, estudar, grupos, login">
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/grupos_perfil.min.css') }}">
@endsection
@section('content')
@include('layouts.navbar')

<div class="container d-flex flex-row mt-5" >
    <aside class="p-2 bd-highlight">
        <h3 class="welcome-sub-info d-flex justify-content-start h-titulo ">Grupos<i class="fas fa-cog search"></i></h3>
        <div class = "input-pesquisar-grupos">
            <div class="input-group ">
                <input class="form-control" type="text" placeholder="Pesquisar grupos" >
            </div>
        </div>

         <div class=" d-flex justify-content-center">
            <div>
                <button class="btn btn-primary" type="button">Criar novo grupo</button>
            </div>
        </div>

        <hr>

        <h1 class="welcome-sub-info d-flex justify-content-start h-titulo">Seus grupos</h1>
        <div class="group-wrapper">
            <div class="group-content">
                <img src="{!! asset('img/estudos.png')!!}" style="height: 50px; width: 50px">
                <h1 class="hazul ">Programação PP1</h1>
            </div>

            <div class="group-profile-buttons">    
                <button class="buttons" type="button">
                    <i class="fas fa-trash fa-lg"></i>
                </button>
                <button class="buttons" type="button">
                    <i class="fas fa-pencil-alt fa-lg"></i>
                </button>
                    
            </div>
        </div>

        <hr>

        <div class="group-wrapper">
            <div class="group-content">
                <img src="{!! asset('img/estudos.png')!!}" style="height: 50px; width: 50px">
                <h1 class="hazul ">Programação PP2</h1>
            </div>

            <div class="group-profile-buttons">    
                <button class="buttons" type="button">
                    <i class="fas fa-trash fa-lg"></i>
                </button>
                <button class="buttons" type="button">
                    <i class="fas fa-pencil-alt fa-lg"></i>
                </button>
                    
            </div>
        </div>
        
        <hr>

        <div class="group-wrapper">
            <div class="group-content">
                <img src="{!! asset('img/estudos.png')!!}" style="height: 50px; width: 50px">
                <h1 class="hazul ">Programação PP3</h1>
            </div>

            <div class="group-profile-buttons">    
                <button class="buttons" type="button">
                    <i class="fas fa-trash fa-lg"></i>
                </button>
                <button class="buttons" type="button">
                    <i class="fas fa-pencil-alt fa-lg"></i>
                </button>
                    
            </div>
        </div>
       
        <hr>

        <h3 class="hazul"> Seus grupos </h3>
        <div class="notgrupo">
            <div class="d-flex justify-content-center">
                <img src="{!! asset('img/coruja-triste.svg')!!}" style="height: 50px; width: 50px">
            </div>
            <h2 class="hclaro h2-size ml-2 ">Você não participa de nenhum grupo de estudos</h2>
            <div class="group-profile-buttons">
                <h3 class="hazul">Você pode tentar:</h3>
                <button type="submit" class="buttons"><i class="fas fa-plus"></i>Criar um grupo </button>
                <button type="submit" class="buttons"><i class="fas fa-search"></i>Encontrar um grupo </button>
            </div>
        </div>
    </aside>
    <main class="p-2 bd-highlight ml-5" >
        
        <h3 class = "welcome-sub-info d-flex justify-content-center h-titulo">Informação do grupo</h3>

        <div class="d-flex flex-row">
            <img src="{!! asset('img/estudos.png')!!}" style="height: 60px; width: 60px">
            <h4 class = " hazul align-self-center" > Programação PP2 </h4>
        </div>

        <div class="group-wrapper">
            <div class="group-content">
                    <span><i class="fas fa-lock"></i> Grupo privado - 43 pessoas<span> 
            
                    <img src="{!! asset('img/coruja-perfil.svg')!!}" class="margin-usuarios"  style="height: 30px; width: 30px">
                    <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 30px; width: 30px">
                    <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 30px; width: 30px">
                    <img src="{!! asset('img/coruja-perfil.svg')!!}" style="height: 30px; width: 30px">
            
            </div>
                
            <div class="group-profile-buttons">
                <button class="buttons" type="button">Convidar +</button>
            </div>
        </div>

                <hr>

        <div class="d-flex flex-row justify-content-between p-3 menu-grupos">
            <a href="">Sobre</a>
            <a href="">Postagens</a>
            <a href="">Arquivos</a>
            <a href="">Midia</a>
            <a href="">Eventos</a>
        </div>

        <div class="d-flex flex-row">
            <div class="pensando-grupo">
                <div class = "input-pesquisar-grupos">
                    <div class="input-group ">
                        <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 30px; width: 30px">
                        <input style="border-radius: 4px" class="form-control ml-3" type="text" placeholder="No que você está pensando, bb?" >
                    </div>
                    <div class="pt-2 ml-5">
                        <a href=""><i class="fas fa-images "></i><span>Foto/video</span></a>
                        <a href=""><i class="fas fa-user-check ml-3 "></i><span>Marcar Pessoas</span></a>
                    </div>
                </div>

                <div class="box-aside mt-3">
                    <div class="post"><img src="{!! asset('img/news-regular-24.png')!!}" alt="">Post</div>
                        <div class="box-post"><img src="{!! asset('img/image-regular-240.png')!!}">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>

                        <div class="box-post"><img src="{!! asset('img/image-regular-240.png')!!}">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="sobre-grupo">
                    <h3 class= " hazul">Sobre o grupo</h3>
                    <div class="texto-sobre-grupos">
                        <span><i class="fas fa-lock"></i> Privado</span> <br>
                        <p>Somente membros do grupo podem ver as postagens do grupo e visualizar os participantes</p>
                        <span><i class="fas fa-eye-slash"></i> Oculto </span> <br>
                        <p>Somente membros do grupo podem encontrar o grupo na barra de pesquisa</p>
                    </div>

                            <hr>

                    <div >
                        <h3 class="hazul">Membros - 43 pessoas</h3>
                        <div  class="d-flex justify-content-start icones-membros-grupos">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}" style="height: 60px; width: 60px">
                        </div>
                        <p class="descricao-membros">Thaís, Janaína e outras 2 pessoas são membros. (Aqui mostra somente os seus amigos que estão nesse grupo)</p>
                                            
                        <div  class="d-flex justify-content-start icones-membros-grupos">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}"  style="height: 60px; width: 60px">
                            <img src="{!! asset('img/coruja-perfil.svg')!!}" style="height: 60px; width: 60px">
                        </div>
                        <p class="descricao-membros">Thaís e Janaína são administradores. João e Safira são moderadores.</p>                   
                    </div>   
                    <div class="group-profile-buttons d-flex justify-content-center">
                        <button type="submit" class="buttons"><i class="fas fa-search"></i>Visualizar tudo </button>
                    </div>    
                </div>
            <div>  
        </div>
    </main>
</div>