<?php

class ControladorUsuarios{
   
    /*--============
    Ingreso de Usuario
    ============*/

    static public function ctrIngresoUsuario(){
        
        if(isset($_POST["ingUsuario"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){


                $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){
                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["usuario"] = $respuesta["usuario"];
                        $_SESSION["foto"] = $respuesta["foto"];
                        $_SESSION["perfil"] = $respuesta["perfil"];

                        echo '<script>
                            window.location = "inicio"; 
                        </script>';
                    }else{
                        echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                    }
                

            }
        }
    }

    /*--============
    Registro de Usuario
    ============*/

    static public function ctrCrearUsuario(){
        if(isset($_POST["nuevoUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                    $ruta = "";

                    if(isset($_FILES["nuevaFoto"]["tmp_name"])){

                        list($ancho, $alto) = getimagesize(($_FILES["nuevaFoto"]["tmp_name"]));

                        $nuevoAncho = 500;
                        $nuevoAlto = 500;

                        $directorio = "view/img/usuarios/".$_POST["nuevoUsuario"];

                        mkdir($directorio, 0755);

                        if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "view/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

						    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);						

						    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        }

                        if($_FILES["nuevaFoto"]["type"] == "image/png"){

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "view/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";

						    $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);						

						    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                            imagepng($destino, $ruta);
                        }

                    }

                    

                    $tabla = "usuarios";

                    $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                    

                    $datos = array("nombre" => $_POST["nuevoNombre"],
                    "usuario" => $_POST["nuevoUsuario"], 
                    "password" => $encriptar,
                    "perfil" => $_POST["nuevoPerfil"],
                    "foto" => $ruta);


                    $respuesta = ModeloUsuarios::mdlIngresarUsuarios($tabla, $datos);

                    if($respuesta == "ok"){
                        echo '<script>
                    swal({
                        type: "success",
                        title: "El usuario se ha registrado correctamente",
                        showConfirmbutton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                </script>';


                    }

            }else{
                echo '<script>
                    swal({
                        type: "error",
                        title: "El usuario no puede ir vacío o llevar caracteres especiales",
                        showConfirmbutton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                </script>';
				
                
            }
        }
    }

    /*--============
    MOSTRAR USUARIOS
    ============*/

    static public function ctrMostrarUsuarios($item, $valor){

        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        return $respuesta;

    }

    /*--============
    EDTAR USUARIO
    ============*/

    static public function ctrEditarUsuario(){

        if(isset($_POST["editarUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

                /*--============
                Validar Imagen
                ============*/

                $ruta = $_POST["fotoActual"];

                if(isset($_FILES["editarFoto"]["tmp_name"])){

                        list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

                        $nuevoAncho = 500;
                        $nuevoAlto = 500;

                        $directorio = "view/img/usuarios/".$_POST["editarUsuario"];

                        if(!empty($_POST["fotoActual"])){

                            unlink($_POST["fotoActual"]);

                        }else{

                            mkdir($directorio, 0755);

                        }


                        if($_FILES["editarFoto"]["type"] == "image/jpeg"){

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "view/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";

						    $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);						

						    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        }

                        if($_FILES["editarFoto"]["type"] == "image/png"){

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "view/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";

						    $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);						

						    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                            imagepng($destino, $ruta);
                        }

                }

                $tabla = "usuarios";
                if($_POST["editarPassword"] != ""){

					if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

						$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					}else{

						echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then(function(result){
										if (result.value) {

										window.location = "usuarios";

										}
									})

						  	</script>';

					}

				}else{

					$encriptar = $_POST["passwordActual"];

				}

                $datos = array("nombre" => $_POST["editarNombre"],
							   "usuario" => $_POST["editarUsuario"],
							   "password" => $encriptar,
							   "perfil" => $_POST["editarPerfil"],
							   "foto" => $ruta);

                
                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

                if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				}
            }else{

                echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';
            }
        }
    }
}