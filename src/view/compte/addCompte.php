<?php
    require_once '../../model/modelCompte.php';
	include '../../../header.php';
?>
<h1>NOUVEAU COMPTE<h1/>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<p class="divider-text">
        <span class="bg-light">CLIENT</span>
    </p>
	<form action="/mesprojets/BanqueDuPeuple/compteController" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nom" class="form-control" placeholder="Nom" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="prenom" class="form-control" placeholder="Prenom" type="text" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		 </div>
        <input name="adresse" class="form-control" placeholder="Adresse" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select name="ind" class="custom-select" style="max-width: 120px;">
		    <option selected="">+221</option>
		    <option value="1">+223</option>
		    <option value="2">+228</option>
		    <option value="3">+229</option>
		</select>
    	<input name="tel" class="form-control" placeholder="Phone number" type="number" min="330000000" required>
    </div> <!-- form-group// -->
    <p class="divider-text">
        <span class="bg-light">COMPTE</span>
    </p>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="numero" class="form-control" placeholder="NUMERO DE COMPTE" type="text" value="<?= genererNumero() ?>" readonly>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-dollar"></i> </span>
		</div>
        <input name="solde" class="form-control" placeholder="SOLDE" type="number" min="500" required>
    </div>                             
    <div class="form-group">
        <button type="submit" name="ajoutCompte" class="btn btn-success btn-block"> Create Account  </button>
    </div>                                                                 
</form>
</article>
</div>


 
<?php
	include '../../../footer.php';