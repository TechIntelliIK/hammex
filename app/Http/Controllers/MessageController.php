<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'empresa' => 'required',
            'industria' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'El campo de Nombre es obligatorio.',
            'email.required' => 'El campo de Correo Electrónico es obligatorio.',
            'email.email' => 'El Correo Electrónico tiene que ser valido.',
            'phone.required' => 'El campo de Número Teléfonico es obligatorio.',
            'phone.numeric' => 'El campo de Número Teléfonico tiene que ser númerico.',
            'empresa.required' => 'El campo de Empresa es obligatorio',
            'industria.required' => 'El campo de Industria es obligatorio.',
            'subject.required' => 'El campo de Adunto es obligatorio.',
            'message.required' => 'El campo de Mensaje es obligatorio.',
        ]);

        Mail::to('ventas@hammex.mx')->queue(new MessageRecived($msg));

        return redirect(route('home') . '#contact')->with('message', '<strong>¡Exito!</strong> El mensaje ha sido enviado exitosamente, uno de nuestros asesores se comunicara contigo a brevedad.');

    }
}
