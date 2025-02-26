<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromoRequest;
use App\Models\PromoReferral;

class PromoReferralController extends Controller
{
    protected $model;

    public function __construct(PromoReferral $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        $promos = $this->model->get();

        return view('admin.promo_referral.index', compact('promos'));
    }

    public function store(PromoRequest $request)
    {
        $this->model->create($request->all());

        return redirect()->route('promo.index');
    }

    public function destroy($id)
    {
        $promo = $this->model->findOrfail($id);
        $promo->delete();

        return redirect()->route('promo.index');
    }
}
