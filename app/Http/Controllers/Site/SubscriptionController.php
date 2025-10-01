<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionNotificationMail;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // validação do email
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        // salvar no banco
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        // enviar email de confirmação
        Mail::to($subscription->email)->send(new SubscriptionNotificationMail($subscription->email));

        // resposta em JSON + cookie
        return response()->json([
            'success' => true,
            'message' => 'Obrigado por subscrever! Você receberá notícias em destaque.'
        ])->cookie('subscribed', $request->email, 525600); // 525600 minutos = 1 ano
    }
}
