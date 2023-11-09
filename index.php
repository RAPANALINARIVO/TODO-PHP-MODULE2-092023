<?php
 include('config/app.php');
include('html/header.php');
require 'fct/items.php';
include('fct/getItem.php');
include('connexion.php');

?>

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
              <!-- formulaire d'ajout -->
                  <form action="addItem.php" method="POST">
                        <div class="input-group input-group-sm">
                          <input type="text" name="element" class="form-control">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-info btn-flat">+</button>
                            </span>
                        </div>
                  </form>
              <!-- list items -->
                <ul class="todo-list " data-widget="todo-list">
                  <?php
                    //selection des donnees
                    $req='SELECT * FROM todo';
                    $stmt=$pdo->query($req);
                    while ($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo displayItems($item);
                    }
                  ?>
                </ul>
              </div>
              <!-- /.card-body -->

            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php
include('html/footer.php');
?>
 