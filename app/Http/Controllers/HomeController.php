<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CatatanKeuangan;
use App\Models\Category;
use App\Models\Galery;
use App\Models\JamBuka;
use App\Models\Menu;
use App\Models\Team;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Request $request)
    {
        $data['page_title'] = 'Dashboard';

        return view('dashboard', $data);
    }

    public function index(Request $request)
    {
        $data['page_title'] = 'Home';
        $data['testimoni'] = Testimoni::get();
        $data['galery'] = Galery::get();
        $data['category'] = Category::get();
        $data['menu'] = Menu::get();
        $data['jambuka'] = JamBuka::get();
        $data['team'] = Team::get();
        $data['about'] = About::first();

        return view('landing/index', $data);
    }

    public function bookTable(Request $request)
    {
        // Validasi formulir disini jika diperlukan

        // Ambil data dari formulir
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $date = $request->input('date');
        $time = $request->input('time');
        $people = $request->input('people');
        $message = $request->input('message');

        // Format pesan untuk dikirim ke WhatsApp
        $whatsapp_message = "Nama: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\n# of People: $people\nMessage: $message";

        // Encode pesan untuk URL
        $encoded_message = urlencode($whatsapp_message);

        // Nomor WhatsApp tujuan
        $whatsapp_number = "6281264761015"; // Ganti dengan nomor WhatsApp yang dituju

        // URL untuk mengarahkan ke WhatsApp dengan pesan yang disiapkan
        $whatsapp_url = "https://api.whatsapp.com/send/?phone=$whatsapp_number&text=$encoded_message";

        // Redirect pengguna ke URL WhatsApp
        return redirect()->away($whatsapp_url);
    }
}
