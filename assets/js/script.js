async function loadFiles(){
    await fetch('http://localhost/git/filesystem-explorer/db.json')
    .then(res => res.json())
    .then(data => {
        data.forEach(element => {
            const row = document.getElementById('card');
            const mainDiv = document.createElement('div');
            mainDiv.classList.add('col-md-2', 'col-sm-3', 'col-6');
            const card = document.createElement('div');
            card.classList.add('card');
            card.style.marginBottom = '2rem';
            const cardBody = document.createElement('div');
            cardBody.classList.add('card-body');
            const cardIcon = document.createElement('img');
            cardIcon.classList.add('card-text', 'img-fluid');
            cardIcon.setAttribute('src', getIcon(element.ext));
            const fileName = document.createElement('div');
            fileName.classList.add('card-footer');
            fileName.textContent = shortenName(element);

            cardBody.appendChild(cardIcon);
            card.append(cardBody, fileName);
            mainDiv.appendChild(card);
            row.appendChild(mainDiv);
        });

        console.log(data);
    })
}

function shortenName(e){
    if((e.name).length > 10){
        return (e.name).slice(0, 10) + '...' + e.ext;
    }else{
        return e.name;
    }
}

function getIcon(ext){ 
    switch (ext) {
        case 'pdf':
        return '../filesystem-explorer/assets/icons/001-pdf.png';
        case 'jpg':
        return '../filesystem-explorer/assets/icons/002-jpg.png';
        case 'png':
        return '../filesystem-explorer/assets/icons/003-png.png';
        case 'doc':
        return '../filesystem-explorer/assets/icons/004-doc.png';
        case 'csv':
        return '../filesystem-explorer/assets/icons/005-csv.png';
        case 'mp4':
        return '../filesystem-explorer/assets/icons/006-mp4.png';
        case 'xls':
        return '../filesystem-explorer/assets/icons/007-xls.png';
        case 'zip':
        return '../filesystem-explorer/assets/icons/008-zip.png';
        case 'ppt':
        return '../filesystem-explorer/assets/icons/009-ppt.png';
        case 'mp3':
        return '../filesystem-explorer/assets/icons/010-mp3.png';
        case 'txt':
        return '../filesystem-explorer/assets/icons/011-txt.png';
        case 'svg':
        return '../filesystem-explorer/assets/icons/012-svg.png';
        case 'exe':
        return '../filesystem-explorer/assets/icons/013-exe.png';
    
        default:
        return '../filesystem-explorer/assets/icons/014-file.png';
    }
}

loadFiles();