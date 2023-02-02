{{> headerWithSidebar}}

<div class="w3-content w3-margin-top">
    <div class="w3-center my-3em">
        <h1>{{successMessage}} {{errorMessage}}</h1>
    </div>

    <form action="editVehicle" method="post" class="login-form">
        <div class="container-title"><p>Editar Vehículo</p></div>

        <div class="container">

            {{#vehicle}}
                <input type="hidden" value="{{id_unidad_de_transporte}}" name="idTransportUnit">
                <input type="hidden" value="{{id_tipo_vehiculo}}" id="type-hidden">
                <input type="hidden" value="{{id_marca}}" id="brand-hidden">
                <input type="hidden" value="{{id_modelo}}" id="model-hidden">
                <input type="hidden" value="{{activo}}" id="active-hidden">

                <label for="patentNumber"><b>Patente <span style="color: red">*</span></b></label>
                <input type="text" value="{{patente}}" placeholder="Ingresar número de patente" name="patentNumber" class="login-input" required>

                <label for="yeorOfProduction"><b>Año de fabricación <span style="color: red">*</span></b></label>
                <input type="text" value="{{anio_fabricacion}}" placeholder="Ingresar año de fabricación" name="yeorOfProduction" class="login-input">

                <label for="engineNumber"><b>Motor <span style="color: red">*</span></b></label>
                <input type="text" value="{{numero_motor}}" placeholder="Ingresar número de motor" name="engineNumber" class="login-input" required>

                <label for="chassisNumber"><b>Chasis <span style="color: red">*</span></b></label>
                <input type="text" value="{{numero_chasis}}" placeholder="Ingresar número de chasis" name="chassisNumber" class="login-input" required>

                <label for="kilometers"><b>Kilometros <span style="color: red">*</span></b></label>
                <input type="number" value="{{kilometraje}}" placeholder="Ingresar kilometros de la unidad" name="kilometers" class="login-input" required>

                <label for="typeOfVehicle"><b>Tipo de vehículo <span style="color: red">*</span></b></label>
                <select class="w3-select" name="typeOfVehicle" id="type-of-vehicle-select">
                    {{# typesOfVehicles }}
                    <option value="{{ id_tipo_vehiculo }}">
                    {{ nombre }}
                    </option>
                    {{/ typesOfVehicles }}
                </select>

                <label for="brand"><b>Marca <span style="color: red">*</span></b></label>
                <select class="w3-select" name="brand" id="brand-select">
                    {{# brands }}
                    <option value="{{ id_marca }}">
                        {{ nombre }}
                    </option>
                    {{/ brands }}
                </select>

                <label for="model"><b>Modelo <span style="color: red">*</span></b></label>
                <select class="w3-select" name="model" id="models-select">
                    {{# models }}
                    <option value="{{ id_modelo }}">
                        {{ nombre }}
                    </option>
                    {{/ models }}
                </select>

                <label for="active"><b>Activo </b></label>
                <input class="w3-radio" type="radio" name="active" value="1" checked>
                <label>Si</label>
                <input class="w3-radio" type="radio" name="active" value="0">
                <label>No</label>

                <button class="form-button w3-round w3-green w3-margin-top" type="submit">Editar</button>

            {{/vehicle}}

            <div class="w3-margin-bottom">
                <a href="/pw2-grupo03/transportUnit" class="w3-button w3-blue w3-medium w3-block w3-round text-decoration-none">Volver</a>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        var type = $("#type-hidden").val();
        $("#type-of-vehicle-select").val(type);

        var brand = $("#brand-hidden").val();
        $("#brand-select").val(brand);

        var model = $("#model-hidden").val();
        $("#models-select").val(model);

        var active = $("#active-hidden").val();
        $("input[name=active][value=" + active + "]").prop('checked', true);
    });
</script>

{{> footerSidebarFixed}}
