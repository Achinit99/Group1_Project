<?php
include_once('connection.php');

$query="SELECT item_code, item_name, category, unit_price, selling_price FROM item";
$query2="SELECT quantity FROM stock";

$result= mysqli_query($connection,$query);
$result2=mysqli_query($connection,$query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>DataTable</title>
</head>

<body onload="getData">
  <a class="navbar-brand" href="#" style="
        color: #fff;
        font-family: align-self start;
        font-size: 2rem;
        padding-top: 48px;
        padding-left: 90px;
      ">BrandName</a>
  <div class="container">
    <div class="row">
      <h2 class="text-center" style="font-size: 4rem; text-align: center; color: #fff">
        Available Items
      </h2>
      <div>
        <div>  

              <?php

              $table='<table id="dataTable" class="display col-lg-md-sm-6" style="width: 100%; font-size: 1.9rem">';
              $table .='<tr>
              <th>
                Item No
                <i class="glyphicon"></i>
              </th>
              <th>
                Name
                <i class="glyphicon"></i>
              </th>
              <th>
                Catagory
                <i class="glyphicon"></i>
              </th>
              <th>
                Unit Price
                <i class="glyphicon"></i>
              </th>
              <th>
                Sell Price
                <i class="glyphicon"></i>
              </th>
              <th>Quantity</th>
            </tr>';

                while($res=mysqli_fetch_assoc($result))
                {
                  $res2=mysqli_fetch_assoc($result2);
                  $table.='<tr>';
                  $table.='<td>'.$res['item_code'].'</td>';
                  $table.='<td>'.$res['item_name'].'</td>';
                  $table.='<td>'.$res['category'].'</td>';
                  $table.='<td>'.$res['unit_price'].'</td>';
                  $table.='<td>'.$res['selling_price'].'</td>';
                  $table.='<td>'.$res2['quantity'].'</td>';
                  $table.='</tr>';
                }
                

                ;
                

                
              ?>
             



            

      <!-- Item table End -->


      

          <div class="dataTables_info" id="realtime_info" role="status" aria-live="polite"></div>
          <div class="searchContainer" style="padding-top: 1rem; color: #fff">
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">1-Catagory</label>
            </div>
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">2-Catagory</label>
            </div>
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">3-Catagory</label>
            </div>
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">4-Catagory</label>
            </div>
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">5-Catagory</label>
            </div>
            <div class="form-check form-check-inline; col-md-2" style="text-align: left; padding-top: 2.5rem; font-size: 1.9rem">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1">6-Catagory</label>
            </div>

            <?php
            echo $table;
            ?>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link">1</a>
              </li>
              <li class="page-item">
                <a class="page-link">2</a>
              </li>
              <li class="page-item">
                <a class="page-link">3</a>
              </li>
              <li class="page-item">
                <a class="page-link">4</a>
              </li>
              <li class="page-item">
                <a class="page-link">5...</a>
              </li>
              <li class="page-item">
                <a class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>