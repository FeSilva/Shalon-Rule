@extends('layouts.contentLayoutMaster')



@section('title', 'Configurações do Grupo')

@section('content')
  @livewire('teams.update-team-name-form', ['team' => $team])

  @livewire('teams.team-member-manager', ['team' => $team])

  @if (Gate::check('delete', $team) && !$team->personal_team)

    @livewire('teams.delete-team-form', ['team' => $team])
  @endif
@endsection
