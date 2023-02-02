<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 "> Mentor Dashboard</span>
    <div class="dropdown ">
      <button class="btn btn-primary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Menu
      </button>
      <ol class="dropdown-menu">
        <li><button class="dropdown-item" type="button">Logout</button></li>
        <li><button class="dropdown-item" type="button">View Classes</button></li>
        <li><button class="dropdown-item" type="button">Reset Password</button></li>
      </ol>
    </div>
  </nav>
  <div class="container ml-0">
    <div class="row">
      <div class="col ml pl-0 pt-5">
        <div class="text-dark mb-4">
          <h3>Mentees</h3>
        </div>
        <div class="list-group h5">
          <a href="#" class="list-group-item list-group-item-action active" data-toggle="modal" data-target="#myModal">Ferrari</a>
          <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#myModal">Chatheriyan</a>
          <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#myModal">Ferdeno</a>
          <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#myModal">Abinav</a>
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="text-dark mt-5 mb-4">
          <h3>Course Completion Status</h3>
        </div>
        <div class="progress " style="height: 40px;">
          <div class="progress-bar" role="progressbar" style="width: 60% ;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
        </div>

      </div>
    </div>
    <br>
    <div class="mb-3">
      <label for="formFile" class="form-label display-6">Upload Assignment</label>
      <input class="form-control" type="file" id="formFile">
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Mentee Details</h4>
          </div>
          <div class="modal-body">
            <div class=" h5">Name: <span class="model_name font-weight-normal">Ferrari John</span></div>
            <div class=" h5"> Course Name: <span class="model_course font-weight-normal">Java</span> </div>
            <div class=" h5">Mail ID: <span class="model_mail font-weight-normal">ferrari.john@christuniversity.in</span></div>
            <div class="multiple_bar mt-3">
              <div class="text-dark ">
                <h5>Module 1</h5>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success as-1" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">34</div>
              </div>
              <div class="text-dark ">
                <h5>Module 2</h5>
              </div>
              <div class="progress">
                <div class="progress-bar bg-info as-2" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">34</div>
              </div>
              <div class="text-dark ">
                <h5>Module 3</h5>
              </div>
              <div class="progress">
                <div class="progress-bar bg-warning as-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">23</div>
              </div>
              <div class="text-dark ">
                <h5>Module 4</h5>
              </div>
              <div class="progress">
                <div class="progress-bar bg-danger as-4" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">23</div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat float-left" viewBox="0 0 16 16">
                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
              </svg>
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <script type="text/javascript" src="change_color.js"></script>
</body>

</html>