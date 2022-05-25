fetch('http://localhost/git/filesystem-explorer/upload.php')
.then(res => res.json())
.then(data => console.log(data))