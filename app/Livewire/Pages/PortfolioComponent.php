<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PortfolioComponent extends Component
{
    public array $projects = [];
    public array $testimonials = [];
    public array $categories = [];

    public function mount(): void
    {
        $this->projects = [
            [
                'id' => 'anakala-digital-identity',
                'title' => 'Anakala Digital Identity',
                'category' => 'Website Development',
                'tags' => ['Website Development', 'Corporate Branding', 'Photography'],
                'image' => '/placeholder-project-1.jpg',
                'description' => 'Complete digital transformation for a rising Indonesian brand with elegant website design and professional photography.',
            ],
            [
                'id' => 'ecommerce-platform',
                'title' => 'Modern E-commerce Platform',
                'category' => 'E-commerce',
                'tags' => ['E-commerce', 'Custom Development', 'Payment Integration'],
                'image' => '/placeholder-project-2.jpg',
                'description' => 'Scalable online store with advanced features, payment integration, and inventory management system.',
            ],
            [
                'id' => 'corporate-website',
                'title' => 'Professional Corporate Website',
                'category' => 'Corporate',
                'tags' => ['Website Development', 'SEO', 'Content Strategy'],
                'image' => '/placeholder-project-3.jpg',
                'description' => 'Professional corporate presence with advanced SEO optimization and content management system.',
            ],
            [
                'id' => 'mobile-app',
                'title' => 'Custom Mobile Application',
                'category' => 'Mobile App',
                'tags' => ['Mobile App', 'Custom Development', 'User Experience'],
                'image' => '/placeholder-project-4.jpg',
                'description' => 'Native mobile application with intuitive user experience and seamless performance.',
            ]
        ];

        $this->testimonials = [
            [
                'name' => 'Sarah Johnson',
                'title' => 'Marketing Director',
                'company' => 'Anakala',
                'testimonial' => 'Kaelum Ascent transformed our digital presence completely. The website they created not only looks stunning but also drives real business results. Their team understood our vision perfectly.',
                'rating' => 5
            ],
            [
                'name' => 'Michael Chen',
                'title' => 'Founder',
                'company' => 'TechStart Indonesia',
                'testimonial' => 'Working with Kaelum Ascent was a game-changer for our startup. They delivered a professional website that helped us secure our first major clients. Highly recommended!',
                'rating' => 5
            ],
            [
                'name' => 'Amanda Sari',
                'title' => 'CEO',
                'company' => 'Creative Studios',
                'testimonial' => 'The attention to detail and creative approach of Kaelum Ascent is exceptional. Our new website perfectly represents our brand and has significantly improved our online presence.',
                'rating' => 5
            ]
        ];

        $this->categories = ['All', 'Website Development', 'E-commerce', 'Corporate Branding', 'Mobile App'];
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.portfolio-component');
    }
}
