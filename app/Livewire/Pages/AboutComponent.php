<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AboutComponent extends Component
{
    public array $team = [];
    public array $principles = [];

    /**
     * Inisialisasi data saat komponen di-mount.
     */
    public function mount(): void
    {
        $this->team = [
            [
                'name' => 'Alexander Raditya',
                'role' => 'Co-Founder & Lead Developer',
                'bio' => 'Passionate about creating digital solutions that make a real impact. Specializes in full-stack development and technical architecture.',
                'expertise' => ['Full-Stack Development', 'System Architecture', 'Technical Leadership']
            ],
            [
                'name' => 'Priscilla Nathania',
                'role' => 'Co-Founder & Creative Director',
                'bio' => 'Believes that great design tells a story. Leads our creative vision and ensures every project reflects the client\'s unique identity.',
                'expertise' => ['UI/UX Design', 'Brand Strategy', 'Creative Direction']
            ],
            [
                'name' => 'Michael Hartono',
                'role' => 'Co-Founder & Business Strategist',
                'bio' => 'Focused on understanding business needs and translating them into digital solutions. Ensures every project delivers measurable value.',
                'expertise' => ['Business Strategy', 'Digital Marketing', 'Client Relations']
            ]
        ];

        $this->principles = [
            [
                'icon' => 'handshake',
                'title' => 'Partnership, Not Transaction',
                'description' => 'We view every client relationship as a long-term partnership. Your success is our success, and we\'re committed to growing together.',
            ],
            [
                'icon' => 'eye',
                'title' => 'Obsessed with Detail',
                'description' => 'From pixel-perfect designs to clean, efficient code, we believe excellence lies in the details that others might overlook.',
            ],
            [
                'icon' => 'heart',
                'title' => 'Driven by Passion',
                'description' => 'We love what we do, and it shows in our work. Every project is an opportunity to create something meaningful and impactful.',
            ],
            [
                'icon' => 'users',
                'title' => 'Rooted in Community',
                'description' => 'As proud Indonesians, we\'re committed to elevating local businesses and contributing to our nation\'s digital transformation.',
            ]
        ];
    }

    /**
     * Render komponen view.
     */
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.about-component');
    }
}
