<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Filesystem Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js" defer></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-dark-outline tabs-panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs pull-left type-document">
                                <li class="active"><a data-toggle="tab" href=".documents-panel" aria-expanded="true"> <i class="fa fa-file"></i> My Root</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active documents-panel">
                                <a class="label label-success  label-left" href="#">Excel</a>
                                <a class="label label-info label-left" href="#">Word</a> 
                                <a class="label label-warning label-left" href="#">Powerpoint</a>
                                <a class="label label-danger label-left" href="#">PDF</a>
                                <a class="label label-dark label-left" href="#">Video</a>
                                <div class="clear"></div>
                                <div class="v-spacing-xs"></div>
                                <h4 class="no-margin-top"> Folders
                                    <button><i class="glyphicon glyphicon-plus"></i></button></h4>
                                <ul class="folders list-unstyled">
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Files
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Photos
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Music
                                        </a>
                                    </li>
                                    <li> 
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Trash
                                        </a>
                                    </li>
                                </ul>
                                <div class="v-spacing-xs"></div>
                                <form action="upload.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <button type="submit" name="submit" class="fa fa-plus"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="parent">
                </div>

                <div class="col-sm-8 tab-content no-bg no-border">
                    <div class="tab-pane active documents documents-panel">
                        <div class="document success">
                            <div class="document-body" id="parent">
                            </div>
                        </div>
                        <div class="document success">
                            <div class="document-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"><a href="./root/Learn JavaScript_ Scope Cheatsheet _ Codecademy.pdf" target="_blank">Excel database 2017</a>  </span>
                                <span class="document-description"> 1.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Excel database 2016 </span>
                                <span class="document-description"> 1.1 MB </span>
                            </div>
                        </div>
                        <div class="document info">
                            <div class="document-body">
                                <i class="fa fa-file-word-o text-info"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Word file 2017 </span>
                                <span class="document-description"> 932 KB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-word-o text-info"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Word file 2016 </span>
                                <span class="document-description"> 426 MB </span>
                            </div>
                        </div>
                        <div class="document warning">
                            <div class="document-body">
                                <i class="fa fa-file-powerpoint-o text-warning"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Presentation 2017 </span>
                                <span class="document-description"> 2.7 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-powerpoint-o text-warning"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Presentation 2016 </span>
                                <span class="document-description"> 1.9 MB </span>
                            </div>
                        </div>
                        <div class="document danger">
                            <div class="document-body">
                                <i class="fa fa-file-pdf-o text-danger"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> PDF file 2017 </span>
                                <span class="document-description"> 5.3 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-pdf-o text-danger"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> PDF file 2016 </span>
                                <span class="document-description"> 4.4 MB </span>
                            </div>
                        </div>
                        <div class="document dark">
                            <div class="document-body">
                                <i class="fa fa-file-video-o text-dark"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name text-dark"> Video file 2017 </span>
                                <span class="document-description"> 18.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-video-o text-dark"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Video file 2016 </span>
                                <span class="document-description"> 23.7 MB </span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane documents images-panel">
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Forest.png </span>
                                <span class="document-description"> 1.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Developer.png </span>
                                <span class="document-description"> 2.5 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Meeting.png </span>
                                <span class="document-description"> 1.1 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Hiking.png </span>
                                <span class="document-description"> 3.5 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Developers meeting.png </span>
                                <span class="document-description"> 862 KB </span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
</body>
</html>