<?php

namespace App\Actions\Jetstream;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Contracts\UpdatesTeamNames;

class UpdateTeamName implements UpdatesTeamNames
{
    /**
     * Validate and update the given team's name.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  array  $input
     * @return void
     */
    public function update($user, $team, array $input)
    {
        Gate::forUser($user)->authorize('update', $team);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'profile_photo_path' => ['image','max:1024']
        ])->validateWithBag('updateTeamName');

        if (isset($input['photo'])) {
            $team->updateProfilePhoto($input['photo']);
        }

        $team->forceFill([
            'name' => $input['name'],
            'zipcode' => $input['zipcode'],
            'phone' => $input['phone']
        ])->save();
    }
}
