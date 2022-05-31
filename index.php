<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>

	<link rel="shortcut icon" href="./assets/icons/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/21aa03ab11.js" crossorigin="anonymous"></script>

	<script type="text/javascript" src="./assets/js/script.js" defer></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="page-header">
				<h1>
					My files
				</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12" style="margin-bottom: 10px">
					<a id="modal-348939" href="#modal-container-348939" role="button" style="margin-bottom: 10px" class="btn btn-outline-success btn-block" data-toggle="modal">
						ADD A FILE</a>
				
					<div class="modal fade" id="modal-container-348939" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action="upload.php" method="POST" enctype="multipart/form-data">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel">
											Upload file
										</h5> 
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true"></span>
										</button>
									</div>
									<div class="modal-body">
										<input type="file" name="fileToUpload" id="fileToUpload">
									</div>
									<div class="modal-footer">
										
										<button type="submit" name="submit" class="btn btn-primary">
											Save changes
										</button> 
										<button type="button" class="btn btn-secondary" data-dismiss="modal">
											Close
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-outline-success btn-block"  style="margin-bottom: 10px" data-toggle="modal" data-target="#exampleModal">
					ADD A FOLDER
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form action="dir.php" method="POST" enctype="multipart/form-data">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel">
											New folder
										</h5> 
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true"></span>
										</button>
									</div>
									<div class="modal-body">
										<input type="text" name="folderName" id="fileToUpload">
									</div>
									<div class="modal-footer">
										
										<button type="submit" name="submit" class="btn btn-primary">
											Save changes
										</button> 
										<button type="button" class="btn btn-secondary" data-dismiss="modal">
											Close
										</button>
									</div>
								</form>
							</div>
						</div>
						</div>
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<ul id="folderList" class="nav flex-column nav-pills">
						<!-- <li class="nav-item">
							<a class="nav-link" href="#"><i class="fa-solid fa-folder"></i> Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa-solid fa-folder"></i> Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa-solid fa-folder"></i> Messages</a>
						</li> -->
					</ul>
				</div>
			</div>	
		</div>
		<div class="col-md-10">
			<div id="card" class="row">
				
			<!-- inject files through js -->

			</div>
		</div>
	</div>
</div>


 </body>
</html>