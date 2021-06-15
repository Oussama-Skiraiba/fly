let search = document.querySelector("#search");
let showData = document.querySelector("#showData");
let inputID = document.querySelector("input[name='_id']");

// function click of Element => toggle class

// function  Element => remove class
let removeClass = (element, NameClass) => element.classList.remove(NameClass);
let addClass = (element, NameClass) => element.classList.add(NameClass)

search.addEventListener('keyup', () => {
    if (search.value === "") { showData.innerHTML = ""; return; }

    addClass(showData,"showData")
    fetch('http://localhost/progectOfppt-main/php/admin/search.php?search=' + search.value)
        .then(res => res.json())
        .then(data => {
            console.log(data[0]);
            if (data[0] == undefined) {
                return;
            }
            // Get DAta 
            let getData = (res,el)=> {
                res.addEventListener('click',()=>{
                    inputID.value = el.id || ''
                    type.value = el.type;
                    Leaving_from.value = el.leaving_from;
                    Going_to.value = el.going_to;
                    price.value = el.price;
                    Departing.value = el.departing;
                    Class.value = el.class;
                    seats.value = el.seats;
                    if (el.type == "One way") {
                        Returning.style.display = "none";
                    } else {
                        Returning.style.display = "";
                        Returning.value = el._returning;
                    }
                    
                    removeClass(showData,"showData")
                    showData.innerHTML = ""

                })
            }

            // create temp for take html and show in search and take  data in dataShow 
            
            data.forEach(element => {
                let templat =document.createElement('span');
                templat.dataset.show = `${element.type}-${element.leaving_from}-${element.going_to}-${element.price}-${element.departing}-${element._returning}-${element.class}-${element.seats}`;
                templat.textContent = ` ${element.leaving_from} ${element.going_to}`;
                showData.appendChild(templat);
                getData(templat,element)
            });
            showData.style.display = "block";
        }
        );
});

// upadate

send.addEventListener("click", () => {

    if (checkErroe()) {
        let fd = new FormData();
        fd.append('id', inputID.value);
        fd.append('leaving_from', Leaving_from.value);
        fd.append('type', type.value);
        fd.append('going_to', Going_to.value);
        fd.append('returning', type.value == 'Oneway' ? null : Returning.value);
        fd.append('price', price.value);
        fd.append('departing', Departing.value);
        fd.append('class', Class.value);
        fd.append('seats', seats.value);
        fetch('http://localhost/progectOfppt-main/php/admin/update.php', {
            method: 'POST',
            body: fd
        }).then(res => res.text())
        clear()
    }

});
// clear()





