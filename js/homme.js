let front = document.querySelectorAll("#front");
let key = "client_id=70h5U9rt97qG_o1hqnC0DgW9of4brM196-PJsAlRJNM";  
let city = "Capital";
let Departure = document.querySelector("#Departure");
let goto = document.querySelector("#goto");
let RoundTrip = document.querySelector("#RoundTrip");
let OneWay = document.querySelector("#OneWay");
let DateDeparture = document.querySelector("#DateDeparture");
let DateReturn = document.querySelector("#DateReturn");
let Class = document.querySelector("#class");
let seats = document.querySelector("#seats");
let search = document.querySelector("#search");
let arrow = document.querySelector("#arrow");
let heler = document.querySelector("#heler");
// Errore
let error = (index, text) => {
    Swal.fire({
        position: 'center',
        icon: index,
        title: text,
        showConfirmButton: false,
        timer: 1500
    })
}
async function getImagesApi() { 
    const res = await fetch("https://api.unsplash.com/search/photos/?"+ key+"&query="+city)
    const data = await res.json()
    let images = data.results.slice(0,6).map(el=>`<img src=${el.urls.regular}>`);
    front.forEach((el,index)=>el.innerHTML=images[index])

}
getImagesApi();
// loder function EC6
((_=>{
    let loade = document.querySelector("#loade");
    let body = document.body;
    body.classList.remove('scroleHeadin')
    loade.classList.remove("loade")
}))();

let OneWayChecked;

search.addEventListener('click',()=>{

    if(OneWay.checked){
        OneWayChecked = "One way" ;
        console.log("One way");
    }else {
        OneWayChecked = "Roundtrip"
        console.log("Roundtrip");
        
    }

    if(Departure.value == ""){
        error('error', 'Departure is empty')
        return
    }
    else if(goto.value == ""){
        error('error', 'go to is empty')
        return
    }
    else if(RoundTrip.value == ""){
        error('error', 'Round Trip is empty')
        return
    }
    else if(OneWay.value == ""){
        error('error', 'One Way is empty')
        return
    }
    else if(DateDeparture.value == ""){
        error('error', 'Date Departure is empty')
        return
    } else if(DateReturn.value == ""){
        error('error', 'Date Return is empty')
        return
    }
    // else if(seats.value == ""){
    //     error('error', 'seats is empty')
    //     return
    // }
    else{
        error('success','Your work has been saved' );
        window.location.href = `http://localhost/ProgectOfppt-main/app/APi.php?Departure=${Departure.value}&goto=${goto.value}&
                                checked=${OneWayChecked}&DateDeparture=${DateDeparture.value}
                                &Class=${Class.value}`;
    }    
})
arrow.addEventListener("click",()=> {
    location.href = "http://localhost/ProgectOfppt-main/app/APi.php"
})

heler.addEventListener('click',()=>{
    window.open("tel:0696807334");
})
