<?php $render('header'); ?>
    <div class="container">
        <div>
        <h1>Adicionar {{name == '' ? 'Usuário' : name }}</h1>
        </div>
        <hr>
        <div class="row">
            <form class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nome</label>
                    <input type="text" v-model="name" class="form-control" id="exampleInputPassword1" placeholder="Seu nome">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" v-model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </form>
            <div class="col-lg-6 col-sm-12 mt-3">
                <ul class="list-group">
                    <li class="list-group-item active">Dados do Usuário</li>
                    <li class="list-group-item">Nome: <strong>{{name}}</strong></li>
                    <li class="list-group-item">Email: <strong>{{email}}</strong></li>
                </ul>

            </div>
        </div>
    </div>
<?php $render('footer'); ?>
