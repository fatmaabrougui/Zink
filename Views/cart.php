<?php if(isset($_GET['action'])&&($_GET['action']=="empty")){
session_unset();
header("location:index.php?page=cart");
} 
if(isset($_POST['name'],$_POST['adress'],$_POST['phone'])) {
  $ordered_food=$_SESSION['foods'];
  $sum=$_SESSION['sum'];
  $order=new stdClass();
  $order->name=$_POST['name'];
  $order->adress=$_POST['adress'];
  $order->price=$sum;
  $order->phone=$_POST['phone'];
  $order->foods=$ordered_food;

 $user->addOrder($order);

}
?>
<div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Panier </h2>
            <div class="row">
            <?php if(!empty($_SESSION['foods'])){ ?>
              <center><button data-toggle="modal" data-target="#confirmModal" class="btn-lg btn-success" >Commandez maintenant! </button></center><br/> <?php } ?>
              <table class="table table-bordered">
              <thead>
              <th>Nourriture</th>
              <th>Produits</th>
              <th>Quantité</th>
              <th>Prix&nbsp;&nbsp;&nbsp; <?= $_SESSION['sum'] ?> TND</th>

              </thead>
              <tbody>
              <?php foreach($_SESSION['foods'] as $f){ ?>
                <tr>
                <td><?=$f->name ?></td>
                 <td><center><img  height="50" width="50" src="foods/<?php echo $f->image; ?>"></center></td>
                  <td><?=$f->quantity ?></td>
                   <td><?=$f->price ?> TND</td>
                   </tr>
                   <?php } ?>

              </tbody>
                
              </table>  
                 <center><a href="index.php?page=cart&action=empty"><button  class="btn-lg btn-danger" >Vider le panier </button></a></center>
            </div>
     
            
            <!-- /.services --> 
        </div>
        <!-- /.container -->

    </div>
 <div class="modal fade " id="confirmModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
       <form method="post">
      <div class="modal-header active">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmer la commande</h4>
      </div>
      <div class="modal-body">
     
      <div class="form-group" action = " send_sms.php">
          <label>Nom:</label>
          <input type="text" name="name" placeholder="Nom" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Adresse:</label>
          <input type="text" name="adress"placeholder="Adresse" class="form-control" required >
      </div>
      <div class="form-group">
          <label> Téléphone (format: 8chiffres):</label>
          <input name="phone" type="tel" placeholder="num-telephone" pattern="^\d{4}\d{3}\d{3}$" class="form-control" required>
      </div>
       <div class="form-group">
      <textarea style="width:100%; " rows="7" onclick="this.focus();this.select()" readonly="readonly">I. TERMES ET DEFINITIONS:

Le ou les services sont les services de présentation, de livraison et de promotion des produits fournis par le titulaire.
</textarea>
     
      </ul>
      </div>
      <div class="form-group">  
      <input type="checkbox" class="" required="required" > Accepter les termes
      </div>
     
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
        <input type="submit" class="btn btn-success" value="Confirmer" name="ok">
      </div>

      </form>
    </div><!-- /.modal-content -->
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

