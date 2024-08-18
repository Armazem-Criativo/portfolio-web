@extends('master.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
@endsection

@section('content')
    <div class="banner">
        <div class="content">
            <h1 class="present-myself">
                Olá, Eu sou <strong>Gustavo Raulino da Silva</strong>
            </h1>
            <h3 class="developer-class">
                Desenvolvedor Web FullStack
            </h3>
            <div class="about-me">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio enim assumenda, dicta odio rerum beatae.
                    Libero ad quas, harum illum excepturi iure deserunt, cumque doloremque natus quaerat, facere pariatur
                    voluptates!</p>
            </div>
            <div class="actions">
                <a href="" class="btn-action">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path
                            d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z" />
                    </svg>
                    <p>Curriculo</p>
                </a>
                <a href="" class="btn-action">
                    <p>Tecnologias</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="technologies-section">
        <h2 class="section-title">Tecnologias Utilizadas</h2>
        <div class="technologies">
            @for ($i = 0; $i < 6; $i++)
                <div class="tech">
                    <div class="image">
                        <img src="{{ asset('images/logopphp.png') }}" alt="PHP Logo">
                    </div>
                    <div class="lang">
                        PHP
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="projects-section">
        <h2 class="title">Projetos</h2>
        <div class="projects">
            @for ($i = 0; $i < 6; $i++)
                <div class="project">
                    <div class="image">
                        <img src="{{ asset('images/portfolioprojetos.png') }}" alt="Projeto">
                    </div>
                    <div class="project-name">
                        Portfolio Web
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/usuario/projeto" class="btn btn-github" target="_blank">GitHub</a>
                        <a href="https://site.com/projeto" class="btn btn-site" target="_blank">Website</a>
                    </div>
                    <div class="tech-logos">
                        @for ($j = 0; $j < 6; $j++)
                            <img src="{{ asset('images/logopphp.png') }}" alt="PHP" class="tech-logo">
                        @endfor
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
