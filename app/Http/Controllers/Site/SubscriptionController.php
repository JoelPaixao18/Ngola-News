<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        Subscription::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Obrigado por subscrever! Você receberá notícias em destaque.'
        ])->cookie('subscribed', true, 525600); // 525600 minutos = 1 ano
    }
}
