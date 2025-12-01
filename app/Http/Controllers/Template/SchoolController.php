<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Display the about us page.
     *
     * @return \Illuminate\View\View
     */
    public function tentang(): View
    {
        return view('tentang');
    }

    /**
     * Display the programs page.
     *
     * @return \Illuminate\View\View
     */
    public function program(): View
    {
        return view('program');
    }

    /**
     * Display the news listing page.
     *
     * @return \Illuminate\View\View
     */
    public function berita(): View
    {
        // CMS will populate this with actual news data
        return view('berita');
    }

    /**
     * Display a single news detail page.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function beritaDetail(string $slug): View
    {
        // CMS will fetch news detail by slug
        return view('berita-detail', compact('slug'));
    }

    /**
     * Display the gallery page.
     *
     * @return \Illuminate\View\View
     */
    public function galeri(): View
    {
        return view('galeri');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function kontak(): View
    {
        return view('kontak');
    }

    /**
     * Handle contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function kontakSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // CMS will handle storing contact messages
        // DB::table('contact_messages')->insert($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
    }

    /**
     * Display the PPDB (admission) page.
     *
     * @return \Illuminate\View\View
     */
    public function ppdb(): View
    {
        return view('ppdb');
    }
}
