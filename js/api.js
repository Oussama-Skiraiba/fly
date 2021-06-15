let key = "client_id=70h5U9rt97qG_o1hqnC0DgW9of4brM196-PJsAlRJNM";
let globale = document.querySelector("#globale");
let searchFly = location.search.slice(1).replaceAll('%20', '').split("&");
let error = (index, text) => {
    Swal.fire({
        position: 'center',
        icon: index,
        title: text,
        showConfirmButton: false,
        timer: 1500
    })
}


if (location.search) {
    getApi(true);
} else {
    getApi(false);

}

async function getApi(param) {
    let fd = new FormData();

    if (param) {
        console.log(true);
        fd.append("checkData", "check")
        fd.append(searchFly[0].split('=')[0], searchFly[0].split('=')[1])
        fd.append(searchFly[1].split('=')[0], searchFly[1].split('=')[1])
    } else {
        console.log(false);
        fd.append("checkData", "all");
    }
    const res = await fetch("http://localhost/ProgectOfppt-main/php/api.php",
        { method: "POST", body: fd })
    const data = await res.json()
    console.log(data);
    getImages(data);

}



async function getImages(city) {
    city.forEach(async el => {
        const res = await fetch(`https://api.unsplash.com/search/photos/?${key}&query=${el.leaving_from}}`)
        const data = await res.json()
        let src = data.results[0].urls.regular;
        let images = `<div class="globale">
                    <img src=${src}>
                <div class="card">
                    <div class="card-margin">
                        <h2>${el.type}</h2>
                        <div class ="flex">
                            <ul class="circle "></ul>
                        </div>
                            <div class ="center">
                                <span>${el.leaving_from}</span>
                                <span>${el.going_to}</span>
                            </div>
                        <div class="selcet">
                            <a href="#" class="reserve" id="reserve" onclick="reserve(${el.id},${el.price})" data-reserve="${el.seats}">reserve</a>
                            <select name="" id="">
                                <option value="">Deteile</option>
                                <option value="">${el.class}</option>
                                <option value="">${el.departing}</option>
                                <option value="">${el._returning}</option>
                            </select>
                        </div>
                        <p>${el.price} DH</p>
                    </div>
                </div>
            </div>`
        globale.insertAdjacentHTML("beforeend", images);

    })
    console.log(city);
}




function reserve(id, price) {
    let fd = new FormData();
    fd.set("id",id);
    fetch("http://localhost/ProgectOfppt-main/php/usr/resrvetion.php",{method:"POST",body:fd})
    .then(res=>res.json())
    .then(data=> {
        if(data.reserve ==="ok") {
            error('success','Your work has been saved' )
            location.href = "http://localhost/progectOfppt-main/app/phpScripts/checklogin.php?checklogin=check&flightid="+ id +"&price=" + price;
        }
        else {
            error('error', 'seats is palen')
        }
    })


}


// location.href = "http://localhost/progectOfppt-main/app/phpScripts/checklogin.php?checklogin=check&flightid=&price=";
