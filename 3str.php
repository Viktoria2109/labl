<?php
    include "template/header.php";
   
?>

            <div class="container">
                <img src="м/кфс.jpg" alt="Snow" width="1600px"; height="400px"; >
                <div class="centered">KFC</div>
              </div>



              <div class="grid1" >
                <div class="grid">
                
                  <div class="row1">
                    
                    <div class="sil1">

                      <p> <a href="#" class="kat">Популярные</a></p>
                     
                    </div>
                    <div class="sil1">
                    
                      <p><a href="#" class="kat">Купоны</a></p>

                    </div>
                    <div class="sil1">
                      <p><a href="#" class="kat">Акциии</a></p>
                    </div>

                    <div class="sil1">
                        <p><a href="#" class="kat">Новинки</a></p>
                      </div>

                      

                    </div>
            </div>
          </div>

          <div >
                      <a href="http://localhost/laba/sort.php#" class="btn">Дешевле</a>

                    </div>

              <div class="grid"  >
                <div class="grid">
                  <div class="row">
                    <?php 
                    
                      $request="SELECT * FROM kfc_products ";
                      $sth = $pdo->prepare($request);
                      $sth->execute();
                      $items = $sth->fetchAll(PDO::FETCH_ASSOC);

                      foreach ($items as &$item) {
                        echo '<div class="col1">
                                <div class="card" style="width: 18rem;">
                                  <img src="'.$item["img"].'" width="200"  height="180" class="card-img-top" alt="маг">
                                  <div class="card-body">
                            
                                    <p class="card-text">'.$item["price"].' ₽</p>
                                    <a href="#" class="btn btn-primary">'.$item["name"].'</a>
                                    <p>
                                      <a href="addProduct.php?product_id='.$item["id"].'" class="btn btn-primary">В корзину</a>
                                    </p>
                                  </div>
                                </div>
                              </div>';
                            }


                    ?>
                  </div>
                </div>
              </div>

                    <?php
    include "template/footer.php";
?>

                   

