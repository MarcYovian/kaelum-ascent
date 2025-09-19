<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class HomeComponent extends Component
{
    #[Layout('components.layouts.app')]
    public array $solutions = [];
    public array $whyUs = [];
    public array $problems = [];

    public function render()
    {
        $this->problems = [
            [
                "title" => "Struggling to Reach New Customers?",
                "description" => "A professional website gets you discovered through local and national search.",
                "icon" => "🎯"
            ],
            [
                "title" => "Is Your Online Image Unconvincing?",
                "description" => "Premium design instantly builds trust and brand credibility.",
                "icon" => "✨"
            ],
            [
                "title" => "Lacking High-Quality Visuals?",
                "description" => "Our integrated services include professional photography to make your products or services shine.",
                "icon" => "📸"
            ]
        ];

        $this->solutions = [
            [
                "icon" => "fa-solid fa-code",
                "title" => "Custom Website Development",
                "description" => "We build SEO-friendly, high-performance websites from scratch, tailored to your brand and designed to attract and convert your target audience.",
                "features" => ["SEO Optimization", "Responsive Design", "Fast Loading Speeds", "Custom CMS"]
            ],
            [
                "icon" => "fa-solid fa-mobile",
                "title" => "E-commerce & Custom Apps",
                "description" => "We go beyond just building websites. Our digital strategy ensures you're not just online, but you're also being seen by the right people at the right time.",
                "features" => ["Keyword Research & Strategy", "On-Page & Off-Page SEO", "Content Marketing Plan", "Performance Analytics"]
            ]
        ];

        $this->whyUs = [
            [
                "icon" => "fa-solid fa-bullseye",
                "title" => "Niche Expertise, Broad Application",
                "description" => "We understand core market principles and apply them with focused expertise to make your brand shine, no matter the industry."

            ],
            [
                "icon" => "fa-solid fa-bolt",
                "title" => "Technology Meets Aesthetics",
                "description" => "We believe a great website is a perfect fusion of solid code and compelling visuals. You get both."
            ],
            [
                "icon" => "fa-solid fa-shield",
                "title" => "A Transparent Process",
                "description" => "We act as your partner, communicating proactively and ensuring you're involved in every step of the ascent."
            ]
        ];
        return view('livewire.pages.home-component');
    }
}
