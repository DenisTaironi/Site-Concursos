<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Site\Usuario;
use App\Http\Requests\Site\UsuarioFormRequest;

class UsuarioController extends Controller   
{
    private $usuario;
    

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Tela de usuario após cadastro ou login";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Usuário';
        $orgao_emissor = ['SSP','Outro'];
        $uf_orgao_emissor = ['CE','BA','Outro'];
        $nacionalidade = ['Brasileiro','Outro'];
        $naturalidade = ['Cearense','Outro'];
        $sexo = ['Masculino','Feminino'];
        $estado_civil = ['Solteiro','Casado','Viúvo','Separado'];
        $raca = ['Branca','Negra'];
        $escolaridade = ['Fundamental Completo','Outro'];
        $logradouro = ['Rua','Travessa'];
        $uf = ['CE','BA','SP'];
        $municipio = ['Fortaleza','Outro'];
       

        return view('site.usuarios.cadastro_usuario', 
                compact('title','orgao_emissor','uf_orgao_emissor','nacionalidade','naturalidade','sexo','estado_civil','raca','escolaridade','logradouro','uf','municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {
        //Pega todos os dados que vem do formulario exceto o campo tokken
        $dataForm = $request->all();        

        //debugador
        //dd($dataForm);
        //testa se o termo de autorização esta marcado
        $dataForm ['usu_autorizacao'] = ( !isset ($dataForm ['usu_autorizacao'])) ? 0 : 1;

       // $dados_usuario = Dados_usuario::create($dataForm);

        //$dataForm['dados_usu_id'] = $dados_usuario->id;
       
       // $dados_usuario = $usuario->dados_usuario()->create($dataForm);

        //valida os dados
        //$this->validate($request, $this->usuario->rules);
        //outra maneira de validar dados
        /*
        $validate = validator($dataForm, $this->usuario->rules);
        if($validate->fails()){
            return redirect()
                    ->route('usuario.create')
                    ->withErrors($validate)
                    ->withInput();
        }
        */




        //Faz o cadastro no banco
        $insert = $this->usuario->create($dataForm);

        if( $insert )     
            return redirect()->route('usuario.index');
        else
            /*
            $validate = validator($dataForm);
            $errors = $validate->errors();
            $errorMessage = '';
            foreach ($rules as $key => $value) {
                if ($errors->has($key)) {
                    $errorMessage = $errors->first($key);
                    break;
                }
            }
            */
            return redirect()->route('usuario.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "entrou no update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function teste()
    {
        $usuario = Usuario::where('usu_id','1')->get()->first();

        echo $usuario->usu_nome;
        echo $usuario->usu_login;
        echo $usuario->usu_email;
        echo $usuario->usu_cpf;
        return "Tela de teste";
    }
}
