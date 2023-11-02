// Guardo el elemento donde voy a mostar la respuesta
respuesta = document.getElementById("respuesta")

/**
 * Función que crea y devuelve un objeto XMLHttpRequest
 * @returns objeto XMLHttpRequest
 */
function crearObjetoXMLHttpRequest() {
    if (window.XMLHttpRequest) {
        ajaxObject = new XMLHttpRequest()
    } else if(window.ActiveXObject){
        ajaxObject = new ActiveXObject("Micosoft.XMLHTTP")
    }
    return ajaxObject
}
/**
 * Función que maneja la respuesta del servidor
 */
function respuestaServidor() {
    if(peticionHttp.readyState == 4){
        if (peticionHttp.status == 200) {
            respuesta.value = peticionHttp.responseText
        }
    }
}

/**
 * Función principal que realiza la solicitud al servidor
 */
function obtener(){
    peticionHttp = crearObjetoXMLHttpRequest()

    peticionHttp.onreadystatechange = respuestaServidor

    peticionHttp.open("GET", "https://localhost/dweServidor/Tema8_Act1/holamundo.txt", true)

    peticionHttp.send(null)
}