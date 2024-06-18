<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Perfil;
use App\Models\Empreendedor;
use App\Models\Investidor;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class main extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('index', ['user' => $user]);
    }

    public function form()
    {
        $user = auth()->user();
        return view('form', ['user' => $user]);
    }

    public function faleConnosco()
    {
        $user = auth()->user();
        return view('welcome', ['user' => $user]);
    }

    public function info()
    {
        $user = auth()->user();
        return view('info', ['user' => $user]);
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function erro()
    {
        return redirect()->back();
    }

    public function store(Request $request)
    {
        // Validações
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'tipo' => 'required|in:empreendedor,investidor,admin',
            'contactoempreendedor' => 'required_if:tipo,empreendedor|string|max:255',
            'hestoricoDeEmpreendedorismo' => 'required_if:tipo,empreendedor|string|max:1000',
            'contactoinvestidor' => 'required_if:tipo,investidor|string|max:255',
            'areasDeInteresseDeInvestimento' => 'nullable|string|max:1000',
            'historicoDeInvestimento' => 'nullable|string|max:1000'
        ]);

        // Criando e salvando os dados do usuário
        $User = new User;
        $User->nome = $request->nome;
        $User->email = $request->email;
        $User->password = bcrypt($request->password);
        $User->tipo = $request->tipo;
        $User->save();

        // Salvando dados específicos do empreendedor ou investidor
        if ($request->tipo === 'empreendedor') {
            Empreendedor::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'contactoempreendedor' => $request->contactoempreendedor,
                'hestoricoDeEmpreendedorismo' => $request->hestoricoDeEmpreendedorismo,
                'id_User' => $User->id,
            ]);
        } elseif ($request->tipo === 'investidor') {
            Investidor::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'contactoinvestidor' => $request->contactoinvestidor,
                'areasDeInteresseDeInvestimento' => $request->areasDeInteresseDeInvestimento,
                'historicoDeInvestimento' => $request->historicoDeInvestimento,
                'id_User' => $User->id,
            ]);
        }

        // Autenticando o usuário
        Auth::login($User);

        // Exibindo mensagem de sucesso
        Alert::success('Usuário', 'Cadastrado com sucesso!');

        // Redirecionar com base no tipo de usuário
        if ($request->tipo === 'empreendedor') {
            return redirect()->route('empreendedor.mensagens'); // Certifique-se de que esta rota está configurada
        } elseif ($request->tipo === 'investidor') {
            return redirect()->route('investidor.mensagens'); // Certifique-se de que esta rota está configurada
        }

        // Redirecionar para uma rota padrão caso o tipo seja 'admin' ou outro
        return redirect()->route('dashboard');
    }

}

