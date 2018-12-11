<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font/style.css">
    <title>Dashboard</title>
</head>

<body>

    <!-- la sidebar -->
    <div class="sidebar d-flex flex-column  position-fixed " id="side-bar">
        <div class="side-item">Dashboard</div>
        <div class="side-item d-inline-block">
            <img src="<?php echo base_url(); ?>assets/images/default-avatar.png" alt="" class="rounded-circle img-fluid">
            <span class="ml-2 text-white font-weight-bold">Admin</span>
        </div>
        <div class="side-item"><a href="#" class="nav-item actived">Tableau de bord</a></div>
        <div class="side-item"><a href="#" class="nav-item ">User</a></div>
        <div class="side-item"><a href="#" class="nav-item">Roles</a></div>
        <div class="side-item"><a href="#" class="nav-item">Parametre</a></div>
        <div class="side-item"><a href="#" class="nav-item">deconnexion</a></div>
    </div>
    <!-- fin sidebar -->

    <div class="app" id="app-container">
        <!-- la barre de navigation -->
        <nav class=" navbar navbars position-sticky shadow-sm">
            <button class="btn btn-light" id="btn-toggle">
                <span id="btn-icon" class="icon-list2"></span>
                <!-- <span class="icon-arrow-right2" ></span> -->
            </button>
            <!--  <div class="nav-item d-inline-block">
                <nav aria-label="breadcrumb " class="my-3">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>
            </div> -->
            <div class="nav-item ">
                <div class="dropdown">
                    <img class="img-fluid rounded-ccircle dropdown-toggle" src="<?php echo base_url(); ?>assets/images/default-avatar.png" heigth="50px"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                    <span class="navbar-signal"></span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another</a>
                        <a class="dropdown-item" href="#">Something</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- fin de la barre de navigation -->
        <!-- main -->
        <main class="container-alpha">
            <div class="row my-5 mx-auto justify-content-center">
                <div class="col-12  col-lg-4  border-white border rounded shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptas saepe tempora eligendi illo autem, dignissimos, enim voluptates facilis hic aliquam velit rerum, maiores ullam ex. Quae, sed illum. Consectetur neque quod sunt suscipit architecto dolorem ducimus dolor ut unde earum tenetur, harum sint eaque ad eius blanditiis nostrum cum!</div>
                <div class="col-12  col-lg-3 border-dark border mx-4 rounded shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptas saepe tempora eligendi illo autem, dignissimos, enim voluptates facilis hic aliquam velit rerum, maiores ullam ex. Quae, sed illum. Consectetur neque quod sunt suscipit architecto dolorem ducimus dolor ut unde earum tenetur, harum sint eaque ad eius blanditiis nostrum cum!</div>
                <div class="col-12  col-lg-4  border-dark border rounded shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptas saepe tempora eligendi illo autem, dignissimos, enim voluptates facilis hic aliquam velit rerum, maiores ullam ex. Quae, sed illum. Consectetur neque quod sunt suscipit architecto dolorem ducimus dolor ut unde earum tenetur, harum sint eaque ad eius blanditiis nostrum cum!</div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row justify-content-center">
                        <div class="col-5 my-2 ml-2 border-white border rounded shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum odio consequuntur sunt ad mollitia, unde quod, corrupti rerum nemo perspiciatis laudantium necessitatibus accusamus aut, et molestias vero expedita exercitationem soluta?</div>
                        <div class="col-5 my-2 ml-2 border-white border rounded shadow-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit natus nobis similique repellat odit nostrum illum soluta. Harum facilis impedit eligendi quae corrupti, error rem mollitia sit minima nostrum? Unde?</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5 my-2 ml-2 border-white border rounded shadow-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis incidunt officia alias dolores. Earum cupiditate excepturi tempora voluptatem voluptate temporibus molestiae ducimus ipsam necessitatibus labore accusantium magnam, est natus.</div>
                        <div class="col-5 my-2 ml-2 border-white border rounded shadow-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat distinctio explicabo id dolorem illo, facilis eveniet maiores omnis molestiae quibusdam illum, excepturi tenetur nobis odio, impedit tempore dolores quia expedita.</div>
                    </div>
                </div>
                <div class="col-5 border-white border rounded shadow-sm">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut eaque quasi ipsa, odio dolor eum numquam eveniet perspiciatis repellat ratione voluptate est minima laudantium exercitationem voluptatum maxime architecto id magni quis ipsam? Eveniet velit animi libero rerum id sed porro vel officia blanditiis consequuntur accusantium atque aliquid quae quod tempore, dolores beatae a vitae. Ipsam, quaerat. Numquam sed amet distinctio nesciunt laborum dolores similique. Quas quia repellat inventore earum dolore quam libero eos cumque modi at consectetur molestias nemo voluptates tenetur assumenda repellendus dicta autem fugit nam aliquid deserunt eius, optio quaerat. Nam temporibus voluptate mollitia sapiente dolorum accusamus odit enim vero debitis qui aut, iste, quam praesentium tenetur dicta sequi consectetur. Modi, assumenda? Vitae, ab temporibus omnis suscipit voluptatem soluta vero aperiam. Tenetur earum repudiandae repellendus quae, placeat dolor inventore nostrum odit in aliquam laborum porro explicabo nam molestias expedita fugiat veniam cumque alias neque quidem libero? Tenetur fugiat labore laudantium molestias debitis minus quis, quae ea saepe distinctio doloribus ullam voluptate harum beatae sequi repudiandae nobis inventore a velit! Id nihil voluptates, ullam saepe illum iusto quibusdam autem nobis aut aliquid quasi, inventore, hic nemo vero laboriosam minima fuga delectus accusamus veniam cum incidunt. Quo quisquam eaque nemo.
                </div>
            </div>
            <footer class="container-fluid  mt-5 pt-3 d-flex justify-content-around">
                  <di>&copy; ASFA (Agricultural Solutions For Africa)</di>
                  <a href="#">Politique</a>
                  <a href="#"> Sécurité</a>
                  <a href="#"> Aide</a>
                  <a href="#"> A propos</a> 
             </footer>
        </main>
        <!-- fin main -->
       
    </div>





    <script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>