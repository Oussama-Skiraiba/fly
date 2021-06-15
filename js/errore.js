//  vraibale globale input for check 
let send = document.querySelector("#send");
let Leaving_from =  document.querySelector("#Leaving_from");
let type = document.querySelector("#type");
let Going_to = document.querySelector("#Going_to");
let price = document.querySelector("#price");
let Departing = document.querySelector("#Departing");
let Returning = document.querySelector("#Returning");
let Class = document.querySelector("#class");
let seats = document.querySelector("#seats");
let listView = document.querySelector("#listView");
let items = document.querySelector("#items");
// let search = document.querySelector("#search");

function clear() {
    Leaving_from.value = "";
    Going_to.value = "";
    price.value = "";
    Departing.value = "";
    Returning.value = "";
    seats.value = "";
}

// function for heandle errore

let error = (index, text) => {
    Swal.fire({
        position: 'center',
        icon: index,
        title: text,
        showConfirmButton: false,
        timer: 1500
    })
}

let checkErroe = ()=>{
    if (type.value == "") {
        error('error', 'type is empty')
    }
    else if (Leaving_from.value == "") {
        error('error', 'Leaving_from is empty')
    }
    else if (Going_to.value == "") {
        error('error', 'Going to is empty')
    }
    else if (price.value == "") {
        error('error', 'price is empty')
    }
    else if (Departing.value == "") {
        error('error', 'Departing is empty')
    }
    else if (Class.value == "") {
        error('error', 'Class is empty')
    }else if (seats.value == "") {
        error('error', 'seats is empty')
    }
    else {
        error('success','Your work has been saved' )
        return true;
    }

    return false

}

type.addEventListener('change',()=>{
    if(type.value === 'One way') {
        Returning.style.display = "none";
    }
    if(type.value === 'Roundtrip') {
        Going_to.style.display = "";
        Returning.style.display = "";
    }
})

listView.addEventListener('click',()=>{
    items.classList.toggle("dis")
    console.log("ee");
})

