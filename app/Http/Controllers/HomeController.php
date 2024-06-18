<?php
namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\investidor;
use App\Models\empreendedor;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function loadData()
    {
        return [
            'Perfil_tot' => Perfil::count(),
            'Perfil' => Perfil::all(),
            'usuarios_tot' => User::count(),
            'usuarios' => User::all(),
            'empreendedores_tot' => empreendedor::count(),
            'empreendedor' => empreendedor::all(),
            'investidores_tot' => investidor::count(),
            'investidor' => investidor::all(),
            'Project_tot' => Project::count(),
            'Project' => Project::all()
        ];
    }

    public function PerfilUser(){

        return view('perfiluser.index');
    }

    public function PerfilMens(){

        return view('perfiluser.mensagem');
    }

    public function form()
    {
        return view('form', $this->loadData());
    }

    public function test()
    {
        return view('dashboard', $this->loadData());
    }

    public function index()
    {
        return view('dashboard', $this->loadData());
    }

    public function receber()
    {
        return view('notifications', $this->loadData());
    }

    public function ver()
    {
        return view('user', $this->loadData());
    }

    public function listar()
    {
        return view('tables', $this->loadData());
    }
    public function empreendedores()
    {
        return view('empreendedor', $this->loadData());
    }
    public function investimento()
    {
        return view('investidor', $this->loadData());
    }

}
