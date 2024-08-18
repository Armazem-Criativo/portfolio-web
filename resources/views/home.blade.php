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
        <h2 class="section-title">Tecnologias e Habilidades</h2>
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
    <div class="contact-section">
        <h1 class="contact-title">
            Quer entrar em <strong>contato</strong> ?
        </h1>
         <div class="contact-btns">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
                <p>gustavoraulinodasilva@gmail.com</p>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                </svg>
                <p>Gustavo Raulino da Silva</p>
            </a>
         </div>
    </div>
@endsection
