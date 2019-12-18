<?php
  require_once '../../model/modelCompte.php';
  $comptes = getAllCompteAvecClients();
  include '../../../header.php';
  //var_dump($comptes);
?>
<h1>BANQUE DU PEUPLES<h1/>

<a href="/mesprojets/BanqueDuPeuple/newCompte"><button type="button" class="btn btn-primary btn-sm">NOUVEAU COMPTE</button></a>

<table class="table table-striped table-dark monTableau">
  <thead>
    <tr>
      <th scope="col">NUMERO</th>
      <th scope="col">DATE CREATION</th>
      <th scope="col">SOLDE</th>
      <th scope="col">NOM CLIENT</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach ($comptes as $key => $compte) {
      ?>
    <tr>
      <td><?= $compte['numero'] ?></td>
      <td><?= $compte['dateCreation'] ?></td>
      <td><?= $compte['solde'] ?></td>
      <td><?= $compte['nom'] ?></td>
      <td><button type="button" class="btn btn-primary btn-sm">ACTIVER</button>
          <button type="button" class="btn btn-secondary btn-sm">BLOQUER</button>
      </td>
    </tr>
      <?php
      # code...
    }
   ?>
  </tbody>
</table>

<?php
  include '../../../footer.php';
