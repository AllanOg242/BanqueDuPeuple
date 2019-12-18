  <?php
  require_once '../../model/modelClient.php';
  $clients = getAllClients();
  include '../../../header.php';
  ///var_dump($clients);
?>
<h1>LISTE DES CLIENTS<h1/>

<table class="table table-striped table-dark monTableau">
  <thead>
    <tr>
      <th scope="col">CIN</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($clients as $key => $client) {
        ?>
        <tr>
          <td><?= $client['cni'] ?></td>
          <td><?= $client['nom'] ?></td>
          <td><?= $client['prenom'] ?></td>
          <td><?= $client['adresse'] ?></td>
          <td><?= $client['tel'] ?></td>
          <td>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">AJOUTER NOUVEAU COMPTE</button>
              <button type="button" class="btn btn-secondary btn-sm">LISTE DES COMPTES</button>
              <button type="button" class="btn btn-primary btn-sm">SUPPRIMER</button>
          </td>
        </tr>
      <?php
      }
    ?>
    
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <p class="divider-text">
        <span class="bg-light">COMPTE</span>
     </p>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUMERO DU COMPTE</h5>
        <input name="numero" class="form-control" placeholder="NUMERO DE COMPTE" type="text" value="<?= genererNumero() ?>" readonly>
      </div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SOLDE</h5>
        <input name="solde" class="form-control" placeholder="SOLDE" type="number" min="500" required>
      </div>
      <div class="modal-footer">
        <button type="button" name="ajoutCompte" class="btn btn-primary">AJOUTER</button>
      </div>
    </div>
  </div>
</div>

<?php
  include '../../../footer.php';