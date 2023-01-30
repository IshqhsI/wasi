@extends('layouts.mainlogin')
@section('container')
    <main class="card">
        <section class="esquerda">
            <img src="assets/img/login/ic-logo.png" alt="Logo" class="imagem__logo" />
            <h3 class="titulo__login">Register</h3>
            <form action="" method="post">
                @csrf
                <section class="caixa__input mt-5">
                    <label>Username</label>
                    <input type="text" placeholder="Username" name="name" />
                </section>
                <section class="caixa__input">
                    <label>Email</label>
                    <input type="email" placeholder="Email" name="email" />
                </section>
                <section class="caixa__input">
                    <label>Password</label>
                    <input type="password" placeholder="Password" name="password" />
                </section>

                <section class="controle__acesso">
                    <button type="submit">Register</button>
                    <div class="d-inline mx-auto">

                        Sudah punya akun ?
                        <a href="/login" class="text-decoration-none">
                            Login
                        </a>
                    </div>
                </section>
            </form>
        </section>
        <section class="direita">
            <div class="background__imagem">
                <div class="detalhe__vidro">
                    <div class="detalhe__vidro--interno">
                        {{-- <span>Construa projetos e aprenda HTML, CSS e Javascript programando junto com o vídeo</span> --}}
                    </div>
                </div>
                <img src="assets/img/login/ic-background-direita.svg" alt="Imagem fundo">
            </div>
        </section>
    </main>
@endsection
