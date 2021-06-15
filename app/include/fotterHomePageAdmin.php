<div class="main">
    <div class="mainContainer">
        <div class="dashboard">
            <a href="http://localhost/ProgectOfppt-main/app/admin/dashbord.php"> 
                <img src="../../images/addminIcon/dashboard.svg" alt="dashboard">
            </a>
            <span>Dashboard</span>
        </div>

        <div class="listView">
            <a href="http://localhost/ProgectOfppt-main/app/admin/add.php">
            <img src="../../images/addminIcon/sitemap.svg" alt="sitemap">
            </a>
            <span id="listView">List View</span>
            <div class="items" id="items">
                <a href="http://localhost/progectOfppt-main/app/admin/add.php">Add</a>
                <a href="http://localhost/progectOfppt-main/app/admin/update.php">Update</a>
                <a href="http://localhost/progectOfppt-main/app/admin/remove.php">remover</a>
            </div>
        </div>

        <div class="sitting">
            <a href="http://localhost/ProgectOfppt-main/app/admin/qr.php"><img src="../../images/addminIcon/qr-code.svg" alt="qrCode" id="qrCode"></a>
            <span>Qr Code</span>

        </div>

    </div>
    <!-- <div class="logOut"><a href="#">log out</a>
       <a href=""><img src="../../images/addminIcon/exit.svg" class="logout_img" alt="log out"></a> 
    </div> -->
    <form action="../phpScripts/admin_logout.php" class="logOut" method="post">
                <input type="submit"  id="admin_logout" name="admin_logout" value="logout >">
    </form>
</div>
<!-- 
<script>
        var logoutimage = document.querySelector(".logout_img");
        var admin_logout = document.querySelector("#admin_logout");
        logoutimage.addEventListener("click", ()=>{
            admin_logout.click();
        })
</script> -->