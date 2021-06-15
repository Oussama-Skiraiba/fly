let body = document.querySelector("#body");

function removeItem(value) {
    let fd = new FormData();
    fd.append('id', value);

    fetch('http://localhost/progectOfppt-main/php/admin/remove.php', {
        method: 'POST',
        body: fd
    })
        .then(response => response.text())
        .then(data => { });
}

window.onload = function () {
    fetch('http://localhost/progectOfppt-main/php/admin/select.php')
        .then(response => response.json())
        .then(data => {
            data[0].forEach(element => {
                let tempas = `<div class="row">
            <div >${element.id}</div>
            <div>${element.type}</div>
            <div>${element.price}</div>
            <div class="icon delete" data-id="${element.id}">
            <img src="http://localhost/progectOfppt-main/images/addminIcon/removeImages/remove.png"/>
            </div>
            </div>`;
                body.insertAdjacentHTML("beforeend", tempas);

            });
            // for delete element
            document.querySelectorAll(".delete").forEach(el => el.addEventListener('click', () => {
                let id = el.getAttribute("data-id");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    // user click confirm
                    if (result.isConfirmed) {
                        // send request and remove item from html frontend
                        removeItem(id);
                        el.parentElement.remove();
                        // element remove success
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }))

        });
}

