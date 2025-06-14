<?php
require_once "Models/Dashboard.php";

class DashboardController {
    public function inicio() {
        $modelo = new Dashboard();

        $ingresosHoy = $modelo->contarIngresosHoy();
        $casillerosDisponibles = $modelo->contarCasillerosDisponibles();
        $personas = $modelo->contarPersonas();
        $totalIngresos = $modelo->contarTotalIngresos();
        $salidasHoy = $modelo->contarSalidasHoy();

        require_once "Views/dashboard/inicio.php";
    }
}
