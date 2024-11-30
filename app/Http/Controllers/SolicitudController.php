<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('Solicitudes');
    }

    public function create()
    {
        return view('ModalSoli');
    }
    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
    public function modals()
    {
        return view('ModalSoli');
    }

}