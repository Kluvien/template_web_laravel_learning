<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TemplatePageController extends Controller
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
    public function aboutUs(): View
    {
        return view('pages.about-us');
    }

    /**
     * Display the facilities page.
     *
     * @return \Illuminate\View\View
     */
    public function facilities(): View
    {
        return view('pages.facilities');
    }

    /**
     * Display the PPDB page.
     *
     * @return \Illuminate\View\View
     */
    public function ppdb(): View
    {
        return view('pages.ppdb');
    }

    /**
     * Display the news/blog listing page.
     *
     * @return \Illuminate\View\View
     */
    public function news(): View
    {
        return view('pages.news');
    }

    /**
     * Display a single news/blog post.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function newsDetail(string $slug): View
    {
        return view('pages.news-detail', compact('slug'));
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Display the gallery page.
     *
     * @return \Illuminate\View\View
     */
    public function gallery(): View
    {
        return view('pages.gallery');
    }

    /**
     * Display the management page.
     *
     * @return \Illuminate\View\View
     */
    public function management(): View
    {
        return view('pages.management');
    }

    /**
     * Display the curriculum page.
     *
     * @return \Illuminate\View\View
     */
    public function curriculum(): View
    {
        return view('pages.curriculum');
    }

    /**
     * Handle contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Process contact form (save to database, send email, etc.)
        // This is a placeholder - implement based on your requirements

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
