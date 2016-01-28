<!DOCTYPE html>

<html>

<head>
  <title>Corvallis Reuse and Repair Directory Administrator Portal</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">
  <!-- Dropdown.js -->
  <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Brand</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="javascript:void(0)">Reuse</a></li>
        <li><a href="javascript:void(0)">Repair</a></li>-->
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Reuse
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Add Business</a></li>
            <li><a href="javascript:void(0)">Add Item Category</a></li>
            <li><a href="javascript:void(0)">Add Item</a></li>
            <li class="dropdown-header"><hr></li>
            <li><a href="javascript:void(0)">Update Existing Business</a></li>
            <li><a href="javascript:void(0)">Update Existing Item Category</a></li>
            <li><a href="javascript:void(0)">Update Existing Item</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Repair
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Add Business</a></li>
            <li><a href="javascript:void(0)">Add Item</a></li>
            <li class="dropdown-header"><hr></li>
            <li><a href="javascript:void(0)">Update Existing Business</a></li>
            <li><a href="javascript:void(0)">Update Existing Item</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Help</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Logged In
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)"><i class="material-icons">account_circle</i> Profile</a></li>
            <li><a href="javascript:void(0)">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

<!--LOGIN FORM-->
<h1>Administrator Portal</h1>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Manage REUSE Content</h3>
        </div>
        <div class="panel-body">

          <h4>Reuse Businesses</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add business</h5>
                <p class="list-group-item-text">Create a new business and add it to the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit business</h5>
                <p class="list-group-item-text">Edit existing business information.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove business</h5>
                <p class="list-group-item-text">Delete a business from the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

          <h4>Reuse Item Categories</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item category</h5>
                <p class="list-group-item-text">Create a new item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item category</h5>
                <p class="list-group-item-text">Edit an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item category</h5>
                <p class="list-group-item-text">Delete an item category from the database.
                  <span class="text-warning">Warning: removing a category removes all items within a category, and removes
                  those items from businesses that currently accept those items.</span></p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

          <h4>Reuse Items</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item</h5>
                <p class="list-group-item-text">Create a new item and add it to an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item</h5>
                <p class="list-group-item-text">Edit the name of an existing item.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item</h5>
                <p class="list-group-item-text">Delete an item from the database.
                  <span class="text-warning">Warning: removing an item removes it from all business that accept that item.</span></p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Manage REPAIR Content</h3>
        </div>
        <div class="panel-body">

          <h4>Repair Businesses</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add business</h5>
                <p class="list-group-item-text">Create a new business and add it to the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit business</h5>
                <p class="list-group-item-text">Edit existing business information.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove business</h5>
                <p class="list-group-item-text">Delete a business from the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>


          <h4>Repair Items</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item</h5>
                <p class="list-group-item-text">Create a new item and add it to an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item</h5>
                <p class="list-group-item-text">Edit the name of an existing item.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item</h5>
                <p class="list-group-item-text">Delete an item from the database.
                  <span class="text-warning">Warning: removing an item removes it from all business that accept that item.</span></p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Manage RECYCLE Content</h3>
        </div>
        <div class="panel-body">

          <h4>Recycle Links</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add a new link</h5>
                <p class="list-group-item-text">Add a new hyperlink to the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit link</h5>
                <p class="list-group-item-text">Edit an existing hyperlink.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove link</h5>
                <p class="list-group-item-text">Delete a hyperlink from the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Material Design for Bootstrap -->
<script src="dist/js/material.js"></script>
<script src="dist/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>

<!-- Sliders -->
<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
  });
</script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

</body>
</html>
