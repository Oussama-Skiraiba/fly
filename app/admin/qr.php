<?php 
    session_start();
    if(!isset($_SESSION['id_admin'])){
        header("Location: ../SingIn.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admine | QR</title>
    <link rel="stylesheet" href="../../css/qr.css">
</head>

<body>
        
    <?php include "../include/headerAndMainAdmin.php"; ?>
    <!--  -->
    <!--  -->
    <?php include "../include/fotterHomePageAdmin.php"; ?>

    <div class="qrScan">
        <h2> Qr Scan</h2>
        <div class="video">
            <video id="qrV" class="qr"></video>
        </div>
    </div>
    
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>   

<script type="module">
    import QrScanner from '../../qrLib/qr-scanner.min.js';
    QrScanner.WORKER_PATH = '../../qrLib/qr-scanner-worker.min.js';
    // do something with QrScanner
    let qrVideo = document.querySelector("#qrV");
    let id;
    
    const qrScan = new QrScanner(qrVideo, (result) => {
        console.log(result); // result is counter 
        id = result;
        let fd = new FormData();
        fd.set('id', id);

        fetch("http://localhost/ProgectOfppt/php/admin/qrScaner.php", {
                method: "POST",
                body: fd
            }).then(res => res.json())
            .then(data => {
                // console.log(data)
                let flight = data.response[0];
                if (flight == undefined) {
                    qrScan.stop();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'flight not found',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => qrScan.start());
                } else {
                    qrScan.stop();
                    let html = `<label>leaving from :</label> <input type="text" value="${flight.leaving_from}" disabled><br>
                            <label>going to :</label> <input type="text" value="${flight.going_to}" disabled><br>
                            <label>type :</label> <input type="text" value="${flight.type}" disabled><br>
                            <label>class :</label> <input type="text" value="${flight.class}" disabled><br>
                            <label>seats :</label> <input type="text" value="${flight.seats}" disabled><br>
                            <label>price :</label> <input type="text" value="${flight.price}" disabled><br>
                            `;
                    swite(html, flight.id);
                }
                
            })
    });
    qrScan.start();
    // 
    let swite = (h, id) => {
        Swal.fire({
            title: `<strong>flight N° ${id}</strong>`,
            icon: 'success',
            html: h,
            showCloseButton: true,
        })
    }
</script>

</html>