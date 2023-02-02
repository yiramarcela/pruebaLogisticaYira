{{> header}}

<div class="w3-content my-3em">
    {{#_SESSION.admin}}
    <div class="w3-content w3-section">
        <div class="w3-container ">
            <a href="/pw2-grupo03/usuarios" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Usuarios<b></a>
        </div>
    </div>
    <div class="w3-content w3-section">
        <div class="w3-container ">
            <a href="/pw2-grupo03/report" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Reportes<b></a>
        </div>
    </div>
    {{/_SESSION.admin}}
    {{#_SESSION.supervisor}}
    <div class="w3-content w3-section">
        <div class="w3-container ">
            <a href="/pw2-grupo03/client" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Clientes</b></a>
        </div>
    </div>
    <div class="w3-content w3-section">
        <div class="w3-container ">
            <a href="/pw2-grupo03/transportUnit" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Flota de Vehiculos</b></a>
        </div>
    </div>
    <div class="w3-content w3-section">
        <div class="w3-container">
            <a href="/pw2-grupo03/bill" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Facturas</b></a>
        </div>
    </div>
    {{/_SESSION.supervisor}}
    {{#_SESSION.canSeeVehiclePositionBtn}}
    <div class="w3-content w3-section">
        <div class="w3-container">
            <a href="/pw2-grupo03/transportUnit/getVehiclePosition"
               class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Consultar posición de vehículo<b></a>
        </div>
    </div>
    {{/_SESSION.canSeeVehiclePositionBtn}}
    {{#_SESSION.encargado}}
    <div class="w3-content w3-section">
        <div class="w3-container ">
            <a href="/pw2-grupo03/service" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Mantenimiento de Vehiculos<b></a>
        </div>
    </div>
    {{/_SESSION.encargado}}
    {{#_SESSION.canSeeViajesBtn}}
    <div class="w3-content w3-section">
        <div class="w3-container">
            <a href="/pw2-grupo03/travel" class="w3-button w3-block w3-amber w3-padding-large w3-round-large"><b>Viajes<b></a>
        </div>
    </div>
    {{/_SESSION.canSeeViajesBtn}}
</div>

{{> footer}}