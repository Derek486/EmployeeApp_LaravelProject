<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * functions
     * index -> mostrar todos los empleados
     * store -> guardar empleado
     * delete -> eliminar empleado
     * show -> mostrar empleado para actualizar
     * update -> actualizar empleado
     */
    public function index() {

        // Obtenemos todos los empleados
        $employees = Employee::all();

        // Redirecciona a la vista index con todos los empleados para listarlos
        return view('employees.index', ['employees' => $employees]);

    }
    public function store(Request $request) {

    }
    public function delete($id) {

    }
    public function show(Request $request) {

    }
    public function update(Request $request) {

    }
}
