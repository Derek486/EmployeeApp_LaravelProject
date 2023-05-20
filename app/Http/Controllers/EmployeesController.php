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

        // Creamos un nuevo empleado
        $employee = new Employee;

        // Insertamos valores
        $employee -> name = $request -> name;
        $employee -> lastName = $request -> lastName;
        $employee -> dni = $request -> dni;
        $employee -> salary = $request -> salary;
        $employee -> cellphone = $request -> cellphone;

        $employee -> save();

        // Redireccionamos a ruta de index
        return redirect()->route('employee-index')->with('success', 'Empleado registrado');
    }
    public function delete($id) {

        // Eliminamos al empleado con dicho id
        Employee::destroy($id);

        // Redireccionamos a ruta de index
        return redirect()->route('employee-index')->with('success', 'Empleado eliminado');
    }
    public function show(Request $request) {

    }
    public function update(Request $request) {

    }
}
