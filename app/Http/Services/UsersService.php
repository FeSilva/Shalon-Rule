<?php 
/**
 * ANCHOR CompanyService
 * Responsável pela lógica e comunicação com o repositorio da company
 */
namespace App\Http\Services;

use App\Models\Usuarios\UsuariosRepository;
use Illuminate\Support\Facades\Storage;
use App\Models\ServiceUser;
class UsersService
{
    private $repository;

    public function __construct(UsuariosRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUsersJson()
    {
        return $this->jsonUserTable($this->repository->getUserTeam());
    }

    public function store($userData)
    {
        return $this->repository->store($userData);
    }

    public function updateServiceUser($services_id, $user_id)
    {
    
        ServiceUser::where('user_id', $user_id)->delete();
        foreach($services_id as $service_id) {
            ServiceUser::create([
                'service_id' => $service_id,
                'user_id' => $user_id,
                'amount_for_personal' => 0
            ]);
        } 
        return true;
    }

    /**
     * Buscar um usuário pelo ID
     */
    public function getUserById($id)
    {
        return $this->repository->find($id);
    }
     /**
     * Função responsável pela criação do json de leitura da tabela de usuários.
     */
    private function jsonUserTable($json)
    {
        try{
           return Storage::disk('public')->put("/tables/table-users-list.json", $json);
        }catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
