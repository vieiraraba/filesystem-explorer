fetch('http://localhost/git/filesystem-explorer/db.json')
.then(res => res.json())
.then(data => {
    console.log(data);
})


    // const parent = document.getElementById('parent');
    // const img = document.createElement('img');
    // img.setAttribute('src', ('./root/' + data.name));//+data.name
    // parent.append(img);
    // console.log(img);

//     for (const i in data) {
//         if(i === "name"){
//             console.log(`${i}: ${data[i]}`);
//             const parent = document.getElementById('parent');
//             const img = document.createElement('img');
//             img.setAttribute('src', ('./root/' + data[i]));
//             parent.append(img);
//             console.log(img);
//         }
//     }