send.addEventListener("click", () => {
    if (checkErroe()) {
         // if input emty return true else return false 
        let fd = new FormData();
        fd.append('leaving_from', Leaving_from.value);
        fd.append('type', type.value);
        fd.append('going_to', Going_to.value);
        fd.append('returning', Returning.value || null);
        fd.append('price', price.value);
        fd.append('departing', Departing.value);
        fd.append('class', Class.value);
        fd.append('seats', seats.value);
        fetch('http://localhost/ProgectOfppt-main/php/admin/add.php', {
            method: 'POST',
            body: fd
        }).then(res => res.text())
            .then(data => clear() )
    }
});



