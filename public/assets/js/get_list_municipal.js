const divMunicipaly = document.getElementById("divMunicipaly")
const idState = document.getElementById("state")

divMunicipaly.innerHTML = "<option value = 0>Primero Selecciona un Estado</option>"

idState.addEventListener("change", async ()=>{

    divMunicipaly.innerHTML = "<option value = 0>Selecciona un Municipio</option>"

    const url = `../../models/data_by_get.php?idState=${idState.value}`

    try {
        const res = await fetch(url)

        if (!res.ok) {
            console.log("Error del fetch: " + res.status);
        }

        const dataJSON = await res.json()
        // console.log("data: ", dataJSON);

        const dataArray = Object.values(dataJSON)

        dataArray.forEach(municipal => {
            const option = document.createElement("option")
            option.value = municipal.id
            option.innerText = municipal.name
            divMunicipaly.appendChild(option)
        })
    } catch (error) {
        console.log("ERROR: ", error)
    }
})