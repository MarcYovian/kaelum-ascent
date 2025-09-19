<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ServicesComponent extends Component
{
    public array $packages = [];
    public array $process = [];
    public array $faqs = [];

    /**
     * Method ini dijalankan saat komponen pertama kali di-mount.
     * Kita mengisi semua data di sini.
     */
    public function mount(): void
    {
        $this->packages = [
            [
                "name" => "Basecamp",
                "price" => "Starting from IDR 3,500,000",
                "description" => "Perfect for small businesses getting started online",
                "features" => [
                    "Modern responsive website design",
                    "Up to 5 pages",
                    "Basic SEO optimization",
                    "Contact form integration",
                    "Mobile-friendly design",
                    "1 month support",
                    "Basic hosting setup"
                ],
                "popular" => false
            ],
            [
                "name" => "Expedition",
                "price" => "Starting from IDR 7,500,000",
                "description" => "Ideal for growing businesses with enhanced features",
                "features" => [
                    "Everything in Basecamp",
                    "Up to 10 pages",
                    "Interactive digital catalog/gallery",
                    "Advanced SEO optimization",
                    "Professional photography session",
                    "Social media integration",
                    "3 months support",
                    "Premium hosting setup",
                    "Basic analytics setup"
                ],
                "popular" => true
            ],
            [
                "name" => "Summit",
                "price" => "Starting from IDR 15,000,000",
                "description" => "Complete digital solution for established businesses",
                "features" => [
                    "Everything in Expedition",
                    "Unlimited pages",
                    "Custom web application features",
                    "E-commerce capabilities",
                    "Advanced analytics & reporting",
                    "Multi-language support",
                    "6 months support",
                    "Enterprise hosting",
                    "Custom integrations",
                    "Professional video content"
                ],
                "popular" => false
            ]
        ];

        $this->process = [
            [
                "step" => 1,
                "title" => "Discussion & Strategy",
                "description" => "We start by understanding your vision, goals, and target audience to create a tailored strategy."
            ],
            [
                "step" => 2,
                "title" => "Design & Development",
                "description" => "Our team brings your vision to life with stunning design and robust development."
            ],
            [
                "step" => 3,
                "title" => "Revision & Feedback",
                "description" => "We work closely with you to refine every detail until it perfectly matches your expectations."
            ],
            [
                "step" => 4,
                "title" => "Launch & Support",
                "description" => "We handle the launch and provide ongoing support to ensure your success."
            ]
        ];

        $this->faqs = [
            [
                "question" => "How long does it take to complete a website project?",
                "answer" => "Project timelines vary based on complexity. Basecamp projects typically take 2-3 weeks, Expedition projects 4-6 weeks, and Summit projects 8-12 weeks. We'll provide a detailed timeline during our initial consultation."
            ],
            [
                "question" => "Can I update the website content myself after completion?",
                "answer" => "Absolutely! All our websites come with user-friendly content management systems. We provide training and documentation so you can easily update text, images, and basic content whenever needed."
            ],
            [
                "question" => "What do I need to prepare before starting the project?",
                "answer" => "We'll guide you through everything, but having your brand assets (logo, colors, images), content outline, and reference websites you like will help speed up the process. Don't worry if you don't have everything ready - we can help you develop these elements."
            ],
            [
                "question" => "Do you provide payment system integration?",
                "answer" => "Yes! We can integrate various payment systems including local Indonesian payment gateways, international options like Stripe, and popular e-wallet solutions. This ensures your customers can pay using their preferred methods."
            ]
        ];
    }

    /**
     * Method ini hanya merender view dan mengirimkan data yang sudah ada.
     */
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.services-component');
    }
}
