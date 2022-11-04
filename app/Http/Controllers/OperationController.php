<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

/**
 * Class OperationController
 * @package App\Http\Controllers
 */
class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Operation::paginate();

        return view('operation.index', compact('operations'))
            ->with('i', (request()->input('page', 1) - 1) * $operations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operation = new Operation();
        return view('operation.create', compact('operation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operacoes = $request->except('_token');
        foreach ($operacoes as $column => $value) {
            $inputs = explode("_",$column);
            $operations[$inputs[1]][$inputs[0]] = $value;
        }
        foreach ($operations as $operation) {
            if (!empty($operation['strat']))
                Operation::create([
                    'team_id' => Auth()->user()->team[0]->id,
                    'name' => $operation['name'],
                    'strat' => $operation['strat'],
                    'break' => $operation['break'],
                    'return' => $operation['return'],
                    'closure' => $operation['closure']
                ]);
        }

        request()->validate(Operation::$rules);
        return redirect()->route('operations.index')
            ->with('success', 'Horários de Funcionamento Cadastrado. created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operation = Operation::find($id);

        return view('operation.show', compact('operation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operation = Operation::find($id);

        return view('operation.edit', compact('operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Operation $operation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operation $operation)
    {
        request()->validate(Operation::$rules);

        $operation->update($request->all());

        return redirect()->route('operations.index')
            ->with('success', 'Operation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $operation = Operation::find($id)->delete();

        return redirect()->route('operations.index')
            ->with('success', 'Operation deleted successfully');
    }
}
