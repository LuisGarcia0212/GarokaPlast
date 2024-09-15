<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión - Inversiones Garoka's Plast</title>
    <style>
        .intentos {
            color: red;
            font-size: 1.2rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">

    <!-- Formulario de Inicio de Sesión -->
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <section id="home" class="home">
            <div class="image myimage">
                <img src="images/Garoka.png" alt="Logo Garoka's Plast">
            </div>

            <div class="content">
                <h3>Inicia Sesion</h3>
                <div class="col-auto">
                    <label for="email">Correo Electrónico</label><br>
                    <input type="email" name="email" class="box" id="email" placeholder="Ingrese su correo" required>
                </div>

                <div class="col-auto1">    
    <h1><label class="ColorT1" for="password">Contraseña <br></label>
    <input type="password" name="password" id="password" class="box" placeholder="Ingrese su contraseña" required> <span  onclick="togglePassword()"><svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg></span>
    </div>

                <!-- Mostrar el número de intentos fallidos con "X" -->
                <div class="intentos">
                    @if(session('intentos') && session('intentos') < 3)
                        Intentos fallidos: 
                        @for($i = 0; $i < session('intentos'); $i++)
                            <span style="color: red;">X</span>
                        @endfor
                    @endif
                </div>

                <!-- Mensaje de ayuda sobre la longitud de la contraseña -->
                <span id="passwordHelpInline" class="form-text">
                    Debes tener al menos 8-20 caracteres.
                </span>

                <button type="submit" class="btn2">Ingresar</button>
            </div>
        </section>
    </form>
</div>


<!-- Mostrar mensajes de éxito o error como alert -->
@if(session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif

@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif



<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

/*determirna el color de la transicion de los botones*/
:root{
  --red:#FF0000;
  --btn-color:#e58f00;
    --about-sec:#FF0000;
}

.col-auto1 input {
            padding: 10px;
            width: 25%;
            border-radius: 8px;
            box-sizing: border-box;
            padding-right: 0px; /* Espacio para el ícono */
            background-color: #f0f8ff;
}



.col-auto1 .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
}
/*determina letra del menú*/
*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;
  text-transform: capitalize;
  transition:all .1s linear;
}

.ColorT1{
    color: #2271b3;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 6rem;
  
}
body{
  background:#f7f7f7;
}

/*determinar el posicionamiento de la hamburguesa*/
.home{
  background-size: cover;
  background-position: center;
  min-height: 100vh;
  display: flex;
  gap: 1.5rem;
  align-items: center;
  flex-wrap: wrap;
}
.home .content{
  flex: 1 1 40rem;
  padding-top: 6.5rem;
  margin-left: 210px;
}

.home .content h3{
  font-size: 5rem;
  color: #333;
}
.home .content p{
  font-size: 1.5rem;
  color: #333;
  padding: 1rem 0;
}

/* determinar los colores del color*/
.btn{
  display: inline-block;
  padding:.8rem 3rem;
  border:.2rem solid var(--btn-color);
  color:var(--btn-color);
  cursor: pointer;
  font-size: 1.7rem;
  border-radius: .5rem;
  position: relative;
  overflow: hidden;
  z-index: 0;
  margin-top: -3.9rem;
}



/* determinar los colores del color*/
  .btn2{
    display: inline-block;
    padding:.8rem 3rem;
    border:.2rem solid #FF0000;
    color:#000000;
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: 2.5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
    
  }
  
  /*determina la transicion del boton al recorrer*/
  .btn2::before{
    content: '';
    position: absolute;
    top:0; right: 0;
    width:0%;
    height:100%;
    background:var(--red);
    transition: .4s linear;
    z-index: -1;
  }
  .btn2:hover{
    color: rgb(255, 255, 255);
    border: .2rem solid var(--about-sec);
  }
  .btn2:hover::before{
    width:100%;
    left: 0;
  }



