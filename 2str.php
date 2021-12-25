<?php
    include "template/header.php";
?>
   

            <div class="grid" style="--bs-columns: 5;">
                <div class="grid">
                  <h1>Специальные предложения</h1>
                  <div class="row">
                    <div class="col">

                      <p><a href="https://coca-cola.delivery-club.ru/?utm_source=dc-cola-2021-12&utm_medium=dcbanner-cola-2021-12&utm_campaign=dcbanner-cola-2021-12&utm_content=dc-cola-2021-12&mt_click_id=mt-up9zf8-1638474139-1336024712"><img src="к/кола.jpg" width="250" 
                        height="170" alt="спец.пр."></a></p>
                     
                    </div>
                    <div class="col">
                    
                      <p><a href="https://www.delivery-club.ru/podborki/kfc_no_moscow?collectionId=674"><img src="к/кфс.jpg" width="250" 
                        height="170" alt="спец.пр."></a></p>

                    </div>
                    <div class="col">
                    
                      <p><a href="#"><img src="к/еда.jpg" width="250" 
                        height="170" alt="спец.пр."></a></p>
                    </div>
                    <div class="col">

                      <p><a href="#"><img src="к/пицца.jpg" width="250" 
                        height="170" alt="спец.пр."></a></p>
                    </div>
                    <div class="col">
                      <a href="#" class="btn">Ещё</a>

                    </div>
                    </div>
                  </div>
                </div>

               
                      <div class="grid" style="--bs-columns: 3;">
                        <div class="grid">
                        
                          <div class="row">
                            
                            <div class="sil">
        
                              <p> <a href="http://localhost/laba/index.php#" class="kat">Рестораны</a></p>
                             
                            </div>
                            <div class="sil">
                            
                              <p><a href="http://localhost/laba/2str.php#" class="kat">Магазины</a></p>
        
                            </div>
                            <div class="sil">
                            
                              <p><a href="#" class="kat">Акциии</a></p>
                            </div>
                            </div>
                    </div>
                  </div>
        


  
                   <div class="grid">
                      <div class="row">

                  <?php
                        $requestCount = "SELECT COUNT(*) FROM score";
                        $std = $pdo->prepare($requestCount);
                        $std->execute();
                        $count = $std->fetchColumn();
                        if ($count > 0) {
                          $request="SELECT * FROM score";
                          $sth = $pdo->prepare($request);
                          $sth->execute();
                          $items = $sth->fetchAll();

                          foreach ($items as &$item) {
                            echo  '<div class="col">
                                    <div class="card" style="width: 18rem;">
                                      <img src="'.$item[4].'" width="250"  height="180" class="card-img-top" alt="магазин">
                                        <div class="card-body">
                                         <p>м.'.$item[3].'</p>
                                          <a href="#" class="btn btn-primary">'.$item[1].'</a>
                                        </div>
                                     </div>
                                   </div>';
                                  }
                                } else {
                                  echo '<p>Магазины сейчас недоступны :C</p>';
                                }
                           
                       ?>
                        </div>
                      </div>
                    </div>


                    <?php
    include "template/footer.php";
?>

                   