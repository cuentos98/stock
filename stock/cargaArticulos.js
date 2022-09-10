function sumarArticulo() {
    const cantidadElem = document.getElementById("cantidad");
    cantidadElem.valueAsNumber++;

    const cantidadAgregados = cantidadElem.valueAsNumber;

    const agregados = document.getElementById("agregados");

    const articulo = document.getElementById("articulo");

    const option = articulo[articulo.selectedIndex];

    console.log(option);

    const html = `<div class="col-6 text-center">
    <select class="form-select" id="articulo${cantidadAgregados}" name="articulo${cantidadAgregados}" disabled>
        <option value="${option.value}">${option.text}</option>
    </select>
    </div>
    <div class="col-2 text-center">
        <input class="form-control w-75 m-auto" type="number" value=1 id="cantidad${cantidadAgregados}" name="cantidad${cantidadAgregados}" disabled>
    </div>
    <div class="col-3 text-center">
        <input class="form-control w-75 m-auto" value=650 id="precio${cantidadAgregados}" name="precio${cantidadAgregados}" disabled></input>
    </div>
    <div class="col-1 text-center">
        <button type="button" onclick="eliminarArticulo()" class="btn btn-dark botonTarjetas px-4 py-1 h-100 text-center border-0" role="button"><i class="fas fa-times"></i></button>
    </div>
    `

    agregados.insertAdjacentHTML("beforeend", html);

}