<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Media;
use App\Models\Program;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingNotification;

class PackageController extends Controller
{
    public function index($id)
    {
        $programs = Program::where('sub_category_id', $id)->get();
        $sub_category = SubCategory::where('id', $id)->first();
        $page_title = $sub_category->name . ' Packages';
        return view('Front.packages', compact('programs', 'page_title'));
    }

    public function details($id)
    {

        $program = Program::with('media')->findOrFail($id);
        $programs_suggest = Program::where('sub_category_id', $program->sub_category_id)->limit(3)->get();
        return view('Front.package-details', compact('program', 'programs_suggest'));
    }

    public function storeBooking(BookingRequest $request)
    {
        // التحقق من صحة كود الخصم إذا كان موجوداً
        if ($request->promo_code) {
            $promoExists = DB::table('promo_referrals')
                            ->where('code', $request->promo_code)
                            ->exists();
    
            if (!$promoExists) {
                return redirect()->back()->withErrors(['promo_code' => 'Invalid promo code.']);
            }
        }
    
        // إعداد بيانات الحجز مع معالجة حقل addons
        $bookingData = $request->validated();
        
        // تعيين قيمة افتراضية إذا كان addons فارغاً
        if (!isset($bookingData['addons']) || is_null($bookingData['addons'])) {
            $bookingData['addons'] = '';
        }
    
        // إنشاء الحجز
        $booking = Booking::create($bookingData);
    
        // إرسال البريد الإلكتروني للإدارة
        Mail::to('Info@lillytour.com')->send(new BookingNotification($booking));
    
        return redirect()->back()->with('success', 'Your booking has been submitted successfully! We will contact you soon.');
    }
}
