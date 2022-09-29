<?php

namespace App\Models\Usuarios;

use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsuariosRepository
{
    private $model;
    private $teamModel;

    public function __construct(User $model, Team $teamModel)
    {
        $this->model = $model;
        $this->teamModel = $teamModel;
    }

    public function store($userData)
    {
        $this->model->
        $this->model->create([
            'name' => $userData['name'],
            'last_name' => $userData['last_name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'tax_id' => $userData['tax_id'],
        ]);


    }
    public function getUserTeam()
    {
        $users = $this->model->get();
       
        foreach ($users as $key => $user)
        {
           
            $teamFind = $this->teamModel->find($user->current_team_id);
            $team = $this->currenteNameTeam($teamFind, $user);

            $data['data'][] = [
                'responsive_id' => $user->id,
                'full_name' => $user->name,
                'email' => $user->email,
                'team' => $team,
                'role' => 'Admin',
                'avatar' => $user->profile_photo_path
            ];
        }

        return json_encode($data, true);
    }

    public function find($id)
    {
        return $this->model->with("team")->find($id);
    }

    private function currenteNameTeam($teams, $user)
    {
            if ($teams->id == $user->current_team_id)
                $team_name = $teams->name;
        return $team_name;
    }
}
