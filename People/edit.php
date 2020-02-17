<?php

if(isset($_POST) && !empty($_POST)){
    header('Content-Type','application/json');
    header("HTTP/1.1 200 OK");
    $people->update($_GET['id'], $_POST);
}
?>
<div class="container">
    <h1>Editar datos personales</h1>
    <form method="POST" id="people">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firtName">Nombre</label>
                <input type="text" class="form-control" id="firstName" name="firstName"  placeholder="Nombre" value="<?=$person->firstName?>" required max="50" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lastName">Apellidos</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos" value="<?=$person->lastName?>" required max="50" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Correo</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo" value="<?=$person->email?>" required max="50" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="profession">Profesion</label>
                <input type="text" class="form-control" id="profession" name="profession" placeholder="Profesion" value="<?=$person->profession?>" required max="50" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="profile">Perfil</label>
                <input type="text" class="form-control" id="profile" name="profile" placeholder="Perfil" value="<?=$person->profile?>" required max="50" >
            </div>
        </div>
        <div class="clearfix">
            <button type="button" class="btn btn-warning" onclick="updatePerson();">Actualizar datos</button>
        </div>
    </form>
</div>