<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactComponent extends Component
{
    // Properti untuk data formulir dengan validasi
    #[Rule('required|min:3', as: 'full name')]
    public string $fullName = '';

    #[Rule('required|email', as: 'email address')]
    public string $email = '';

    #[Rule('nullable|string', as: 'WhatsApp number')]
    public string $whatsapp = '';

    #[Rule('nullable|string', as: 'business name')]
    public string $businessName = '';

    #[Rule('nullable|string')]
    public string $service = '';

    #[Rule('nullable|string')]
    public string $budget = '';

    #[Rule('required|min:10', as: 'message')]
    public string $message = '';

    // Data statis untuk halaman
    public array $services = [];
    public array $budgetRanges = [];
    public array $nextSteps = [];
    public array $contactMethods = [];

    /**
     * Inisialisasi data saat komponen di-mount.
     */
    public function mount(): void
    {
        $this->services = [
            'Website Development',
            'E-commerce Solution',
            'Custom Web App',
            'Professional Photography',
            'Digital Marketing',
            'I\'m Not Sure/Other'
        ];

        $this->budgetRanges = [
            'Under IDR 5,000,000',
            'IDR 5,000,000 - 10,000,000',
            'IDR 10,000,000 - 25,000,000',
            'IDR 25,000,000 - 50,000,000',
            'Over IDR 50,000,000',
            'Let\'s Discuss'
        ];

        $this->nextSteps = [
            [
                'step' => 1,
                'title' => 'Confirmation',
                'description' => 'You\'ll receive an automated email confirmation within minutes.'
            ],
            [
                'step' => 2,
                'title' => 'Personal Response',
                'description' => 'One of our founders will reply within 1x24 business hours.'
            ],
            [
                'step' => 3,
                'title' => 'Schedule Discussion',
                'description' => 'The next step is a brief, no-commitment call or meeting.'
            ]
        ];

        $this->contactMethods = [
            [
                'icon' => 'mail',
                'title' => 'Email',
                'value' => 'hello@kaelumascent.com',
                'link' => 'mailto:hello@kaelumascent.com',
            ],
            [
                'icon' => 'message-circle',
                'title' => 'WhatsApp',
                'value' => '+62 812-3456-7890',
                'link' => 'https://wa.me/6281234567890',
            ],
            [
                'icon' => 'phone',
                'title' => 'Phone',
                'value' => '+62 812-3456-7890',
                'link' => 'tel:+6281234567890',
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Location',
                'value' => 'Surabaya, Indonesia',
                'link' => '#',
            ]
        ];
    }

    /**
     * Method untuk menangani pengiriman formulir.
     */
    public function submit()
    {
        // Jalankan validasi
        $this->validate();

        // Di sini Anda bisa menambahkan logika untuk mengirim email
        // Mail::to('admin@kaelumascent.com')->send(new ContactFormMail($this->all()));

        // Kirim notifikasi sukses ke frontend
        session()->flash('success', 'Message sent successfully! We\'ll get back to you within 24 hours.');

        // Reset semua field formulir
        $this->reset();
    }

    /**
     * Render komponen view.
     */
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.contact-component');
    }
}