/*determinar el movimiento y transicion de la burguer*/
.home .image{
  flex: 1 1 40rem;
}
.home .image img{
  width: 100%;
  padding: 1rem;
  animation:float 3s linear infinite;
}

/* media si la ventana esta minimizada  */
@media(max-width:991px){
  html{
    font-size: 55%;
  }
  header{
    padding:2rem;
  }
  section{
    padding:2rem;
  }
  .home .image img{
    width: 100%;
    padding-top: 8rem;
    margin-left: 200px;
  }
}

 /*medida si la ventana esta maximizada*/
@media(max-width:768px){
  #menu-bars{
    display: initial;
  }
  .navbar{
    position: absolute;
    top: 0;
    left: 0%;
    right: 0;
    background: white;
    border-top: .1rem solid rgba(0,0,0,.1);
    clip-path: polygon(0 0, 100% 1%, 100% 0, 0 0);
  }
  .navbar.active{
    top: 100%;
    clip-path: polygon(0 0, 100% 1%, 100% 100%, 0 100%);
  }
  .navbar a{
    font-size: 1.5rem;
    margin: 1.5rem;
    padding: 1.5rem;
    background: white;
    display: block;
    border: .2rem solid var(--about-sec);
    border-left: 0.5rem solid var(--btn-color);
  }
  .home .image{
    width: 70%;
    margin: 0 auto;
    text-align: center;
  }
  .home .image img{
    width: 95%;
    padding-top: 8rem;
  }
}

.inputs     {
    display: flex;
    flex-direction: column;
}   
.box  {
    width: 25%;

    border-color:#d49633;
    border-width: 0px,0px,0px,10px;
    border-radius:8px;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #ffffff;
}  

.controls {
    width: 50%;

    border-color:#d49633;
    border-width: 0px,0px,0px,10px;

    padding: 10px;
    margin-bottom: 10px;
    background-color: #ffffff;
} 

/*ventana de aviso modal*/

.contenido-modal {
    opacity: 0;
    visibility: hidden;
    position: fixed;
    z-index: 1000;
    width: 100%;
    height: 100vh;
    top:0;
    left:0;
    background: rgba(0,0,0,0.5);
    display: flex;
    justify-content:center ;
    align-items: center;
} 
.modal {
    width: 35%;
    height: 55%;
    background:#ffffff;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    position: relative;
    transition: transform 1s;
    transform: translateY(0%);
    border-radius: 10px;
} 

.cerrar-modal{
    transform: translateY(-200%);
} 

.modal >img {
width: 100%;
height: 90%;

} 
.close{
    position:absolute;
    top: 5px;
    right: 5px;
    display: inline-block;
    width: 25px;
    height: 25px;
    color: #ffffff;
    line-height: 25px;
    cursor: pointer;
    border-radius: 50%;
} 


/*ventana de aviso modal*/


.contenido2 {
  opacity: 0;
  visibility: hidden;
  position: fixed;
  z-index: 1000;
  width: 100%;
  height: 100vh;
  top:0;
  left:0;
  background: rgba(0,0,0,0.5);
  display: flex;
  justify-content:center ;
  align-items: center;
} 
.modale {
  width: 30%;
  height: 50%;
  background:#ffffff;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
  transition: transform 1s;
  transform: translateY(0%);
  border-radius: 10px;
} 

.cerrar-m2{
  transform: translateY(-200%);
} 

.modale >img {
width: 100%;
height:90%;
} 
.cerrar2{
  position:absolute;
  top: 5px;
  right: 5px;
  display: inline-block;
  width: 25px;
  height: 25px;
  color: #000000;
  line-height: 25px;
  cursor: pointer;
  border-radius: 50%;
} 

.texto-modal2{
  padding: 4px  8px 60px 0px;
  font-size: 20px;
}

.intentos span {
    font-size: 1.5rem;
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(-10px); }
    100% { opacity: 1; transform: translateY(0); }
}

</style>
</body>

</html>
