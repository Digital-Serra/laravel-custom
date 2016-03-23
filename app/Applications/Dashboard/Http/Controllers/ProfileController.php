<?php

namespace App\Http\Controllers\Dashboard;

use App\Entities\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProfileFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Krucas\Notification\Facades\Notification;

class ProfileController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * ProfileController constructor.
     * @param User $user
     * @param Notification $notification
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        return view('dashboard.profile.edit');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ProfileFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileFormRequest $request)
    {
        // Verify if the passwords match...
        if (Hash::check($request->old_password, auth()->user()->getAuthPassword()))
        {
            $this->user->find(auth()->user()->id)
                ->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password' => bcrypt($request->password)
                ]);

            Notification::success('Seu Perfil foi atualizado com sucesso');

            return redirect()->back();
        }

        Notification::error('Por favor informe a sua senha atual corretamente!');

        return redirect()->back();
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
}
