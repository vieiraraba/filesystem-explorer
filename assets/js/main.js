fetch('http://localhost:3000/data')
.then(res => res.json())
.then(data => {
    console.log(typeof(data))
    for (const i in data) {
        if(i === "name"){
            console.log(`${i}: ${data[i]}`);
            const parent = document.getElementById('parent');
            const img = document.createElement('img');
            img.setAttribute('src', ('./root/' + data[i]));
            parent.append(img);
            console.log(img);
        }
    }

})
.catch(error => console.log(error))



    // const parent = document.getElementById('parent');
    // const img = document.createElement('img');
    // img.setAttribute('src', ('./root/' + data.name));//+data.name
    // parent.append(img);
    // console.log(img);