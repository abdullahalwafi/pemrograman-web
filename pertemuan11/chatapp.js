function chatapp() {
    let inputpesan = document.createTextNode("inputpesan");
    let isichat = document.createElement("span");
    let barisBaru = document.createElement("br");

    isichat.appendChild(inputpesan)

    let pesan = document.getElementById("pesan");
    pesan.appendChild(barisBaru)
    pesan.appendChild(isichat)


    
}