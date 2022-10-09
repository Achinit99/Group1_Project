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
          <div>
            <label style="font-size: 1.6rem; color: #fff">Show
              <select style="background-color: #1a132f" id="ddlViewBy" onchange="changeLength" aria-controls="realtime" class="Show" style="font-size: 1.5rem">
                <option style="background-color: #1a132f" value="10">
                  10
                </option>
                <option style="background-color: #1a132f" value="25">
                  25
                </option>
                <option style="background-color: #1a132f" value="50">
                  50
                </option>
              </select>
              entries</label>
          </div>
          <div class="searchContainer">
            <label style="font-size: 1.7rem; color: #fff">Search:<input style="color: rgb(0, 0, 0); background: #dddddd" id="search" onkeyup="search(this.value)" type="search" class="" placeholder="" aria-controls="realtime" /></label>
          </div>
          <table id="dataTable" class="display col-lg-md-sm-6" style="width: 100%; font-size: 1.9rem">
            <thead>
              <tr>
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
              </tr>
            </thead>
            <tbody></tbody>
          </table>
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