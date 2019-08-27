<!doctype html>
<html>
<head>
    <link href="<?=base_url()?>assets/source2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/source2/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?=base_url()?>assets/source2/styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/source2/styles/extras.1.1.0.min.css">
    <script async defer src="<?=base_url()?>assets/source2/js/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="color-switcher animated">
      <h5>Accent Color</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary"><i class="material-icons">check</i></li>
        <li class="accent-secondary" data-color="secondary"><i class="material-icons">check</i></li>
        <li class="accent-success" data-color="success"><i class="material-icons">check</i></li>
        <li class="accent-info" data-color="info"><i class="material-icons">check</i></li>
        <li class="accent-warning" data-color="warning"><i class="material-icons">check</i></li>
        <li class="accent-danger" data-color="danger"><i class="material-icons">check</i></li>
      </ul>
      <div class="actions mb-4">
        <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="https://designrevision.com/downloads/shards-dashboard-lite/"><i class="material-icons">cloud</i> Download</a>
        <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" href="https://designrevision.com/docs/shards-dashboard-lite"><i class="material-icons">book</i> Documentation</a>
      </div>
      <div class="social-wrapper">
        <div class="social-actions">
          <h5 class="my-2">Help us Grow</h5>
          <div class="inner-wrapper">
            <a class="github-button" href="https://github.com/DesignRevision/shards-dashboard" data-icon="octicon-star" data-show-count="true" aria-label="Star DesignRevision/shards-dashboard on GitHub">Star</a>
            <!-- <iframe style="width: 91px; height: 21px;"src="https://yvoschaap.com/producthunt/counter.html#href=https%3A%2F%2Fwww.producthunt.com%2Fr%2Fp%2F112998&layout=wide" width="56" height="65" scrolling="no" frameborder="0" allowtransparency="true"></iframe> -->
          </div>
        </div>
        <div id="social-share" data-url="https://designrevision.com/downloads/shards-dashboard-lite/" data-text="🔥 Check out Shards Dashboard Lite, a free and beautiful Bootstrap 4 admin dashboard template!" data-title="share"></div>
        <div class="loading-overlay">
          <div class="spinner"></div>
        </div>
      </div>
      <div class="close"><i class="material-icons">close</i></div>
    </div>
    <!-- <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div> -->
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?=base_url()?>assets/source2/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Phone book Admin</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
            </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="../Admin/Home">
                  <i class="material-icons">person</i>
                  <span>Create Phone book</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../Admin/View">
                  <i class="material-icons">edit</i>
                  <span>Edit/Delete Phone book</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link " href="add-new-post.html">
                  <i class="material-icons">note_add</i>
                  <span>Add New Post</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form-components.html">
                  <i class="material-icons">view_module</i>
                  <span>Forms &amp; Components</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="tables.html">
                  <i class="material-icons">table_chart</i>
                  <span>Tables</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="errors.html">
                  <i class="material-icons">error</i>
                  <span>Errors</span>
                </a>
              </li> -->
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
                </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <!-- <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="dropdown-item text-danger" href="../Admin/Logout">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="<?=base_url()?>assets/source2/images/avatars/1.jpg" alt="User Avatar"> <span class="d-none d-md-inline-block">Sierra Brooks</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.html"><i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="components-blog-posts.html"><i class="material-icons">vertical_split</i> Blog Posts</a>
                    <a class="dropdown-item" href="add-new-post.html"><i class="material-icons">note_add</i> Add New Post</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li> -->
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div> <!-- / .main-navbar -->
          <!--  Here-->
          
<div class="col-lg-12">
<table class="table" style="background-color: white !important;">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="tableRecords">
    </tbody>
  </table>    
</div>
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Record</h4>
        </div>
        <div class="modal-body">
          <form action="javascript:void(0)" method="post"class="form-horizontal" id="phoneBook">
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="Product-name" class=" form-control-label">Name *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="userName" name="name" placeholder="Name" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="size" class="form-control-label">Phone Number *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="number" name="number" placeholder="Number" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="address" class="form-control-label">Address *</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="address" id="address" rows="6" placeholder="Address..." class="form-control" required></textarea>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.getJSON("<?=base_url()?>getRecords",function(data){
        $("#tableRecords").empty();
        $.each(data, function(i, item) {
            var name=item['Name'];
            var number=item['Phone'];
            var address=item['Address'];
            var id=item['Record_id'];
            var j=i;
            //var a="editRecord("+id+")";
            j++;//<a href='' onclick='editRecord("+id+")'><i class='material-icons'>edit</i></a>
            var action="<a href='<?=base_url()?>editRecord/"+id+"'><i class='material-icons'>edit</i></a><a href='' onclick='deleteRecord("+id+")'><i class='material-icons'>delete</i></a>"
            $("#tableRecords").append("<tr><td>"+j+"</td><td>"+name+"</td><td>"+number+"</td><td>"+address+"</td><td>"+action+"</td></tr>");
        });
    });



});
function deleteRecord(a){
    if (confirm("Are you Sure to delete this record?")) {
        $.post("<?=base_url()?>deleteRecord/"+a,function(data){
            if(data==1){
                location.reload(true);
            }
            else{
                swal("Error!", "Something went wrong!", "error");
            }
        });
    }
}
function editRecord(a){
    // $.getJSON("<?=base_url()?>getUserDetails2/"+a,function(data){
    //     $("#userName").val(data[0]['Name']);
    //     $("#address").val(data[0]['Address']);
    //     $("#number").val(data[0]['Phone']);
    // });
}
</script>