<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *   @return \Illuminate\Http\Response 
     */
    public function index()
    {
        //
    }
    public function register(){
        return view('auth.register');
    }

    public function home(){
        return view('home.index');
    }
    public function registerVerify(Request $request){
        $request->validate([
            'nombre'=> 'required:users,nombre',
            'apellido'=> 'required:users,apellido',
            'email'=> 'required|unique:users,email|email',
            'password'=> 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);
        User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);
    return redirect()->route('login')->with('success','Usuario Registrado Correctamente');
    }
    public function login(Request $request){
        return  view('auth.login');
    }
    public function loginVerify(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:4',
    ]);
    //validar si las credenciales son correctas
    if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){
        return redirect()->route('dashboard');
    }
    return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña no valida'])->withInput();
 }
 public function signOut(){
    Auth::logout();
    return redirect()->route('login')->with('success','session cerrada correctamente');
 }
}
