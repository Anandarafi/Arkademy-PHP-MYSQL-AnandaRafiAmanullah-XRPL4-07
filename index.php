<!DOCTYPE html>
<?php
    include "show-data.php";
    include "update_data.php";
?>
<html>
    <head>
        <title>Profil Saya</title>
        <link rel="stylesheet" href="assets/css/Style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">MY EXPERIENCE</a></li>
            </ul>
        </nav>
        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image: url(assets/img/rafi.jpg);"></div>
            </div>
            <div class="description">
                <h1 id="pName"><?php echo $nama; ?></h1>
                    <p id="pRole"><?php echo $role; ?></p>
                    <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
                    <a href="#" class="button border-blue">Contact</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailiby" class="text-gray"><?php echo $availability; ?></p>
                </div>
                <div class="data">
                        <p class="field">Age</p>
                        <p id="pAge" class="text-gray"><?php echo $age; ?></p>
                </div>
                <div class="data">
                        <p class="field">Location</p>
                        <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
                </div>
                <div class="data">
                        <p class="field">Email</p>
                        <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
                </div>
            </div>
        </section>
        <section id="input-form">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
                <div class="form">
                        <label>Id User</label>
                        <input id="inpId User" type="text" name="id_user" value="<?php echo $id; ?>"
                        placeholder="Masukkan Nama Anda">
                </div>
                <div class="form">
                        <label>Nama</label>
                        <input id="inpName" type="text" name="name"
                        placeholder="Masukkan Nama Anda">
                </div>
                <div class="form">
                        <label>Role</label>
                        <input id="inpRole" type="text" name="role"
                        placeholder="Masukkan Role Anda">
                </div>
                <div class="form">
                        <label>Availability</label>
                        <input id="inpAvailiby" type="text" name="availability"
                        placeholder="Masukkan Availability Anda">
                </div>
                <div class="form">
                        <label>Age</label>
                        <input id="inpAge" type="text" name="Age"
                        placeholder="Masukkan Umur Anda">
                </div>
                <div class="form">
                        <label>Location</label>
                        <input id="inpLocation" type="text" name="location"
                        placeholder="Masukkan Lokasi Anda">
                </div>
                <div class="form">
                        <label>Email</label>
                        <input id="inpEmail" type="email" name="email"
                        placeholder="Masukkan Email Anda">
                </div>
                <div class="form">
                        <input onclick="" type="submit" name="submit"
                        value="SUBMIT" class="bg-blue">
                </div>
            </form>
        </section>
        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display ="none";

            function editForm(){
                if(formMenu.style.display === "none")
                {
                    formMenu.style.display = "block";
                }
                else{
                    formMenu.style.display ="none";
                }

                var name =document.getElementById("pName").innerHTML;
                var role =document.getElementById("pRole").innerHTML;
                var age =document.getElementById("pAge").innerHTML;
                var availiby =document.getElementById("pAvailiby").innerHTML;
                var location =document.getElementById("pLocation").innerHTML;
                var email =document.getElementById("pEmail").innerHTML;
                
                document.getElementById("inpName").value = name;
                document.getElementById("inpRole").value = role;
                document.getElementById("inpAge").value = age;
                document.getElementById("inpAvailiby").value = availiby;
                document.getElementById("inpLocation").value = location;
                document.getElementById("inpEmail").value = email;

            }
            


            function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }
                else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }

            }
        </script>
    </body>
</html>