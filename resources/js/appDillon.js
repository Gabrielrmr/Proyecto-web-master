const linkDesc = document.querySelectorAll("#descripcion");
linkDesc.forEach((element, index) => {
    element.addEventListener("click", () => {

        const mdDescripcion = document.querySelectorAll("#mdDescripcion");
        mdDescripcion.forEach((descrip) => {
            descrip.style.display = "block";

        });


        const btnCerrar = document.querySelectorAll("#btnCerrar");
        btnCerrar.forEach((cerrar, index) => {
            cerrar.style.cursor = "pointer";
            cerrar.addEventListener("click", () => {
                mdDescripcion.forEach((descrip2) => {
                    descrip2.style.display = "none";
                });
            })
        });

    })
});
