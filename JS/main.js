// Para obtener la info del JSON
async function obtenerDatos() {
    let respuesta = await fetch("./JS/profilepic.json");
    let datos = await respuesta.json();
  
    // Obtener el elemento de la imagen del perfil
    let profileImage = document.getElementById("profile-image");
    
    // Establecer la fuente de la imagen dinámicamente desde el JSON
    profileImage.src = datos.imagenes[0].imagen;
    profileImage.alt = datos.imagenes[0].nombre;
  
    console.log(datos);
  }
  
  obtenerDatos(); // Llamar a la función para obtener y establecer la imagen dinámicamente
  