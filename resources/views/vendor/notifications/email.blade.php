@component('mail::message')
{{-- Saudação --}}
# Olá!

{{-- Texto inicial --}}
Você está recebendo este e-mail porque foi solicitada a redefinição da senha da sua conta.

{{-- Botão --}}
@component('mail::button', ['url' => $actionUrl, 'color' => 'success'])
Redefinir Senha
@endcomponent

{{-- Texto final --}}
Se você não fez essa solicitação, ignore este e-mail.  
Sua senha continuará a mesma.

{{-- Assinatura --}}
Obrigado,<br>
{{ config('app.name') }}

{{-- Subcopy (link alternativo) --}}
@slot('subcopy')
Se você estiver com dificuldades para clicar no botão, copie e cole o link abaixo em seu navegador:  
[{{ $displayableActionUrl }}]({{ $actionUrl }})
@endslot
@endcomponent
@extends('layouts.app')